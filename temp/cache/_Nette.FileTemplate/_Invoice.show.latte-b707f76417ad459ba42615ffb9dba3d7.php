<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.32653200 1394610173";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/Applications/MAMP/htdocs/invoiceReminder/app/templates/Invoice/show.latte";i:2;i:1394610172;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Applications/MAMP/htdocs/invoiceReminder/app/templates/Invoice/show.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'iq8yjktozc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc1cf47ce2b_content')) { function _lbc1cf47ce2b_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<ul class="nav nav-tabs">
		<li>
			<a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">← go back</a>
		</li>
		<li>
			<a href="<?php echo htmlSpecialChars($_control->link("edit", array($invoice->id))) ?>
">Edit invoice</a>
		</li>
	</ul>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="alert alert-info">
<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Deliverer</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Company:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->company, ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Employee:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->employee, ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->contact, ENT_NOQUOTES) ?></td>
					</tr>
				</tbody>
			</table>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Informations</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Created:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($invoice->created, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Delivered:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($invoice->delivered, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Due:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($invoice->due, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
					</tr>
<?php if ($invoice->bank_account) { ?>
					<tr>
						<td>Bank Account:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->bank_account, ENT_NOQUOTES) ?></td>
					</tr>
<?php } if ($invoice->iban) { ?>
					<tr>
						<td>IBAN:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->iban, ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>SWIFT:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->swift, ENT_NOQUOTES) ?></td>
					</tr>
<?php } ?>
					<tr>
						<td>Constant Symbol:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->constant_symbol, ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Constant Symbol:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->variable_symbol, ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Specific Number:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->specific_number, ENT_NOQUOTES) ?></td>
					</tr>
					<tr>
						<td>Total Value:</td>
						<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->total_value, ENT_NOQUOTES) ?></td>
					</tr>
				</tbody>
			</table>

			<hr>
			
			<h3>Note:</h3>
			<p>
				<?php echo Nette\Templating\Helpers::escapeHtml($invoice->note, ENT_NOQUOTES) ?>

			</p>
		</div>
		<div class="col-md-2"></div>
	</div>

<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb407cbdc819_title')) { function _lb407cbdc819_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>			<a href="#" class="alert-link"><?php echo Nette\Templating\Helpers::escapeHtml($invoice->title, ENT_NOQUOTES) ?></a>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 