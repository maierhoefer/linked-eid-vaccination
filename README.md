# One-Stop Vaccination + Identity Proof

## eID validated Vaccination Certificate - bound to handset via biometrics

<img src="whats_about.png">

The full description of the service is described in https://github.com/maierhoefer/linked-eid-vaccination/blob/main/One-Stop%20Vaccination%20Certificate_v02.pdf

To start (please note: still work in progress):
- setup the FIDO2 web authentication server (in folder 'webauthn3')
- start by index.html (in folder 'code')

Note: The purpose is not to provide a FES or QES (fortgeschrittene elektronische Signatur or qualifizierte elektronishce Signatur) in a legal sense, but to combine the vaccination certificate with the user's identity. 

Very important is that a dynamic QR code is generated (e.g. with a validity of 30sec) after the user authenticated with biometrics or unlock code, to prevent screen-copy of such combined certified QR-code.
