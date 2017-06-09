<h2 align="center">Ваша корзина товаров</h2>

<?
if($_SESSION['cart'])
{
?>
<form action="index.php?view=update_cart" method="post" id="cart-form">

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
    	  <td align="center">Сом<?=number_format($product['price'],2);?></td>
    	  <td align="center"><input type="text" size="2" name="<?=$id;?>" maxlength="2" value="<?=$quantity;?>" /></td>
    	  <td align="center">Сом<?=number_format($product['price'] * $quantity ,2);?></td>
	  </tr>
      
      <?endforeach;?>
      
</table>	
	 <p class="total" align="center">Общая сумма заказа: <span class="product-price"><?=number_format($_SESSION['total_price'],2);?> Сом</span></p>
	 <p align="center"><input type="submit" name="update" value="Обновить" /></p>
	
</form>
<p align="center"><a href="index.php?view=order">Оформить заказ</a></p>
<?
}
else
{
    echo "<p align='center' style='color:#gg00ff;'>Ваша корзина пуста!</p>";
}
?>	
