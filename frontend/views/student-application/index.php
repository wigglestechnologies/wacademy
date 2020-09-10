<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-application-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'studentApplicationId',
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
