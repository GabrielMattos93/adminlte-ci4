<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo ($title ?? 'Painel Administrativo') ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">

    <?= $this->include('admin/layout/header') ?>
    <?= $this->include('admin/layout/sidebar') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('admin/layout/footer') ?>
</body>

</html>