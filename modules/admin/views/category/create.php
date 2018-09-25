<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $form app\modules\admin\entities\Category */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <?= $this->render('_form', [
        'model' => $form,
    ]) ?>
</div>
