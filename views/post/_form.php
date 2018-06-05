<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\web\View;
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Html::encode($this->title) ?>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <?= Html::a('<i class="fa fa-undo fa-fw"></i> Kembali', ['index'], []) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="form-group">
                            <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'kontent')->textarea(['rows' => 6]) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'gambar')->fileInput() ?>
                        </div>
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">

</script>
<?php
$this->registerJs(
    "
    CKEDITOR.replace('Post[kontent]');
    CKEDITOR.config.allowedContent = true;
    ",
    View::POS_END,
    'ckeditor'
);