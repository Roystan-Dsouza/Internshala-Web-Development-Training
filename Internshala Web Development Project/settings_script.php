<?php
require("includes/common.php");
?>
<?php
if (isset($_SESSION['email'])) {
header('location: index.php');
}