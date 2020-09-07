<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StudentRegistrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-registration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'studentRegistrationId') ?>

    <?= $form->field($model, 'fullName') ?>

    <?= $form->field($model, 'phoneCode') ?>

    <?= $form->field($model, 'phoneNumber') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'courseId') ?>

    <?php // echo $form->field($model, 'scholarship') ?>

    <?php // echo $form->field($model, 'amountId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
