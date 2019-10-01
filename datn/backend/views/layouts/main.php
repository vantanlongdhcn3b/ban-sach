<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\widgets\headerNavbarWidget;
use backend\widgets\userLeftBoxWidget;
use backend\widgets\sidebarNavWidget;
use backend\widgets\configToolWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<div id="theme-wrapper">

      <!--HEADER NAVBAR-->
      <?= headerNavbarWidget::widget();?>
      <!--END HEADER NAVBAR-->

      <div id="page-wrapper" class="container">
        <div class="row">
          <div id="nav-col">
            <section id="col-left" class="col-left-nano">
              <div id="col-left-inner" class="col-left-nano-content">
                <!--user-Left-->
                <?= userLeftBoxWidget::widget(); ?>
                <!--END user-Left-->

                <!--sidebar-nav-->
                <?= sidebarNavWidget::widget(); ?>
                <!--END sidebar-nav-->

              </div>
            </section>
            <div id="nav-col-submenu"></div>
          </div>
          <div id="content-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div id="content-header" class="clearfix">
                      <div class="pull-left">
                        <ol class="breadcrumb">
                          <?= Breadcrumbs::widget([
                              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                          ]) ?>
                          <?= Alert::widget() ?>
                        </ol>
                        
                      </div>
                      <div class="pull-right hidden-xs">
                        <div class="xs-graph pull-left">
                          <div class="graph-label">
                            <b><i class="fa fa-shopping-cart"></i> 838</b> Orders
                          </div>
                          <div class="graph-content spark-orders"></div>
                        </div>
                        <div class="xs-graph pull-left mrg-l-lg mrg-r-sm">
                          <div class="graph-label">
                            <b>&dollar;12.338</b> Revenues
                          </div>
                          <div class="graph-content spark-revenues"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                <?= $content ?>
                </div>
                
              </div>
            </div>
            <footer id="footer-bar" class="row">
              <p id="footer-copyright" class="col-xs-12">
                Nhà sách trực tuyến <span style="color: blue">Bookstore</span>
              </p>
            </footer>
          </div>
        </div>

      </div>
    </div>
    
      <!--ICON SETTING-->
      <?= configToolWidget::widget();?>
      <!--END ICON SETTING-->

      <!-- Modal Avatar user-->
      <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <iframe  width="100%" height="550" frameborder="0"
                src="http://localhost/hocphp/datn/filemanager/dialog.php?type=0&field_id=avata">
              </iframe>
            </div>
            
          </div>
        </div>
      </div>

      <!--Modal Image Product-->
      <div class="modal fade bs-example-modal-lg" id="ModalImgPro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <iframe  width="100%" height="550" frameborder="0"
                src="http://localhost/hocphp/datn/filemanager/dialog.php?type=0&field_id=image">
              </iframe>
            </div>
            
          </div>
        </div>
      </div>

      <!--image Product-->

      <!--Modal group Image after-->
      <div class="modal fade bs-example-modal-lg" id="ModalImgAfter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <iframe  width="100%" height="550" frameborder="0"
                src="http://localhost/hocphp/datn/filemanager/dialog.php?type=0&field_id=image_after">
              </iframe>
            </div>
            
          </div>
        </div>
      </div>

      <!--Modal Image author-->
      <div class="modal fade bs-example-modal-lg" id="ModalImgAuthor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <iframe  width="100%" height="550" frameborder="0"
                src="http://localhost/hocphp/datn/filemanager/dialog.php?type=0&field_id=author_img">
              </iframe>
            </div>
            
          </div>
        </div>
      </div>
      <!-- image banner -->
      <div class="modal fade bs-example-modal-lg" id="ModalImgBanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <iframe  width="100%" height="550" frameborder="0"
                src="http://localhost/hocphp/datn/filemanager/dialog.php?type=0&field_id=banner_img">
              </iframe>
            </div>
            
          </div>
        </div>
      </div>

      <!--Modal group Image category-->
      <div class="modal fade bs-example-modal-lg" id="ModalImgCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <iframe  width="100%" height="550" frameborder="0"
                src="http://localhost/hocphp/datn/filemanager/dialog.php?type=0&field_id=cat_image">
              </iframe>
            </div>
            
          </div>
        </div>
      </div>

      <!--Modal create province-->
      <div class="modal fade" id="modalCreateProvince" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document" width="30%">
          <div class="modal-content" style="width: 55%;margin-left: 20%;">
            
              <div id="contentModalProvinceCreate"></div>
            
          </div>
        </div>
      </div>

      <!--Modal add author-->
      <div class="modal fade" id="modalCreateAuthor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document" width="30%">
          <div class="modal-content" style="width: 55%;margin-left: 20%;">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
            
              <div id="contentModalAuthorCreate"></div>
            
          </div>
        </div>
      </div>

<?php $this->endBody() ?>
</body>
<script type="text/javascript">

  // image banner
    $("#select_image_banner").click(function(event){
       // alert('hahahah');
        $("#ModalImgBanner").modal();
    });
    
    $('#ModalImgBanner').on('hidden.bs.modal', function () {

        imgSrc=$("#banner_img").val();
        $("#preview_image_banner").attr({
        'src':imgSrc
        });
        $("#banner_img").val(imgSrc);
    });

    $("#remove_image_banner").click(function(){
        $("#preview_image_banner").attr({
            'src':''
        });
        $("#banner_img").val("");
    });

  // groupe image author
    $("#select_image_author").click(function(event){
       
        $("#ModalImgAuthor").modal();
    });
    
    $('#ModalImgAuthor').on('hidden.bs.modal', function () {

        imgSrc=$("#author_img").val();
        $("#preview_image_author").attr({
        'src':imgSrc
        });
        $("#author_img").val(imgSrc);
    });

    $("#remove_image_author").click(function(){
        $("#preview_image_author").attr({
            'src':''
        });
        $("#author_img").val("");
    })

    

    // groupe image category
    $("#select_image_cat").click(function(event){
       
        $("#ModalImgCat").modal();
    });
    
    $('#ModalImgCat').on('hidden.bs.modal', function () {

        imgSrc=$("#cat_image").val();
        $("#preview_image_cat").attr({
        'src':imgSrc
        });
        $("#cat_image").val(imgSrc);
    });

    $("#remove_image_cat").click(function(){
        $("#preview_image_cat").attr({
            'src':''
        });
        $("#cat_image").val("");
    })

 //auto load thông báo có hóa đơn mới, hết hàng bằng ajax
 // $(document).ready(function() {
 //        loadData();
 //    });

 //    var loadData = function() {
 //        $.ajax({    //create an ajax request to load_page.php
 //            type: "GET",
 //            url: "<?= Yii::$app->homeUrl?>",             
 //            dataType: "html",   //expect html to be returned                
 //            success: function(response){                    
 //                $("#contentMessage").html(response);
 //                setTimeout(loadData, 5000); 
 //            }

 //        });
 //    };
   
</script>

</html>
<?php $this->endPage() ?>
