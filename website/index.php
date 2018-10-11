<html>
	<head>
		<title>My Shop</title>
	</head>
	<body>	
		<h1>Welcome</h1>
		<h1>Products</h1>
		<ul>
			<?php
				$json = file_get_contents('http://product-service');
				$obj = json_decode($json);
				
				$products = $obj->products;
				foreach ($products as $product) {
					echo "<li>$product</li>";
				}
			?>
		</ul>
		<h1>Customers</h1>
		<ul>
			<?php
				$json = file_get_contents('http://customer-service');
				$obj = json_decode($json);
				
				$customers = $obj->customers;
				foreach ($customers as $customer) {
					echo "<li>$customer</li>";
				}
			?>
		</ul>

	</body>
</html>