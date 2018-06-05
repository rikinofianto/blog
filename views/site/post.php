<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('/uploads/<?=$model->gambar;?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1><?=Html::encode($model->judul);?></h1>
                    <span class="meta">Posted by <a href="#"><?=Html::encode($model->created_by);?></a>
                    on <?php echo Yii::$app->formatter->format($model->created_at, 'date'); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?=Html::decode($model->kontent);?>
        </div>
    </div>
</div>
</article>