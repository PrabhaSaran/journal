
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css" />


<footer>
        <div class="container">
            
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-box footer-logo-address">
                        <!-- address  -->
                        <img src="images/logo-new.png" class="img-responsive" alt="" width="165px">
                        <address>
<!--                            <h2 style="font-size: 17px; color: #229ad6; font-weight: 600; line-height: 25px; margin-bottom: 0px;">Rudra Bhanu Satpathy <br> Director</h2>-->
                            <h3 class="ifer" style="margin-top:3px;">Technoarete Research And Development Association</h3>
                            Rais Towers, 2054/B,2nd Floor,West block,
                            2nd Ave, Anna Nagar, Chennai, Tamil Nadu 600040 India
                            <br> Call Us : +91-9345907112
                            <br> Email : <a href="#">editor@technoarete.org</a>
                        </address>
                    </div>
                    <!-- /.address  -->
                </div>
                <div class="col-sm-3">
                    <div class="footer-box">
                        <h3 class="category-headding">About Journal </h3>
                        <div class="headding-border bg-color-3"></div>
                        <ul>
                            <li><i class="fa fa-dot-circle-o"></i><a href="about-tbeah.php">About Us</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="call-for-paper.php"> Research Topics </a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="online-paper-submission.php"> Submit an article</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="privacy-policy.php"> Privacy policy  </a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="terms-and-conditions.php"> Terms & Conditions  </a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="contact-us.php">Contact Us  </a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div class="footer-box">
                        <h3 class="category-headding">Author’s Guide  </h3>
                        <div class="headding-border bg-color-3"></div>
                        <ul>
                            <li><i class="fa fa-dot-circle-o"></i><a href="peer-review-process.php">Peer review process</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="guide-for-authors.php">Guide for authors  </a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="download/Manuscript-Block Chain and Cryptocurrencies.docx"> Manuscript Template </a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="publication-ethics.php"> Publication Ethics </a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="download/Copyright-form-Block Chain and Cryptocurrencies.pdf">Copy Right Form  </a></li>
                        </ul>
                    </div>
                </div>
                <?php
  $min_number = 1;
  $max_number = 15;

  $random_number1 = mt_rand($min_number, $max_number);
  $random_number2 = mt_rand($min_number, $max_number);
?>

                <div class="col-sm-3">
                    <div class="newsletter-inner">
                            <!-- newsletter -->
                            <h3 class="category-headding ">NEWSLETTER</h3>
                            <div class="headding-border"></div>
							<form method="post" action="newmail.php" enctype="multipart/form-data">
                            <p>Enter your email address for our mailing list!</p>
							<div id="captcha-group" class="form-group row">
							<div class="col-md-12">
								<label for="captcha" class="lines">Security Code <font color="#FF0000">*</font></label>
								
										
						
							
								<?php
								                  echo $random_number1 . ' + ' . $random_number2 . ' = ';
								                ?>
								                    
								                    <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
								                    <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
							
								<input name="captchaResult" type="text" class="captacha-box" size="7" placeholder="Captcha" autocomplete="off" required="" />
								<!--<input type="text" name="captcha" value="" class="form-control captcha" required=""><div id="a5" align="left" class="help-block" style="width:10%"></div>-->
								</div>
							</div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            <button type="submit" value="Submit" name="submit"  class="btn btn-style">Subscribe</button>
                        </div>
						</form>
                </div>
            </div>
        </div>
    </footer>
    <div class="sub-footer">
        <!-- sub footer -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p style="color: #fff;"> Copyright © 2021. All right Reserved</p>
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/rudra.s.94849" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                            <li><a href="https://www.linkedin.com/in/tbeah-journal-b305181a6/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                           <!--  <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                           <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>-->
<!--                            <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>-->
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/metisMenu.min.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    