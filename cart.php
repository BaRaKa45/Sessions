<?php
session_start();

$articles = [ 46 => 'Pecan nuts', 36 => 'Chocolate chips', 58 =>'Chocolate cookie', 32 =>'M&M\'s&copy; cookies'];

if(!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit;
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>Article</th>
                <th>Quantity</th>
            </tr>
            <?php foreach($_SESSION['basket'] as $id => $quantity) { ?>
            <tr>
                <td><?= $articles[$id] ?></td>
                <td><?= $quantity ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>