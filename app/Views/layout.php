<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php $this->getPageTitle("|"); ?>Guêro Micro Framework</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <?php require_once __DIR__ . "/menu.php";?>
        <?php $this->content() ?>
    </body>
</html>
