<div class="main">
    <div id="promo">
        <h1 id="promoText">
            Лучшие игры по лучшим ценам
        </h1>
    </div>
    <div class="slider">
    	<!-- Выводим в слайдер только первые 3 товара-->
    	<?php
    	$i=0;
          $mass=get_mass();
    	foreach ($mass as $good): 
		$i++;
		if ($i>3) {
			break;
		}
    		?>
      	<div class="slider_1" >
	      	<a href="index.php?page=product&id=<?php echo $good["id"]; ?>" ><img class="slider_1_img" src="<?php echo $good['img'];?>"  /> </a>
	        <p class="clider_desc"><?php echo $good['name']; ?> <?php echo $good['price']; ?></p>
     
    	</div>
    	<?php endforeach; ?>
	</div>
</div>
