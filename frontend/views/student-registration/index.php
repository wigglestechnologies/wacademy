<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentRegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-registration-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student Registration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'studentRegistrationId',
            'fullName',
            'phoneCode',
            'phoneNumber',
            'email:email',
            //'courseId',
            //'scholarship',
            //'amountId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
