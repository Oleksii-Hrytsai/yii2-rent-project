<?php

namespace frontend\widgets;

use common\models\Subscribe;
use yii\bootstrap\Widget;

class SubscribeWidget extends Widget
{

    public function run()
    {
        $model = new Subscribe();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            $model->trigger(Subscribe::EVENT_NOTIFICATION_ADMIN);
            \Yii::$app->session->setFlash('success', 'Вы успешно подписались на новости');
            \Yii::$app->controller->redirect("/");
        }

        return $this->render("subscribe", ['model' => $model]);
    }
}