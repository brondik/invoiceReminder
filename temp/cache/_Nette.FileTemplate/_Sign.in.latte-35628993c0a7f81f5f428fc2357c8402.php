<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.44931200 1394561489";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"/Applications/MAMP/htdocs/invoiceReminder/app/templates/Sign/in.latte";i:2;i:1394561487;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Applications/MAMP/htdocs/invoiceReminder/app/templates/Sign/in.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ehql35tiuu')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb03284d3ac7_content')) { function _lb03284d3ac7_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["signInForm"], array()) ?>
	<div class="row sign-in">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="form-signin" role="form">
				<h1 class="form-signin-heading">Invoice Reminder</h1>
				<?php echo $_form["username"]->getControl() ?>

				<?php echo $_form["password"]->getControl() ?>

				<?php if ($_label = $_form["remember"]->getLabel()) echo $_label  ?>

				<?php echo $_form["remember"]->getControl() ?>

				<?php echo $_form["send"]->getControl() ?>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div> 
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>

<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbcee2b3385d_head')) { function _lbcee2b3385d_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	
	<link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/assets/css/sign-in.css">

<?php
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 