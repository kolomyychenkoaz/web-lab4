<?php
require_once('../includes/header.php'); ?>
<?php if ($_SESSION['auth'] == true): ?>
    <form class="form-inline" action="user.php" method="get">
        <p class="d-inline-flex align-middle pr-4 mt-3">Введите искомое слово</p>
        <input class="form-control mr-sm-2 bg-light" type="text" name="word" placeholder="Search"
               value="<?php echo @$_GET['word']; ?>" aria-label="Search">
        <button class="btn btn-link" type="submit"><img src="../images/search.svg"></button>
    </form>
	<?php require_once('../php-logic/search.php'); ?>
<?php else: ?>
    <span>Пользователь не авторизован!</span>
<?php endif; ?>
<?php require_once('../includes/footer.php');
?>
