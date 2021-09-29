
<!DOCTYPE html>
<html lang="en">

<head> 
	<script src='jsOTP.min.js'></script>
</head>
<body>
	<script>
	// hotp
	//var hotp = new jsOTP.hotp();
	//var hmacCode = hotp.getOtp(<your OTP key>, <counter>);
	
	// totp
	var totp = new jsOTP.totp();
	var timeCode = totp.getOtp("ZICWE3CJFBBZWWZA");
	alert(timeCode);
	</script>

</body>
</html>

