<html>
    <body>
        <table>
<?php  
    echo '<tr><td>','Название детали: ',  $models->spare_name ,'</td></tr>';
     echo '<tr><td>','Для автомобиля: ',  $models->spare_mark ,'</td></tr>';
     echo '<tr><td>','Модели: ',  $models->spare_model ,'</td></tr>';
     echo '<tr><td>','Куда использовать: ',  $models->spare_struct ,'</td></tr>';
     echo '<tr><td>','Цена изделия: ',  $models->spare_price ,'</td></tr>';
     echo '<tr><th>'.$models->spare_image.'</th></tr>';   
?>
            </table>
</body>
</html>
