<?php

/** @var yii\web\View $this */

$this->title = 'Резюме';
?>


<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2><?= Yii::t('common', 'About')?></h2>
        </div>
        <?php if (Yii::$app->language == 'en'):?>
        <?= $model->content_en;?>
        <?php else:?>
        <?= $model->content_ru;?>
        <?php endif;?>
    </div>
</section><!-- End About Section -->

<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2><?= Yii::t('common', 'Facts') ?></h2>
            <p><?= Yii::t('common', 'It takes a lot of effort to get the benefits. His needs stem from something that actually turns him off. Let them be what they want. Anyone who wants. And no one who hinders gets others. Because he will have to run to this convenient office that is located here.') ?></p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="123" data-purecounter-duration="1" class="purecounter"></span>
                    <p><?= Yii::t('common', 'Satisfied clients') ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p><?= Yii::t('common', 'Projects') ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                    <p><?= Yii::t('common', 'Support hours') ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p><?= Yii::t('common', 'Awards') ?></p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2><?= Yii::t('common', 'SKILLS') ?></h2>
            <p><?= Yii::t('common', 'It takes a lot of effort to get the benefits. His needs stem from something that actually turns him off. Let them be what they want. Anyone who wants. And no one who hinders gets others. Because he will have to run to this convenient office that is located here.') ?></p>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">CSS <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">25%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">System administrator <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">PHP <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">WordPress/CMS <i class="val">85%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Local administrator <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2><?= Yii::t('common', 'RESUME') ?></h2>
            <p><?= Yii::t('common', 'It takes a lot of effort to get the benefits. His needs stem from something that actually turns him off. Let them be what they want. Anyone who wants. And no one who hinders gets others. Because he will have to run to this convenient office that is located here.') ?></p>
        </div>
        <div class="row">
            <?php if (Yii::$app->language == 'en'):?>
                <?= $resumeModel->content_en;?>
            <?php else:?>
                <?= $resumeModel->content_ru;?>
            <?php endif;?>
        </div>
    </div>
</section><!-- End Resume Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2><?= Yii::t('common', 'CONTACT') ?></h2>
        </div>

        <div class="row mt-1">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4><?= Yii::t('common', 'Location') ?>:</h4>
                        <p><?= Yii::t('common', 'Yunusabad district, Tashkent city, Uzbekistan') ?></p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4><?= Yii::t('common', 'Email') ?>:</h4>
                        <p>bunyodbek9449@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4><?= Yii::t('common', 'Phone') ?>:</h4>
                        <p>+(998) 99-949-05-50</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="<?= Yii::t('common', 'Your name') ?>" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?= Yii::t('common', 'Your e-mail address') ?>" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="<?= Yii::t('common', 'Subject') ?>" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="<?= Yii::t('common', 'Message') ?>" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading"><?= Yii::t('common', 'Loading') ?></div>
                        <div class="error-message"></div>
                        <div class="sent-message"><?= Yii::t('common', 'Your message has been sent. Thank you!') ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="text-center">
                                <button type="submit"><?= Yii::t('common', 'Send a message') ?></button>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <div class="text-center">
                                <button type="submit"><?= Yii::t('common', 'Check status') ?></button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
