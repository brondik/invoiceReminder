<?php //netteCache[01]000385a:2:{s:4:"time";s:21:"0.05471400 1394146974";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:71:"/Applications/MAMP/htdocs/invoiceReminder/app/templates/Post/show.latte";i:2;i:1394146427;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Applications/MAMP/htdocs/invoiceReminder/app/templates/Post/show.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9ci4gq9oun')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5965d93c9e_content')) { function _lb5965d93c9e_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<p><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
">← go back</a></p>
	
<?php if ($user->loggedIn) { ?>	<a href="<?php echo htmlSpecialChars($_control->link("edit", array($post->id))) ?>
">Edit topic</a>
<?php } ?>
	
	<div class="date"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($post->created_at, 'F j, Y'), ENT_NOQUOTES) ?></div>
<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>
	<div class="post"><?php echo Nette\Templating\Helpers::escapeHtml($post->content, ENT_NOQUOTES) ?></div>

	<h2>Comment this.</h2>
<?php $_ctrl = $_control->getComponent("commentForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ?>

	<h2>Comments</h2>

	<div class="comments">
<?php $iterations = 0; foreach ($comments as $comment) { ?>
			<p><b><?php if ($_l->ifs[] = ($comment->email)) { ?><a href="mailto:<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($comment->email)) ?>
"><?php } echo Nette\Templating\Helpers::escapeHtml($comment->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</b> said:</p>
			<div><?php echo Nette\Templating\Helpers::escapeHtml($comment->content, ENT_NOQUOTES) ?></div>
<?php $iterations++; } ?>
	</div>

<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb59a43024f3_title')) { function _lb59a43024f3_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1><?php echo Nette\Templating\Helpers::escapeHtml($post->title, ENT_NOQUOTES) ?></h1>
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