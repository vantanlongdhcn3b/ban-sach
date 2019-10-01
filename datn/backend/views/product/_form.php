<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use kartik\file\FileInput;
use yii\helpers\ArrayHelper;
use yii\widgets\MaskedInput;


use backend\assets\AppAssetFix;

AppAssetFix::register($this);

$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Nhật Bản", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Việt Nam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
<div class="email-content-nano-content" tabindex="0" style="right: -17px;">
<div class="row">
  <div class="col-lg-6">
          <div class="main-box">
              <div class="main-box-body clearfix">
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-3">
                      <label>Tên sách</label>
                    </div>
                    <div class="col-lg-9">
                      <?= $form->field($model, 'product_name')->textInput(['maxlength' => true])->label(false) ?>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3">
                      <label>Danh mục cha</label>
                    </div>
                    <div class="col-lg-9">
                      <?= $form->field($model, 'catParent')->widget(Select2::classname(), [
                                                  'data' => $catParent,
                                                  'options' => ['placeholder' => 'Chọn danh mục cha để lọc danh mục con','onchange'=>'changeParent(this.value)'],
                                                  'pluginOptions' => [
                                                      'allowClear' => true
                                                  ],
                      ])->label(false);
                      ?>
                    </div>
                  </div> 
                  <div class="row">
                      <div class="col-lg-3">
                        <label>Danh mục con</label>
                      </div>
                      <div class="col-lg-9">
                        <?= $form->field($model, 'cat_id')->widget(Select2::classname(), [
                                                  'data'=>$catSub,
                                                  'options' => ['placeholder' => '--Danh mục con--', 'id'=>'dropdownSubCat'],
                                                  'pluginOptions' => [
                                                      'allowClear' => true
                                                  ],
                                               ])->label(false); 
                      ?>
                    </div>
                      
                  </div>   

                  <div class="row"> 
                      <div class="col-lg-6">
                          <?= $form->field($model, 'author_id')->widget(Select2::classname(), [
                                          'data' => $listAuthor,
                                          'options' => ['placeholder' => '--Tác giả--'],
                                          'pluginOptions' => [
                                              'allowClear' => true
                                          ],
                                       ]);
                          ?>
                      </div>
                      <div class="col-lg-1">
                        <a class="btn btn-success btnadd" href="javascript:void(0)" title="Thêm tác giả" onclick="openCreateAuthor()"><i class="glyphicon glyphicon-plus"></i></a>
                      </div>
                      <div class="col-lg-5">
                          <?= $form->field($model, 'republish')->textInput(['type'=>'number']) ?>
                      </div>
                  </div>

                  <div class="row">
                         <div class="col-lg-6">
                          <?= $form->field($model, 'translator_id')->widget(Select2::classname(), [
                                          'data' => $listTranslator,
                                          'options' => ['placeholder' => '--Dịch giả--'],
                                          'pluginOptions' => [
                                              'allowClear' => true
                                          ],
                                       ]);
                          ?>
                             
                         </div>
                         <div class="col-lg-1">
                          <a class="btn btn-success btnadd" href="javascript:void(0)" title="Thêm dịch giả" onclick="openCreateTranslator()"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                         <div class="col-lg-5">
                             <?= $form->field($model, 'weight')->textInput() ?>
                         </div>
                  </div>   
                  <div class="row">
                         <div class="col-lg-6">

                          <?= $form->field($model, 'publisher_id')->widget(Select2::classname(), [
                                                  'data' => $listPublisher,
                                                  'options' => ['placeholder' => '--Nhà xuất bản--'],
                                                  'pluginOptions' => [
                                                      'allowClear' => true
                                                  ],
                                               ]);
                          ?>
                             
                         </div>
                         <div class="col-lg-1">
                          <a class="btn btn-success btnadd" href="javascript:void(0)" onclick="openCreatePublisher()" title="Thêm tác nhà xuất bản"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                         <div class="col-lg-5">
                             <?= $form->field($model, 'qty_page')->textInput() ?>
                         </div>
                  </div> 
                  <div class="row">
                         <div class="col-lg-6">
                         <?= $form->field($model, 'supplier_id')->widget(Select2::classname(), [
                                                  'data' => $listSupplier,
                                                  'options' => ['placeholder' => '--Nhà phát hành--'],
                                                  'pluginOptions' => [
                                                      'allowClear' => true
                                                  ],
                                               ]); 
                              ?>
                             
                         </div>
                         <div class="col-lg-1">
                          <a class="btn btn-success btnadd" href="javascript:void(0)" onclick="openCreateSupplier()" title="Thêm Nhà phát hành"><i class="glyphicon glyphicon-plus"></i></a>
                        </div>
                         <div class="col-lg-5">
                             <?= $form->field($model, 'size')->textInput() ?>
                         </div>
                  </div> 
                  

                      
              </div>
          </div>

  </div>
    <div class="col-lg-6">
        <div class="main-box">
            <div class="main-box-body clearfix" style="padding: 15px">
              <div class="row">
                 <div class="col-lg-6">
                     <?= $form->field($model, 'published')->widget(DatePicker::classname(), [
                          'options' => ['placeholder' => 'yyyy-mm-dd'],
                          'pluginOptions' => [
                              'autoclose'=>true,
                              'format' => 'yyyy-mm-dd',
                          ],
                          
                      ]); ?>
                 </div>
                 <div class="col-lg-6">
                      <label>Ngôn ngữ:</label>
                       <?php
                       echo Select2::widget([
                        'model' => $model,
                        'attribute' => 'language',
                        'data' => $countries,
                        'options' => ['placeholder' => 'Chọn ngôn ngữ'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                        ?>
                          
                 </div>
          </div> 
          <div class="row">
                 <div class="col-lg-6">
                     <?= $form->field($model, 'date_release')->widget(DatePicker::classname(), [
                          'options' => ['placeholder' => 'yyyy-mm-dd'],
                          'pluginOptions' => [
                              'autoclose'=>true,
                              'format' => 'yyyy-mm-dd',
                          ],
                          
                      ]); ?>
                 </div>
                 <div class="col-lg-6">
                      <label>Nguồn gốc:</label>
                       <?php
                       echo Select2::widget([
                        'model' => $model,
                        'attribute' => 'made_in',
                        'data' => $countries,
                        'options' => ['placeholder' => 'Chọn nguồn gốc'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                        ?>
                          
                 </div>
          </div> 
          
          <div class="row" style="padding: 10px">
            <div class="col-md-3">
              <label>Giá bán</label>
            </div>
            <div class="col-lg-9">
                     <?= MaskedInput::widget([
                      'model' =>$model,
                      'attribute' =>'price_out',
                      'name' => 'input-33',
                      
                      'clientOptions' => [
                          'alias' =>  'decimal',
                          'groupSeparator' => '.',
                          'autoGroup' => true
                      ],
                  ]); ?>
              </div>
          </div>
          <div class="row">
          <div class="col-lg-3">
            <label>Giảm giá(%)</label>
          </div>
            <div class="col-lg-9">
            <?= MaskedInput::widget([
                'model' =>$model,
                'attribute' =>'sale',
                'name' => 'input-33',
                
                'clientOptions' => [
                    'alias' =>  'decimal',
                    'groupSeparator' => '.',
                    'autoGroup' => true
                ],
            ]); ?>            </div>
          </div>
          <div class="row">
          
          <div class="col-lg-6">
                 <?= $form->field($model, 'sale_startdate')->widget(DatePicker::classname(), [
                  'options' => ['placeholder' => 'yyyy-mm-dd'],
                  'pluginOptions' => [
                      'autoclose'=>true,
                      'format' => 'yyyy-mm-dd',
                  ],
                  
                  ]); ?>
             </div>
               <div class="col-lg-6">
                   <?= $form->field($model, 'sale_enddate')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'yyyy-mm-dd'],
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'yyyy-mm-dd',
                    ],
                    
                ]); ?>
               </div>
                </div>
                <div class="row">
                <div class="col-lg-3">
                     <label>Mã code</label>
                 </div>
                 <div class="col-lg-9">
                     <?= $form->field($model, 'barcode')->textInput(['maxlength' => true])->label(false) ?>
                 </div>
                 
          </div>
           <div class="row">
            <div class="col-lg-3">
              <label>metadescription</label>
            </div>
            <div class="col-lg-9">
              <?= $form->field($model, 'metadescription')->textInput(['maxlength' => true])->label(false) ?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <label>metakeyword</label>
            </div>
            <div class="col-lg-9">
              <?= $form->field($model, 'metakeyword')->textInput(['maxlength' => true])->label(false) ?>
            </div>
          </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>
                    </div>
                    <div class="col-lg-6">
                        <?= $form->field($model, 'user_create')->textInput(['value'=>Yii::$app->user->identity->username,'readonly'=>true]) ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="main-box">
      <div class="main-box-body clearfix">
      <div class="row" style="padding: 15px">
        <div class="col-md-6">
          <div class="col-lg-12">
          <?php 
          if($model->isNewRecord){
           ?>
            <img src="" id="preview_image" width="240px" height="auto">
            <?php 
            }else{
             ?>
             <img src="<?= $image_before;?>" id="preview_image" width="240px" height="auto">
            <?php } ?>
          </div>
          <div class="col-lg-8" >
            <?= $form->field($model, 'image')->textInput(['maxlength' => true, 'id'=>'image']) ?>
          </div>
          <div class="col-lg-4" style="padding-top: 24px;">
              <button type="button" id="select_image" class="btn btn-default" >
              <i class="fa fa-picture-o" aria-hidden="true"></i>
              Chọn</button>
              <button type="button" id="remove_image" class="btn btn-default" >
              <i class="fa fa-trash-o" aria-hidden="true"></i>
              Xóa</button>
          </div>
        </div>

        <div class="col-md-6">
          <div class="col-lg-12">
          <?php 
          if($model->isNewRecord){
           ?>
            <img style="width: 240px;height:auto;" src="" id="preview_image_after">
            <?php 
            }else{
             ?>
             <img style="width: 240px;height:auto;" src="<?= $image_after;?>" id="preview_image_after">
            <?php } ?>
            
          </div>
          <div class="col-lg-8" >
            <?= $form->field($model, 'image_after')->textInput(['maxlength' => true, 'id'=>'image_after']) ?>
          </div>
          <div class="col-lg-4" style="padding-top: 24px;">
              <button type="button" id="select_image_after" class="btn btn-default" >
              <i class="fa fa-picture-o" aria-hidden="true"></i>
              Chọn</button>
              <button type="button" id="remove_image_after" class="btn btn-default" >
              <i class="fa fa-trash-o" aria-hidden="true"></i>
              Xóa</button>
          </div>
        </div>            <!---->
        <div class="row">
      </div>
    </div>
    </div>
  </div>
</div>
<div class="row" style="padding: 10px">
  <div class="col-md-12">
     <div class="main-box">
        <div class="main-box-body clearfix">
        <div class="row" style="padding: 10px">
        <?php
          
          $homeUrl=str_replace('/backend/web', '',Yii::$app->homeUrl);
          if($model->isNewRecord ){
            echo $form->field($model, 'attachment[]')->widget(FileInput::classname(), [
              'options' => ['multiple' => true, 'accept'=>'image/*'],
              'pluginOptions' => [
                          
                'showRemove' => true,
                'maxFileCount' => 10,
                'showUpload' => true,
                'allowedFileExtensions'=>['jpg','gif','png'],
                'uploadUrl' => $homeUrl.'source',
              ]
              ]);
                      
          }
          else{
            //cách show các ảnh của sách trong fileinput ở update
            //tham khảo tại http://stackoverflow.com/questions/35173252/how-to-show-all-images-dynamically-in-kartik-fileinput-widget
            $allimage = array();
            $previewConfig=[];
            foreach ($listImage as $key => $value) {
              $link=Html::img($homeUrl.str_replace('../../', '',$value), ['class'=>'file-preview-image kv-preview-data', 'style'=>'width:auto;height:160px']);
              $allimage[]= $link;
              $previewConfig[] =[
                'caption'=>str_replace('../../source/', '',$value),
                'url'=> Yii::$app->homeUrl.'product/delete-image?id='.$key,
                'key'=>$key,
                'extra'=>['id'=>$key],
                 
              ]; 
            }
          
            echo $form->field($model, 'attachment[]')->widget(FileInput::classname(), [
              'options' => ['multiple' => true, 'accept'=>'image/*'],
              'pluginOptions' => [
                'uploadAsync'=>false,   
                'showRemove' => true,
                'maxFileCount' => 10,
                'showUpload' => true,
                'allowedFileExtensions'=>['jpg','gif','png'],

                'uploadUrl' => $homeUrl.'source',
                'initialPreview'=> $allimage,
                
                // 'initialPreviewAsData'=>true,//nếu k có thì $link phải để trong thẻ img
                'overwriteInitial'=>false,
                'initialCaption'=>"hahabook.com",
                'initialPreviewFileType'=> 'image', // image is the default and can be overridden in config below
                'initialPreviewConfig' => $previewConfig,
                'showRemove' => true,
              ]
          ]);
          }
           ?> 
           <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'descript_short')->textarea(['rows' => 6]) ?>
        </div>
        </div>
      </div>
  </div>
</div>
</div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Lưu', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style'=>'width:150px;height:50px;font-size:20px;margin-bottom:20px']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
