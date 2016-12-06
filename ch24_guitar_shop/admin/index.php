<?php
    require_once('../util/main.php');
    require_once('../util/secure_conn.php');
    require_once('../util/valid_admin.php');
    include 'view/header.php';
    include 'view/sidebar_admin.php';
?>

<main>
    <h1>Welcome Admin, I Want To...</h1>
    <p><a href="product">Manage Products</a></p>
    <p><a href="category">Manage Categories</a></p>
    <p><a href="orders">Manage or View Orders</a></p>
    <p><a href="account">Create or Edit Accounts for Other Users</a></p>
</main>

<?php include 'view/footer.php'; ?>
