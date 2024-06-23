<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать контакт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="contact-search">
        <?php $form = ActiveForm::begin([
            'action' => ['index'],
            'method' => 'get',
            'enableClientScript' => false, // Добавлено для сброса формы
        ]); ?>

        <?= $form->field($searchModel, 'name') ?>
        <?= $form->field($searchModel, 'phone') ?>
        <?= $form->field($searchModel, 'address') ?>

        <div class="form-group">
            <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Сбросить', ['index'], ['class' => 'btn btn-outline-secondary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'phone',
            'email',
            'address',
            'created_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
