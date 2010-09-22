<? if (count($posts)) : ?>
	<? foreach ($posts as $post) : ?>
		<div class="post">
			
			<? $date = new KDate(); 
			$date->setDate($post->created_on); ?>
			<div class="date">
				<div class="day"><?=$date->format('%d')?></div>
				<div class="month"><?=$date->format('%B')?></div>
				<div class="year"><?=$date->format('%Y')?></div>
			</div>
			
			<h2>
				<a href="<?=@route('view=post&id='.$post->id.'&slug='.$post->slug)?>"><b><?=$post->title?></b></a> 
				<? $params =& KFactory::get('lib.joomla.application')->getPageParameters(); ?>
				<?= @template('comments_'.($params->get('commentmanager') ? $params->get('commentmanager') : 'hosted'), array('post' => $post)); ?>
			</h2>
	
			<?=$post->text?>
		</div>
	<? endforeach; ?>
	<? if ($total > 5) : ?>
		<?= @helper('paginator.pagination', array('total' => $total)) ?>
	<? endif; ?>
<? else : ?>
	<div class="post" >No posts</div>
<? endif ; ?>

<? if ($userid == KFactory::get('site::com.blog.model.blogs')->id(KRequest::get('get.blog_blog_id', 'int'))->getItem()->created_by) : ?>
<a class="newpost" href="index.php?option=com_blog&view=post&layout=new&blog_blog_id=<?=KRequest::get('get.blog_blog_id', 'int')?>">Add a new post</a>
<? endif; ?>
