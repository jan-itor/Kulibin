<html>
    <head>
        <style>
    .title_tovary{
        cursor:pointer;
        color:green;
    }
</style>   
</head>
<script type="text/javascript">		
				$(".title_tovary").click(function(){
						 
					$.ajax({
						 
						url: "/spareParts/addtovar/id"+$(this).attr("id"),
						 
						}).done(function( txt ) {
					 
						$(".col_tovarov").html(txt);
						});	
						
				});
</script>
<body>


	<?php foreach($model as $v){
          echo '<span class="title_tovary" id="'.$v->spare_id.'">'.$v->spare_name.'</span><br />Цена:'.$v->spare_price.'<br /><br />';
} ?>

</body>
</html>