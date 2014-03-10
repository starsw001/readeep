<?php
        /* @var $this PostPostsController */
        /* @var $model PostPosts */
        /* @var $form CActiveForm */
?>

<div class="form">

                <<<<<<< HEAD
                <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id'                   => 'post-posts-form',
                            'htmlOptions'          => array('name' => 'myForm'),
                            'enableAjaxValidation' => true,
                        ));
                ?>
                =======
                <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id'                   => 'post-posts-form',
                            'htmlOptions'          => array('name' => 'myForm'),
                            'enableAjaxValidation' => true,
                        ));
                ?>
                >>>>>>> 4147fe5a815d5b1f5fdb31d83f49ab830490c428

                <p class="note">Fields with <span class="required">*</span> are required.</p>

                <?php echo $form->errorSummary($model); ?>

                <<<<<<< HEAD
                <div class="form-group">
                                <?php echo $form->labelEx($model, 'title'); ?>
                                <?php echo $form->textField($model, 'title', array('class'     => 'form-control', 'size'      => 50, 'maxlength' => 50)); ?>
                                <?php echo $form->error($model, 'title'); ?>
                </div>

                <div class="form-group">
                                <?php echo $form->labelEx($model, 'excerpt'); ?>
                                <?php echo $form->textArea($model, 'excerpt', array('rows'      => 6, 'cols'      => 50, 'class'     => 'form-control', 'maxlength' => 255)); ?>
                                <?php echo $form->error($model, 'excerpt'); ?>
                </div>
                <div class="form-group">
                                <?php echo $form->labelEx($model, 'content'); ?>
                                <?php
                                        $this->widget('ext.wdueditor.WDueditor', array(
                                            'model'     => $model,
                                            'attribute' => 'content',
                                        ));
//                        $this->widget('ext.yii-tinymce.TinyMce', array(
//                            'model'           => $model,
//                            'attribute'       => 'content',
//                            // Optional config
//                            'compressorRoute' => 'tinyMce/compressor',
//                            // 'spellcheckerUrl' => 'http://speller.yandex.net/services/tinyspell',
//                            'spellcheckerUrl' => array('tinyMce/spellchecker'),
//                            'fileManager'     => array(
//                                'class'          => 'ext.yii-elfinder.TinyMceElFinder',
//                                'connectorRoute' => 'elfinder/connector',
//                            ),
//                            'htmlOptions'     => array(
//                                'rows' => 30,
//                                'cols' => 60,
//                            ),
//                        ));
                                ?>
                                <?php echo $form->error($model, 'content'); ?>
                </div>
                =======
                <div class="form-group">
                                <?php echo $form->labelEx($model, 'title'); ?>
                                <?php echo $form->textField($model, 'title', array('class'     => 'form-control', 'size'      => 50, 'maxlength' => 50)); ?>
                                <?php echo $form->error($model, 'title'); ?>
                </div>

                <div class="form-group">
                                <?php echo $form->labelEx($model, 'excerpt'); ?>
                                <?php echo $form->textArea($model, 'excerpt', array('rows'      => 6, 'cols'      => 50, 'class'     => 'form-control', 'maxlength' => 255)); ?>
                                <?php echo $form->error($model, 'excerpt'); ?>
                </div>
                <div class="form-group">
                                <?php echo $form->labelEx($model, 'content'); ?>
                                <?php
                                        $this->widget('ext.yii-tinymce.TinyMce', array(
                                            'model'           => $model,
                                            'attribute'       => 'content',
                                            // Optional config
                                            'compressorRoute' => 'tinyMce/compressor',
                                            // 'spellcheckerUrl' => 'http://speller.yandex.net/services/tinyspell',
                                            'spellcheckerUrl' => array('tinyMce/spellchecker'),
                                            'fileManager'     => array(
                                                'class'          => 'ext.yii-elfinder.TinyMceElFinder',
                                                'connectorRoute' => 'elfinder/connector',
                                            ),
                                            'htmlOptions'     => array(
                                                'rows' => 30,
                                                'cols' => 60,
                                            ),
                                        ));
                                ?>
                                <?php echo $form->error($model, 'content'); ?>
                </div>
                >>>>>>> 4147fe5a815d5b1f5fdb31d83f49ab830490c428

                <div class="form-group">
                                <?php echo $form->labelEx($model, 'create_time'); ?>
                                <?php
                                        $this->widget('application.extensions.timepicker.EJuiDateTimePicker', array(
                                            'model'       => $model,
                                            'attribute'   => 'create_time',
                                            'language'    => 'zh-CN',
                                            'options'     => array(
                                                'hourGrid'    => 4,
                                                'hourMin'     => 9,
                                                'hourMax'     => 17,
                                                'timeFormat'  => 'hh:mm',
                                                'changeMonth' => true,
                                                'changeYear'  => false,
                                            ),
                                            'htmlOptions' => array(
                                                'readonly' => true,
                                                'class'    => 'form-control',
                                                'style'    => 'width:180px;'
                                            ),
                                        ));
                                ?>
                                <?php echo $form->error($model, 'create_time'); ?>
                </div>

                <div class="form-group">
                                <?php echo $form->labelEx($model, 'status'); ?>
                                <?php echo $form->dropDownList($model, 'status', array('1' => '发布', '0' => '草稿'), array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'status'); ?>
                </div>

                <div class="form-group">
                                <?php echo $form->labelEx($model, 'order'); ?>
                                <?php echo $form->textField($model, 'order', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'order'); ?>
                                <p class="hint">
                                                提示：数字越小，越排前面。0在第一位。
                                </p>
                </div>

                <div class="form-group">
                                <?php echo $form->labelEx($model, 'tags'); ?>
                                <?php
                                        $this->widget('ext.yii-selectize.YiiSelectize', array(
                                            'name'           => 'tags',
                                            'selectedValues' => explode(' ', $model->tags),
                                            'data'           => PostTags::model()->getAllTags(),
                                            'fullWidth'      => false,
                                            'htmlOptions'    => array(
                                                'style' => 'width: 50%',
                                            ),
                                            'multiple'       => true,
                                        ));
                                ?>
                                <?php //echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>200)); ?>
                                <?php echo $form->error($model, 'tags'); ?>
                </div>
                <div class="form-group">
                                <?php //echo $form->textField($model, 'image',array('class' => 'form-control'));  ?>
                                <input type='hidden' name='PostPosts[image]' value='' id='PostPosts_image'></input>
                </div>


                <?php $this->endWidget(); ?>
                <div class="form-group">
                                <?php echo $form->labelEx($model, 'image'); ?>
                                <ul>
                                                <li>
                                                                <input id="token" name="token" type='hidden'class="ipt" value="<?php echo $token; ?>"><a target="blank" href="http://jsfiddle.net/gh/get/extjs/4.2/icattlecoder/jsfiddle/tree/master/uptoken">在线生成token</a>
                                                </li>
                                                <li>
                                                                <label for="key">key:</label>
                                                                <input id="key" name="key" class="ipt" value="">
                                                </li>
                                                <li>
                                                                <label for="bucket">照片:</label>
                                                                <input id="file" name="file" class="ipt" type="file" />
                                                </li>
                                                <div id="progressbar"><div class="progress-label"></div></div>
                                </ul>
                </div>
                <div class="form-group">
                                <button class="btn btn-primary" id="submit" name="submit">提交</button>
                </div>
