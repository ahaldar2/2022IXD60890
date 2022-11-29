<?

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// print_p($_SESSION, $_GET, $_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Store Product List</title>
	<? include "parts/meta.php"; ?>
	<script type="lib/js/functions.js"></script>
	<script type="js/templates.js"></script>
	<script type="js/product_list.js"></script>	

</head>

<body>

	<? include "parts/navbar.php"; ?>

	<div class="container">

			<h2>Product List</h2>
			
			<div class="form-control">
				<form action="" class="hotdog light" id="product-search">
					<input type="search" placeholder="Search Products">
				</form>
			</div>

			<div class="form-control">
				<div class="card soft">
					<div class="display-flex">
						<div class="display-flex flex-stretch">
							<div class="flex-none">
								<button class="form-button" data-value="" data-filters="category" type="button">ALL</button>
							</div>
							<div class="flex-none">
								<button class="form-button" data-value="rings" data-filters="category" type="button">Rings</button>
							</div>
							<div class="flex-none">
								<button class="form-button" data-value="necklaces" data-filters="category" type="button">Necklaces</button>
							</div>
							<div class="flex-none">
								<button class="form-button" data-value="bracelets" data-filters="category" type="button">Bracelets</button>
							</div>
							<div class="flex-none">
								<button class="form-button" data-value="earrings" data-filters="category" type="button">Earrings</button>
							</div>
						</div>
						<div class="flex-none">
							<div class="form-select">
								<select class="js-sort">
									<option value="1">Newest</option>
									<option value="2">Oldest</option>
									<option value="3">Least Expensive</option>
									<option value="4">Most Expensive</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="productlist grid gap"></div>
	</div>

</body>

</html>