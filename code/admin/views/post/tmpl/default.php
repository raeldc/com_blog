<? /** $Id: default.php 38 2010-07-29 12:20:55Z copesc $ */ ?>
<? defined('KOOWA') or die('Restricted access'); ?>

<?= @helper('behavior.tooltip'); ?>
<style src="media://com_default/css/form.css" />
<style src="media://com_default/css/admin.css" />

<form action="<?= @route('&id='.$post->id)?>" method="post" name="adminForm">
	<div style="width:100%; float: left" id="mainform">
		<fieldset>
			<legend><?= @text('Details'); ?></legend>
			<label for="target_type" class="mainlabel"><?= @text('Title'); ?></label>
			<input id="title" type="text" name="title" value="<?= $post->title; ?>" style="width:50%" />
			<br />
			<label for="enabled" class="mainlabel"><?= @text('Published on list'); ?></label>
			<?= @helper('select.booleanlist', array('name' => 'enabled', 'selected' => $post->enabled)); ?>
		</fieldset>
		<fieldset>
			<legend><?= @text('Description'); ?></legend>
			<?= @editor(array('row' => $post, 'name' => 'text', 'options' => array('theme' => 'simple'))) ?>
		</fieldset>
	</div>
	
	<input id="blog_blog_id" type="hidden" name="blog_blog_id" value="1"  />
	<input id="id" type="hidden" name="id" value="<?=$post->id?>"  />
</form>