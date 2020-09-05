<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Country;
use yii\helpers\ArrayHelper;
use common\models\AmountRaise;
use common\models\Course;

/* @var $this yii\web\View */
/* @var $model common\models\StudentRegistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($signupModel, 'email')->textInput(['autofocus' => 'true'])?>

    <?= $form->field($model, 'phoneCode')->dropDownList(ArrayHelper::map(Country::find()->all(), 'couPhoneCode', 'countryName'),['prompt'=>'Select...'] )?>

    <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'courseId')->dropDownList(ArrayHelper::map(Course::find()->all(), 'courseId', 'courseName'),['prompt'=>'Select...'] )?>

    <?= $form->field($model, 'scholarship')->dropDownList(['1'=>'Yes','0'=>'No'],['prompt'=>'Select']);?>

    <?= $form->field($model, 'amountId')->dropDownList(ArrayHelper::map(AmountRaise::find()->all(), 'amountId', 'amountRaised'),['prompt'=>'Select...'] )?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
