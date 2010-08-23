<? /** $Id: default_items.php 32 2010-07-28 14:48:10Z copesc $ */ ?>
<? defined('KOOWA') or die('Restricted access'); ?>

<? $i = 0; $m = 0; ?>
<? foreach (@$posts as $post) : ?>
<tr class="<?php echo 'row'.$m; ?>">
	<td align="center">
		<?= $i + 1; ?>
	</td>
	<td align="center">
		<?= @helper('grid.checkbox', array('row'=>$post))?>
	</td>
	<td>
		<span class="editlinktip hasTip" title="<?= @text('Edit post') ?>::<?= @escape($post->message); ?>">
		<? if($post->locked) : ?>
			<span>
				<?= @escape($post->title); ?>
			</span>
		<? else : ?>
			<a href="<?= @route('view=post&id='.$post->id); ?>">
				<?= @escape($post->title); ?>
			</a>
		<? endif; ?>
		</span>
	</td>
	<td align="center" width="15px">
		<?= @helper('grid.enable', array('row'=>$post)) ?>
	</td>
</tr>
<? $i = $i + 1; $m = (1 - $m); ?>
<? endforeach; ?>