<?php require __DIR__ . "/../layout/header.php";?>

<div class="login-wrapper">

    <form action="login" method="post">

        <label for="username">Benutzername:</label>
        <input type="text" name="username">

        <label for="password">Password:</label>
        <input type="password" name="password">

        <button type="submit">Einloggen</button>

    </form>

    <?php if(!empty($error)): ?>
        <p>
            <?php echo $error; ?>
        </p>
    <?php endif?>

</div>

<?php require __DIR__ . "/../layout/footer.php";?>