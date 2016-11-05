<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />

		<!-- font awesome -->
		<script src="https://use.fontawesome.com/80f7910a7a.js"></script>

		<!-- custom CSS goes here -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Bootstrap Challenge</title>
	</head>
	<body>
		<header>

			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="images/logo.png" alt="LOGO" class="img-responsive" id="logo"/>
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
							<li><a href="#">Link 4</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

		</header>
		<main>

			<div class="container">

				<!-- welcome board -->
				<div class="jumbotron text-center">
					<h1>Hello, Bootstrap Challenge!</h1>
					<p>byline text</p>
				</div>

				<!-- photo + text block -->
				<div class="row">
					<div class="col-sm-4">
						<img src="images/snake.jpg" alt="snake w/ a hat" class="img-responsive"/>
					</div>
					<div class="col-sm-8">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non efficitur urna, at luctus ante. Sed euismod bibendum venenatis. Etiam luctus, turpis a sagittis mollis, turpis lacus ultricies ligula, a consectetur dolor mi ut dui. Nam vestibulum volutpat posuere. Suspendisse eros libero, egestas ut mollis vel, auctor at arcu. In non ornare orci, quis accumsan ex. Etiam id magna nunc. Integer scelerisque risus in commodo tristique. Ut id dui quis tortor sollicitudin luctus. Aenean et hendrerit elit. Aenean sodales dolor nunc. Morbi in luctus nunc, sit amet aliquet dolor. Duis ut ultrices tortor. Nunc libero orci, tincidunt non vulputate nec, accumsan quis sem. In laoreet, neque in pretium gravida, tortor turpis vehicula dolor, et pulvinar nulla libero in metus. Sed et consectetur justo.
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<img src="images/boa.jpg" alt="boa" class="img-responsive img-circle"/>
						<div>
							<h1 class="text-center">heading 1</h1>
							<p>Quisque quis leo eget mi pharetra scelerisque. Pellentesque vehicula arcu at felis blandit, ac consectetur nisi elementum. Cras elementum dui in mattis volutpat. Sed vulputate nisi ligula, sit amet feugiat urna sollicitudin laoreet. Sed sit amet scelerisque nisl. Phasellus molestie sapien eu nisl mattis, blandit lobortis metus ultricies. Aenean vitae quam pharetra, cursus sapien eget, mattis urna.</p>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="images/hello.jpg" alt="snake says hello" class="img-responsive img-circle"/>
						<div>
							<h1 class="text-center">heading 2</h1>
							<p>Nulla ultricies, mi sit amet egestas porta, leo arcu volutpat erat, vitae feugiat massa nulla sit amet augue. Sed non libero viverra, efficitur sapien quis, finibus libero. Sed sodales risus lectus, quis varius risus egestas vel. Nullam dapibus semper augue, vel iaculis tortor venenatis sed. Sed ultrices neque quis fermentum sollicitudin. Sed ante purus, cursus sed turpis in, ultrices vulputate magna. Vivamus nec ligula ultrices, aliquam mauris quis, volutpat est. Phasellus fringilla nec erat ut bibendum.</p>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="images/colorful.jpg" alt="colorful snake" class="img-responsive img-circle"/>
						<div>
							<h1 class="text-center">heading 3</h1>
							<p>Pellentesque at pharetra ante, eu pretium neque. Nam hendrerit efficitur porttitor. Maecenas at venenatis augue. Proin vitae semper velit. Aenean posuere tellus vitae tristique rhoncus. Curabitur elementum convallis ex non sollicitudin. Pellentesque molestie nunc quis odio ullamcorper ullamcorper.</p>
						</div>
					</div>
					<div class="col-sm-3">
						<img src="images/python.jpg" alt="python" class="img-responsive img-circle"/>
						<div>
							<h1 class="text-center">heading 4</h1>
							<p>Integer blandit enim ac imperdiet ornare. Maecenas id turpis dolor. Phasellus blandit augue non ornare laoreet. Aliquam erat volutpat. Mauris felis ex, fermentum quis nibh ut, tristique venenatis ex. Quisque dignissim et mi quis euismod. Phasellus gravida justo arcu, ut pharetra ipsum bibendum in. Nunc vel mi viverra, laoreet velit in, pellentesque justo. Morbi congue ligula nunc, eget mattis nibh vehicula vel. Vivamus fermentum lectus eget sollicitudin viverra. Duis eleifend imperdiet fermentum.</p>
						</div>
					</div>
				</div>

			</div><!-- /.container -->

		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-4"></div>
					<div class="col-xs-4">
						<small>Copyright text</small>
					</div>
					<div class="col-xs-4"></div>
				</div>
			</div>
			</div>
		</footer>
	</body>
</html>