</div><!-- form -->
<style>
                .ipt {
                                width: 300px;
                }
                label {
                                width: 130px;
                                display: block;
                }
                ul li {
                                list-style:none;
                }
                .ui-progressbar {
                                position: relative;
                }
                .progress-label {
                                position: absolute;
                                left: 50%;
                                top: 4px;
                                font-weight: bold;
                                text-shadow: 1px 1px 0 #fff;
                }
                #progressbar{
                                height:30px;
                                display:none;
                }
                #dialog{
                                display:none;
                }
</style>
<script>

                document.getElementById("submit").onclick = function() {
                                qiniuAjaxUp();
                };
                function qiniuAjaxUp()
                {
                                var Qiniu_UploadUrl = "http://up.qiniu.com";
                                var progressbar = $("#progressbar"),
                                        progressLabel = $(".progress-label");
                                //普通上传
                                var Qiniu_upload = function(f, token, key) {
                                                var xhr
                                                if (window.XMLHttpRequest)
                                                {// code for IE7+, Firefox, Chrome, Opera, Safari
                                                                xhr = new XMLHttpRequest();
                                                }
                                                else
                                                {// code for IE6, IE5
                                                                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                                                }
                                                xhr.open('POST', Qiniu_UploadUrl, true);
                                                var formData, startDate;
                                                formData = new FormData();
                                                if (key !== null && key !== undefined)
                                                                formData.append('key', key);
                                                formData.append('token', token);
                                                formData.append('file', f);
                                                var taking;
                                                xhr.upload.addEventListener("progress", function(evt) {
                                                                if (evt.lengthComputable) {
                                                                                var nowDate = new Date().getTime();
                                                                                taking = nowDate - startDate;
                                                                                var x = (evt.loaded) / 1024;
                                                                                var y = taking / 1000;
                                                                                var uploadSpeed = (x / y);
                                                                                var formatSpeed;
                                                                                if (uploadSpeed > 1024) {
                                                                                                formatSpeed = (uploadSpeed / 1024).toFixed(2) + "Mb\/s";
                                                                                } else {
                                                                                                formatSpeed = uploadSpeed.toFixed(2) + "Kb\/s";
                                                                                }
                                                                                var percentComplete = Math.round(evt.loaded * 100 / evt.total);
                                                                                progressbar.progressbar("value", percentComplete);
                                                                                // console && console.log(percentComplete, ",", formatSpeed);
                                                                }
                                                }, false);
                                                xhr.onreadystatechange = function(response) {
                                                                if (xhr.readyState == 4 && xhr.status == 200 && xhr.responseText != "") {
                                                                                var blkRet = JSON.parse(xhr.responseText);
//                                                console && console.log(blkRet);
//                                         $("#dialog").html(xhr.responseText).dialog();
                                                                                document.getElementById('PostPosts_image').value = document.getElementById('key').value;
                                                                                document.getElementById('post-posts-form').submit();
                                                                } else if (xhr.status != 200 && xhr.responseText) {

                                                                }
                                                };
                                                startDate = new Date().getTime();
                                                $("#progressbar").show();
                                                xhr.send(formData);
                                };
                                var token = $("#token").val();
                                if ($("#file")[0].files.length > 0 && token != "") {
                                                Qiniu_upload($("#file")[0].files[0], token, $("#key").val());
                                } else {
                                                console && console.log("form input error");
                                }

                }

</script>