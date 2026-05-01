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


</head>
<style>
    address {
        margin-bottom: 15px;
    font-style: normal;
    line-height: 25px;
    font-size: 13px;
}
    .br{
            background: #fae7dd87;
    padding-top: 17px;
    margin-bottom: 14px;
    }
    .txtt{
        font-size: 15px;
    }
    </style>
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
                            <h1>Contact </h1>
                        </div>

                       	<div class="col-sm-12 pb-5">
<div class="panel-body">
								<div class="row">
									<div class="col-sm-12 br">
										<strong class="txtt mb-2"> <i class="fa fa-map-marker"></i> Address  </strong>
										<address style="font-size: 14px; font-weight: 600;"> 
                                          Technoarete Research And Development Association <br> Plot No - 1584/2670 , Soubhagya Nagar , 
                                         Bhubaneswar, Odisha – 751003, India <br> 
                                        </address> 
									</div>
									<div class="col-sm-12 mb-4">
										<strong class="txtt mb-2"> <i class="fa fa-phone"></i> Call Us : </strong>
										+91-9345907120
									</div>
									<div class="col-sm-12 mb-4">
										<strong class="txtt mb-2"><i class="fa fa-envelope-o"></i>  Email : </strong>
										 <a href="mailto:editor@ijanp.com">editor@technoarete.org</a>
										<br>
									</div>
								</div>
							</div>

                    <!--Form with header-->

                    <form action="contactmail.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3 style="font-size: 20px;"> <strong> Contact Us</strong></h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" name="author" class="form-control" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" name="mail" class="form-control" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="tel" name="number" class="form-control" placeholder="Enter Your Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="comment" placeholder="Message" required></textarea>
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
                                <div class="text-center">
								<input type="hidden" name="submit">
                                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
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
    <script src="js/script.js"></script>

</body>

</html>