<h2 align="center">Оформление заказа</h2>

<?
if($_SESSION['cart'] && !isset($_POST['order']))
{
?>
<form action="index.php?view=order" method="post" id="cart-form">

<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		    <th>Товар</th>
			<th>Цена</th>
			<th>Кол-во</th>
			<th>Всего</th>
	  </tr>

      <? foreach($_SESSION['cart'] as $id => $quantity):
         $product = get_product($id);
      ?>
        
	  <tr>
          <td align="center"><?=$product['title'];?></td>
    	  <td align="center">$<?=number_format($product['price'],2);?></td>
    	  <td align="center"><?=$quantity;?></td>
    	  <td align="center">$<?=number_format($product['price'] * $quantity ,2);?></td>
	  </tr>
      
      <?endforeach;?>
      
</table>	
	 <p class="total" align="center">Общая сумма заказа: <span class="product-price"><?=number_format($_SESSION['total_price'],2);?> $</span></p>
	 
     <p align="center" style="color:  #fff;">
     Ваше Имя: <br />
     <input type="text" name="name" /><br />
     Ваша Фамилия: <br />
     <input type="text" name="s_name" /><br />
     Ваш адрес: <br />
     <input type="text" name="address" /><br />
     Почтовый индекс: <br />
     <input type="text" name="post_index" /><br />
     Ваш e-mail: <br />
     <input type="text" name="email" /><br />
     </p>
  
     
     <p align="center"><input type="submit" name="order" value="Заказать" /></p>	
</form>

<?
}

$name = $_POST['name'];
$s_name = $_POST['s_name'];
$address = $_POST['address'];
$post_index = $_POST['post_index'];
$email = $_POST['email'];

if($_SESSION['cart'] && isset($_POST['order']))
{
    foreach($_POST as $ArrKey => $ArrStr) 
    {
        $ArrKey = $_POST[$ArrKey];
    }
    $date = date('Y-m-d');
    $time = date('H:i:s');
    
    foreach($_SESSION['cart'] as $id => $quantity):
    $product = get_product($id);
        $query = mysql_query("INSERT INTO orders(name,s_name,address,post_index,email,date,time,products,prod_id,price,qty) VALUES ('$name','$s_name','$address','$post_index','$email','$date','$time','{$product['title']}','{$product['id']}','{$product['price']}','$quantity')");
    endforeach;
    
    echo "<p align='center' style='color: #fff;'>Ваш заказ успешно принят! Спасибо за покупку!</p>";
}

?>	
