<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <title>Appec</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--website-favicon-->
    <link href="images/favicon.jpg" rel="icon">
    <!--plugin-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugin.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
  </head>
  <body>
    <!--Start Header -->
    <header class="nav-bg-w main-header navfix fixed-top menu-dark">
      <div class="container-fluid m-pad">
        <div class="menu-header">
          <div class="dsk-logo"><a class="nav-brand" href="index.php">
            <img src="images/white-logo.png" alt="Logo" class="mega-white-logo"/>
            <img src="images/logo.png" alt="Logo" class="mega-darks-logo"/>
          </a></div>
          <div class="custom-nav" role="navigation">
            <ul class="nav-list onepge">
              <li><a href="https://appec.tech/index.php" class="btn-br bg-btn5 btshad-b2 lnk">home<span class="circle"></span></a> </li>			
              <li><a href="https://appec.tech/contact-from.php" class="menu-links">Contactez-nous</a> </li>
            </ul>
          </div>
          <div class="mobile-menu2">
            <ul class="mob-nav2">
              <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="modal" data-bs-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
              <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
            </ul>
          </div>
        </div>
        <!--Mobile Menu-->
        <nav id="main-nav">
          <ul class="first-nav">
            <li><a href="#home" class="menu-links">Home</a></li>					
              <li><a href="#about" class="menu-links">About</a></li>
              <li><a href="#services" class="menu-links">Services</a></li>
              <li><a href="#work" class="menu-links">Work</a></li>						
              <li><a href="#client" class="menu-links">Clients</a></li>
              <li><a href="#review" class="menu-links">Review</a></li>
          </ul>
          <ul class="bottom-nav">
            <li class="prb">
              <a href="tel:+21621407688">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                  <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                  />
                </svg>
              </a>
            </li>
            <li class="prb">
              <a href="mailto:contact@appec.tech">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
              </a>
            </li>
            
          </ul>
        </nav>					
      </div>
    </header>
    <!--End Header -->
    <!--Start sidebar -->    
    <div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
      <div class="offcanvas-body">
        <div class="cbtn animation">
          <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="form-block sidebarform">
          <h4>Request A Quote</h4>
          <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
            <div class="row">
              <div class="form-group col-sm-12">
                <input type="text"  id="names" placeholder="Enter name" required data-error="Please fill Out">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-sm-12">
                <input type="email"  id="emails" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12">
                <input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-sm-12">
                <select name="Dtype" id="Dtype" required>
                  <option value="">Select Requirement</option>
                  <option value="web">web</option>
                  <option value="graphic">graphic</option>
                  <option value="video">video</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
          </form>
        </div>
        <div class="getintouchblock mt30">
          <h4>Contactez-nous</h4>
          <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
          <div class="media mt15">
            <div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
            <div class="media-body getintouchinfo">
              <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive"><img src="images/icons/whatsapp.svg" alt="icon"></div>
            <div class="media-body getintouchinfo">
              <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
            <div class="media-body getintouchinfo">
              <a href="mailto:info@website.com">info@website.com <span>Online Support</span></a>
            </div>
          </div>
          <div class="media mt15">
            <div class="icondive"><img src="images/icons/map.svg" alt="icon"></div>
            <div class="media-body getintouchinfo">
              <a href="mailto:info@website.com">Jaipur, Rajasthan, India<span>Visit Our Office</span></a>
            </div>
          </div>
        </div>
        <div class="contact-data mt30">
          <h4>Follow Us On:</h4>
          <div class="social-media-linkz mt10">
            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
            <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
            <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
            <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
            <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
            <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>             			  
          </div>
        </div>
      </div>
    </div>
    <!--end sidebar -->
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-6">
      <div class="text-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 v-center">
              <div class="bread-inner">
                <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                  <ul>
                    <li><a href="https://appec.tech/index.php">Home</a></li>
                    <li><a href="#">Contact Form</a></li>
                  </ul>
                </div>
                <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                  <h2></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Breadcrumb Area-->
    
    <!--Start Contact Form-->
    <section class="contact-page pad-tb bg-gradient5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="niwax23form shadow">
              <div class="common-heading text-l">
                <h2 class="mt0 mb0">Devenir un partenaire</h2>
                <p class="mb50 mt10">Nous vous attraperons dès que nous recevrons le message.</p>
              </div>
              <div class="contact-form-card-pr contact-block-sw m0 iconin">
                <div class="form-block niwaxform">
                  <form action="https://formspree.io/f/myyvzyao" id="contactform" method="post">
                    <div class="fieldsets row">
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-user"></i></div>
                        <input type="text" placeholder=" " required="required" id="name" class="floating-input" name="Nom&Prenom">
                        <label>Nom&Prenom*</label>
                        <div class="error-label"></div>
                      </div>
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-phone-alt"></i></div>
                        <input type="tel" placeholder=" " required="required" id="mobile_number" class="floating-input" name="*numero_téléphone">
                        <label>numero_téléphone*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="fieldsets row">
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-envelope"></i></div>
                        <input type="email" placeholder=" " required="required" id="email" class="floating-input" name="email">
                        <label>E-mail professionnel*
                          *</label>
                        <div class="error-label"></div>
                      </div>
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-file-alt"></i></div>
                        <select required="required" id="interested_in" class="floating-select" name="interessé_en">
                          <option value="">&nbsp;</option>
                          <option value="Web Design" >PEO</option>
                          <option value="App Design" >Juridique</option>
                          <option value="Other" >Comptabilité</Doption>
                          <option value="Other" >Paie-RH</Doption>
                          <option value="Other" >capital-investissement</Doption>
                          <option value="Other" >capital-risque</Doption>
                          <option value="Other" >conseil en transaction</Doption>
                          <option value="Other" >Assurance</Doption>
                          <option value="Other" >General</Doption>
                          <option value="Other" >Banque et Finance</option></Doption>
                          <option value="Other" >consultant</Doption>
                          <option value="Other" >recrutement</Doption>
                          <option value="Other" >HCM</Doption>
                        </select>
                        <label>Partenaire vertical*</label>
                        <div class="error-label"></div>
                      </div>
                      
                    </div>
                    <div class="fieldsets row">
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-map-marker-alt"></i></div>
                        <input type="text" placeholder=" " required="required" id="your_location" class="floating-input" name="Votre_location">
                        <label>Votre Location*</label>
                        <div class="error-label"></div>
                      </div>
                      <div class="col-md-6 form-group floating-label">
                        <div class="formicon"><i class="fas fa-chevron-right"></i></div>
                        <input type="text" placeholder=" " required="required" id="skype_whatsapp_no" class="floating-input" name="skype_whatsapp_no">
                        <label>Nom de votre sociétée.*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="fieldsets row textareax">
                      <div class="col-md-12 form-group floating-label">
                        <div class="formicon"><i class="fas fa-comment-dots"></i></div>
                        <textarea placeholder=" " required="required" id="description" class="floating-input" name="description"></textarea>
                        <label>votre proposition*</label>
                        <div class="error-label"></div>
                      </div>
                    </div>
                    <div class="custom-control custom-checkbox ctmsetsw">
                      <input type="checkbox" class="custom-control-input ctminpt" id="agree" name="agree" checked="checked">
                      <label class="custom-control-label" for="customCheck">J'accepte les <a href="javascript:void(0)">Termes &amp; Conditions</a>du nom de l'entreprise.</label>
                    </div>
                    <div class="fieldsets mt20"> <button type="submit" name="Envoyer" class="btn btn-main bg-btn w-fit mb20"><span>Envoyer <i class="fas fa-chevron-right fa-icon"></i></span> <span class="loader"></span></button> </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>
    <!--End Contact Form-->


   <!--Start Footer-->
 <footer>
      <div class="footer-row1">
      <div class="container">
      <div class="row justify-content-between">
      <div class="col-lg-5 col-sm-6  ftr-brand-pp">
      <a class="navbar-brand mt30 mb25" href="#"> <img src="images/logo.png" alt="Logo" width="100" /></a>
      <p><b class="font-weight-bolder text-info">Appec </b> est une société de développement E-commerce, basée à Sousse, Tunisie et fondée le 24, juillet 2022. Nous sommes un groupe de jeunes motivés et créatifs, toujours prêts à relever des défis et de nouvelles idées du commerce electronique.</p>
      <a href="https://appec.tech/partner-from copy.php"class="btn-main bg-btn3 lnk mt20">devenait un partennaire <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
      </div>
      <div class="col-lg-5 col-sm-8">
      <h5>Nous contacter
      </h5>
      <br>
      <ul class="footer-address-list ftr-details">
        <li>
          <span><i class=""></i></span>
          <div class="icondive"><img src="images/icons/mail.svg" alt="icon"></div>
          <p>Email <span> <a href="mailto:contact@appec.tech">contact@appec.tech</a></span></p>
        </li>
        <li>
          <span><i class=""></i></span>
          <div class="icondive"><img src="images/icons/call.svg" alt="icon"></div>
          <p>téléphone <span> <a href="tel:+216 21 407 688">+216 21 407 688</a></span></p>
        </li>
        <li>
          <span><i class=""></i></span>
          <div class="icondive"><img src="images/icons/map.svg" alt="icon"></div>
          <p>Addresse <span>Immeuble Espace Sousse Cite Torki 4059 Sousse, Tunisia</span></p>
        </li>
      </ul>
      </div>
        </div>
         </div>
        </div>
      <div class="footer-row3">
      <div class="copyright">
      <div class="container">
      <div class="row">
      <div class="col-lg-12">
        <div class="footer-social-media-icons">
          <a href="https://www.facebook.com/appec.tech" target="blank"><i class="fab fa-facebook"></i></a>
         
          <a href="https://www.instagram.com/appec.tech/?hl=en" target="blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/mehdi-ayeb-ab451316a/" target="blank"><i class="fab fa-linkedin"></i></a>
         
        </div>
        <div class="footer-">
          <p>© 2022-2023. All Rights Reserved By <a href="https://themeforest.net/user/rajesh-doot/portfolio" target="blank">Amira Ben Youssef</a></p>
        </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </footer>
    <!--End Footer-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>	
    <script src="js/plugin.min.js"></script>
    <script src="phpmailer/js/jquery.validate.min.js"></script>
    <script src="phpmailer/js/sweetalert2.all.min.js"></script> 
    <script src="js/dark-mode.js"></script>   
    <!--form script file-->
    <script src="phpmailer/js/main.js"></script>
    <!-- type effect -->
    <script async src="js/typer.js"></script>
    <!--common script file-->
    <script src="js/main.js"></script>
  </body>
</html>