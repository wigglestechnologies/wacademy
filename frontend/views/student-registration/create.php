<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudentRegistration */

$this->title = 'Create Student Registration';
$this->params['breadcrumbs'][] = ['label' => 'Student Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                    <div class="signup-image">
                        <a href="#" class="signup-image-link">I have already Registered.LogIn </a>
                    </div>
                </div>
            </div>
        </section>
  </div>

<?php


