<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= asset('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= asset('css/font-awesome.min.css') ?>">
    <link href="<?= asset('css/app.css') ?>" type="text/css" rel="stylesheet"/>
    <link href="<?= asset('css/home.css') ?>" type="text/css" rel="stylesheet"/>
    <?php foreach($this->css as $css): ?>
    <link href="<?= $css ?>" type="text/css" rel="stylesheet"/>
    <?php endforeach; ?>
    <script src="<?= asset('js/jquery.min.js') ?>"></script>
    <script src="<?= asset('js/popper.min.js') ?>"></script>
    <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
    <?php foreach($this->js as $js): ?>
    <script src="<?= $js ?>"></script>
    <?php endforeach; ?>
</head>
<body>
    <?php require 'layouts/header.php'; ?>
    <div class="content">
        <div class="left-sidebar" id="left-sidebar">
			<?php require 'layouts/sidebar.php' ?>
		</div>
		<div class="web-content">
            <?= $content; ?>
            <?php require 'layouts/footer.php'; ?>
		</div>
    </div>

</body>
</html>