<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.77980200 1394549800";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"/Applications/MAMP/htdocs/invoiceReminder/app/templates/@layout.latte";i:2;i:1394549762;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Applications/MAMP/htdocs/invoiceReminder/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'i8fb8uf1z1')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbb903990867_title')) { function _lbb903990867_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Invoice Reminder<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb81f9793b53_head')) { function _lb81f9793b53_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbeb2d0a81e7_scripts')) { function _lbeb2d0a81e7_scripts($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<?php if (isset($robots)) { ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>">
<?php } ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->striptags(ob_get_clean())  ?></title>

	<link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/css/datepicker.css">
	<link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/css/style.css">
	<link rel="shortcut icon" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
	<script> document.documentElement.className+=' js' </script>
<?php if ($user->loggedIn) { ?>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
">Invoice Reminder</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>">Home</a></li>
				<li><a href="<?php echo htmlSpecialChars($_control->link("Invoice:create")) ?>
">Add invoice</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo htmlSpecialChars($_control->link("Sign:out")) ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
<?php } ?>


	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
<?php $iterations = 0; foreach ($flashes as $flash) { ?>			<div class="alert alert-<?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; } Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
		</div>
		<div class="col-md-1"></div>
	</div>

	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/js/netteForms.js"></script>
	<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>


</body>
</html>
