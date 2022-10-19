<?php if ($this->scriptList != null) : ?>
    <?php foreach ($this->scriptList as $script) : ?>
        <script src="js/' . $script . '.js"></script>';

        <script src="<?= add_version( 'js / ' . $script . ' . js') ?>"></script>

    <?php endforeach ?>
<?php endif ?>
</body>

</html>