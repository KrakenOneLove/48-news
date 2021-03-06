<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categoty */

$this->title = 'Обновить категорию';
$this->params['breadcrumbs'][] = ['label' => 'Categoties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categoty-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
