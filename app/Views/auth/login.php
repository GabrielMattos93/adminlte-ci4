<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form action="<?= site_url('admin/login') ?>" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>

</html>