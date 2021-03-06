function detectWebAuthnSupport() {
    if (window.PublicKeyCredential === undefined ||
        typeof window.PublicKeyCredential !== "function") {
        //$('#register-button').attr("disabled", true);
        //$('#login-button').attr("disabled", true);
        console.log("Oh no! This browser doesn't currently support WebAuthn.");
        return;
    }
    else { console.log("hiphiphurra - webauthn is supported")
         }
}


$(document).ready(function () {

    // check whether current browser supports WebAuthn
    //if (!window.PublicKeyCredential) {
    //    console.log("You need webauthn support to run that demo nicely");
    //    return;
    //}
    console.log("Greetings from init.js");
    detectWebAuthnSupport();
    console.log("check on web authn support");
        
});  // end of document.ready

        function newregistration() {

            if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
                window.alert('Browser not supported.');
                return;
            }

            // get default args
            window.fetch('https://www.mybank-pay.com/webauthn3/test/server.php?fn=getCreateArgs' + getGetParams(), {method:'GET',cache:'no-cache'}).then(function(response) {
                return response.json();

                // convert base64 to arraybuffer
            }).then(function(json) {

                // error handling
                if (json.success === false) {
                    throw new Error(json.msg);
                }

                // replace binary base64 data with ArrayBuffer. a other way to do this
                // is the reviver function of JSON.parse()
                recursiveBase64StrToArrayBuffer(json);
                return json;

               // create credentials
            }).then(function(createCredentialArgs) {
                console.log(createCredentialArgs);
                return navigator.credentials.create(createCredentialArgs);

                // convert to base64
            }).then(function(cred) {
                return {
                    clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
                    attestationObject: cred.response.attestationObject ? arrayBufferToBase64(cred.response.attestationObject) : null
                };

                // transfer to server
            }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
                return window.fetch('https://www.mybank-pay.com/webauthn3/test/server.php?fn=processCreate' + getGetParams(), {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});

                // convert to JSON
            }).then(function(response) {
                return response.json();

                // analyze response
            }).then(function(json) {
               if (json.success) {
                   //window.alert(json.msg || 'registration success');
                   console.log("Succesful registration");
                   registerFingerprintsuccess();    // return to main to inform that all was good
                   return 1;
               } else {
                   throw new Error(json.msg);
               }

               // catch errors
            }).catch(function(err) {
                window.alert(err.message || 'unknown error occured');
            });
        }


        /**
         * checks a FIDO2 registration
         * @returns {undefined}
         */
        function checkregistration() {

            if (!window.fetch || !navigator.credentials || !navigator.credentials.create) {
                window.alert('Browser not supported.');
                return;
            }

            // get default args
            window.fetch('https://www.mybank-pay.com/webauthn3/test/server.php?fn=getGetArgs' + getGetParams(), {method:'GET',cache:'no-cache'}).then(function(response) {
                return response.json();

                // convert base64 to arraybuffer
            }).then(function(json) {

                // error handling
                if (json.success === false) {
                    throw new Error(json.msg);
                }

                // replace binary base64 data with ArrayBuffer. a other way to do this
                // is the reviver function of JSON.parse()
                recursiveBase64StrToArrayBuffer(json);
                return json;

               // create credentials
            }).then(function(getCredentialArgs) {
                return navigator.credentials.get(getCredentialArgs);

                // convert to base64
            }).then(function(cred) {
                return {
                    id: cred.rawId ? arrayBufferToBase64(cred.rawId) : null,
                    clientDataJSON: cred.response.clientDataJSON  ? arrayBufferToBase64(cred.response.clientDataJSON) : null,
                    authenticatorData: cred.response.authenticatorData ? arrayBufferToBase64(cred.response.authenticatorData) : null,
                    signature : cred.response.signature ? arrayBufferToBase64(cred.response.signature) : null
                };

                // transfer to server
            }).then(JSON.stringify).then(function(AuthenticatorAttestationResponse) {
                return window.fetch('https://www.mybank-pay.com/webauthn3/test/server.php?fn=processGet' + getGetParams(), {method:'POST', body: AuthenticatorAttestationResponse, cache:'no-cache'});

                // convert to json
            }).then(function(response) {
                return response.json();

                // analyze response
            }).then(function(json) {
               if (json.success) {
               		console.log("fingerprint successful validated");
               		checkFingerprintsuccess();
                    //window.alert(json.msg || 'login success');
               } else {
                   throw new Error(json.msg);
               }

               // catch errors
            }).catch(function(err) {
                window.alert(err.message || 'unknown error occured');
            });
        }

        function clearregistration() {
            window.fetch('https://www.mybank-pay.com/webauthn3/test/server.php?fn=clearRegistrations' + getGetParams(), {method:'GET',cache:'no-cache'}).then(function(response) {
                return response.json();

            }).then(function(json) {
               if (json.success) {
               		console.log(json.msg);
                	//window.alert(json.msg);
               } else {
                   throw new Error(json.msg);
               }
            }).catch(function(err) {
                window.alert(err.message || 'unknown error occured');
            });
        }

        /**
         * convert RFC 1342-like base64 strings to array buffer
         * @param {mixed} obj
         * @returns {undefined}
         */
        function recursiveBase64StrToArrayBuffer(obj) {
            let prefix = '=?BINARY?B?';
            let suffix = '?=';
            if (typeof obj === 'object') {
                for (let key in obj) {
                    if (typeof obj[key] === 'string') {
                        let str = obj[key];
                        if (str.substring(0, prefix.length) === prefix && str.substring(str.length - suffix.length) === suffix) {
                            str = str.substring(prefix.length, str.length - suffix.length);

                            let binary_string = window.atob(str);
                            let len = binary_string.length;
                            let bytes = new Uint8Array(len);
                            for (let i = 0; i < len; i++)        {
                                bytes[i] = binary_string.charCodeAt(i);
                            }
                            obj[key] = bytes.buffer;
                        }
                    } else {
                        recursiveBase64StrToArrayBuffer(obj[key]);
                    }
                }
            }
        }

        /**
         * Convert a ArrayBuffer to Base64
         * @param {ArrayBuffer} buffer
         * @returns {String}
         */
        function arrayBufferToBase64(buffer) {
            let binary = '';
            let bytes = new Uint8Array(buffer);
            let len = bytes.byteLength;
            for (let i = 0; i < len; i++) {
                binary += String.fromCharCode( bytes[ i ] );
            }
            return window.btoa(binary);
        }

        /**
         * Get URL parameter
         * @returns {String}
         */
        function getGetParams() {
            let url = '';
			// fixed getParams return value - sutiable only for www.mybank-pay.com
			url ='&apple=0&yubico=0&solo=0&hypersecu=0&google=0&microsoft=0&requireResidentKey=0&type_usb=0&type_nfc=0&type_ble=0&type_int=1&fmt_android-key=0&fmt_android-safetynet=0&fmt_apple=0&fmt_fido-u2f=0&fmt_none=1&fmt_packed=0&fmt_tpm=0&rpId=www.mybank-pay.com&userVerification=discouraged';
            return url;
        }
