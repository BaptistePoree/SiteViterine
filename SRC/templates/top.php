<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo/logo_pti.png">

    <title><?php echo $this->title; ?></title>

    <?php if ($this->styleSheetList != null) : ?>
        <?php foreach ($this->styleSheetList as $styleSheet) : ?>
            <link rel="stylesheet" media="screen" href="<?= add_version('css/' . $styleSheet . '.css')?>" />
        <?php endforeach ?>
    <?php endif ?>
</head>

<style>
    /* .closed {
        display: none;
    }

    .bg-modal {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        margin-top: -30px;
    }

    .popup-modal {
        max-width: 500px;
        max-height: 300px;
        background: white;
        border-radius: 10px;
        margin: auto auto;
        padding: 20px;
    }

    body {
        margin: 0;
    } */
</style>


<body>