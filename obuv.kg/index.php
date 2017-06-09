<?

include('db_fns.php');

include('cart_fns.php');

session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
    $_SESSION['total_items'] = 0;
    $_SESSION['total_price'] = '0.00';
}

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
    
    case('cart'):
    
    break;
    
    case('add_to_cart'):
        $id = $_GET['id'];
        $add_item = add_to_cart($id);
        $_SESSION['total_items'] = total_items($_SESSION['cart']);
        $_SESSION['total_price'] = total_price($_SESSION['cart']);
        header('Location: index.php?view=product&id='.$id);
    break;
    
    case('update_cart'):
        update_cart();
        $_SESSION['total_items'] = total_items($_SESSION['cart']);
        $_SESSION['total_price'] = total_price($_SESSION['cart']);
        header('Location: index.php?view=cart');
    break;
    
    case('order'):
    
    break;
    
}

$arr = array('index','cat','product','cart','add_to_cart','update_cart','order');
if(!in_array($view,$arr)) die("ERROR 404!");

include($_SERVER['DOCUMENT_ROOT'].'/views/layouts/shop.php');


?>