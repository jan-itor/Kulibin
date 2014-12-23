<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Вас приветствует магазин автозапчастей <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Тут вы можете просмотреть и приобрести различные детали как для отечественных, так и для зарубежных автомобилей.</p>

 <?php echo TbHtml::carousel(array(
    array('image' => 'images/first.jpg', 'width'=>'870', 'label' => 'Небольшой ассортимент деталей', 'caption' => 'По низким ценам;)'),
    array('image' => 'images/second.jpg', 'label' => 'Свежая партия', 'caption' => 'Оптом скидка'),
    array('image' => 'images/third.jpg', 'label' => 'На иномарки', 'caption' => 'Аж блистит'),
    array('image' => 'images/fourth.jpg', 'label' => 'На отечественный автопром', 'caption' => 'Качество гарантировано'),
    array('image' => 'images/seventh.jpg', 'label' => 'Один из двигателей новой партии', 'caption' => 'Дорого, но справедливо'),
    array('image' => 'images/sixth.jpg', 'label' => 'Остатки предыдущей партии', 'caption' => 'подшипники и тд.'),                
)); ?>
