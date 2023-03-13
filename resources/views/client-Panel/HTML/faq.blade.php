<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie">
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html>
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ladybird web solution</title>

	<!-- Favicons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="assets/img/favicon1title.png">

	<!-- Styles -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="assets/font-awesome/css/all.min.css" type="text/css" />
	<link rel="stylesheet" href="assets/app/css/app.css" type="text/css" />
	<link rel="stylesheet" href="assets/app/css/edit.css" type="text/css" />

	<!--[if lt IE 9]>
	<script type="text/javascript" src="assets/app/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="assets/app/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">

                <nav id="navbar" class="site-navigation navbar navbar-expand-lg navbar-light">
                    <div id="logo" class="navbar-brand brand site-logo text-center">
                    <a href="index.html" rel="home">
                        <img src="assets/img/logofaveo.png" alt="NowKnow | Knowledge Base HTML Template" />
                    </a>
                </div><!-- #logo -->
                    
                   <button style="float: right;margin: 10px;" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> <!-- collapse -->
            
                    <div class="collapse navbar-collapse links" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-menu site-navigate ml-auto">
								<li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
						</li>
						<!-- <li class="nav-item active">
							<li class="nav-item"><a class="nav-link" href="faq.html"></a></li> -->
							<li class="nav-item active"><a class="nav-link" href="faq.html">Submit Ticket</a></li>
							<li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link" href="archive.html" id="navbarDropdown" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">Knowledge Base</a>
                                
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <li>
                                        <a class="dropdown-item" href="archive.html">Categories</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="detail.html">
                                            Article 
                                        </a>
                                        
                                    </li>
                                </ul>
							</li>
                            
							
                            <li  class="nav-item navbar-login d-md-none d-sm-none d-none d-lg-block">
                                <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#login-form">Login <i class="sub-indicator fa fa-chevron-circle-down fa-fw text-muted"></i>
                                </a>
                            </li>
                        </ul><!-- .navbar-menu -->
                    </div>
                    
                    <ul class="nav navbar-nav navbar-login d-lg-none">
                        <li class="nav-item"><a href="#" class="collapsed" data-toggle="collapse" data-target="#login-form">Login <i class="sub-indicator fa fa-chevron-circle-down fa-fw text-muted"></i></a></li>
                    </ul><!-- .navbar-login -->
                    <!-- .navbar-login -->
                    
                    <div id="login-form" class="login-form collapse fade clearfix">
                        <form action="" method="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" title="Username" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" title="Password" placeholder="Password" />
                            </div>
                            <ul class="list-unstyled float-left">
                                <li><a href="#">Lost password?</a></li>
                                <li><a href="#">Create Account</a></li>
                            </ul>
                            <button type="submit" class="btn btn-custom float-right">Login</button>
                        </form><!-- #login-form -->
                    </div>

                </nav><!-- #navbar -->


				<div id="header-search" class="site-search clearfix "><!-- #header-search -->
					<form action="" method="get" class="search-form" role="search">
						<div class="form-border">

							<div class="form-inline">
								<div class="form-group input-group" style="width: 100%;">
									<input type="text" name="s" class="search-field form-control input-lg mr-3" title="Enter search term" placeholder="Have a question? Type your search term here..." />
                                    <span class="input-group-btn">
								        <button type="submit" class="btn btn-custom ">Search</button>
                                    </span>
								</div>
                                
							</div>
							

						
					</form>
				</div><!-- #header-search -->
			</div>
		</header><!-- #masthead -->
		
		<div class="site-hero clearfix">
			<div class="container">
				<ol class="breadcrumb breadcrumb-custom">
					<li class="text">You are here: </li>
					<li><a href="index.html">Home<i class="fas fa-chevron-right"></i></a></li>
					<li class="active">Submit Ticket</li>
				</ol>
			</div>
		</div><!-- .site-hero -->
		
					<div class="container" style="background-color:white;padding-top:10px;margin-top: -38px;border-radius: 5px;margin-bottom:30px;">
							<!--form 1-->
							<div class="row">
							<div class="col-sm-8"style="background-color: #eee;border:1px solid #cebdbd;border-radius: 8px;margin-bottom:30px;margin-left: 30px;margin-top: 30px;">
								<div class="box-container">
										<!-- <div class="row"> -->
											<div class="box-header with-border">
												<div class="col-sm-12">
								<h2 class="section-title h4 clearfix" style="margin-top: 10px;background-color: #eee;">Submit a Ticket</h2>
							</div>	
						</div>
						</div>
								<form action="/action_page.php">
									<div>
										<label for="name">
											<strong>Attachment:</strong></label>
										<input type="file" class="form-control"style="line-height: 1.0;" id="image" name="image"  required>
									</div>
								
									<div class="form-group">
									  <label for="email"style="padding-top: 7px;"><strong>Email:</strong></label>
									  <input type="email" class="form-control Email" id="email" placeholder="Enter email" name="email" required>
									</div>
									<div class="form-group">
									  <label for="Requester"> <strong>Requester</strong></label>
									  <label style="color: rgb(153, 22, 35);">*</label>
									  <input type="password" class="form-control Email" id="pwd" placeholder="Enter password" name="pwd" required>
									</div>
									<div class="form-group">
											<label for="Requester"> <strong>Subject</strong></label>
											<label style="color: rgb(153, 22, 35);">*</label>
											<input type="password" class="form-control Email" id="pwd" placeholder="Enter password" name="pwd" required>
										  </div>
									<!-- optional -->
									<div>
											<div class="form-group">
											<label for="Help Topic"><strong>Help Topic</strong> </label><br>
											
									<select name="Help Topic" class="browser-default custom-select">
										
										<option value="Faveo Helpdesk">Faveo Helpdesk</option>
										<option value="Promotion & aids">Promotion & aids</option>
										<option value="jobs/careers">jobs/careers</option>
										<option value="Web hosting and Domain registration">Web hosting and Domain registration</option>
									  </select>
									  </div>
									</div>
									<div class="form-group">
									  <label for="Description"style="padding-bottom:0px;"> <strong>Description</strong></label>
									<p>
											<br>
											<textarea name="editor1" id="editor1">&lt;p&gt;&lt;/p&gt;</textarea>
											
										</p>
									</div>
									<div class="checkbox">
									  <label><input type="checkbox" name="remember"> Remember me</label>
									</div>
									<button type="submit" class="btn btn-default Button"><i  class="fas fa-sync-alt"></i> Submit</button>
								  </form>
								</div>
						<!--Form 1 End-->
						<!--form 2-->
								<div class="col-sm-3"style="margin-top: 30px;"> 
										<!-- <h2>Submit a Ticket</h2> -->
										 <h2 class="section-title h4 clearfix">Have a Ticket</h2>
										<form action="/action_page.php">
											<div class="form-group">
											  <label for="email"><strong>Email:</strong></label>
											  <label style="color: rgb(220, 53, 69);">*</label>
											  
											  <input type="email" class="form-control Email" id="email" placeholder="Enter email" name="email" required>
											</div>
											<div class="form-group">
											  <label for="Requester"><strong>Requester</strong></label>
											  <label style="color: rgb(220, 53, 69);">*</label>
											  <input type="password" class="form-control Email" id="pwd" placeholder="Enter password" name="pwd" required>
											</div>
											
											<div class="form-group">		
											<div class="checkbox">
											  <label><input type="checkbox" name="remember"> Remember me</label>
											</div>
											</div>
											<button type="submit" class="btn btn-default Button"><i  class="far fa-save"></i> Submit</button>
										  </form>
										</div> 
										<!--Form 2 End--></div>
						</div>
		
		
						<footer id="colophon" class="site-footer" role="contentinfo">
								<div class="container">
					
									
									<div class="row">
											<div class="col-sm-3">
													<div class="widget-area">
														<section id="section-about" class="section">
															<h2 class="section-title h4 clearfix">Products</h2>
															<div class="textwidget">
																	<ul type="disc">
																		<li><a href="#">Faveo Helpdesk</a></li>
																		<li><a href="#">ePaper Manager</a></li>
																		<li><a href="#">Scripts</a></li>
																			</ul>
																
															</div>
														</section>
														<!-- #section-about -->
													 </div>
												</div>
					
												<div class="col-sm-3">
														<div class="widget-area">
															<section id="section-about" class="section">
																<h2 class="section-title h4 clearfix">Company</h2>
																<div class="textwidget">
																		<ul type="disc">
																			<li><a href="#">About Us</a></li>
																								
																			<li><a href="#">Our team</a></li>
																			<li><a href="#">Road Map</a></li>
																			<li><a href="#">Privacy Policy</a></li>
																			<li><a href="#">Terms & Condition</a></li>
																			<li><a href="#">Support the Community Edition</a></li>
																			<li><a href="#">Careers</a></a></li>
																			<li><a href="#">We love Open source</a></li>
																				</ul>
																			</div>
																		</section>
																	</div>
																</div>
																
					
																<div class="col-sm-3">
																		<div class="widget-area">
																			<section id="section-about" class="section">
																				<h2 class="section-title h4 clearfix">Services</h2>
																				<div class="textwidget">
																						<ul type="disc">
																							<li><a href="#">E-Commerse website design and development india</a></li>
																							<li><a href="#">Web Design and Development india</a></li>
																							<li><a href="#">Web Application Development</a></li>
																							<li><a href="#">Website maintaince india</a></li>
																							<li><a href="#">Domain Registration and web hosting</a></li>
																								</ul>
																							</div>
																						</section>
																					</div>
																				</div>
																				
												<div class="col-sm-3">
														<div class="widget-area">
															<section id="section-about" class="section">
																<h2 class="section-title h4 clearfix">Contact info</h2>
																<div class="textwidget">
																		<p>No:68, 1st floor
																				10th Main Indiranagar, 2nd Stage
																				Bangalore – 560038
																				Karnataka – India
																				<b>Telephone: +91 80 4709 2805 
																				Email:    support@ladybirdweb.com</b></p>
																			</div>
																		</section>
																	</div>
																</div>
															</div>
									
					
										<div class="clearfix"></div>
										
									
					
									<div class="row bord">
										<div class="site-info col-md-6">
											<p class="text-muted">Copyright &copy; 2019 <a href="#">ladybirdweb solution</a>. All Rights Reserved.</p>
										</div><!-- .site-info -->
					
										<div class="site-social text-right col-md-6">
											<ul class="list-inline hidden-print">
												<li class="list-inline-item"><a href="#" class="btn btn-social btn-facebook"><i class="fab fa-facebook-f fa-fw"></i></a></li>
												<li class="list-inline-item"><a href="#" class="btn btn-social btn-twitter"><i class="fab fa-twitter fa-fw"></i></a></li>
												<li class="list-inline-item"><a href="#" class="btn btn-social btn-google-plus"><i class="fab fa-google-plus-g fa-fw"></i></a></li>
												<li class="list-inline-item"><a href="#" class="btn btn-social btn-linkedin"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
												
												<li class="list-inline-item"><a href="#" class="btn btn-social btn-youtube"><i class="fab fa-youtube fa-fw"></i></a></li>
												
											</ul>
										</div><!-- .site-social -->
									</div>
					
								</div>
							</footer><!-- #colophon -->
								
						</div><!-- #page -->
			
	

	<!-- Script -->
	<script type="text/javascript" src="assets/app/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/app/js/superfish.js"></script>
	<script type="text/javascript" src="assets/app/js/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="assets/app/js/autocomplete.js"></script>
	<script type="text/javascript" src="assets/app/js/app.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/ckeditor.js"></script>
<script>
	ClassicEditor
			.create( document.querySelector( '#editor1' ) )
			.then( editor => {
					console.log( editor );
			} )
			.catch( error => {
					console.error( error );
			} );
</script>

<style>
	.ck.ck-editor__editable_inline{
		height: 200px !important;
	}
</style>

</body>
</html>