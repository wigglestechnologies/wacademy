<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudentApplication */

$this->title = 'Update Student Application: ' . $model->studentApplicationId;
$this->params['breadcrumbs'][] = ['label' => 'Student Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->studentApplicationId, 'url' => ['view', 'id' => $model->studentApplicationId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
