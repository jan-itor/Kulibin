<html>
 <head>
  <meta charset="utf-8">
  <title>Тег table</title>
  <style>
   table {
    width: 50%; /* Ширина таблицы */
    background: #09f; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
    border-spacing: 1px; /* Расстояние между ячейками */
   }
   td{
       font-family: monospace;
    background: #005fcc; /* Цвет фона ячеек */
    padding: 5px; /* Поля вокруг текста */
   }
   th{
       background: #08C; /* Цвет фона ячеек */
       color: #B32B2B;
   }
  #conent{
       background:#3399ff;
       font-family:cursive;
   }
  </style>
 </head> 
 <body>
<table>
<?php  
foreach ($models as $one)
    {
    echo "<a href='index.php?r=Page/view'> $one->page_title</a>";
    //echo СHtml::link('<tr><th>',$one->page_title,'</th></tr>',array('view','id'=>$one->page_id));
    echo '<tr><td id=conent>',  substr($one->page_conent,0,260),'<tr><td>';
    //echo $form->link('Читать далее...',array('view','id'=>$one->page_id));
    }
?>   
</table>
     </body>
     </html>

