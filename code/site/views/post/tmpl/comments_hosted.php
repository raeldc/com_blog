<? KFactory::tmp('site::com.comments.controller.comment')
	->sort('comments_comment_id')
	->direction('asc')
	->target_type('com_blog')
	->target_id($post->id)
	->return(KRequest::url().'#comments')
	->limit(0)
	->browse(); 
?>