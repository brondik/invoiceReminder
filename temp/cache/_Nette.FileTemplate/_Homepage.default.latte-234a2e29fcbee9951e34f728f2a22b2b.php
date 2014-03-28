<?php //netteCache[01]000392a:2:{s:4:"time";s:21:"0.85672800 1394570256";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"/Applications/MAMP/htdocs/invoiceReminder/app/templates/Homepage/default.latte";i:2;i:1394570253;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Applications/MAMP/htdocs/invoiceReminder/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9ounrhyu6l')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd4f4d82235_content')) { function _lbd4f4d82235_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1 class="text-center">Overview of costs</h1>
	<div id="chart_div"></div>

	<h1 class="text-center">Invoices before expiration</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Company</th>
				<th>Contact</th>
				<th>Created</th>
				<th>Delivered</th>
				<th>Due</th>
				<th>Value</th>
				<th>Expiration</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php $iterations = 0; foreach ($expiringInvoices as $eInvoice) { ?>
			<tr <?php 
			if ($eInvoice->due < date("Y-m-d H:i:s")) { 
				echo 'class="danger"';
			}
?> >
				<td><?php echo Nette\Templating\Helpers::escapeHtml($eInvoice->id, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($eInvoice->title, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($eInvoice->company, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($eInvoice->contact, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($eInvoice->created, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($eInvoice->delivered, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($eInvoice->due, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($eInvoice->total_value, ENT_NOQUOTES) ?>€</td>
				<td>
					<?php 


						if ($eInvoice->due > date("Y-m-d H:i:s")) {
							$datetime1 = date_create(date("Y-m-d H:i:s"));
							$datetime2 = date_create($eInvoice->due);
							$interval = date_diff($datetime1, $datetime2);
							echo $interval->format('%R%a days');
						} else {
							echo '<span class="glyphicon glyphicon-remove"></span> expired';							
						}
?>
				</td>
				<td>
					<a href="<?php echo htmlSpecialChars($_control->link("Invoice:show", array($eInvoice->id))) ?>
">
					<span class="glyphicon glyphicon-share-alt"></span> Show</a>
				</td>
			</tr>
<?php $iterations++; } ?>
		</tbody>
	</table>

<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Company</th>
				<th>Contact</th>
				<th>Created</th>
				<th>Delivered</th>
				<th>Due</th>
				<th>Value</th>
				<th>Expiration</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php $iterations = 0; foreach ($invoices as $invoice) { ?>
			<tr>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->id, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->title, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->company, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->contact, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($invoice->created, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($invoice->delivered, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($invoice->due, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($invoice->total_value, ENT_NOQUOTES) ?>€</td>
				<td>
					<?php 
						if ($eInvoice->due > date("Y-m-d H:i:s")) {
							$datetime1 = date_create(date("Y-m-d H:i:s"));
							$datetime2 = date_create($invoice->due);
							$interval = date_diff($datetime1, $datetime2);
							echo $interval->format('%R%a days');
						} else {
							echo '<span class="glyphicon glyphicon-remove"></span> expired';							
						}
?>
				</td>
				<td>
					<a href="<?php echo htmlSpecialChars($_control->link("Invoice:show", array($invoice->id))) ?>
">
					<span class="glyphicon glyphicon-share-alt"></span> Show</a>
				</td>
			</tr>
<?php $iterations++; } ?>
		</tbody>
	</table>

<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb82f0cf4baa_title')) { function _lb82f0cf4baa_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1 class="text-center">List of Invoices</h1>
<?php
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lb8a62d39726_scripts')) { function _lb8a62d39726_scripts($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
	  google.load("visualization", "1", { packages:["corechart"] });
	  google.setOnLoadCallback(drawChart);
	  function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Date', 'Costs'],
<?php $iterations = 0; foreach ($costs as $cost) { ?>
				[<?php echo Nette\Templating\Helpers::escapeJs($template->date($cost->created, '%d.%m.%Y')) ?>
, <?php echo Nette\Templating\Helpers::escapeJs($cost->total_value) ?>],
<?php $iterations++; } ?>
		]);

		var options = {
		  hAxis: { title: 'Date',  titleTextStyle: { color: '#333' } },
		  vAxis: { minValue: 0 }
		};

		var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	  }
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