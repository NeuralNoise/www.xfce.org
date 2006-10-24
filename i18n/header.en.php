<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

	<link rel="home" href="/" />
	<link rel="help" href="/documentation/" />
	<link rel="up" href=<?php echo $headup; ?>" />

	<link rel="stylesheet" media="screen" href="/layout/css/layout.css" type="text/css" />
	<?php echo $linked_css; ?>


	<style type="text/css">
		<?php echo $layout_css; ?>
	</style>

	<link rel="alternate" type="application/rss+xml" title="Xfce News" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Xfce Blog" href="http://blog.xfce.org/?feed=rss2" />

</head>
<body>
	<div class="hidden">
		<a href="#global-contentwrap" title="Skip site navigation" accesskey="1">Skip site navigation</a> (1)
	<?php if ($content_bool) { ?>
		<a href="#content-text" title="Skip section navigation" accesskey="2">Skip section navigation</a> (2)
	<?php } ?>
		<h1>Xfce Desktop Environment</h1>
		<h4>...and everything goes faster!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Website Layout</h2>
						<p>Layout: <a href="?layout=normal" title="Normal layout (Min: 740px, Max: 1000px)">Normal</a> / 
						<a href="?layout=liquid" title="Fluid Layout (100% Width)">Liquid</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Search</h2>
						<form method="get" action="http://www.google.com/custom" name="g">
							<input type="text" name="q" id="q" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Google Search..." />
							<input type="hidden" name="domains" value="www-test.xfce.org" />
							<input type="hidden" name="sitesearch" value="www-test.xfce.org" />
							<input type="hidden" name="num" value="30" />
							<input type="hidden" name="lr" value="lang_<?php echo $lang ?>" />
							<input type="submit" name="btnG" class="hidden" id="submit" value="Search" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Site navigation</h2>
					<ul>
						<li><a href="/" title="Home">Home</a></li>
						<li><a href="/about/" title="About">About</a></li>
						<li><a href="/projects/" title="Projects">Projects</a></li>
						<li><a href="/download/" title="Download">Download</a></li>
						<li><a href="/documentation/" title="Documentation">Documentation</a></li>
						<li><a href="/community/" title="Community">Community</a></li>
						<li><a href="/development/" title="Development">Development</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Site Language</h2>
						<?php echo $lang_links; ?>
					</div>
					<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Breadcrumbs</h2>
						<?php echo $breadcrumbs; ?>
					</div>
					<?php } ?>
				</div>
			</div>
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- end header.*.php -->
