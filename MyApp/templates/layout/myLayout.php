<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'perso']) ?>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <div class = "wp">
                <?= $this->fetch('home') ?>
                <?= $this->fetch('content') ?>
            <footer class = "f">
                <ul class = "f_links">
                    <li><a href = "#">lorem</a></li>
                    <li><a href = "#">Lorem, ipsum.</a></li>
                    <li><a href = "#">Lorem, ipsum dolor. </a></li>
                </ul>
            </footer>
        <div class = "wp">
    </body>
</html>