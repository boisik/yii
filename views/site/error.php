<?php

/**
 * @var $this yii\web\View
 * @var $name string
 * @var $message string
 * @var $exception \yii\web\HttpException
 */

use yii\helpers\Html;

$this->title = $name;
$textColor = $exception->statusCode === 404 ? "text-yellow" : "text-red";

?>

<div class="col-middle">
    <div class="text-center text-center">
        <h1 class="error-number"><?= $exception->statusCode ?></h1>
        <h2><?= nl2br(Html::encode($message)) ?></h2>
        <p>
            АБСОЛЮТНО НЕ ЕБУ ЧТО ПОШЛО НЕ ТАК
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
            ( Найди ОЛИГОФРЕНА который это кодил и ДОЕБИСЬ до него )
        </p>
    </div>
</div>
