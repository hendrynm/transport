<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php $this->renderSection("title") ?></title>

    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url("tema/assets/media/favicons/favicon-192x192.png") ?>">

    <link rel="stylesheet" id="css-main" href="<?= base_url("tema/assets/css/dashmix.min.css") ?>">
</head>

<body class="bg-body-light overflow-hidden">

<div id="page-container" class="enable-page-overlay side-scroll page-footer-fixed">

    <?php $this->renderSection("konten") ?>

</div>

<script src="<?= base_url("tema/assets/js/dashmix.app.min.js") ?>"></script>

<script src="<?= base_url("tema/assets/js/lib/jquery.min.js") ?>"></script>

<script>
    let font = new FontFace('inter', 'url(<?= base_url() ?>/tema/assets/fonts/inter/inter-v11-latin-regular.woff2)');

</script>
<?php $this->renderSection("js") ?>

</body>
</html>