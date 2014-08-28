<!DOCTYPE html>
<html>
<!-- (c) Wezom web-студия | www.wezom.com.ua -->
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="target-densitydpi=device-dpi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="/media/frontend/pic/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/media/frontend/pic/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/media/frontend/pic/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="/media/frontend/css/plugin.css">
    <link rel="stylesheet" href="/media/frontend/css/style.css">
    <link rel="stylesheet" href="/media/frontend/css/responsive.css">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="/media/frontend/js/modernizr.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/media/frontend/js/jquery-1.9.0.min.js">\x3C/script>')</script>-->
    <script src="/media/frontend/js/jquery-1.9.0.min.js"></script>
    <script src="/media/frontend/js/plugins.js"></script>
    <script src="/media/frontend/js/init.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="image_src" href="/media/frontend/pic/expres_icon.jpg">
    <!--[if IE 6]><script src="/media/frontend/js/DD_belatedPNG_0.0.8a-min.js"></script><script>DD_belatedPNG.fix('.png, img');</script><![endif]-->
    <!--[if IE]><script>document.createElement('header');document.createElement('nav');document.createElement('section');document.createElement('article');document.createElement('aside');document.createElement('footer');</script><![endif]-->
</head>
<body>
	<section class="isSection">
		<header class="isHeader">
			<div class="site_size clearFix">
                                <a href="<?php echo strtolower(Route::url('default',array('language'=>$language))); ?>" class="logo"><img src="/media/frontend/pic/logo.png" alt=""></a>
                                <div class="overBlock cmV"></div>
                                <?php if (isset($widgets['ChatNow'])) echo  $widgets['ChatNow'];  ?>
				<div class="overBlock tmV"></div>
                                <?php if (isset($widgets['Auth'])) echo  $widgets['Auth'];  ?>
                                <?php if (isset($widgets['MyAccount'])) echo  $widgets['MyAccount'];  ?>
                                <?php if (isset($widgets['Langs'])) echo $widgets['Langs']; ?>
			</div><!-- .site_size -->
                        <?php if (isset($widgets['MainMenu'])) echo $widgets['MainMenu']; ?>
		</header><!-- .isHeader -->
		<!-- conteniner -->
		<div id="conteiner">
			<div class="site_size clearFix">
				<div class="rightSIDE">
					<div class="rightSIDE_contentWrapp">
						<div class="rightSIDE_head">
							<div class="rightSIDE_title"><?php echo $page_name; ?></div>
						</div>
						<div class="rightSIDE_content clearFix">
							<p class="defPar">Buy credits and send letters to Ladies</p>
							<div class="blockInform flagSale content">
								<p>Purchase another <b style="color:#f00">1000</b> credits and you can choose a <b>10% Discount</b> on Flower Delivery or receive <b>5 bonus minutse</b> on Call Me service. This offer is valid for every 1000 credits you purchase.</p>
							</div>
							<div class="minSize buyCreditLength">
								<script src="/media/frontend/js/jquery-ui-1.10.1.min.js"></script>
								<link rel="stylesheet" href="/media/frontend/css/jquery-ui.css">
								<div class="tabsPH">
									<div class="tNav">
										<p class="defPar flr">You have <b>0 credits</b> availible (<a href="text.html" class="defLink">Learn more</a>)</p>
										<span data-tab-nav="tab_parchase" class="tabsPH_butt curr">Parchase</span>
										<span data-tab-nav="tab_history" class="tabsPH_butt">History</span>
									</div><!-- .tNav -->
									<div class="tConteiner">
										<div class="tab_parchase clearFix curr">
											<div class="tab_parchaseLeft">
												<table class="defTable col50">
													<tr>
														<th>Credits</th>
														<th>Per credits</th>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"  checked="checked"><span class="defSub" data-sub="(best value!)">1000</span></label>
														</td>
														<td><b class="asymp showIt">40&cent;</b> <span class="inf01">Save 50%</span></td>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"><span>500</span></label>
														</td>
														<td><b class="asymp showIt">50&cent;</b> <span class="inf01">Save 38%</span></td>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"><span>320</span></label>
														</td>
														<td><b class="asymp showIt">58&cent;</b> <span class="inf01">Save 28%</span></td>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"><span>160</span></label>
														</td>
														<td><b class="asymp">60&cent;</b> <span class="inf01">Save 25%</span></td>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"><span>80</span></label>
														</td>
														<td><b class="asymp">70&cent;</b> <span class="inf01">Save 13%</span></td>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"><span>40</span></label>
														</td>
														<td><b class="asymp">75&cent;</b> <span class="inf01">Save 6%</span></td>
													</tr>
													<tr>
														<td>
															<label class="defLabel"><input type="radio" class="valid" name="rad1"><span>20</span></label>
														</td>
														<td><b class="asymp showIt">80&cent;</b></td>
													</tr>
												</table>
												<div class="tab_parchase_underTable">
													<label><input type="checkbox" checked="checked"><span>Automatically charge my credit card for the same amuont of credits when my balsnce runs low.</span></label>
												</div>
											</div>
											<div class="tab_parchaseRight">
												<div class="packageBen">
													<div class="defTTL">Package Benefits (1000 Credits)</div>
													<p class="defPar">Enjoy the following services on Anastasia with our best value package that provides a wealth of opportunity:</p>
													<ul class="opportunityList">
														<li class="oppChat">
															<b>1000</b> minutes of Live Chat <span class="toolTip" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur."></span>
														</li>
														<li class="oppVideo">
															or <b>500</b> minutes of Live Chat with Video <span class="toolTip" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur."></span>
														</li>
														<li class="oppShare">
															or <b>170</b> minutes of CamShare <span class="toolTip" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur."></span>
														</li>
														<li class="oppMail">
															or send or read <b>100</b> Letters <span class="toolTip" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur."></span>
														</li>
													</ul>
													<p class="defPar">Credits give you instant access to a range of exciting features used to connect with the Ladies on AnastasiaDate.</p>
												</div>
											</div>
											<div class="clear"></div>
											<div class="buyCredisPrice">
												<span class="bcpTXT">Price</span>
												<span class="bcpVAL">$ <b>399.00</b></span>
											</div>
											<div class="tNav">
												<span data-tab-nav="tab_credit_card" class="tabsPH_butt curr">Credit Card</span>
												<span data-tab-nav="tab_paypal" class="tabsPH_butt">PayPal</span>
												<span data-tab-nav="tab_skrill" class="tabsPH_butt">MoneyGram</span>
											</div><!-- .tNav -->
											<div class="tConteiner">
												<div class="tab_credit_card curr">
													<form class="validat form_style">
														<div class="defTTL">Account information</div>
														<p class="defPar">Please, complete the account information form before parchasing credits. This information is confidential and will not be displayed on your Profile. All fields are madatory</p>
														<div class="row">
															<label class="label">Your First Name</label>
															<div class="controls">
																<input class="valid" data-error="Type text here!" type="text" />
															</div>
														</div>
														<div class="row">
															<label class="label">Your Last Name</label>
															<div class="controls">
																<input class="valid" data-error="Type text here!" type="text" />
															</div>
														</div>
														<div class="row rowPad2 rowPHN">
															<label class="label">Your Phone number</label>
															<div class="controls contrWrapper">
																<span class="inp01 toolTip02" data-tooltip-before="County code" data-tooltip-after="Example: 1">
																	<input class="valid digits" data-error="Type only digits" type="text" />
																</span>
																<span class="inp01 toolTip02" data-tooltip-before="City/Area code" data-tooltip-after="800">
																	<input class="valid digits" data-error="Type only digits" type="text" />
																</span>
																<span class="inp03 toolTip02" data-tooltip-before="Phone number" data-tooltip-after="3263130">
																	<input class="valid digits" data-error="Type only digits" type="text" />
																</span>
															</div>
														</div>
														<div class="defTTL">Billing information</div>
														<p class="defPar">Please, complete the billing information form before parchasing credits. Make sure you enter correct information in the fields and they are complate properly. All fields are madatory</p>
														<div class="row">
															<label class="label">We accept</label>
															<div class="controls">
																<img src="/media/frontend/pic/pic-visa.png" alt="">
																<img src="/media/frontend/pic/pic-mastercard.png" alt="">
																<img src="/media/frontend/pic/pic-american.png" alt="">
																<img src="/media/frontend/pic/pic-discover.png" alt="">
															</div>
														</div>													
														<div class="row rowPad2">
															<label class="label">Cardholder's Name</label>
															<div class="controls">
																<span class="toolTip02 displBlock" data-tooltip-before="As it appears on card">
																	<input class="valid" data-error="Type text here!" type="text" />
																</span>
															</div>
														</div>
														<div class="row rowPad1">
															<label class="label">Credit Card Number</label>
															<div class="controls">
																<span class="toolTip02 displBlock" data-tooltip-before="Example: XXXX XXXX XXXX XXXX">
																	<input class="valid" data-error="Type text here!" type="text" />
																</span>
															</div>
														</div>
														<div class="row rowPad1">
															<label class="label">Credit Card Number</label>
															<div class="controls">
																<select class="valid sel01">
																	<option value="val01">01</option>
																	<option value="val02">02</option>
																	<option value="val03">03</option>
																	<option value="val04">04</option>
																	<option value="val05">05</option>
																	<option value="val06">06</option>
																	<option value="val07">07</option>
																	<option value="val08">08</option>
																	<option value="val09">09</option>
																	<option value="val10">10</option>
																	<option value="val11">11</option>
																	<option value="val12">12</option>
																</select>															
																<select class="valid sel01">
																	<option value="val14">2014</option>
																	<option value="val15">2015</option>
																	<option value="val16">2016</option>
																	<option value="val17">2017</option>
																	<option value="val18">2018</option>
																	<option value="val19">2019</option>
																	<option value="val20">2020</option>
																	<option value="val21">2021</option>
																</select>
																<span class="flr inLine">
																	<p>Card Verification # <input type="text"></p>
																	<a href="#" class="defLink">See below</a>
																</span>
															</div>
														</div>
														<div class="row">
															<label class="label">Street Address</label>
															<div class="controls">
																<input class="valid" data-error="Type text here!" type="text" />
															</div>
														</div>
														<div class="row">
															<label class="label">Contry</label>
															<div class="controls">
																<select class="valid sel02">
																	<option value="val01">Lorem</option>
																	<option value="val02">Lorem</option>
																	<option value="val03">Lorem</option>
																	<option value="val04">Lorem</option>
																	<option value="val05">Lorem</option>
																	<option value="val06">Lorem</option>
																	<option value="val07">Lorem</option>
																	<option value="val08">Lorem</option>
																	<option value="val09">Lorem</option>
																	<option value="val10">Lorem</option>
																	<option value="val11">Lorem</option>
																	<option value="val12">Lorem</option>
																</select>	
															</div>
														</div>
														<div class="row rowPad2">
															<label class="label">State/Province</label>
															<div class="controls">
																<span class="inp04 toolTip02 respH" data-tooltip-before="USA & Canada only">
																	<input class="valid" data-error="Type text here!" type="text" />
																</span>
																<span class="flr inLine">
																	<p>Zip Code
																		<span class="inp04 toolTip02" data-tooltip-before="EUSA & Canada only">
																			<input class="valid" data-error="Type text here!" type="text" />
																		</span>
																	</p>
																</span>
															</div>
														</div>
														<div class="row">
															<label class="label">City</label>
															<div class="controls">
																<input class="valid" data-error="Type text here!" type="text" />
															</div>
														</div>											
														<p class="dafPar">Haveing difficulties? Please <a href="#">contact us</a> through our website or call us at: +1 (800) 356-31-30</p>
														<div class="row bcpSub">
															<div class="controls">
																<input type="button" class="but submit" value="Submit" />
															</div>
														</div>
													</form><!-- .validat -->
												</div><!-- .tab_credit_card -->
												<div class="tab_paypal">
													<form class="validat form_style">
														<div class="defTTL">Account information</div>
														<p class="defPar">Please, complete the account information form before parchasing credits. This information is confidential and will not be displayed on your Profile. All fields are madatory</p>
														<div class="row">
															<label class="label">Your First Name</label>
															<div class="controls">
																<input class="valid" data-error="Type text here!" type="text" />
															</div>
														</div>
														<div class="row">
															<label class="label">Your Last Name</label>
															<div class="controls">
																<input class="valid" data-error="Type text here!" type="text" />
															</div>
														</div>
														<div class="row rowPad2">
															<label class="label">Your Phone number</label>
															<div class="controls contrWrapper">
																<span class="inp01 toolTip02" data-tooltip-before="County code" data-tooltip-after="Example: 1">
																	<input class="valid digits" data-error="Type only digits" type="text" />
																</span>
																<span class="inp02 toolTip02" data-tooltip-before="City/Area code" data-tooltip-after="800">
																	<input class="valid digits" data-error="Type only digits" type="text" />
																</span>
																<span class="inp03 toolTip02" data-tooltip-before="Phone number" data-tooltip-after="3263130">
																	<input class="valid digits" data-error="Type only digits" type="text" />
																</span>
															</div>
														</div>
														<div class="defTTL">Billing information</div>
														<p class="defPar">Click the button if you want to checkout with PayPal.</p>
														<div class="paypal_block">
															<img src="/media/frontend/pic/logo-paypal.png" alt="">
															<p>PayPal allows anuone to pay in any way they prefer, including through credit cards, bank accounts, buyer credit or account balances, without sharing financial information.</p>
														</div>
														<p class="defPar">If you chose to use our autocharge option above, please <a href="#" class="backToCC">pay by credit card</a></p>
														<div class="tac paypalUbder">
															<p>You have selected <span class="recivedSelectedNum">1000</span> Credits for $399.00</p>
															<div class="row bcpSub">
																<div class="controls">
																	<input type="button" class="but submit" value="Submit" />
																</div>
															</div>
														</div>
													</form><!-- .validat -->
												</div><!-- .tab_paypal -->
												<div class="tab_skrill">
													<div class="defTTL">Skrill</div>
												</div><!-- .tab_skrill -->
											</div><!-- .tConteiner INNER -->
										</div><!-- .tabsph_parchase -->
										<div class="tab_history">
											<form>
												<b style="color:#f00">Period</b>
												<span class="forInput">from</span>
												<input type="text" placeholder="Select from" class="datepicker" id="dp1408474759459">
												<span class="forInput">till</span>
												<input type="text" placeholder="Select till" class="datepicker" id="dp1406546456444">
												<input type="submit" value="Show">
											</form>
										</div><!-- .tabsph_history -->
									</div><!-- .tabsPH_conteiner -->
								</div><!-- .tabsPH -->
							</div><!-- .minSize -->
						</div>
					</div>
				</div><!-- .rightSIDE -->
			</div><!-- .site_size -->
		</div><!-- .indexConteiner -->
		<!-- #conteiner-->
	</section><!-- .isSection -->
	<?php echo $footer; ?>
</body>
</html>