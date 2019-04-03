<?php
session_start();
$articles = [
    32 => "M&M's&copy; cookies",
    36 => "Chocolate chips",
    46 => "Pecan nuts",
    58 => "Chocolate cookie"
];
if (!isset($_SESSION['user'])){
    header('Location: login.php');
    exit();
}
require 'inc/head.php';
?>
    <section class="cookies container-fluid">
        <?php foreach($_SESSION['cart'] as $id => $value){ ?>
            <h3><?= $articles[$id] . ' : ' . $value  ?></h3>
        <?php } ?>
    </section>
<?php require 'inc/foot.php'; ?>