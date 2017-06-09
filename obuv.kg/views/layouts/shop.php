<html>
<head>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Интернет магазин</title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>

</head>
<body>

<table align="center" width="1360" cellpadding="0" cellspacing="0" border="0" id="main-table">
<tr>
    <td>
        <div id="header"></div>
        <div id="menu">
           <div><a href="index.php">Главная</a></div>
		    <div><a href="index.php">Акции</a></div>
			<div><a href="index.php">Распродажа</a></div>
			<div><a href="index.php">Контакт</a></div>
			<div><a href="admin.html">Админ</a></div>
			<div><a href="order.php">Заказы</a></div>
   <?
                $categories = get_cat();
                foreach($categories as $item):
            ?>
              
            <?endforeach;?>
            <div id="cart"><a href="index.php?view=cart">Ваша корзина (<?=$_SESSION['total_items'];?>)</a> - <?=number_format($_SESSION['total_price'],2);?> Сом</div> 
        </div>
    </td>
</tr>
<tr>
    <td id="main-block" valign="top">
    
     <?php include($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php'); ?> 
    
        <div style="clear: both;"></div>
        
    </td>
</tr>
<tr>
    <td id="footer-td">
        <div align="center">
            <div class="footer">Created Kamolov Xusan</div>
        </div>
    </td>
</tr>
</table>

</body>
</html>