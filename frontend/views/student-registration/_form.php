<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Country;
use common\models\AmountRaise;
use common\models\Course;

/* @var $this yii\web\View */
/* @var $model common\models\StudentRegistration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>
    
    <div class="row">
		<div class="col-md-4">
			<?= $form->field($model, 'phoneCode')->dropDownList(ArrayHelper::map(Country::find()->all(), 'couPhoneCode', 'countryName'),['prompt'=>'Select...'] )?>
		</div>
		<div class="col-md-8">
			    <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>		
		</div>
	</div>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'courseId')->dropDownList(ArrayHelper::map(Course::find()->all(), 'courseId', 'courseName'),['prompt'=>'Select...'] )?>

    <?= $form->field($model, 'scholarship')->dropDownList(['1'=>'Yes','0'=>'No'],['prompt'=>'Select']);?>

    <?= $form->field($model, 'amountId')->dropDownList(ArrayHelper::map(AmountRaise::find()->all(), 'amountId', 'amountRaised'),['prompt'=>'Select...'] )?>

    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'form-submit']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
