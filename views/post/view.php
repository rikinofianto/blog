<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

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
                                <?= Html::a('<i class="fa fa-edit fa-fw"></i> Update', ['update', 'id' => $model->id_post], []) ?>
                            </li>
                            <li>
                                <?= Html::a('<i class="fa fa-trash fa-fw"></i> Delete', ['delete', 'id' => $model->id_post], [
                                    'data' => [
                                        'confirm' => 'Yakin mau dihapus?',
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?= Html::a('<i class="fa fa-undo fa-fw"></i> Kembali', ['index'], []) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="table-responsive">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id_post',
                                'judul',
                                'kontent:raw',
                                [
                                    'attribute' => 'gambar',
                                    'value' =>('/uploads/'.$model->gambar),
                                    'format' => ['image',['width'=>'100','height'=>'100']],
                                ],
                                'created_at',
                                'created_by',
                                'updated_at',
                                'updated_by',
                            ],
                        ]) ?>
                    </div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
    </div>
</div>

