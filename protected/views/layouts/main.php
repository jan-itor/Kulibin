<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
         <?php Yii::app()->bootstrap->register(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
<a href='index.php'><img src="images/Name.png" width="436" height="72" alt="KulibinTrade" /></a>
<!--        <div id="nav">

<ul class="select">
	<li><a href="#"><b>Главная</b></a>
		<ul class="sub">
		<li><a href="#">О нас</a></li>
		<li><a href="#">Контакты</a></li>
		<li><a href="#">Карта сайта</a></li>
		<li><a href="#">Как нас найти</a></li>
		</ul>
	</li>
</ul>

<ul class="current">  <<<== активное меню 
	<li><a href="#"><b>Игры</b></a></li>
</ul>
<ul class="sub_active">  <<<== активное подменю меню 
	<li><a href="#">Азартные</a></li>
	<li><a href="#">Гонки</a></li>
	<li class="current_sub"><a href="#">Стратегии</a></li>  <<<== активная страница 
	<li><a href="#">Аркады</a></li>
	<li><a href="#">Спорт</a></li>
	<li><a href="#">RPG(Ролевые)</a></li>
	<li><a href="#">Логические </a></li>
</ul>

<ul class="select">
	<li><a href="#"><b>Погода</b></a>
		<ul class="sub">
		<li><a href="#">На сегодня</a></li>
		<li><a href="#">На завтра</a></li>
		<li><a href="#">На месяц</a></li>
		<li><a href="#">На неделю</a></li>
		<li><a href="#">На 85 лет вперед</a></li>
		</ul>
	</li>
</ul>

<ul class="select">
	<li><a href="#"><b>Знакомства</b></a>
		<ul class="sub">
		<li><a href="#">Для мальчиков</a></li>
		<li><a href="#">Для девочек</a></li>
		<li><a href="#">Для всех подряд</a></li>
		<li><a href="#">Порно знакомства</a></li>
		</ul>
	</li>
</ul>

<ul class="select">
	<li><a href="#"><b>Программы для ПК</b></a>
		<ul class="sub">
		<li><a href="#">Аудио-видео плееры</a></li>
		<li><a href="#">Безопасность и защита</a></li>
		<li><a href="#">Интернет</a></li>
		<li><a href="#">Общение (Messeger/Chat/E-mail)</a></li>
		<li><a href="#">Файловые менеджеры, архиваторы</a></li>
		<li><a href="#">Экранные утилиты</a></li>
		</ul>
	</li>
</ul>

<ul class="select">
	<li><a href="#"><b>Еще один раздел</b></a>
		<ul class="sub">
		<li><a href="#">Лицензионнное соглашение</a></li>
		<li><a href="#">Длиное слово</a></li>
		<li><a href="#">Я не знаю что писать уже</a></li>
		<li><a href="#">Все хватит уже =)</a></li>
		</ul>
	</li>
</ul>

</div>-->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
                    //'htmlOptions' => array( 'class' => 'select'),
			'items'=>array(//'htmlOptions' => array( 'class' => 'select'),
                        	array('label'=>'Главная страница', 'url'=>array('/site/index'),'active'=>'true'),
				array('label'=>'Новости', 'url'=>array('/page/index')),
				array('label'=>'Запчасти', 'url'=>array('/site/contact')),
                                array('label'=>'Админка', 'url'=>array('/admin')),
                                 array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Контакты', 'url'=>array('/site/contact')),
                                array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
                                array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
                                array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
                                array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->	            
               
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
