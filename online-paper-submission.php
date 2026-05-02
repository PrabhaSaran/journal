<!doctype html>
<html lang="en" class="no-js">

<head>
<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){
  w[l]=w[l]||[];
  w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
  var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),
      dl=l!='dataLayer'?'&l='+l:'';
  j.async=true;
  j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
  f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NEW12345');
</script>
<!-- End Google Tag Manager -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/utm-tracker.php'; ?>
    <title>Technoarete Journal on Accounting and Finance (TJAF)</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/modernmag-assets.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.jpg" />


</head>

<body class="boxed-style">
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NEW12345"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

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
                            <h1>Online paper Submission</h1>
                        </div>
                        
                        <div class="col-sm-12 pb-5">


                    <!--Form with header-->

                    <form action="journalsubmission.php" method="post" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3 style="font-size: 20px;"> <strong> Submit Paper for this Journal </strong></h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <label class="alabel"><strong>General Information :</strong></label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-pencil-square-o text-info"></i></div>
                                        </div>
                                        <input type="text" name="title" class="form-control" placeholder="Title of Manuscript" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="alabel"><strong> Author(s) Information :</strong></label> 

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" name="first" class="form-control" placeholder="Corresponding Author First Name" required>
                                    </div>
                                </div>
                         <div class="form-group">

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" name="last" class="form-control" placeholder="Corresponding Author Last Name" required>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="">
                                    </div> </div>
                                
                                      <div class="form-group">
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="tel" name="number" class="form-control" placeholder="Enter Your Phone Number" required="">
                                    </div> </div>
                                
                                <div class="form-group">

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-university text-info"></i></div>
                                        </div>
                                        <input type="text" name="univer" class="form-control" placeholder="University/Institute/Organization" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-flag text-info"></i></div>
                                        </div>
                                        <select name="country" class="form-control" required="" id="country">
													        <option value="am0" selected="selected">Select Country</option>
													           													        <option value="Afghanistan">Afghanistan</option>
													        													        <option value="Aland Islands">Aland Islands</option>
													        													        <option value="Albania">Albania</option>
													        													        <option value="Algeria">Algeria</option>
													        													        <option value="American Samoa">American Samoa</option>
													        													        <option value="Andorra">Andorra</option>
													        													        <option value="Angola">Angola</option>
													        													        <option value="Anguilla">Anguilla</option>
													        													        <option value="Antarctica">Antarctica</option>
													        													        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
													        													        <option value="Argentina">Argentina</option>
													        													        <option value="Armenia">Armenia</option>
													        													        <option value="Aruba">Aruba</option>
													        													        <option value="Australia">Australia</option>
													        													        <option value="Austria">Austria</option>
													        													        <option value="Azerbaijan">Azerbaijan</option>
													        													        <option value="Bahamas The">Bahamas The</option>
													        													        <option value="Bahrain">Bahrain</option>
													        													        <option value="Bangladesh">Bangladesh</option>
													        													        <option value="Barbados">Barbados</option>
													        													        <option value="Belarus">Belarus</option>
													        													        <option value="Belgium">Belgium</option>
													        													        <option value="Belize">Belize</option>
													        													        <option value="Benin">Benin</option>
													        													        <option value="Bermuda">Bermuda</option>
													        													        <option value="Bhutan">Bhutan</option>
													        													        <option value="Bolivia">Bolivia</option>
													        													        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
													        													        <option value="Botswana">Botswana</option>
													        													        <option value="Bouvet Island">Bouvet Island</option>
													        													        <option value="Brazil">Brazil</option>
													        													        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
													        													        <option value="Brunei">Brunei</option>
													        													        <option value="Bulgaria">Bulgaria</option>
													        													        <option value="Burkina Faso">Burkina Faso</option>
													        													        <option value="Burundi">Burundi</option>
													        													        <option value="Cambodia">Cambodia</option>
													        													        <option value="Cameroon">Cameroon</option>
													        													        <option value="Canada">Canada</option>
													        													        <option value="Cape Verde">Cape Verde</option>
													        													        <option value="Cayman Islands">Cayman Islands</option>
													        													        <option value="Central African Republic">Central African Republic</option>
													        													        <option value="Chad">Chad</option>
													        													        <option value="Chile">Chile</option>
													        													        <option value="China">China</option>
													        													        <option value="Christmas Island">Christmas Island</option>
													        													        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
													        													        <option value="Colombia">Colombia</option>
													        													        <option value="Comoros">Comoros</option>
													        													        <option value="Congo">Congo</option>
													        													        <option value="Congo The Democratic Republic Of The">Congo The Democratic Republic Of The</option>
													        													        <option value="Cook Islands">Cook Islands</option>
													        													        <option value="Costa Rica">Costa Rica</option>
													        													        <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
													        													        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
													        													        <option value="Cuba">Cuba</option>
													        													        <option value="Cyprus">Cyprus</option>
													        													        <option value="Czech Republic">Czech Republic</option>
													        													        <option value="Denmark">Denmark</option>
													        													        <option value="Djibouti">Djibouti</option>
													        													        <option value="Dominica">Dominica</option>
													        													        <option value="Dominican Republic">Dominican Republic</option>
													        													        <option value="East Timor">East Timor</option>
													        													        <option value="Ecuador">Ecuador</option>
													        													        <option value="Egypt">Egypt</option>
													        													        <option value="El Salvador">El Salvador</option>
													        													        <option value="Equatorial Guinea">Equatorial Guinea</option>
													        													        <option value="Eritrea">Eritrea</option>
													        													        <option value="Estonia">Estonia</option>
													        													        <option value="Ethiopia">Ethiopia</option>
													        													        <option value="Falkland Islands">Falkland Islands</option>
													        													        <option value="Faroe Islands">Faroe Islands</option>
													        													        <option value="Fiji Islands">Fiji Islands</option>
													        													        <option value="Finland">Finland</option>
													        													        <option value="France">France</option>
													        													        <option value="French Guiana">French Guiana</option>
													        													        <option value="French Polynesia">French Polynesia</option>
													        													        <option value="French Southern Territories">French Southern Territories</option>
													        													        <option value="Gabon">Gabon</option>
													        													        <option value="Gambia The">Gambia The</option>
													        													        <option value="Georgia">Georgia</option>
													        													        <option value="Germany">Germany</option>
													        													        <option value="Ghana">Ghana</option>
													        													        <option value="Gibraltar">Gibraltar</option>
													        													        <option value="Greece">Greece</option>
													        													        <option value="Greenland">Greenland</option>
													        													        <option value="Grenada">Grenada</option>
													        													        <option value="Guadeloupe">Guadeloupe</option>
													        													        <option value="Guam">Guam</option>
													        													        <option value="Guatemala">Guatemala</option>
													        													        <option value="Guernsey and Alderney">Guernsey and Alderney</option>
													        													        <option value="Guinea">Guinea</option>
													        													        <option value="Guinea-Bissau">Guinea-Bissau</option>
													        													        <option value="Guyana">Guyana</option>
													        													        <option value="Haiti">Haiti</option>
													        													        <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
													        													        <option value="Honduras">Honduras</option>
													        													        <option value="Hong Kong S.A.R.">Hong Kong S.A.R.</option>
													        													        <option value="Hungary">Hungary</option>
													        													        <option value="Iceland">Iceland</option>
													        													        <option value="India">India</option>
													        													        <option value="Indonesia">Indonesia</option>
													        													        <option value="Iran">Iran</option>
													        													        <option value="Iraq">Iraq</option>
													        													        <option value="Ireland">Ireland</option>
													        													        <option value="Israel">Israel</option>
													        													        <option value="Italy">Italy</option>
													        													        <option value="Jamaica">Jamaica</option>
													        													        <option value="Japan">Japan</option>
													        													        <option value="Jersey">Jersey</option>
													        													        <option value="Jordan">Jordan</option>
													        													        <option value="Kazakhstan">Kazakhstan</option>
													        													        <option value="Kenya">Kenya</option>
													        													        <option value="Kiribati">Kiribati</option>
													        													        <option value="Korea North
