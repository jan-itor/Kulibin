<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<a href="#"><img src="http://images.cooltext.com/4054067.png" width="1272" height="64" alt="Вас приветствует магазин автозапчастей KulibinTrade" /></a>
<a href="#"><img src="http://images.cooltext.com/4054079.png" width="3930" height="83" alt="Тут вы можете просмотреть и приобрести различные детали как для отечественных, так и для зарубежных автомобилей." /></a>
 <?php echo TbHtml::carousel(array(
    array('image' => 'images/first.jpg', 'width'=>'870', 'label' => 'Небольшой ассортимент деталей', 'caption' => 'По низким ценам;)'),
    array('image' => 'images/second.jpg', 'label' => 'Свежая партия', 'caption' => 'Оптом скидка'),
    array('image' => 'images/third.jpg', 'label' => 'На иномарки', 'caption' => 'Аж блистит'),
    array('image' => 'images/fourth.jpg', 'label' => 'На отечественный автопром', 'caption' => 'Качество гарантировано'),
    array('image' => 'images/seventh.jpg', 'label' => 'Один из двигателей новой партии', 'caption' => 'Дорого, но справедливо'),
    array('image' => 'images/sixth.jpg', 'label' => 'Остатки предыдущей партии', 'caption' => 'подшипники и тд.'),                
)); ?>
