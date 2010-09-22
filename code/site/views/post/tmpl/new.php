<? if ($userid == KFactory::get('site::com.blog.model.blogs')->id(KRequest::get('get.blog_blog_id', 'int'))->getItem()->created_by) : ?>
<!-- New Post -->
<h2>Add a new post</h2>
<div> 
	<form action="<?= @route('')?>" method="post" class="adminform" name="adminForm">
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
					<?= KFactory::get('lib.joomla.editor', array('tinymce'))->display( 'text',  '' , '100%', '450', '75', '20', null, array('theme' => 'simple')) ; ?>
					<input type="hidden" id="blog_blog_id" name="blog_blog_id" value="<?=KRequest::get('get.blog_blog_id', 'int')?>" />
					<input type="hidden" id="action" name="action" value="save" />
				</div>
				<div class="form-comment">
				</div>
			</div>
			<div class="form-buttons">
				<button class="button validate" type="submit"><?=@text('Insert Post')?></button>
			</div>
		</fieldset>
	</form>	
</div> 
<? endif; ?>
