<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio of Kenneth John Odle</title>

	<meta name="author" content="">
	<meta name="description" content="">

<?php include_once 'head.php'; ?>

</head>

<body>

<header>
	<div id="siteinfo">
		<img src="avatar-002.png" />
		<h1>Kenneth John Odle</h1>
		<h2>Web Portfolio</h2>
	<div style="clear:both;"></div>
	</div>
</header>

<div id="container">

<h3>Good <span id="time">day</span></h3>

<p>I am a web designer and developer. I have a passion for WordPress and open source projects.</p>

<p>Don't forget to check out my <a href="blog/">portfolio/development blog</a>.</p>

<p>These are some of the things I've been working on. Thanks for visiting.</p>

<div id="accordion">
	<h3>WordPress Themes</h3>
		<div class="accordion-content-home">
			<?php include 'cont/wp-themes.htm'; ?>
		</div>
	<h3>WordPress Plugins</h3>
		<div class="accordion-content-home">
			<?php include 'cont/wp-plugins.htm'; ?>
		</div>
	<h3>GetSimple Templates</h3>
		<div class="accordion-content-home">
			<?php include 'cont/getsimple.htm'; ?>
		</div>
	<h3>Technical Writing</h3>
		<div class="accordion-content-home">
			<?php include 'cont/writing.htm'; ?>
		</div>
</div><!-- end accordion -->

</div><!-- end "container" -->

<?php include_once 'footer.php'; ?>
</body>

</html>