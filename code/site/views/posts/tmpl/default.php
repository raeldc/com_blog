<? if (count($posts)) : ?>
	<? foreach ($posts as $post) : ?>
		<div class="post" >
			
			<? $date = new KDate(); 
			$date->setDate($post->created_on); ?>
			<div class="date">
				<div class="day"><?=$date->format('%d')?></div>
				<div class="month"><?=$date->format('%B')?></div>
				<div class="year"><?=$date->format('%Y')?></div>
			</div>
			
			<h2>
				<a href="<?=@route('view=post&id='.$post->id.'&slug='.$post->slug)?>"><b><?=$post->title?></b></a> 
				
				<?
				$application = JFactory::getApplication();
				$params =& $application->getPageParameters();			
				?>
				
				<?= @template('comments_'.$params->get('commentmanager')); ?>

			</h2>
	
			<?=$post->text?>
		</div>
	<? endforeach; ?>
	<? if ($total > 5) : ?>
		<?= @helper('paginator.pagination', array('total' => $total)) ?>
	<? endif; ?>
<? else : ?>
	<div class="post" >No posts</div>
	<br />
	<a href="index.php?option=com_blog&view=post&layout=new&blog_blog_id=<?=KRequest::get('get.blog_blog_id', 'int')?>">Add a new post</a>
<? endif ; ?>
