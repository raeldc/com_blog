<? if ($post->id) : ?>
	<div class="post" >
		<!-- TwitMeme -->
		<div style="float:right">
			<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
		</div>	
		<!-- END TwitMeme -->
		
		<? $date = new KDate(); 
		$date->setDate($post->created_on); ?>
		<div class="date">
			<div class="day"><?=$date->format('%d')?></div>
			<div class="month"><?=$date->format('%B')?></div>
			<div class="year"><?=$date->format('%Y')?></div>
		</div>
		
		<h2>
			<b><?=@$post->title?></b>
		</h2>
		
		<?=@$post->text?>
				
		<?
		$application = JFactory::getApplication();
		$params =& $application->getPageParameters();			
		?>
		
		<?= @template('comments_'.$params->get('commentmanager')); ?>
	</div>
<? endif; ?>