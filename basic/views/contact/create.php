<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contact $model */

$this->title = 'Создание контакта';
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
