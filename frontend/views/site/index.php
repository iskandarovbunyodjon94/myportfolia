<?php

/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

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
                <?php \yii\widgets\Pjax::begin(['id' => 'pjax-container']);?>
                <?php $form =  ActiveForm::begin([
                    'class' => 'php-email-form',
                    'id' => 'contact-form', // add an ID for easy identification in JavaScript
                    'options' => ['data-pjax' => true], // enable PJAX for the form
                ]);?>
                    <div class="row">

                        <div class="col-md-6 form-group">
                            <?= $form->field($contactModel, 'fio')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('common', 'Your full name')])->label(false);?>
                        </div>

                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <?= $form->field($contactModel, 'birth_place')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('common', 'Your birth place')])->label(false);?>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="row">

                            <div class="col-md-6 form-group">
                                <?= $form->field($contactModel, 'address')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('common', 'Your address')])->label(false);?>
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <?= $form->field($contactModel, 'phone_number')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('common', 'Your number')])->label(false);?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <?= $form->field($contactModel, 'email')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('common', 'Email')])->label(false);?>
                    </div>

                    <div class="form-group mt-3">
                        <?= $form->field($contactModel, 'message')->textarea(['class' => 'form-control', 'placeholder' => Yii::t('common', 'Message')])->label(false)?>

                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <div class="text-center text-success">
                                <?= Html::submitButton(Yii::t('common', 'Send a message'), ['class' => 'btn btn-outline-primary rounded-5', 'id' => 'loading']) ?>
                            </div>
                        </div>
                    </div>
                <?php ActiveForm::end();?>
                <?php \yii\widgets\Pjax::end();?>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

<?php
// Add the following JavaScript code to handle the AJAX submission
$ajaxUrl = Url::to(['site/index']); // Replace with the actual controller and action handling the form submission

$js = <<<JS
    // Attach a submit handler to the form
    $('#contact-form').on('beforeSubmit', function(e) {
        var form = $(this);
        var submitBtn = form.find('#loading');

        // Disable the submit button and show "Please wait" text
        submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Please wait...');

        // Make the AJAX request
        $.ajax({
            url: form.attr('action') || window.location.href,
            type: 'post',
            data: form.serialize(),
            success: function(data) {
                // Handle the success response
                $.pjax.reload({container: '#pjax-container'}); // Replace with the actual PJAX container ID

                // Show SweetAlert on success
                Swal.fire({
                    title: 'Success!',
                    text: 'Your message has been sent successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(function() {
                    // Refresh the page
                    location.reload();
                });

                // Additional actions on success if needed
            },
            error: function(data) {
                // Handle the error response
                // Additional actions on error if needed
            },
            complete: function() {
                // Re-enable the submit button and restore its text
                submitBtn.prop('disabled', false).html('Send a message');
            }
        });

        return false; // Prevent the form from submitting in the traditional way
    });

    // Optionally, you can also handle form validation using client-side validation libraries like Parsley.js
    // Example:
    // $('#contact-form').parsley();
JS;

$this->registerJs($js);
?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
