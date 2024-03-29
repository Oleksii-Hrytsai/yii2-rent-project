<?php

use frontend\widgets\Login;
use frontend\widgets\SubscribeWidget;

if (Yii::$app->user->isGuest) {
    echo Login::widget();
}
?>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Информация</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/about">О нас</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/contact">Контакты</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Подписаться на новости</h4>
                <?php echo SubscribeWidget::widget() ?>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>
                <a href="#"><img src="/images/facebook.png" alt="facebook"></a>
                <a href="#"><img src="/images/twitter.png" alt="twitter"></a>
                <a href="#"><img src="/images/linkedin.png" alt="linkedin"></a>
                <a href="#"><img src="/images/instagram.png" alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>
                <p><b>Bootstrap Realestate Inc.</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
                    <span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
                    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
        <p class="copyright">Copyright 2013. All rights reserved. </p>
    </div>
</div>