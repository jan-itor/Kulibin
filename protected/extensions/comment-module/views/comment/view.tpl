<h1>View Comment #{$model->id}</h1>

{$this->widget('zii.widgets.CDetailView', [
	'data'=>$model,
	'attributes'=>[
		'com_id',
		'com_content',
		'user_id'
	]
], true)}
