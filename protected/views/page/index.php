<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Page',
);
?>
<<?php  
foreach ($models as $one)
    {
    echo '<h3>',  substr($one->page_conent,0,260),'</h3>';
    }
?>

