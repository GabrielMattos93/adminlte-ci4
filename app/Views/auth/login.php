<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php if (session()->has('message')) : ?>
        <span style="background-color:brown">
            <?php echo session()->getFlashdata('message'); ?>
        </span>
    <?php endif ?>
    <form action="<?= url_to('login.auth') ?>" method="POST">
        <?= session()->getFlashdata('errors')['email'] ?? '';  ?>
        <input type="email" name="email" placeholder="Username" value="admin@gmail.com">
        <?= session()->getFlashdata('errors')['password'] ?? '';  ?>
        <input type="password" name="password" placeholder="Password" value="1234">
        <button type="submit">Login</button>
    </form>
</body>

</html>