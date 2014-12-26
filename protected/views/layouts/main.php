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
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"></link>
         <?php Yii::app()->bootstrap->register(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <style>
    .cart_tovary{
        float:right;
    }
</style> 
         <script language="JavaScript">
    function addSoc(a) {
h=encodeURIComponent(window.location.href+window.location.hash);
t=encodeURIComponent(document.title);
if(a==1)h='twitter.com/timeline/home?status='+t+'%20'+h;
else if(a==2)h='www.facebook.com/share.php?u='+h;
else if(a==3)h='vkontakte.ru/share.php?url='+h+'&title='+t;
else if(a==4)h='odnoklassniki.ru/dk?st.cmd=addShare&st.s=1000&st._surl='+h+'&tkn=3009';
else if(a==5)h='www.livejournal.com/update.bml?mode=full&subject='+t+'&event='+h;
else if(a==6)h='wow.ya.ru/posts_share_link.xml?url='+h+'&title='+t;
else if(a==7)h='connect.mail.ru/share?url='+h+'&title='+t+'&description=&imageurl=';
else if(a==8)h='moikrug.ru/share?ie=utf-8&url='+h+'&title='+t+'&description=';
else return;
window.open('http://'+h,'Soc','screenX=100,screenY=100,height=500,width=500,location=no,toolbar=no,directories=no,menubar=no,status=no');
return false;
}
         </script>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="container" id="page">
<a href='index.php'><img src="images/Name.png" width="436" height="72" alt="KulibinTrade" /></a>
<a href="#" onclick="return addSoc(1);" title="Twitter"><img src="pic/Twitter.png" width=30 height=30></a>
<a href="#" onclick="return addSoc(2);" title="Facebook"><img src="pic/FB.png" width=30 height=30></a>
<a href="#" onclick="return addSoc(3);" title="Vkontakte"><img src="pic/VK.png" width=30 height=30></a>
<a href="#" onclick="return addSoc(4);" title="Одноклассники.ru"><img src="pic/Odnoklasniki.png" width=30 height=30></a>
<a href="#" onclick="return addSoc(5);" title="livejournal"><img src="pic/lv.png" width=30 height=30></a>
<a href="#" onclick="return addSoc(6);" title="Яндекс"><img src="pic/ya.png" width=30 height=30></a>
<!--<a href="#" onclick="return addSoc(7);" title="Мой мир"><img src="pic/mail.png" wwidth=15 height=15></a>-->

<?php echo TbHtml::tabs(array(
    array('label' => 'Главная страница', 'url' => array('/site/index')),
    array('label' => 'Новости', 'url' => array('/page/index')),
    array('label' => 'Запчасти', 'items' => array(
        array('label' => 'Mercedes', 'url' => '#'),
        array('label' => 'BMW', 'url' => '#'),
        array('label' => 'Жигули', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )),
       array('label'=>'Админка', 'url'=>array('/admin'),'visible'=>Yii::app()->user->name=="admin"),
        array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
	array('label'=>'Контакты', 'url'=>array('/site/contact')),
        array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
        array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
        array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
       array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest), 
        
)); ?>
       <div class="cart_tovary">
    Корзина товаров.
    <div class="col_tovarov">
   <?php 
       $i = 0;
       foreach(Yii::app()->shoppingCart as $position){ 
           $i++;
       }
       if($i==0)
           echo 'Пусто.';
      
       echo 'Товаров: '.$i.'<br />';
       echo 'На сумму:'.Yii::app()->shoppingCart->getCost();
   ?>     
    </div> 
</div>    
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?><br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
