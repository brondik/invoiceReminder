<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.33737200 1394727406";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/Applications/MAMP/htdocs/invoiceReminder/app/templates/Invoice/edit.latte";i:2;i:1394727374;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Applications/MAMP/htdocs/invoiceReminder/app/templates/Invoice/edit.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2v7ilde2ej')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb4c4e827d5_content')) { function _lbb4c4e827d5_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Edit invoice</h1>

	<ul class="nav nav-tabs">
		<li>
			<a href="<?php echo htmlSpecialChars($_control->link("show", array($invoiceId))) ?>
">← go back</a>
		</li>
	</ul>

	<div class="invoice-form-container">
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["invoiceForm"], array()) ?>
		
			<div class="row">
				<div class="col-md-12"><?php if ($_label = $_form["title"]->getLabel()) echo $_label ; echo $_form["title"]->getControl() ?></div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-4"><?php if ($_label = $_form["company"]->getLabel()) echo $_label ; echo $_form["company"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["contact"]->getLabel()) echo $_label ; echo $_form["contact"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["employee"]->getLabel()) echo $_label ; echo $_form["employee"]->getControl() ?></div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-4"><?php if ($_label = $_form["created"]->getLabel()) echo $_label ; echo $_form["created"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["delivered"]->getLabel()) echo $_label ; echo $_form["delivered"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["due"]->getLabel()) echo $_label ; echo $_form["due"]->getControl() ?></div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-4"><?php if ($_label = $_form["bank_account"]->getLabel()) echo $_label ; echo $_form["bank_account"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["iban"]->getLabel()) echo $_label ; echo $_form["iban"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["swift"]->getLabel()) echo $_label ; echo $_form["swift"]->getControl() ?></div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-4"><?php if ($_label = $_form["constant_symbol"]->getLabel()) echo $_label ; echo $_form["constant_symbol"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["variable_symbol"]->getLabel()) echo $_label ; echo $_form["variable_symbol"]->getControl() ?></div>
				<div class="col-md-4"><?php if ($_label = $_form["specific_number"]->getLabel()) echo $_label ; echo $_form["specific_number"]->getControl() ?></div>
			</div>
			
			<hr>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
				<div class="col-md-4"><?php if ($_label = $_form["total_value"]->getLabel()) echo $_label ; echo $_form["total_value"]->getControl() ?></div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-12"><?php if ($_label = $_form["note"]->getLabel()) echo $_label ; echo $_form["note"]->getControl() ?></div>
			</div>

			<hr>

			<div class="row">
				<div class="pull-right"><?php echo $_form["send"]->getControl() ?></div>
			</div>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
	</div>

<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb49e9baad42_scripts')) { function _lb49e9baad42_scripts($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<script>
		$(function() {
			$("#frm-invoiceForm-created").datepicker({ format: 'dd.mm.yyyy' });
			$("#frm-invoiceForm-delivered").datepicker({ format: 'dd.mm.yyyy' });
			$("#frm-invoiceForm-due").datepicker({ format: 'dd.mm.yyyy' });
		});
	</script>
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
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars()) ; 