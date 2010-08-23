<? /** $Id: default.php 34 2010-07-29 09:34:31Z copesc $ */ ?>
<? defined('KOOWA') or die('Restricted access'); ?>

<style src="media://com_default/css/grid.css" />
<style src="media://com_default/css/admin.css" />

<table class="adminlist" style="clear: both;">
	<thead>
		<form action="<?= @route()?>" method="get"">
		<input type="hidden" name="option" value="com_blog" />
		<input type="hidden" name="view" value="posts" />
		<tr>
			<th width="5">
				<?= @text('NUM'); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?= count($posts); ?>);" />
			</th>
			<th>
				<?= @helper('grid.sort', array('column' => 'title')); ?>
			</th>
			<th>
				<?= @helper('grid.sort', array('column' => 'enabled')); ?>
			</th>
		</tr>
		<tr>
			<td colspan="2">
				<?= @text('Filters'); ?>	
			</td>
			<td>
				<?= @template('admin::com.default.view.list.search_form'); ?>
			</td>
			<td>
				<?= @helper('admin::com.profiles.helper.listbox.enabled',  array('attribs' => array('onchange' => 'this.form.submit();'))); ?>
			</td>
		</tr>
	</thead>
	<tbody>
		<? if (count(@$posts)) : ?>
			<?= @template('default_items'); ?>
		<? else : ?>
			<tr>
				<td colspan="8" align="center">
					<?= @text('No items found'); ?>
				</td>
			</tr>
		<? endif; ?>
	</tbody>
	<tfoot>
			<tr>
				<td colspan="20">
					<?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
	</tfoot>
</table>
