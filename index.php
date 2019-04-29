<?php
@ob_start();
session_start();
include 'libs/db.php';
include 'templates/functions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Магазин игр</title>
	<link rel="stylesheet" type="text/css" href="styles/site.css">
    <link rel="stylesheet" type="text/css" href="styles/slick.css">
    <link rel="stylesheet" type="text/css" href="styles/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<?php
$fon;
 $page=$_GET['page'];
if ($page=='toComeIn')
{
$fon='../images/fon2.jpg';
}
elseif ($page=='' || $page=='shop' || $page="product") {
$fon='../images/back.png';
}
 ?>
<body background="<?php echo($fon) ?>">
    <header>
		<div id="logo"></div>
		<div id="companyName">Магазин</div>
		<div id="authorez">
            <a href="/exit.php">Выход</a>
			<a href="index.php?page=toComeIn">ВОЙТИ</a>
		</div>
		<div id="navWrap">
			<a href="\">Главная</a>
			<a href="index.php?page=shop">Каталог</a>
			<a href="#">Акции</a>
			<a href="#">Гарантии</a>
            <?php 
            if (isset($_SESSION['id'])) {
                $id_session=$_SESSION['id'];
                $email=$_SESSION['email'];
                echo "<b>".$email."</b>";
                }


             ?>
		</div>
	</header>
<div class="wrapper">
        <div class="content">
            
    <?php
    
    
    $page=$_GET['page'];
    if (!isset($page)){
        require('templates/main.php');

    }
    elseif ($page== 'shop') {
        require('templates/shop.php');
    }
    elseif ($page== 'toComeIn') {
        require('templates/toComeIn.php');
    }
    elseif ($page== 'registration') {
        require('templates/registration.php');
    }
    elseif($page=='product'){

        $mass=get_mass();
        $id = $_GET['id'];
        foreach ($mass as $product) {
            if ($product['id']==$id) {
                $good = $product;
                break;
                
            }
            
        }
        require("templates/openedProduct.php");
    }
    ?>
    </div>
<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                aaa@mail.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 000 000 00 00
            </div>
        </div>

        <div id="footerNav">
            <a href="\">Главная</a>
            <a href="index.php?page=shop">Каталог</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Магазин </div>
    </div>
</footer>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


<script type="text/javascript" src="slick.js"></script>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript" src="form2.js"></script>



</body>
</html>