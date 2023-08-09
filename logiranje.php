<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Логирање</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/tooplate-tween-agency.css" rel="stylesheet">


    </head>
    
    <body>
	<?php
  $con=mysqli_connect("localhost","root","")or die(mysqli_error());
  mysqli_select_db($con,"itexpress")or die(mysqli_error());									   
  include ".\\admin\Klient.php";
  if(isset($_POST["ok"]))
	{
		$ime=$_POST["ime"];
		$prez=$_POST["prez"];
		$mail=$_POST["email"];
		$usr=$_POST["usr"];
		$pass=$_POST["pass"];
		$doz=$_POST["doz"];
										   
		$k=new Klient();
		$k->setIme($ime);
		$k->setPrezime($prez);
		$k->setEmail($mail);
		$k->setUsername($usr);
		$k->setPassword($pass);
		$k->setDoznavanje($doz);									               
		$k->vnes($con);
    }	   
?>
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">

                <a href="index.html" class="navbar-brand">
				<img class="bi-layers" src="images/expressit.png"></i>
                </a>

                <a href="#" class="custom-btn btn btn-lg d-lg-none ms-auto me-4">
                    Download
                    <i class="bi-download ms-2"></i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                   

                    <div class="ms-auto d-none d-lg-block">
                        <a href="CV-ITExpress.doc" class="custom-btn btn btn-lg">
                            CV за пополнување
                            <i class="bi-download ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main>

           <section class="section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-10 col-12 mx-auto">
                            <h2 class="mb-4 text-center"></h2>

                            <form class="custom-form" role="form" action="preadmin.php" method="post">
                                <div class="row"><h3>ЛОГИРАЈ СЕ!</h3>
								<table border="0">
                                    
									
									    <tr><td><div class="col-lg-4 col-md-6 col-12 my-2">
                                        <label class="mb-2" for="name">Username</label></td>

                                        <td><input type="text" name="usr" id="usr" class="form-control">
                                    </div></td></tr>
									
									    <tr><td><div class="col-lg-4 col-md-6 col-12 my-2">
                                        <label class="mb-2" for="name">Password</label></td>

                                        <td><input type="password" name="pass" id="pass" class="form-control">
                                    </div></td></tr>
									</td></tr>
                                       <tr><td></td><td><input type="submit" class="form-control mt-4" id="ok" name="ok" value="Внеси" style="background-color:#198754; color:white; width:80px;"></td></tr>

								</table>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 me-auto mb-4">
                        <h5 class="text-white mb-3">Претплати се</h5>

                        <form class="custom-form subscribe-form mt-4" role="form">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-7">                                    
                                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Ваша e-mail адреса" required="">
                                </div>

                                <div class="col-lg-4 col-md-4 col-5">                                  
                                    <button type="submit" class="form-control" id="subscribe">Претплати се</button>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="col-lg-2 col-12 mx-auto my-lg-0 my-4">
                        <h5 class="text-white mb-3">Услуги</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Дигитален маркетинг</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Креативни идеи</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Брендирање</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Видео содржини</a></li>
							
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">Софтверски услуги</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-12">
                        <h5 class="text-white mb-3">Наша локација</h5>

                        <p class="text-white mb-1">ул. Борис Ќидрич бр.47, Ресен</p>

                        <p><a href="mailto:email@company.com" class="footer-link">itexpress@example.com</a><p>
                    </div>

                    <div class="site-footer-bottom mt-5">
                        <div class="row pt-4">
                            <div class="col-lg-6 col-12">
                                <p class="copyright-text tooplate-link">Copyright © 2022 IT Express Co., Ltd.
                            </div>

                            <div class="col-lg-3 col-12 ms-auto">
                                <ul class="social-icon">
                                    <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                    <li><a href="https://twitter.com/search?q=tooplate" class="social-icon-link bi-twitter"></a></li>

                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>