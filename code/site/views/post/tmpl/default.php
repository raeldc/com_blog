<? if ($post->id) : ?>
	<div class="post" >
		
		<? $date = new KDate(); 
		$date->setDate($post->created_on); ?>
		<div class="date">
			<div class="day"><?=$date->format('%d')?></div>
			<div class="month"><?=$date->format('%B')?></div>
			<div class="year"><?=$date->format('%Y')?></div>
		</div>
		
		<h2>
			<b><?=$post->title?></b>
		</h2>
		
		<?=$post->text?>
		<? $params =& KFactory::get('lib.joomla.application')->getPageParameters(); ?>
		<?=@template('comments_'.($params->get('commentmanager') ? $params->get('commentmanager') : 'hosted')) ?>
	</div>
<? endif; ?>