">Korea North
</option>
													        													        <option value="Korea South">Korea South</option>
													        													        <option value="Kuwait">Kuwait</option>
													        													        <option value="Kyrgyzstan">Kyrgyzstan</option>
													        													        <option value="Laos">Laos</option>
													        													        <option value="Latvia">Latvia</option>
													        													        <option value="Lebanon">Lebanon</option>
													        													        <option value="Lesotho">Lesotho</option>
													        													        <option value="Liberia">Liberia</option>
													        													        <option value="Libya">Libya</option>
													        													        <option value="Liechtenstein">Liechtenstein</option>
													        													        <option value="Lithuania">Lithuania</option>
													        													        <option value="Luxembourg">Luxembourg</option>
													        													        <option value="Macau S.A.R.">Macau S.A.R.</option>
													        													        <option value="Macedonia">Macedonia</option>
													        													        <option value="Madagascar">Madagascar</option>
													        													        <option value="Malawi">Malawi</option>
													        													        <option value="Malaysia">Malaysia</option>
													        													        <option value="Maldives">Maldives</option>
													        													        <option value="Mali">Mali</option>
													        													        <option value="Malta">Malta</option>
													        													        <option value="Man (Isle of)">Man (Isle of)</option>
													        													        <option value="Marshall Islands">Marshall Islands</option>
													        													        <option value="Martinique">Martinique</option>
													        													        <option value="Mauritania">Mauritania</option>
													        													        <option value="Mauritius">Mauritius</option>
													        													        <option value="Mayotte">Mayotte</option>
													        													        <option value="Mexico">Mexico</option>
													        													        <option value="Micronesia">Micronesia</option>
													        													        <option value="Moldova">Moldova</option>
													        													        <option value="Monaco">Monaco</option>
													        													        <option value="Mongolia">Mongolia</option>
													        													        <option value="Montenegro">Montenegro</option>
													        													        <option value="Montserrat">Montserrat</option>
													        													        <option value="Morocco">Morocco</option>
													        													        <option value="Mozambique">Mozambique</option>
													        													        <option value="Myanmar">Myanmar</option>
													        													        <option value="Namibia">Namibia</option>
													        													        <option value="Nauru">Nauru</option>
													        													        <option value="Nepal">Nepal</option>
													        													        <option value="Netherlands Antilles">Netherlands Antilles</option>
													        													        <option value="Netherlands The">Netherlands The</option>
													        													        <option value="New Caledonia">New Caledonia</option>
													        													        <option value="New Zealand">New Zealand</option>
													        													        <option value="Nicaragua">Nicaragua</option>
													        													        <option value="Niger">Niger</option>
													        													        <option value="Nigeria">Nigeria</option>
													        													        <option value="Niue">Niue</option>
													        													        <option value="Norfolk Island">Norfolk Island</option>
													        													        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
													        													        <option value="Norway">Norway</option>
													        													        <option value="Oman">Oman</option>
													        													        <option value="Pakistan">Pakistan</option>
													        													        <option value="Palau">Palau</option>
													        													        <option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option>
													        													        <option value="Panama">Panama</option>
													        													        <option value="Papua new Guinea">Papua new Guinea</option>
													        													        <option value="Paraguay">Paraguay</option>
													        													        <option value="Peru">Peru</option>
													        													        <option value="Philippines">Philippines</option>
													        													        <option value="Pitcairn Island">Pitcairn Island</option>
													        													        <option value="Poland">Poland</option>
													        													        <option value="Portugal">Portugal</option>
													        													        <option value="Puerto Rico">Puerto Rico</option>
													        													        <option value="Qatar">Qatar</option>
													        													        <option value="Reunion">Reunion</option>
													        													        <option value="Romania">Romania</option>
													        													        <option value="Russia">Russia</option>
													        													        <option value="Rwanda">Rwanda</option>
													        													        <option value="Saint Helena">Saint Helena</option>
													        													        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
													        													        <option value="Saint Lucia">Saint Lucia</option>
													        													        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
													        													        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
													        													        <option value="Saint-Barthelemy">Saint-Barthelemy</option>
													        													        <option value="Saint-Martin (French part)">Saint-Martin (French part)</option>
													        													        <option value="Samoa">Samoa</option>
													        													        <option value="San Marino">San Marino</option>
													        													        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
													        													        <option value="Saudi Arabia">Saudi Arabia</option>
													        													        <option value="Senegal">Senegal</option>
													        													        <option value="Serbia">Serbia</option>
													        													        <option value="Seychelles">Seychelles</option>
													        													        <option value="Sierra Leone">Sierra Leone</option>
													        													        <option value="Singapore">Singapore</option>
													        													        <option value="Slovakia">Slovakia</option>
													        													        <option value="Slovenia">Slovenia</option>
													        													        <option value="Solomon Islands">Solomon Islands</option>
													        													        <option value="Somalia">Somalia</option>
													        													        <option value="South Africa">South Africa</option>
													        													        <option value="South Georgia">South Georgia</option>
													        													        <option value="South Sudan">South Sudan</option>
													        													        <option value="Spain">Spain</option>
													        													        <option value="Sri Lanka">Sri Lanka</option>
													        													        <option value="Sudan">Sudan</option>
													        													        <option value="Suricountry">Suricountry</option>
													        													        <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>
													        													        <option value="Swaziland">Swaziland</option>
													        													        <option value="Sweden">Sweden</option>
													        													        <option value="Switzerland">Switzerland</option>
													        													        <option value="Syria">Syria</option>
													        													        <option value="Taiwan">Taiwan</option>
													        													        <option value="Tajikistan">Tajikistan</option>
													        													        <option value="Tanzania">Tanzania</option>
													        													        <option value="Thailand">Thailand</option>
													        													        <option value="Togo">Togo</option>
													        													        <option value="Tokelau">Tokelau</option>
													        													        <option value="Tonga">Tonga</option>
													        													        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
													        													        <option value="Tunisia">Tunisia</option>
													        													        <option value="Turkey">Turkey</option>
													        													        <option value="Turkmenistan">Turkmenistan</option>
													        													        <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
													        													        <option value="Tuvalu">Tuvalu</option>
													        													        <option value="Uganda">Uganda</option>
													        													        <option value="Ukraine">Ukraine</option>
													        													        <option value="United Arab Emirates">United Arab Emirates</option>
													        													        <option value="United Kingdom">United Kingdom</option>
													        													        <option value="United States">United States</option>
													        													        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
													        													        <option value="Uruguay">Uruguay</option>
													        													        <option value="Uzbekistan">Uzbekistan</option>
													        													        <option value="Vanuatu">Vanuatu</option>
													        													        <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
													        													        <option value="Venezuela">Venezuela</option>
													        													        <option value="Vietnam">Vietnam</option>
													        													        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
													        													        <option value="Virgin Islands (US)">Virgin Islands (US)</option>
													        													        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
													        													        <option value="Western Sahara">Western Sahara</option>
													        													        <option value="Yemen">Yemen</option>
													        													        <option value="Zambia">Zambia</option>
													        													        <option value="Zimbabwe">Zimbabwe</option>
													        												    </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" placeholder="Additional Authors if any" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-book text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="abstract" placeholder="Abstract" required></textarea>
                                    </div>
                                </div>
								
								<div class="form-group">
								 <div class="input-group mb-2">
					  		
							
										<input name="file" accept=".doc, .docx, .pdf" id="attachment" type="file" required="">
                                        </div>
							
					   </div>
					   
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
 
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
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