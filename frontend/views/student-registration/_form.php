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

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullName',['template' => '<div class="form-group">{input}</div>'
    ])->textInput(['class'=>'form-input','placeholder' => "Your Full Name"]) ?>
    
    <div class="row">
		<div class="col-md-5">
			<?= $form->field($model, 'phoneCode',['template' => '<div class="form-group">{input}</div>'
			 ])->dropDownList(ArrayHelper::map(Country::find()->all(), 'couPhoneCode', 'countryName'),['class'=>'form-input','prompt'=>'Select Phone Code'] )?>
		</div>
		<div class="col-md-7">
			<?= $form->field($model, 'phoneNumber',['template' => '<div class="form-group">{input}</div>'
              ])->textInput(['class'=>'form-input','placeholder' => "Phone Number"])?>		
		</div>
	</div>

    <?= $form->field($model, 'email',['template' => '<div class="form-group">{input}</div>'
        ])->textInput(['class'=>'form-input','placeholder' => "Enter Email Address"])?>

    <?= $form->field($model, 'courseId',['template' => '<div class="form-group">{input}</div>'
        ])->dropDownList(ArrayHelper::map(Course::find()->all(), 'courseId', 'courseName'),['class'=>'form-input','prompt'=>'Select Course'] )?>

    <?= $form->field($model, 'scholarship',['template' => '<div class="form-group">{input}</div>'
        ])->dropDownList(['1'=>'Yes','0'=>'No'],['class'=>'form-input','prompt'=>'Would you like a scholarship?']);?>

    <?= $form->field($model, 'amountId',['template' => '<div class="form-group">{input}</div>'
    ])->dropDownList(ArrayHelper::map(AmountRaise::find()->all(), 'amountId', 'amountRaised'),['class'=>'form-input','prompt'=>'How much money can you raise?'] )?>

    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'form-submit']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
