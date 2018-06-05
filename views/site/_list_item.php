<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="post-preview">
    <?= Html::a('<h2 class="post-title">'.Html::encode($model->judul).'</h2>', Url::toRoute(['site/post', 'id' => $model->id_post]), ['title' => $model->judul]) ?>
    <p class="post-meta">
        Posted by <a href="#"><?=Html::encode($model->created_by);?></a>
        <?php echo Yii::$app->formatter->format($model->created_at, 'date'); ?>
    </p>
</div>
<hr>