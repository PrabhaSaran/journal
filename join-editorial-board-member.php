<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>Technoarete Journal on Accounting and Finance (TJAF)</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/modernmag-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg" />

    <style>
        .input{
            margin-bottom: 20px;
        }
        
       .editorial .form-control {
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    font-weight: 600;
    color: #333;
}
        
    </style>

</head>

<body class="boxed-style">

    <!-- Container -->

    <?php include 'header.php';?>


    <!-- content-section 
			================================================== -->

    <div id="container">
        <section class="pt-2" id="content-section">
            <div class="container p-0">

                <div class="row">

                    <div class="col-sm-3 sidebar-sticky p-1">
                        <?php include 'leftsidebar.php';?>

                    </div>

                    <div class="col-sm-6">

                        <div class="col-sm-8 offset-sm-2 text-center">

                            <a class="navbar-brand" href="index.php">
                                <img src="https://www.technoarete.org/img/logo.png" alt="" style="width: 100%;">
                            </a></div>


                        <div class="title-section">
                            <h1>Join us an editorial board member/reviewer</h1>
                        </div>
                        
                        <div class="col-sm-12 pb-5">


                    <!--Form with header-->

                    <form action="joinedit.php" method="post" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3 style="font-size: 20px;"> <strong> Join us an editorial board member/reviewer </strong></h3>
                                </div>
                            </div>
                            
                            
                        <div class="editorial row mt-4">
                            
                            
                    <div class="col-sm-6 mb-4 pr-2">
                                <span class="input">
                                <select class="input_field form-control" name="title">
                                <option>Title</option>
                                <option>Mr</option>
                                <option>Mrs</option>
                                <option>Miss</option>
                                <option>Er</option>
                                <option>Prof</option>
                                </select></span>
                            </div>
                            
                            <div class="col-sm-6 mb-4">
                                <span class="input"> 
                                        <input class="input_field form-control" name="fname" type="text" id="input-2" placeholder="First Name">
                                       
                                </span>
                            </div>
                            
                    <div class="col-sm-6 mb-4 pr-2">
                                <span class="input">
                                        <input class="input_field form-control" name="lname" type="text" id="input-2" placeholder="Last Name">
                                        
                                </span>
                            </div>
                             
                            
                            <div class="col-sm-6 mb-4">
                                <span class="input">
                                <select class="input_field form-control" name="gender">
                                <option>Gender </option>
                                <option>Male</option>
                                <option>Female</option>
                                    </select></span>
                            </div>
                            
                            
                    <div class="col-sm-6 mb-4 pr-2 mb-4">
                                <span class="input">
                                        <input class="input_field form-control" name="email" type="text" id="input-3" placeholder="Email ID">
                                        
                                </span>
                            </div>
                    <div class="col-sm-6 mb-4">
                                <span class="input">
                                        <input class="input_field form-control" name="dept" type="text" id="input-4" placeholder="Department">
                                        
                                </span>
                            </div>
                            
                            
                            
                    <div class="col-sm-6 mb-4 pr-2 mb-4">
                                <span class="input">
                                        <input class="input_field form-control" name="des" type="text" id="input-4" placeholder="Designation">
                                        
                                </span>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <span class="input">
                                        <input class="input_field form-control" name="spec" type="text" id="input-4" placeholder="Specialization">
                                        
                                </span>
                            </div>
                            
                    <div class="col-sm-6 mb-4 pr-2">
                                <span class="input">
                                        <input class="input_field form-control" name="univ" type="text" id="input-4" placeholder="University/Institution/Organization">
                                        
                                </span>
                            </div>
                            
                             <div class="col-sm-6 mb-4">
                                <span class="input">
                                        <input class="input_field form-control" name="mobile" type="text" id="input-4" placeholder="Phone Number">
                                       
                                </span>
                            </div>
                            
                            
                            
                            <div class="col-sm-12 mb-4">
                                <span class="input">
                                        <textarea class="input_field form-control" name="address" id="message" placeholder="Address"></textarea>
                                        
                                </span>
                            </div>
                            
                            
                            <div class="col-sm-6">
                                <span class="input">
                                        <input class="input_field form-control" name="state" type="text" id="input-4" placeholder="City/Province/State">
                                        
                                </span>
                            </div>
                            
                            
                            <div class="col-sm-6 mb-4">
                                <span class="input">
                                        <input class="input_field form-control" name="country" type="text" id="input-4" placeholder="Country">
                                </span>
                            </div>
                            
                            
                            <div class="col-sm-12 mb-4">
                                <span class="input">
                                <select class="input_field form-control" name="register">
                                <option>Register as </option>
                                <option>Editor</option>
                                <option>Reviewer</option>
                                    </select></span>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-group file-upload">
                                <div class="col-sm-3 col-padding"><label><strong>Upload C.V </strong></label>
                                    </div>
                                    <div class="col-sm-8">
                                    <input type="file" class="form-control" name="attachment" id="fileToUpload" accept=".doc, .docx, .pdf" size="50" value="" required="">
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                         			<div class="form-group">
								<div class="col-md-12">
														<div class="position-relative float-left form-group" style="margin: 0px 0px;">
																				<img style="border-top: 1px solid #dddddd;border-left: 1px solid #dddddd;border-right: 1px solid #dddddd;border-top-left-radius: 5px;border-top-right-radius: 5px;padding: 0 0 0 42px;" src="../captcha/captcha.php" id="captchaimg" class="form_captcha">
																				<div class="grs-form-field" style="width: 294px">
																					<div class="padding-zero">
																						<input type="text" class="form-control ng-pristine ng-valid ng-empty ng-touched" name="captcha" placeholder="Type the above code" data-ng-class="{'invalid-field-box': hasError('captcha')}" data-ng-model="offer.captcha" style="border-top-left-radius: 0px;border-top-right-radius: 0px;padding-right: 40px;border: 1px solid #dddddd;">
																						<div class="BoxHoverClass hand" style="position: absolute;border-radius: 2px solid #dddddd;border-left: 1px solid #dddddd;border-right: 1px solid #dddddd;top: 10px;">
																							<a id="reload" onClick="getcaptcha()"><img src="../captcha/refresh.png" width="30px" border="0" /></a>
																						</div>
																					</div>
																					<!-- ngIf: hasError('captcha') -->
																				</div>
																			</div>
													</div>
</div>
                                <div class="form-button mt-4 col-sm-12 text-center btn-block mb-5">
												<input type="submit" value="Submit" name="submit" class="btn btn-style" style="background: #333333;color: #fff;padding: 9px 26px;font-size: 17px;">
											</div>
                        </div>
                            
                            
                            
                        </div>
                    </form>
                    <!--Form with header-->


                </div>


                    </div>

                    <div class="col-sm-3 sidebar-sticky">


                        <?php include 'rightsidebar.php';?>

                    </div>

                </div>
            </div>
        </section>
        <!-- End content section -->




        <?php include 'footer.php';?>


    </div>
    <!-- End Container -->


    <script src="js/modernmag-plugins.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		    $(document).ready(function(){
		    $("#reload").click(function() {
		    $("#captchaimg").attr("src", "../captcha/captcha.php?"+Math.random());
		    });    
		    });
		</script>
    <script src="js/script.js"></script>l

</body>

</html>