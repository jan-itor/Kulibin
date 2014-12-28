<?php  

    echo '<tr><td>','Дата публикации: ',  $models->page_created ,'</td></tr>';
    '<tr><th>'.$models->page_title.'</th></tr>';
    echo '<tr><td id=conent>',  substr($models->page_conent,0,260),'<tr><td>';
?>



