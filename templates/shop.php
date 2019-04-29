<h1 style="color: white; text-align: center;">
    Каталог товаров
</h1> 
<div>  
<?php
$mass=get_mass(); 
 foreach ($mass as $good): ?>
    <div class="shopUnit"> 
        <img src="<?php echo $good['img'];?>" />
            <div class="shopUnitName">
                <?php echo $good['name']; ?>
            </div>
        <div class="shopUnitShortDesc">
            <?php echo $good['title']; ?>
        </div>
        <div class="shopUnitPrice">
        Цена: <?php echo $good['price']; ?>
        </div>
        <a href="index.php?page=product&id=<?php echo $good["id"]; ?>" class="shopUnitMore">
        Подробнее
        </a>
    </div>
    <?php endforeach; ?>
</div>