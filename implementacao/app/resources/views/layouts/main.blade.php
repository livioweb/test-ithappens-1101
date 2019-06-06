<!DOCTYPE HTML>

<html>
	<head>

		<title>ithappens</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assetsLTE/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assetsLTE/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="{{ asset('images/logo.svg') }}" alt="" /></span>
						<h1>ithappens</h1>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#about" class="active">Sobre</a></li>
							<li><a href="{{url('/admin/home')}}">Login</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="about" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>ithappens</h2>
										</header>
										<p>
											Gestão de Mercadorias
										</p>
									</div>
									<span class="image"><img src="https://www.gmkfreelogos.com/logos/O/img/Open_Source.gif" alt="" /></span>
								</div>
							</section>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Sobre o Autor</h2>
							<p>
								Me chamo Livio Rodrigues, sou desenvolvedor web
							</p>
							<ul class="actions">
								<li><a href="http://kaosteck.expert" class="button">EXPERT</a></li>
							</ul>
						</section>
						<section>
							<h2>Fale Comigo</h2>
							<dl class="alt">
								<dt>Email</dt>
								<dd><a href="#">liviorodrigueslopes@gmail.com</a></dd>
							</dl>
							<ul class="icons">

								<li>
									<a href="https://www.linkedin.com/in/livio-rodrigues/" target="_blank" class="icon fa-linkedin alt"><span class="label">Dribbble</span></a>
								</li>

							</ul>
						</section>
						<p class="copyright">&copy; KaosTeck Expert. Design: <a href="http://kaosteck.expert">KaosTeck Expert</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
