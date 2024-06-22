<?php

/** @var yii\web\View $this */

$this->title = 'Главная';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Добро пожаловать в Органайзер!</h1>

        <p class="lead">Этот сайт предназначен для организации рабочего дня руководителя, хранения контактов и управления событиями.</p>

        <?php if (Yii::$app->user->isGuest): ?>
            <p><a class="btn btn-lg btn-success" href="<?= \yii\helpers\Url::to(['site/login']) ?>">Авторизоваться</a></p>
        <?php endif; ?>
    </div>
</div>
