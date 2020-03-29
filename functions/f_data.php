<?php


function data_product($dbc, $product_id, $currency, $lang = 'en') {						
	$q = "SELECT products.id as product_id, products_lang.name, products_lang.short_name, price, products_price.currency
				FROM products
				LEFT JOIN products_price ON products.id = products_price.product_id
				LEFT JOIN products_lang ON products.id = products_lang.product_id
		 		WHERE products.id = $product_id AND products_price.currency = '$currency' AND products_lang.lang = '$lang' LIMIT 1";		 		
	
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	return $data;
}


function data_cart($dbc, $cart_id) {
	// Update cart country to avoid switching between countries e.g. to pay GBP price values with PLN currency
	// Additionally, assure that the latest chosen coupon code is always used 
	$q = "UPDATE carts SET country = '$_SESSION[country]', promo_code_id = '" . $_SESSION['coupon']['id'] . "' WHERE carts.id = $cart_id;";
	//$_SESSION['test'] = $q;
	mysqli_query($dbc,$q);
	
	$q = "SELECT pet_country.name_en as pet_country, products.id as product_id, ordered_products.product_subid, product_subids.descr as subid, product_subids.descr_short as subid_short, products_lang.name, products_lang.short_name, pets.pet_id, pets.name as pet_name, pets.flag, ordered_products.id as ordered_product_id, qty, price
				FROM carts
				LEFT JOIN countries ON countries.iso = carts.country
	    		LEFT JOIN ordered_products ON carts.id = ordered_products.order_id
	    		LEFT JOIN products ON products.id = ordered_products.product_id
				LEFT JOIN products_price ON products.id = products_price.product_id AND countries.currency = products_price.currency
				LEFT JOIN products_lang ON products.id = products_lang.product_id AND countries.lang = products_lang.lang
				LEFT JOIN product_subids ON ordered_products.product_subid = product_subids.product_subid AND countries.lang = product_subids.lang
	    		LEFT JOIN pets ON ordered_products.pet_id = pets.pet_id
	    		LEFT JOIN countries pet_country ON pets.flag = pet_country.iso
		 		WHERE carts.id = $cart_id
		 		ORDER BY pets.name ASC, products.id ASC, ordered_products.product_subid ASC";
    $r = mysqli_query($dbc,$q);
	return $r;
}


function data_cart_gtm($dbc, $cart_id) {						
	$q = "SELECT products.id as product_id, products_lang.name, SUM(qty) AS qty, MAX(price) AS price, carts.promo_code_id
				FROM carts
				LEFT JOIN countries ON countries.iso = carts.country
	    		LEFT JOIN ordered_products ON carts.id = ordered_products.order_id
	    		LEFT JOIN products ON products.id = ordered_products.product_id
				LEFT JOIN products_price ON products.id = products_price.product_id AND countries.currency = products_price.currency
				LEFT JOIN products_lang ON products.id = products_lang.product_id AND products_lang.lang = 'en'
		 		WHERE carts.id = $cart_id
		 		GROUP BY product_id, name
		 		ORDER BY products.id ASC";
	
    $r = mysqli_query($dbc,$q);
	return $r;
}


function data_order($dbc, $order_id) {
	$q = "SELECT products.id as product_id, product_subids.descr as subid, product_subids.descr_short as subid_short, products_lang.name, products_lang.short_name, img_src, pets.pet_id, pets.name as pet_name, ordered_products.id as ordered_product_id, qty, price, remarks
				FROM orders
				LEFT JOIN countries ON countries.iso = orders.country
	    		LEFT JOIN ordered_products ON orders.id = ordered_products.order_id
	    		LEFT JOIN products ON products.id = ordered_products.product_id
				LEFT JOIN products_price ON products.id = products_price.product_id AND countries.currency = products_price.currency
				LEFT JOIN products_lang ON products.id = products_lang.product_id AND countries.lang = products_lang.lang
				LEFT JOIN product_subids ON ordered_products.product_subid = product_subids.product_subid AND countries.lang = product_subids.lang
	    		LEFT JOIN pets ON ordered_products.pet_id = pets.pet_id
		 		WHERE orders.id = $order_id
		 		ORDER BY pets.name ASC, products.id ASC";
    $r = mysqli_query($dbc,$q);
	return $r;
}


function data_price($dbc, $product, $currency) {
	$q = "SELECT price FROM products
			LEFT JOIN products_price on products.id = products_price.product_id
			WHERE product_id = $product AND currency = '$currency' AND start_dt <= CURDATE() AND end_dt >= CURDATE()";
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_row($r);	
	return $data[0];
}


function data_cart_total($dbc, $cart_id, $currency) {
	$q = "SELECT SUM(qty), SUM(qty*price) AS total
				FROM carts
	    		LEFT JOIN ordered_products ON carts.id = ordered_products.order_id
	    		LEFT JOIN products ON products.id = ordered_products.product_id
				LEFT JOIN products_price ON products.id = products_price.product_id AND products_price.currency = '$currency'
		 		WHERE carts.id = $cart_id";
	$r = mysqli_query($dbc, $q);
	if (is_bool($r)) {
		$data = array(0,'0.00');
	} else {
		$data = mysqli_fetch_row($r);
	}
	return $data;
}


function data_customer($dbc, $order_id) {						
	$q = "SELECT * FROM customers
				LEFT JOIN orders ON customers.id = orders.customer_id
		 		WHERE orders.id = $order_id LIMIT 1";		 		
	
	$r = mysqli_query($dbc, $q);
	$data = mysqli_fetch_assoc($r);
	return $data;
}


function data_coupon($dbc, $coupon) {
	$coupon = mysqli_real_escape_string($dbc, $coupon);
	$now = date('Y-m-d');
	$q = "SELECT name, discount, start_date, expiry_date FROM promo_codes WHERE UPPER(id) = UPPER('$coupon') LIMIT 1";
	$r = mysqli_query($dbc, $q);
	if(mysqli_num_rows($r) > 0) {
		$data = mysqli_fetch_assoc($r);
		return $data;
	} else {
		return false;
	}
}


function selected($value1, $value2, $return) {
	if($value1 == $value2) {
		echo $return;
	}
}


function array_orderby()
{
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}


function in_multiarray($id, $array) {
   foreach ($array as $key => $val) {
       if ($key === $id) {
           return $val;
       }
   }
   return null;
}


function mb_ucfirst($string, $encoding = 'UTF-8')
{
    $strlen = mb_strlen($string, $encoding);
    $firstChar = mb_substr($string, 0, 1, $encoding);
    $then = mb_substr($string, 1, $strlen - 1, $encoding);
    return mb_strtoupper($firstChar, $encoding) . mb_strtolower($then, $encoding);
}


function mb_strcasecmp($str1, $str2, $encoding = 'UTF-8') {
    if (null === $encoding) { $encoding = mb_internal_encoding(); }
    return strcmp(mb_strtoupper($str1, $encoding), mb_strtoupper($str2, $encoding));
}

?>