<div class="row">
    <div class="col-lg-3 col-sm-4 hidden-xs">

        <?php echo \frontend\widgets\HotWidget::widget() ?>

    </div>

    <div class="col-lg-9 col-sm-8 ">

        <h2><?= \frontend\components\Common::getTitleAdvert($model) ?></h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="property-images">
                    <!-- Slider Starts -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?php
                            foreach (range(1, count($images) - 1) as $s):
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?= $s ?>" class=""></li>
                            <?php
                            endforeach;
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <!-- Item 1 -->

                            <div class="item active">
                                <img src="<?= \frontend\components\Common::getImageAdvert($model)[0] ?>"
                                     class="properties" alt="properties"/>
                            </div>
                            <?php
                            foreach ($images as $image):
                                ?>
                                <div class="item">
                                    <img src="<?= $image ?>" class="properties" alt="properties"/>
                                </div>
                            <?php
                            endforeach
                            ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                                    class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
                                    class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <!-- #Slider Ends -->

                </div>


                <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Описаание</h4>
                    <p> <?= $model->description ?></p>
                </div>
                <div>
                    <?php
                    if (isset($map)) {
                        ?>
                        <h4><span class="glyphicon glyphicon-map-marker"></span> Размещение</h4>
                        <div class="well">
                            <?php
                            echo $map->display();
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="col-lg-12  col-sm-6">
                    <div class="property-info">
                        <p class="price">$ <?= $model->price ?></p>
                        <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?= $model->address ?></p>

                        <div class="profile">
                            <span class="glyphicon glyphicon-user"></span> Детали Агента
                            <p><?= $model->user->email ?><br><?= $model->user->username ?></p>
                        </div>
                    </div>

                    <h6><span class="glyphicon glyphicon-home"></span> Доступность</h6>
                    <div class="listing-detaill">
                        <span>Спальных комнат: <?= $model->bedroom ?><br></span>
                        <span>Гостинная: <?= $model->livingroom ?><br></span>
                        <span>Пароковочных мест: <?= $model->parking ?><br></span>
                        <span>Кухонь: <?= $model->kitchen ?><br></span>
                    </div>

                </div>
                <div class="col-lg-12 col-sm-6 ">
                    <div class="enquiry">
                        <h6><br><span class="glyphicon glyphicon-envelope"></span> Задать вопрос</h6>
                        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
                        <?= $form->field($model_feedback, 'email')->textInput([
                            'value' => $current_user['email'],
                            'placeholder' => 'you@yourdomain.com'
                        ])->label(false); ?>
                        <?= $form->field($model_feedback, 'name')->textInput([
                            'value' => $current_user['username'],
                            'placeholder' => 'Ваше имя'
                        ])->label(false) ?>
                        <?= $form->field($model_feedback, 'text')->textarea([
                            'rows' => 6,
                            'placeholder' => 'Задайте вопрос'
                        ])->label(false) ?>
                        <button type="submit" class="btn btn-primary" name="Submit">Отправить сообщение</button>
                        <?php \yii\bootstrap\ActiveForm::end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>