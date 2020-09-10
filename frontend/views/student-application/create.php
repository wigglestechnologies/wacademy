<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudentApplication */

$this->title = 'Create Student Application';
$this->params['breadcrumbs'][] = ['label' => 'Student Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main">

	<section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <h2 class="form-title">Student Application</h2>
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                </div>
            </div>
        </section>
        
  </div>
