<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudentRegistration */

$this->title = 'Create Student Registration';
$this->params['breadcrumbs'][] = ['label' => 'Student Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main">

	<section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <h2 class="form-title">Register</h2>
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                </div>
            </div>
        </section>
        
  </div>


