<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registrations */
/* @var $form ActiveForm */
?>
<div class="site-_form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Name') ?>
        <?= $form->field($model, 'Email') ?>
        <?= $form->field($model, 'Phone') ?>
        <?= $form->field($model, 'Comments')->textarea(['rows'=>6]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('S U B M I T', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-_form -->
