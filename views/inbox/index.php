<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InboxSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kotak Masuk';
$this->params['breadcrumbs'][] = $this->title;
$this->params['headerTitle'] = 'Kotak Masuk';
?>
<div class="inbox-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'SenderNumber',
            'TextDecoded:ntext',
            'ReceivingDateTime',
            // 'UpdatedInDB',
            // 'Text:ntext',
            // 'Coding',
            // 'UDH:ntext',
            // 'SMSCNumber',
            // 'Class',
            // 'ID',
            // 'RecipientID:ntext',
            // 'Processed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
