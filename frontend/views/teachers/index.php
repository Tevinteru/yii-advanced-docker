<?php

use common\models\Teachers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TeachersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teachers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'middle_name',
            'birth_date',
            'subject',
            'education',
            'experience',
            'phone',
            'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Teachers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
