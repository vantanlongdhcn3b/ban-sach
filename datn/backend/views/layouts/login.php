<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\widgets\logoWidget;


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
<body id="login-page-full">
<?php $this->beginBody() ?>

    <!--main login-->
    <div id="login-full-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div id="login-box">
              <div id="login-box-holder">
                <div class="row">
                  <div class="col-xs-12">
                    <header id="login-header">
                      <div id="login-logo">
                      
                        <?=logoWidget::widget()?>
                      </div>
                    </header>
                    <div id="login-box-inner">
                      <?= $content ?>
                    </div>
                  </div>
                </div>
              </div>
              <div id="login-box-footer">
                <div class="row">
                  <div class="col-xs-12">
                    Do not have an account?
                    <a href="registration-full.html">
                      Register now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END main login-->

    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
