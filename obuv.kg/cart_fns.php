<?

    function add_to_cart($id)
    {
        if(isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]++;
            return true;
        }
        else
        {
            $_SESSION['cart'][$id] = 1;
            return true;
        }
        return false;
    }
    
    function update_cart()
    {
        foreach($_SESSION['cart'] as $id => $qty)
        {
            if($_POST[$id] == '0')
            {
                unset($_SESSION['cart'][$id]);
            }
            else
            {
                $_SESSION['cart'][$id] = $_POST[$id];
            }
        }
    }
    
    
    function total_items($cart)
    {
        $num_items = 0;
        
        if(is_array($cart))
        {
            foreach($cart as $id => $qty)
            {
                $num_items += $qty;
            }
        }
        
        return $num_items;           
    }
    
    
    function total_price($cart)
    {
        $total_price = 0.0;
        
        db_connect();
        
        if(is_array($cart))
        {
            foreach($cart as $id => $qty)
            {
                $query = "SELECT price FROM products WHERE id='$id'";
                $result = mysql_query($query);
                if($result)
                {
                    $item_price = mysql_result($result,0,'price');
                    $total_price += $item_price * $qty;
                }
            }
        } 
        return $total_price;           
    }
    
    
    
    

?>