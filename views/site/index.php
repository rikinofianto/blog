<?php

/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
<div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Clean Blog</h1>
                <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
        </div>
    </div>
</div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <?php
            echo ListView::widget([
                'dataProvider' => $listDataProvider,
                'options' => [
                    'tag' => 'div',
                    'class' => 'col-lg-8 col-md-10 mx-auto',
                ],
                'layout' => "{pager}\n{items}\n{summary}",
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_list_item',['model' => $model]);

                    // or just do some echo
                    // return $model->title . ' posted by ' . $model->author;
                },
            ]);
        ?>
    </div>
</div>