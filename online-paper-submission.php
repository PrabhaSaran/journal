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
                            <li><div>Online Paper Submission</div></li>
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
                   
                    <div class="heading h-three h-two ">
        <div class="head_section" style="margin-left:60px;"><div><span>Article Submisssion</span></div></div></div>
                
                <div class="row">
            <div class="col-sm-12">
                <div class="contact-form-area">
                     <form method="post" action="papersub_mail.php" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-sm-12">
                            <h4> <strong>General Information </strong></h4>
                            </div>
                            <div class="col-sm-12">
                                <span class="input">
                                        <input class="input_field" name="title" type="text" id="input-1">
                                        <label class="input_label" for="input-1">
                                            <span class="input_label_content">Title of Manuscript</span>
                                </label>
                                </span>
                            </div>
                            
                            
                            <div class="col-sm-12">
                            <h4> <strong>Author(s) Information </strong></h4>
                            </div>
                            

                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" name="fname" type="text" id="input-2">
                                        <label class="input_label" for="input-2">
                                            <span class="input_label_content">Corresponding Author First Name</span>
                                </label>
                                </span>
                            </div>
                            
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" name="lname" type="text" id="input-2">
                                        <label class="input_label" for="input-2">
                                            <span class="input_label_content">Corresponding Author Last Name</span>
                                </label>
                                </span>
                            </div>
                             
                            
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field"  name="email" type="text" id="input-3">
                                        <label class="input_label" for="input-3">
                                            <span class="input_label_content">Corresponding Author Emailid</span>
                                </label>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" name="mobile" type="text" id="input-4">
                                        <label class="input_label" for="input-4">
                                            <span class="input_label_content">Corresponding Author Phone No</span>
                                </label>
                                </span>
                            </div>
                            
                            
                            
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" name="univ" type="text" id="input-4">
                                        <label class="input_label" for="input-4">
                                            <span class="input_label_content">University/Institute/Organization</span>
                                </label>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field" name="country" type="text" id="input-4">
                                        <label class="input_label" for="input-4">
                                            <span class="input_label_content">Country</span>
                                </label>
                                </span>
                            </div>
                            
                            <div class="col-sm-12">
                                <span class="input">
                                        <textarea class="input_field" name="add" id="message"></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content">Additional Authors if any</span>
                                </label>
                                </span>
                            </div>
                            
                            <div class="col-sm-12">
                                <span class="input">
                                        <textarea class="input_field" name="abstract" id="message"></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content">Abstract</span>
                                </label>
                                </span>

                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group file-upload">
                                <div class="col-sm-3 col-padding"><label><strong>File Upload</strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                    <input type="file" class="" name="attachment" id="fileToUpload" accept=".doc, .docx, .pdf" size="50" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <?php
  $min_number = 1;
  $max_number = 15;

  $random_number1 = mt_rand($min_number, $max_number);
  $random_number2 = mt_rand($min_number, $max_number);
?>
                            
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
                    </form>
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
