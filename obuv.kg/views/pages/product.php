<table align="center" cellpadding="10" cellspacing="10" class="product" border="0">
    <tr>
        <td valign="top">
            <div><a href="#"><img src="userfiles/<?=$product['image']?>" alt="" /></a></div>
            <div class="description">
                <div class="product-name"><a href="#"><?=$product['title']?></a></div>
                <div class="product-price">Цена: <?=$product['price']?> Сом</div>
            </div>
        </td>
        <td valign="top" width="1000">
            <div><?=$product['description']?></div>
            <div><a href="index.php?view=add_to_cart&id=<?=$product['id']?>">Добавить в корзину</a></div>
        </td>
    </tr>
</table>