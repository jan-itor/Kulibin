<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Вас приветствует магазин автозапчастей <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Тут вы можете просмотреть и приобрести различные детали как для отечественных, так и для зарубежных автомобилей.</p>

<p>Тут будет фотоальбом и\или самые популярные товары</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>Гдето в этих широтах будет новостная лента</p>
