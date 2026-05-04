<?php
  $min_number = 1;
  $max_number = 15;

  $random_number1 = mt_rand($min_number, $max_number);
  $random_number2 = mt_rand($min_number, $max_number);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
<title>Technoarete Transactions on Advances in Blockchain and Cryptocurrencies</title>
 

    <!-- #header -->
		<?php include 'header.php';?>
   <!-- end header -->
	
    
    <section class="container block-inner">
        <div class="">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-9">
<div class="breadcrumbs text-left">
                        <ul>
                            <li><i class="pe-7s-home"></i> <a class="bread-active" href="index.php" title="">Home</a></li>
                            <li><div>Contact Us</div></li>
                        </ul>
                    </div>
    
</div>

<div class="col-sm-3">
              <div class="input-group search-area mb-0">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
              </div>
                </div>
            </div>
        </div>
    </section>
    
    
    


  <div class="container bg">
        
        <div class="row">
            
            
            
            <div class="col-md-3 col-sm-3">
                <aside><?php include 'sidebar.php';?></aside></div>
            
            
            
            
            <div class="col-md-9 col-sm-9">
                <!-- left content inner -->
              
                
                
               <section>
                   
                    <div class="heading h-three h-two cewnter">
        <div class="head_section" style="margin-left:60px;"><div><span>Contact Us</span></div></div></div>
                
                 <div class="">
        <div class="row">
            <div class="col-sm-4">
                <div class="contact-address">
                    <!-- Address -->
                    <h3>Address</h3>
                    <i class="pe-7s-map-2 top-icon"></i>
                    <ul class="cnt-addr">
                        <li>Plot Number 1584/2670, Soubhagya Nagar
Bhubaneswar, Odisha 751003, India</li>
                        

                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-address">
                    <!-- Phone -->
                    <h3>Phone</h3>
                    <i class="pe-7s-headphones top-icon"></i>
                    <ul class="cnt-addr">
                        <li><i class="fa fa-mobile"></i> +91-9345907112</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-address">
                    <!-- Email -->
                    <h3>Email</h3>
                    <i class="fa fa-envelope-o cnt-mail"></i>
                    <ul class="cnt-addr">
                        <li>editor@technoarete.org</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form-area">
                     <form method="post" action="contact_mail.php" enctype="multipart/form-data">
                        <div class="row">
                          
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" type="text" name="fname" id="input-1">
                                        <label class="input_label" for="input-1">
                                            <span class="input_label_content" >First Name</span>
                                </label>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" type="text" name="lname" id="input-2">
                                        <label class="input_label" for="input-2">
                                            <span class="input_label_content">Last Name</span>
                                </label>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" type="text" name="email" id="input-3">
                                        <label class="input_label" for="input-3">
                                            <span class="input_label_content">Your Email</span>
                                </label>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" type="text" name="subject" id="input-4">
                                        <label class="input_label" for="input-4">
                                            <span class="input_label_content" >Subject</span>
                                </label>
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <span class="input">
                                        <textarea class="input_field"  name="cms" id="message"></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content">Your Message</span>
                                </label>
                                </span>
								<div id="captcha-group" class="form-group row">
							<div class="col-md-5">
								<label for="captcha" class="lines">Security Code <font color="#FF0000">*</font></label>
								
										
						
							
								<?php
								                  echo $random_number1 . ' + ' . $random_number2 . ' = ';
								                ?>
								                    
								                    <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
								                    <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
							
								<input name="captchaResult" type="text" size="7" placeholder="Captcha" autocomplete="off" required="" />
								<!--<input type="text" name="captcha" value="" class="form-control captcha" required=""><div id="a5" align="left" class="help-block" style="width:10%"></div>-->
								</div>
							</div>
                                <div class="form-button">
												<input type="submit" value="Submit" name="submit" class="btn btn-style">
											</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62178.894954069634!2d80.20237932911375!3d13.087716753331833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25eaad4ace4a47db!2sTechnoarete%20Research%20%26%20Development%20Association!5e0!3m2!1sen!2sin!4v1638446474690!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                   </div>
            </div>
        </div>
    </div>
    
                
         
    </section>
                
                
                
            </div>
            <!-- /.left content inner -->
            
            
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>
    
    
    
    
    
    <!-- #header -->
		<?php include 'footer.php';?>
   <!-- end header -->
    
    
    
 
</body>


</html>
