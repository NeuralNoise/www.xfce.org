<?php
/* setup the page title */
if (isset ($head['title']))
	$title = $head['title'].' - Xfce';
else
	$title = 'Xfce';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $title ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />
	<link rel="stylesheet" media="screen" href="/style/base.css" type="text/css" />
<?php
        if (isset ($head['stylesheet']) && is_array ($head['stylesheet']))
                foreach ($head['stylesheet'] as $sheet)
                        echo "\t<link rel=\"stylesheet\" media=\"screen\" href=\"$sheet\" type=\"text/css\" />\n";

        if (isset ($head['description']))
                echo "\t<meta name=\"description\" content=\"".$head['description']."\" />\n";

        if (isset ($head['keywords']))
                echo "\t<meta name=\"keywords\" content=\"".$head['keywords']."\" />\n";
?>
</head>

<body id="top">

<div id="page-header">
	<div>
		<h1>Xfce</h1>
		<ul>
			<li><a href="http://www.xfce.org" title="Go to the homepage" class="active">Home</a></li>
			<li><a href="http://docs.xfce.org" title="Official documentation">Docs</a></li>
			<li><a href="http://wiki.xfce.org" title="Community documentation">Wiki</a></li>
			<li><a href="http://forum.xfce.org" title="Community forums">Forum</a></li>
			<li><a href="http://bugzilla.xfce.org" title="Report and track bugs">Bugs</a></li>
			<li><a href="http://blog.xfce.org" title="Visit the blog">Blog</a></li>
			<li><a href="http://translations.xfce.org" title="Help translating the Xfce project">Translate</a></li>
		</ul>
	</div>
	<div class="clearboth"></div>
</div>

<div id="page-wrap">
	<div id="menu-main">
		<div>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about/">About</a></li>
			<li><a href="/download/">Download</a></li>
			<li><a href="/community/">Community</a></li>
			<li><a href="/projects/">Projects</a></li>
			<li><a href="/development/">Development</a></li>
		</ul>
		</div>
		<div class="clearboth"></div>
	</div>

<?php
	if (isset($toc['filename']))
	{
?>
	<div id="menu-sub">
		<div>
			<?php include ($toc['filename']) ?>
		</div>
	</div>
<?php
	}
?>
	<div id="page-contents">
