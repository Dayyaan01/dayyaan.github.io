<?php
    include_once('connection.php');
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, intial-scale=1.0">
    <title>Picart Printing</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="font/css/allmin.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="productcard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
	body {
	background-color: #EEF39C;
	}
	
</style>

<script src="app.js"></script>
<header>
	<nav>
		<img class="logo" src="pictures\Picart Printing.jpg" alt="Website logo">
	    <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li> 
        <li><a href="#">Contact</a></li>
		</div>
	</nav>
  </header>
</head>
<body>
<div class="container">
		<!--  Shopping cart table wrapper  -->
		<div id="shopping-cart">
			<div class="txt-heading">
				<h1>Shopping cart</h1>
			</div>
			<a onClick="emptyCart()" id="btnEmpty">Empty Cart</a>
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<thead>
					<tr>
						<th>Name</th>
						<th class='text-right' width="10%">Unit Price</th>
						<th class='text-right' width="5%">Quantity</th>
						<th class='text-right' width="10%">Sub Total</th>
					</tr>
				</thead>
				<!--  Cart table to load data on "add to cart" action -->
				<tbody id="cartTableBody">
				</tbody>
				<tfoot>
					<tr>
						<td class="text-right">Total:</td>
						<td id="itemCount" class="text-right" colspan="2"></td>
						<td id="totalAmount" class="text-right"></td>
					</tr>
				</tfoot>
			</table>
		</div>
  <!-- Catalogue -->
	<main>
        <div class="container">
        <?php 

            while($row = mysqli_fetch_assoc($result))
            {

        ?>
            <div class = "card">
                <div class="image">
                <img src ="<?php echo $row["imgLoc"]; ?>" alt="">
                </div>
                <div class="caption">
                <p class="product_name"><h2><?php echo $row["name"]; ?></h2></p>
                <p class="price"> Price: <b> R<?php echo $row["price"]; ?></b> </p><br>
                <p class="desc"> <?php echo $row["description"]?> </p>
                <br>
                <br>
                <p class="desc">Send your personal artwork for item</p><br>
                <input type="file" id="file" name="file">
                </div>
                <br>
                <br>
                <button onclick="addToCart(this)"> Add to Cart </button>
            </div>
        <?php

            }

        ?>
        </div>
    </ul>
	</main>
</body>

 <!-- Footer -->
<footer>
  <div class="rounded-social-buttons">
	<a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
	<a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
	<a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
	<a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
	<a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</footer>
</html>