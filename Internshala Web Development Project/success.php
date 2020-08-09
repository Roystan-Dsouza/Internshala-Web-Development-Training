<?php
require("includes/common.php");
?>
<?php
if (isset($_SESSION['email'])) {
header('location: index.php');
}
?>
<div class="space">
            <div class="container">
        <p style="font-size: 32px">Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
        </div>
</div>