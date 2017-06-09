<?
foreach($products as $item):?>

<table align="center" cellpadding="0" cellspacing="0" class="product" border="0">
    <tr>
        <td valign="top">
            <div><a href="index.php?view=product&id=<?=$item['id']?>"><img src="userfiles/<?=$item['image']?>" alt="" /></a></div>
            <div class="description">
                <div class="product-name"><a href="#"><?=$item['title']?></a></div>
                <div class="product-price">Цена: <?=$item['price']?> Сом</div>
            </div>
        </td>
    </tr>
</table>

<?endforeach;?>

