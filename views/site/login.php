<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['role' =>'form'],
                        // 'layout' => 'horizontal',
                        // 'fieldConfig' => [
                        //     'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        //     'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        // ],
                    ]); ?>
                        <fieldset>
                            <div class="form-group">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control', 'placeholder' => 'Username'])->label(false); ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Password'])->label(false); ?>
                            </div>
                            <?= $form->field($model, 'rememberMe')->checkbox([
                                'template' => "<div class=\"checkbox\"><label>{input} Remember Me</label></div>\n<div class=\"col-lg-8\">{error}</div>",
                            ]) ?>
                            <!-- Change this to a button or input when using this as a form -->
                            <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-success btn-block', 'name' => 'login-button']) ?>
                        </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
