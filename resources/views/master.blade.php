<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>@stack('title')</title>
	<meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- STYLES -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ URL::asset('css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ URL::asset('css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>


	<!-- header -->
	<header class="header-classic">

			<div class="container-xl">
				<!-- header top -->
				<div class="header-top">
					<div class="row align-items-center">

						<div class="col-md-4 col-xs-12">
							<!-- site logo -->
							<a class="navbar-brand" href="classic.html"><img src="images/logo.svg" alt="logo" /></a> 
						</div>

						<div class="col-md-8 d-none d-md-block">
							<!-- social icons -->
							<ul class="social-icons list-unstyled list-inline mb-0 float-end">
								<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg">
				<!-- header bottom -->
				<div class="header-bottom  w-100">
					
					<div class="container-xl">
						<div class="d-flex align-items-center">
							<div class="collapse navbar-collapse flex-grow-1">
								<!-- menus -->
								<ul class="navbar-nav">
									<li class="nav-item dropdown active">
										<a class="nav-link dropdown-toggle" href="index.html">Home</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="index.html">Magazine</a></li>
											<li><a class="dropdown-item" href="personal.html">Personal</a></li>
											<li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
											<li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
											<li><a class="dropdown-item" href="classic.html">Classic</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="category.html">Lifestyle</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="category.html">Inspiration</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#">Pages</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="category.html">Category</a></li>
											<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
											<li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
											<li><a class="dropdown-item" href="about.html">About</a></li>
											<li><a class="dropdown-item" href="contact.html">Contact</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>

							<!-- header buttons -->
							<div class="header-buttons">
								<button class="search icon-button">
									<i class="icon-magnifier"></i>
								</button>
								<button class="burger-menu icon-button ms-2 float-end float-lg-none">
									<span class="burger-icon"></span>
								</button>
							</div>
						</div>
					</div>

				</div>
			</nav>

	</header>
@yield('body')
	<!-- instagram feed -->
	<div class="instagram">
		<div class="container-xl">
			<!-- button -->
			<a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
			<!-- images -->
			<div class="instagram-feed d-flex flex-wrap">
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="images/insta/insta-1.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="images/insta/insta-2.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="images/insta/insta-3.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="images/insta/insta-4.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="images/insta/insta-5.jpg" alt="insta-title" />
					</a>
				</div>
				<div class="insta-item col-sm-2 col-6 col-md-2">
					<a href="#">
						<img src="images/insta/insta-6.jpg" alt="insta-title" />
					</a>
				</div>
			</div>
		</div>
	</div>
<!-- footer -->
	<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>



<!-- JAVA SCRIPTS -->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/slick.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>

</body>
</html>