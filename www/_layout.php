<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $Viewbag->sDescription ?>">
<meta name="author" content="<?php echo $Viewbag->sDescription ?>">
<link rel="shortcut icon" href="favicon.ico">

<title><?php echo $Viewbag->sTitle ?></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.index a[href$="."],.about a[href$="about.php"],.contact a[href$="contact.php"]
	{
	color: #fff !important;
	background-color: #080808;
}
</style>
</head>

<body>

	<div
		class="navbar navbar-inverse navbar-fixed-top <?php echo $Viewbag->sPage ?>"
		role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=".">Project name</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="contact2.php">Contact 2</a></li>
					</ul>
				<form class="navbar-form navbar-right" role="form">
					<a href="login.php" class="btn btn-success">
					<i class="icon icon-google-plus"></i>&nbsp;Sign in</a>
				</form>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</div>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1><?php echo $Viewbag->sTitle; ?></h1>
			<p>This is a template for a simple marketing or informational
				website. It includes a large callout called a jumbotron and three
				supporting pieces of content. Use it as a starting point to create
				something more unique.</p>
				<?php
				session_start();
				if(array_key_exists('HTTP_REFERER', $_SERVER)){ ?> 
				<p>The referrer was: <?php echo $_SERVER['HTTP_REFERER'] ?></p>
				<?php }else{
					array_splice($_SESSION, 0, count($_SESSION));
					session_destroy();
				} ?>
				<p>The session says: <?php
				if(array_key_exists('test', $_SESSION)){
					$_SESSION['test'] = $_SESSION['test'] + 1;  
				}else{
					$_SESSION['test'] = 1;
				}
				echo $_SESSION['test'];
				?>
				</p>
			<p>
				<a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
			</p>
		</div>
	</div>

	<div class="container">
<?php renderBody()?>
    

      <hr>

		<footer>
			<p>&copy; Company 2014</p>
		</footer>
	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Latest compiled and minified JavaScript -->
	<script
		src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		
		<script>
jQuery("document").ready(function(){
	document.referrer = document.referrer + '#12345';
	console.log("loaded: " + document.documentURI + " referrer: " + document.referrer);
});

</script>
		

</body>


</html>