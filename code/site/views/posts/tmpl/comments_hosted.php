<?
$comments = KFactory::tmp('site::com.comments.model.comments')
	->sort('comments_comment_id')
	->direction('asc')
	->target_type('com_blog')
	->target_id($post->id)
	->return(KRequest::url().'#comments')
	->limit(0)
	->getTotal();
?>

<span class="comment">
<? if ($comments) : ?>
	&nbsp;(<?=$comments?> comment<? if ($comments!=1) echo "s"?>)
<? endif; ?>
</span>