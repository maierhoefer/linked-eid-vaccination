<!--

=========================================================
* Neumorphism UI - v1.0.0
=========================================================

* Product Page: https://themesberg.com/product/ui-kits/neumorphism-ui
* Copyright 2020 Themesberg MIT LICENSE (https://www.themesberg.com/licensing#mit)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
 <?php
	header("Access-Control-Allow-Origin: *");
	//header("Location: https://www.mybank-pay.com/neumorphism/index2.php");
	//exit();
 ?>


<!DOCTYPE html>
<html lang="en">

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Vaccination and ID Wallet</title> 

<!-- QR-Code Scanner JS -->
<script src="instascan.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Vaccination Wallet">
<meta name="author" content="DM with UI kit from Themesberg">

<link rel="canonical" href="https://www.mybank-pay.com/neumorphism/index.html" />

<!--  Social tags -->
<meta name="keywords" content="vaccination, certificate, vaccinated person, certificate verifier, vaccination wallet, vaccination and ID-card">
<meta name="description" content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">



<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
<!-- <link rel="manifest" href="./assets/img/favicon/site2.webmanifest"> -->
<link rel="manifest" href="manifest.json" />
<link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="./css/neumorphism.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
<script src="./vendor/jquery/dist/jquery.min.js"></script>
<script src="face-api.js" async></script>
<script type="module">
   import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
   const el = document.createElement('pwa-update');
   document.body.appendChild(el);
</script>

<!-- https://www.npmjs.com/package/webcam-easy  -->
<script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>

</head>

<body>
    <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-primary">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="./index.html">
                <img class="navbar-brand-dark" src="./assets/img/brand/dark.svg" alt="Logo light">
                <img class="navbar-brand-light" src="./assets/img/brand/dark.svg" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img src="./assets/img/brand/dark.svg" alt="Vaccination Wallet logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Pages</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./html/pages/about.html">About</a></li>
                            <li><a class="dropdown-item" href="./html/pages/pricing.html">Pricing</a></li>
                            <li><a class="dropdown-item" href="./html/pages/contact.html">Contact</a></li>
                            <li><a class="dropdown-item" href="./html/pages/sign-in.html">Sign in</a></li>
                            <li><a class="dropdown-item" href="./html/pages/sign-up.html">Sign up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Components</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-lg-6 inside-bg d-none d-lg-block">
                                    <div class="justify-content-center bg-primary text-white">
                                        <div class="px-6 pb-5 pt-3">
                                            <img src="./assets/img/megamenu-image.jpg" alt="Pixel Components">
                                        </div>
                                        <div class="z-2 pb-4 text-center">
                                            <a href="./html/components/all.html"  class="btn btn-primary mb-2 mb-sm-0 mr-3 text-secondary">
                                                <span class="mr-1"><span class="fas fa-th-large"></span></span>
                                                All components
                                            </a>
                                            <a href="https://themesberg.com/docs/neumorphism-ui/components/alerts" target="_blank" class="btn btn-primary mb-2 mb-sm-0">
                                                <span class="mr-1"><span class="fas fa-book"></span></span>
                                                Docs v1.0
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item" href="./html/components/accordions.html">Accordions</a></li>
                                        <li><a class="dropdown-item" href="./html/components/alerts.html">Alerts</a></li>
                                        <li><a class="dropdown-item" href="./html/components/badges.html">Badges</a></li>
                                        <li><a class="dropdown-item" href="./html/components/bootstrap-carousels.html">Bootstrap Carousels</a></li>
                                        <li><a class="dropdown-item" href="./html/components/breadcrumbs.html">Breadcrumbs</a></li>
                                        <li><a class="dropdown-item" href="./html/components/buttons.html">Buttons</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/plugins/jquery-counters/" target="_blank">Counters <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="./html/components/cards.html">Cards</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/e-commerce/" target="_blank">E-commerce <span class="badge badge-dark ml-3">Pro</span></a></li>
                                    </ul>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item" href="./html/components/forms.html">Forms</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/icon-boxes/" target="_blank">Icon Boxes <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="./html/components/modals.html">Modals</a></li>
                                        <li><a class="dropdown-item" href="./html/components/navs.html">Navs</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/plugins/owl-carousel/" target="_blank">Owl Carousels <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="./html/components/pagination.html">Pagination</a></li>
                                        <li><a class="dropdown-item" href="./html/components/popovers.html">Popovers</a></li>
                                        <li><a class="dropdown-item" href="./html/components/progress-bars.html">Progress Bars</a></li>

                                    </ul>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/icon-boxes/#steps" target="_blank">Steps <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="./html/components/tables.html">Tables</a></li>
                                        <li><a class="dropdown-item" href="./html/components/tabs.html">Tabs</a> </li>
                                        <li><a class="dropdown-item" href="./html/components/toasts.html">Toasts</a> </li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://themesberg.com/docs/neumorphism-ui/components/timelines/" target="_blank">Timelines <span class="badge badge-dark ml-3">Pro</span></a></li>
                                        <li><a class="dropdown-item" href="./html/components/tooltips.html">Tooltips</a></li>
                                        <li><a class="dropdown-item" href="./html/components/typography.html">Typography</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center justify-content-between" href="https://demo.themesberg.com/neumorphism-ui-pro/html/components/widgets.html" target="_blank">Widgets <span class="badge badge-dark ml-3">Pro</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Support</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg">
                            <div class="col-auto px-0" data-dropdown-content>
                                <div class="list-group list-group-flush">
                                    <a href="https://themesberg.com/docs/neumorphism-ui/getting-started/quick-start/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><span class="fas fa-file-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Documentation<span class="badge badge-sm badge-secondary ml-2">v1.0</span></span>
                                            <span class="small">Examples and guides</span>
                                        </div>
                                    </a>
                                    <a href="https://github.com/themesberg/th-neumorphism-ui-pro/issues" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><span class="fas fa-microphone-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Support</span>
                                            <span class="small">Looking for answers? Ask us!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
<main>

        <!-- Hero -->
        <section>
            <div class="container z-2">
                <div class="row justify-content-center text-center pt-6">
                    <div class="col-lg-8 col-xl-8">
                        <h1 class="display-2 mb-3">Vaccination Wallet</h1>
                        <p class="lead px-md-6 mb-5">combines the <strong>certificate</strong> with the <strong>ID-card</strong> to prove vaccination and identity in one step :-).</p>
                    </div>
                </div>
            </div>
        </section>       





    <div class="container" id="stepprogress1">
        <!-- Title -->


        <!-- End of title-->
		<div class="row">
		    <div class="col-12">
		        <div class="card bg-primary shadow-soft border-light mb-6">
		            <div class="card-body px-5 py-5 text-center text-md-left">
		                <div class="row align-items-center">
		                    <div class="col-md-6">
		                        <h2 class="mb-3">Step 1: Get started by scanning your QR code</h2>
		                    </div>
							<script>
							function qrCode(qrcodevalue) {
								alert('QR-Code is captured - Tap Ok to proceed');
								showCam();
								var qrcode = new QRCode(document.getElementById("qrcode"), {
									text: qrcodevalue,
									width: 256,
									height: 256,
									colorDark : "#000000",
									colorLight : "#ffffff",
									correctLevel : QRCode.CorrectLevel.L
								});
							}
							
							async function showCam() {
							  var x = document.getElementById("myCam");
							  var x2 = document.getElementById("myCert");
							  if (x.style.display === "none") {
							    x.style.display = "block";
							    x2.style.display = "none";
							  } else {
							    x.style.display = "none";
							    x2.style.display = "block";
							  }
							  //window.scrollTo({ top: -200, left: 0, behavior: "smooth" });
							  //window.scrollBy( 0, 400);
							}
							</script>		                    
									                    
		                    <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right">
		                        <a href="javascript:showCam();" class="btn btn-primary">
		                            <span class="mr-1">
		                                <span class="fas fa-camera-retro"></span>
		                            </span>
		                            Scan QR-Code now
		                        </a>
		                        <p></p>
		                    </div>	
		                    
		                    <div id="myCam" style="display:none">
		                    	<!-- Begin qr-code scan-->
								<video width="75%" height="10%" id="preview"></video>
							    <script type="text/javascript">
							      let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false, });
							      scanner.addListener('scan', function (content) {
							        console.log(content);
							        
							            var xmlhttp = new XMLHttpRequest();
									    xmlhttp.onreadystatechange = function() {
									      if (this.readyState == 4 && this.status == 200) {
									      	text = JSON.stringify(this.responseText); 
									        console.log('Decoded QR-Code from Server: ' + text);
											document.getElementById("surname").innerHTML = 'Name: ' + text.substring(text.indexOf("fn")+6,text.indexOf("," , text.indexOf("fn"))-1) 
											document.getElementById("givenname").innerHTML = 'Given Name: '+ text.substring(text.indexOf("gn")+6,text.indexOf("," , text.indexOf("gn"))-1)
											document.getElementById("birthday").innerHTML = 'Birthday: ' + text.substring(text.indexOf("dob")+7,text.indexOf("," , text.indexOf("dob"))-1)
										
											vaccine = text.substring(text.indexOf("mp")+6,text.indexOf("," , text.indexOf("mp"))-1)
											if (vaccine == "EU/1/20/1525") {
												document.getElementById("vaccination").innerHTML = 'Vaccine: ' + vaccine + '<br> Vaccine Janssen'
											}
											else if (vaccine == "EU/1/20/1528") {
												document.getElementById("vaccination").innerHTML = 'Vaccine: ' + vaccine + '<br> Comirnaty BioNTech'
											}
											else if (vaccine == "EU/1/20/1507") {
												document.getElementById("vaccination").innerHTML = 'Vaccine: ' + vaccine + '<br> Spikevax Moderna'
											}
											else if (vaccine == "EU/1/21/1529") {
												document.getElementById("vaccination").innerHTML = 'Vaccine: ' + vaccine + '<br> Vaxzevria AstraZeneca'
											}

											document.getElementById("vaccinationdate").innerHTML = 'Vaccination Date: ' + text.substring(text.indexOf("dt")+6,text.indexOf("," , text.indexOf("dt"))-1)
											calcvaccine1 = text.substring(text.indexOf("dn")+6,text.indexOf("," , text.indexOf("dn"))-1)
											calcvaccine2 = text.substring(text.indexOf("sd")+6,text.indexOf("," , text.indexOf("sd"))-1)
											document.getElementById("vaccinationnumber").innerHTML = 'Number of Vaccination: ' + calcvaccine1 + '/' + calcvaccine2
											
											certificateissuedate = text.substring(text.indexOf("6:")+3,text.indexOf("}" , text.indexOf("6:"))) 
											var date2 = new Date(parseInt(certificateissuedate)*1000);
											document.getElementById("certdate").innerHTML = 'Certificate Issue Date: ' + date2
											
											certificatedate = text.substring(text.indexOf("4:")+3,text.indexOf("," , text.indexOf("4:"))) 
											var date = new Date(parseInt(certificatedate)*1000);
											document.getElementById("certvalid").innerHTML = 'Date of Expiry: ' + date
											
											// Scan of QR-code done, certificate is shown, now hide step 1 and show instead step 2
											var x2 = document.getElementById("stepprogress1");
											x2.style.display = "none";
											// show step 2 of the process
											var x3 = document.getElementById("stepprogress2b");
											x3.style.display = "block";	
											var x4 = document.getElementById("myCert").style.display = "none";
											// to stop the camera :-)
											scanner.stop().then(function(){
												// do what you want to do as camera should be stopped
												showCam2();
											})
									      }
									    };
									    xmlhttp.open("GET", "https://appival.com/decode_qrcode.php?qrcode=" + window.btoa(content), true);
									    xmlhttp.send();

							        qrCode(content);
							      });
							      Instascan.Camera.getCameras().then(function (cameras) {
							        if (cameras.length > 0) {
							          scanner.start(cameras[1]);
							        } else {
							          console.error('No cameras found.');
							        }
							      }).catch(function (e) {
							        console.error(e);
							      });
							    </script>
								<!-- Begin qr-code scan-->	                    
									                    
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>

  

        <!-- Container for step 2 - the ID Card scan and image extraction -->
     <div class="container" id="stepprogress2" style="display:none">
        <!-- Title -->

        <!-- End of title-->
		<div class="row">
		    <div class="col-12">
		        <div class="card bg-primary shadow-soft border-light mb-6">
		            <div class="card-body px-5 py-5 text-center text-md-left">
		                <div class="row align-items-center">
		                    <div class="col-md-6">
		                        <h2 class="mb-3">Step 2: Add your ID-Card</h2>
							</div>
							<div id="spinner2" style="display:block;  margin-left: auto; margin-right: auto;">Please wait...	
		                		 <div id="spinner" class="spinner-border" role="status" >
									<span class="sr-only">Loading...</span>
								 </div>

							</div>
		                    <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right" id="makephotobutton" style="display:none">
		                        <a href="javascript:takePhoto();" class="btn btn-primary">
		                            <span class="mr-1">
		                                <span class="fas fa-camera-retro"></span>
		                            </span>
		                            Make a photo from your ID-Card
		                        </a>
		                        <p></p>
		                    </div>
		                    <!-- Begin take photo ID-card-->
		                    <div id="cam2" class="col-md-6" style="display:none">
			                    <video  id="webcam2" class="col-md-6"> </video>
			                    <canvas id="canvas" class="d-none"></canvas>
			                    <audio id="snapSound" src="audio/snap.wav" preload = "auto"></audio>
		                    </div>
		                    <img src="" id="photoplace" class="col-md-6">
		                    <canvas id="myCanvas" style="#overlay, .overlay { position: absolute; top: 0; left: 0; }"> </canvas>
			                    <script type="text/javascript">
			                    	var idcardphoto;
				                    const webcamElement = document.getElementById('webcam2');
									const canvasElement = document.getElementById('canvas');
									const snapSoundElement = document.getElementById('snapSound');
									const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);

			                    
									async function takePhoto() {
										console.log("take photo");
									    let picture = webcam.snap();
									    document.querySelector('#photoplace').src = picture;
									    	var c = document.getElementById("myCanvas");
									    	var ctx = c.getContext("2d");
											var img = document.getElementById("photoplace");
											ctx.drawImage(img, 10, 10)
									    console.log("photo taken");
									    
										document.getElementById("spinner2").style.display = "block";
										//document.getElementById("webcam2").style.visibility = "hidden";
										document.getElementById("canvas").style.visibility = "hidden";
										document.getElementById("myCanvas").style.visibility = "hidden";
										document.getElementById("webcam2").style.display = "none";
										document.getElementById("makephotobutton").style.display = "none";
										//document.getElementById("canvas").style.display = "none";
										//document.getElementById("myCanvas").style.display = "none";	
										
										// load the face api model
			                    		await faceapi.loadTinyFaceDetectorModel('/neumorphism/weights');
			                    		//await faceapi.loadSsdMobilenetv1Model('/neumorphism/weights');
			                    		console.log(faceapi.nets);
			                    		// to provide image input for faceapi.js
			                    		const input = document.getElementById('photoplace');
			                    		// detect face with highest probability
			                    		//const detections2 = await faceapi.detectSingleFace(input, new faceapi.TinyFaceDetectorOptions())
			                    		const detection = await faceapi.detectSingleFace(input, new faceapi.TinyFaceDetectorOptions());
			                    		console.log(detection);
			                    		console.log('x: ' + detection.box.x + ' y: ' + detection.box.y + ' width: '+ detection.box.width + ' height: ' + detection.box.height);
										// resize the detected boxes in case your displayed image has a different size then the original
										const detectionsForSize = faceapi.resizeResults(detection, { width: input.width, height: input.height })
										// draw them into a canvas
										const canvas = document.getElementById('myCanvas');
										canvas.width = input.width;
										canvas.height = input.height;
										//faceapi.draw.drawDetection(canvas, detectionsForSize, { withScore: true });	
										ctx.drawImage(img, 10, 10);
										// drawn own box
										x1 = 1 * (detection.box.x);
										y1 = 0.8 * (detection.box.y);
										w1 = 1.2 * (detection.box.width);
										h1 = 1.6 * (detection.box.height);
										ctx.beginPath();
										ctx.rect(x1, y1, w1, h1);
										ctx.stroke();
										myscore = detection.score;
										ctx.font = "14px Arial";
										ctx.fillText(myscore.toFixed(3) , x1, y1);
										// extract face from canvas

										var newCanvas = document.createElement('canvas');
										newCanvas.width = w1;
										newCanvas.height = h1;
										var newContext = newCanvas.getContext('2d');
										newContext.drawImage(myCanvas, x1, y1, w1, h1, 0, 0, w1, h1);
										var newImage = document.createElement('img');
										idcardphoto = newCanvas.toDataURL();
										idphoto.src = idcardphoto;
										//document.body.appendChild(newImage);
										setTimeout(function(){ 
											x2 = document.getElementById("stepprogress2b").style.display = "none";
											x2 = document.getElementById("stepprogress3").style.display = "block";
										}, 3000);
										document.getElementById("photoplace").style.display = "none";
										document.getElementById("webcam2").style.display = "none";
										document.getElementById("myCanvas").style.visibility = "visible";
										document.getElementById("spinner2").style.display = "none";

									};			                
			                    
			                    
				                    function showCam2() {
				                    	webcam.start()
										   .then(result =>{
										      console.log("webcam started");
										      //webcam.stop();
										      webcam.flip();
										      webcam.start()
										    	.then(result =>{
										    		console.log("webcam flipped");
										    		x2 = document.getElementById("cam2").style.display = "block";
										    		x2 = document.getElementById("makephotobutton").style.display = "block";
										    		x2 = document.getElementById("spinner2").style.display = "none";
										    	})
										   })
										   .catch(err => {
										       console.log(err);
										   });
				                    }
								</script>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>




        <!-- Container for step 2b - Combine Vaccination and Bank-ID -->
     <div class="container" id="stepprogress2b" style="display:none">
        <!-- Title -->

        <!-- End of title-->
		<div class="row">
		    <div class="col-12">
		        <div class="card bg-primary shadow-soft border-light mb-6">
		            <div class="card-body px-5 py-5 text-center text-md-left">
		                <div class="row align-items-center">
		                    <div class="col-md-6">
		                        <h2 class="mb-3">Step 2: Authenticate with your Bank</h2>
		                        <p class="lead px-md-6 mb-5">By signing-in with your bank account you prove that you are the legitimate owner of vaccination certificate</p>		                      
							</div>
		                    <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right" id="banksignin" style="display:block">
		                        <a href="javascript:bankSignin()" class="btn btn-primary">
		                            <span class="mr-1">
		                                <span class="fas fa-university"></span>
		                            </span>
		                            Get redirected to your Bank
		                        </a>
		                        <p></p>
		                    </div>
			                    <script type="text/javascript">
			                    	async function bankSignin(){
			                    			webcam.stop();
			                    			console.log('check with Online Banking');
			                    			window.open("https://www.mybank-pay.com/neumorphism/db_example.php", "MsgWindow", "width=300,height=500");
			                    	}

								</script>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>




        <!-- Container for step 3 - Combine Vaccination and ID-Card with fingerprint -->
     <div class="container" id="stepprogress3" style="display:none">
        <!-- Title -->

        <!-- End of title-->
		<div class="row">
		    <div class="col-12">
		        <div class="card bg-primary shadow-soft border-light mb-6">
		            <div class="card-body px-5 py-5 text-center text-md-left">
		                <div class="row align-items-center">
		                    <div class="col-md-6">
		                        <h2 class="mb-3">Last Step 3: Sign with your Fingerprint</h2>
		                        <p class="lead px-md-6 mb-5">By signing with your fingerprint you confirm that you are the owner of the vaccination certificate and ID-Card</p>		                      
							</div>
		                    <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right" id="registerfingerprint" style="display:block">
		                        <a href="javascript:registerFingerprint()" class="btn btn-primary">
		                            <span class="mr-1">
		                                <span class="fas fa-fingerprint"></span>
		                            </span>
		                            Sign with your Fingerprint
		                        </a>
		                        <p></p>
		                    </div>
		                    <img src="" id="idphoto" class="col-md-6">
			                    <script type="text/javascript">
			                    	async function registerFingerprint(){
			                    			webcam.stop();
			                    			console.log('call clear registration first');
			                    			clearregistration();
											newregistration();
			                    	}
			                    	function registerFingerprintsuccess(){
											x2 = document.getElementById("stepprogress3").style.display = "none";
											//x2 = document.getElementById("stepprogress4").style.display = "block";	
											x2 = document.getElementById("stepprogress4").style.display = "none";
											x2 = document.getElementById("myCert").style.display = "block";	
											imgcardphoto.src = idcardphoto;
											window.scrollBy(0, 180);
											myVar = setTimeout(alertFunc, 10000);											
			                    	}
								</script>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>


     <div class="container" id="stepprogress4" style="display:none">
        <!-- Title -->

        <!-- End of title-->
		<div class="row">
		    <div class="col-12">
		        <div class="card bg-primary shadow-soft border-light mb-6">
		            <div class="card-body px-5 py-5 text-center text-md-left">
		                <div class="row align-items-center">
		                    <div class="col-md-6">
		                        <h2 id="step2headline" class="mb-3">Authenticate with your fingerprint to show combined certificate</h2>
							</div>
		                    <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right" id="registerfingerprint" style="display:block">
		                        <a href="javascript:showFingerprint()" class="btn btn-primary">
		                            <span class="mr-1">
		                                <span class="fas fa-fingerprint"></span>
		                            </span>
		                            Authenticate with your Fingerprint
		                        </a>
		                        <p></p>
		                    </div>
		                    <img src="" id="idphoto" class="col-md-6">
			                    <script type="text/javascript">
			                    	function showFingerprint(){
			                    			console.log('validate fingerprint');
											checkregistration();
			                    	}
			                    	function checkFingerprintsuccess(){
											x2 = document.getElementById("stepprogress4").style.display = "none";
											x2 = document.getElementById("myCert").style.display = "block";	
											imgcardphoto.src = idcardphoto;
											window.scrollBy(0, 180);
											myVar = setTimeout(alertFunc, 10000);
			                    	}
			                    	
			                    	function alertFunc(){
											x2 = document.getElementById("stepprogress4").style.display = "block";
											x2 = document.getElementById("myCert").style.display = "none";
											//document.getElementById("step2headline").focus();
			                    	}			                    	
								</script>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>



  
     <div class="container" id="myCert" style="display:none">
        <!-- Title -->
        <h2 class="mb-3">Vaccination Certificate</h2>

        <!-- End of title-->
		<div class="row">
		    <div class="col-12">
		        <div class="card bg-primary shadow-soft border-light mb-6">
		            <div class="card-body px-5 py-5 text-center text-md-left">
		                <div class="row align-items-center">
		                    <div class="col-md-6">
		                        <h3 class="h5 card-title mt-3">Vaccination Certificate</h3>
		                    </div>
		                    <div id="qrcode" class="col-md-6"></div>
		                    <img src="" id="imgcardphoto" width="180" height="240" class="col-md-6">
		                    <ul class="col-md-6 list-group">
							  <li class="list-group-item" id="surname"></li>
							  <li class="list-group-item" id="givenname"></li>
							  <li class="list-group-item" id="birthday"></li>
							  <li class="list-group-item" id="vaccination"></li>
							  <li class="list-group-item" id="vaccinationdate"></li>
							  <li class="list-group-item" id="vaccinationnumber"></li>
							  <li class="list-group-item" id="certdate"></li>
							  <li class="list-group-item" id="certvalid"></li>
							</ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
    </div>

  
</main>


    <!-- Core -->

<script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="./vendor/jarallax/dist/jarallax.min.js"></script>
<script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="./vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="./vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Neumorphism JS -->
<script src="./assets/js/neumorphism.js"></script>
<!-- Qr-code JS -->
<script src="qrcode.min.js"></script>
<!-- WebAuthn JS -->
<script src="init.js"></script>

</body>

</html>