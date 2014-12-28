<html>
    <head>
        <style>
    .title_tovary{
        cursor:pointer;
        color:green;
    }
    h1 {
       /* margin: 1em 0 0.5em 0;*/
    color: #0044cc;
    font-weight: normal;
    font-family: 'Ultra', sans-serif;  
    font-size: 36px;
    /*line-height: 42px;*/
    text-transform: uppercase;
    text-shadow: 0 2px white, 0 3px #777;
}
</style>   
</head>
<script type="text/javascript">		
				$(".title_tovary").click(function(){
						 
					$.ajax({						 
						url: "?r=spareParts/addtovar/id"+$(this).attr("id"),						 
						}).done(function( txt ) {					 
						$(".col_tovarov").html(txt);
						});	
						
				});
</script>
<body>


	<?php 
        echo '<h1>Детали на ',$category->cat_title,'</h1>';
       foreach($tovar as $v){
         echo '<span class="title_tovary" id="'.$v->spare_id.'">'.$v->spare_name.'</span>'.'<br>'.$v->spare_descr.'<br />'.$v->spare_image.'Цена:'.$v->spare_price,'<br>';
         echo CHtml::link('Подробней осмотреть деталь',array('spareParts/view','spare_id'=>$v->spare_id)),'<br>','<hr>';
} 
if(!$tovar){
    echo '<b>Товара на данную категорию пока нету</b>';
}
?>

</body>
</html>