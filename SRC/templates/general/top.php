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

<body>