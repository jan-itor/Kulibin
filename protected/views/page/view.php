<?php  
foreach ($models as $one)
    {
    echo '<tr><td>','Дата публикации: ',  $one->page_created ,'</td></tr>';
    '<tr><th>'.$one->page_title.'</th></tr>';
    echo '<tr><td id=conent>',  substr($one->page_conent,0,260),'<tr><td>';
    // echo CHtml::link('Читать далее...',array('view','id'=>$one->page_id));
    }
?>
<!--echo CHtml::link(,array('view','id'=>$one->page_id))-->