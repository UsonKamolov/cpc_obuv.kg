<?

include('db_fns.php');

include('cart_fns.php');

session_start();

$view = empty($_GET['view']) ? 'index' : $_GET['view'];

switch($view)
{
    case('index'):
        $products = get_products();
    break;
    
    case('cat'):
        $cat = $_GET['id'];
        $products = get_cat_products($cat);
    break;
    
    case('product'):
        $id = $_GET['id'];
        $product = get_product($id);
    break;
    case ('delproduct'):
        db_connect();
        $id = $_GET['id'];
$query = mysql_query("DELETE from products WHERE id='$id'");
        header ('Location: adminone.php');
       exit();
        break;
        case ('updproduct'):
            update_cart();
            header ('Location: adminone.php?view=cart');
            break;
}

$arr = array('index','cat','product','cart','delproduct','updproduct');
if(!in_array($view,$arr)) die("ERROR 404!");

include($_SERVER['DOCUMENT_ROOT'].'/views2/layouts/shop.php');


?>