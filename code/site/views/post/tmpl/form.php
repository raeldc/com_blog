<? defined('KOOWA') or die('Restricted access'); ?>

<? if ($id = KRequest::get('get.id', 'int' )) : ?>

	<!-- edit post -->	
	<? $userid = KFactory::tmp('lib.joomla.user')->get('id'); ?>
	<? if ($userid==@$post->created_by) : ?>
	<div> 
		<form action="<?= @route('&id='. @$post->id)?>" method="post" class="adminform" name="adminForm">
			<fieldset>
				<legend>Insert the post Title</legend>
				<div class="form-row">
					<div class="form-label">
				  		<label for="repo-title">Post Title</label>
					</div>
					<div class="form-field">
						<input class="required" id="title" type="text" name="title" value="<?= @$post->title; ?>" />
					</div>
					<div class="form-comment">
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
				  		<label for="repo-title">Post Text</label>
					</div>
					<div class="form-field">
						<?= KFactory::get('lib.joomla.editor', array('tinymce'))->display( 'text',  @$post->text , '100%', '450', '75', '20', null, array('theme' => 'simple')) ; ?>
					</div>
					<div class="form-comment">
					</div>
				</div>
				<div class="form-buttons">
					<button class="button validate" type="submit"><?=@text('Update Post')?></button>
					<a href="<?=@route('layout=default&id='.@$post->id)?>">Back</a>
				</div>
			</fieldset>
			<input type="hidden" id="action" name="action" value="apply" />
			<input type="hidden" id="blog_post_id" name="blog_post_id" value="<?=@$post->id?>" />
		</form>	
	</div> 
	<? endif; ?>
<?	else: ?>	
	<?=@template('new')?>
<? endif; ?>	