<?php

use app\assets\AppAsset;
use app\assets\HeadAppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var $content
 */
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<?php $title = $this->title ? Html::encode(Yii::$app->name . " | $this->title") : (Yii::$app->name . ' | Главная'); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/site.webmanifest">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $title ?></title>
    <meta name="description" content="GECO innovations может помочь решить Вам вопрос с отоплением вашего места времяпровождения зимой, с учетом сохранения эстетики и красоты помещения с инновационными Термоплинтусами.">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="GECO innovations может помочь решить Вам вопрос с отоплением вашего места времяпровождения зимой, с учетом сохранения эстетики и красоты помещения с инновационными Термоплинтусами.">
    <meta property="og:image" content="/img/seo_preview.png">
    <meta property="og:url" content="http://www.geco.uz">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
