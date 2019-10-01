<?php
use backend\widgets\logoWidget;
use yii\helpers\Html;
use backend\models\Communication;
 function getTimeAgo($tsPost)
{
  // $timeReply  = date('d/m/Y H:i:s');
  // $timePost = date('d/m/Y H:i:s',$value['created_at']);
  // $datePost = date_parse_from_format('d/m/Y H:i:s', $timePost);
  // $dateReply  = date_parse_from_format('d/m/Y H:i:s', $timeReply);

  // $tsPost   = mktime($datePost['hour'], $datePost['minute'], $datePost['second'], $datePost['month'], $datePost['day'], $datePost['year']);
  // $tsReply  = mktime($dateReply['hour'], $dateReply['minute'], $dateReply['second'], $dateReply['month'], $dateReply['day'], $dateReply['year']);

  $tsReply=time();
  $distance   = $tsReply - $tsPost;

  $result="";
  switch ($distance){
    case ($distance < 60): 
      $result = $distance . ' giây trước';
      break;
    case ($distance >= 60 && $distance < 3600):
      $minute = round($distance/60);
      $result = $minute . ' phút trước';
      break;
    case ($distance >= 3600 && $distance < 86400):
      $hour = round($distance/3600);
      $result = $hour . ' giờ trước';
      break;
    case (round($distance/86400)==1):
      $result = 'Hôm qua lúc ' . date('H:i', $tsReply);
      break;
    default:
      $result = date('d/m/Y \l\ú\c H:i', $tsPost);
      break;
  }
  return $result;
}
?>
<header class="navbar" id="header-navbar">
        <div class="container">
          <a href="index-2.html" id="logo" class="navbar-brand">
            <?=logoWidget::widget()?>
            <img src="<?php echo Yii::getAlias('@web'); ?>/img/logo-black.png" alt="" class="normal-logo logo-black"/>
            <img src="<?php echo Yii::getAlias('@web'); ?>/img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
          </a>
          <div class="clearfix">
            <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="fa fa-bars"></span>
            </button>
            <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
              <ul class="nav navbar-nav pull-left">
                <li>
                  <a class="btn" id="make-small-nav">
                    <i class="fa fa-bars"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="nav-no-collapse pull-right" id="header-nav">
              <ul class="nav navbar-nav pull-right">
                <li class="mobile-search">
                  <a class="btn">
                    <i class="fa fa-search"></i>
                  </a>
                  <div class="drowdown-search">
                    <form role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="fa fa-search nav-search-icon"></i>
                      </div>
                    </form>
                  </div>
                </li>



                <li class="dropdown hidden-xs">
                  <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                    <span class="count">5</span>
                  </a>
                  <ul class="dropdown-menu notifications-list">
                    <li class="pointer">
                      <div class="pointer-inner">
                        <div class="arrow"></div>
                      </div>
                    </li>

                    <li class="item-header">You have 5 pending tasks</li>
                    <li class="item">
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Dashboard v1.3 <span class="pull-right">40%</span></div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Database Update <span class="pull-right">60%</span></div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Iphone Development <span class="pull-right">87%</span></div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                            <span class="sr-only">87% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Mobile App <span class="pull-right">33%</span></div>
                        </div>
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                            <span class="sr-only">33% Complete (danger)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Dashboard v1.3 <span class="pull-right">45%</span></div>
                        </div>
                        <div class="progress progress-striped active">
                          <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                            <span class="sr-only">45% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="item-footer">
                      <a href="#">
                        View all tasks
                      </a>
                    </li>
                  </ul>
                </li>




                <?php 
                $commNotCheck = Communication::find()->asArray()->where('status=0')->orderBy(['created_at'=>SORT_DESC])->all();
               
                $date=date('Y-m-d');

                 ?>
                <li class="dropdown hidden-xs" id="contentMessage">
                  <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="count"><?= count($commNotCheck)?></span>
                  </a>
                  <ul class="dropdown-menu notifications-list">
                    <li class="pointer">
                      <div class="pointer-inner">
                        <div class="arrow"></div>
                      </div>
                    </li>
                    <li class="item-header">Bạn có <?= count($commNotCheck)?> thông báo mới</li>
                    <?php
                    $timeReply  = date('d/m/Y H:i:s');
                     foreach ($commNotCheck as $key => $value) {?>
                    <li class="item">
                      <a href="<?= $value['url']?>">
                        <?= $value['icon'] ?>
                        <span class="content"><?= $value['title'];?></span>
                        <span class="time"><i class="fa fa-clock-o"></i><?= getTimeAgo($value['created_at']); ?></span>
                      </a>
                    </li>
                    <?php } ?>
                    
                    <li class="item-footer">
                      <a href="<?= Yii::$app->homeUrl.'communication/index'?>">
                        Xem tất cả
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="dropdown hidden-xs">
                  <a class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="count">16</span>
                  </a>
                  <ul class="dropdown-menu notifications-list messages-list">
                    <li class="pointer">
                      <div class="pointer-inner">
                        <div class="arrow"></div>
                      </div>
                    </li>
                    <li class="item first-item">
                      <a href="#">
                        <img src="<?php echo Yii::getAlias('@web'); ?>/img/samples/messages-photo-1.png" alt=""/>
                        <span class="content">
                          <span class="content-headline">
                            George Clooney
                          </span>
                          <span class="content-text">
                            Look, just because I don't be givin' no man a foot massage don't make it
                            right for Marsellus to throw...
                          </span>
                        </span>
                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        <img src="<?php echo Yii::getAlias('@web'); ?>/img/samples/messages-photo-2.png" alt=""/>
                        <span class="content">
                          <span class="content-headline">
                            Emma Watson
                          </span>
                          <span class="content-text">
                            Look, just because I don't be givin' no man a foot massage don't make it
                            right for Marsellus to throw...
                          </span>
                        </span>
                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        <img src="<?php echo Yii::getAlias('@web'); ?>/img/samples/messages-photo-3.png" alt=""/>
                        <span class="content">
                          <span class="content-headline">
                            Robert Downey Jr.
                          </span>
                          <span class="content-text">
                            Look, just because I don't be givin' no man a foot massage don't make it
                            right for Marsellus to throw...
                          </span>
                        </span>
                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                      </a>
                    </li>
                    <li class="item-footer">
                      <a href="#">
                        View all messages
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown profile-dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo Yii::$app->user->identity->avata; ?>" alt=""/>
                    <span class="hidden-xs"><?php echo Yii::$app->user->identity->username;?></span> <b class="caret"></b>
                  </a>

                  <ul class="dropdown-menu">
                      <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                      <li><a href="<?php echo Yii::$app->homeUrl;?>site/changepassword"><i class="fa fa-cog"></i>Settings</a></li>
                      <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>

                      <li>
                      <a href="#"><i class="fa fa-power-off" aria-hidden="true"></i>
                      <?php 
                      echo Html::beginForm(['/site/logout'], 'post');

                      echo Html::submitButton(
                                'Đăng xuất',
                                ['class' => 'btn btn-link logout admin-logout']
                            );
                      echo Html::endForm();
                       ?>
                       </a>
                      </li>
                    </ul>
                </li>
                <li class="dropdown language hidden-xs">
                  <a class="btn dropdown-toggle" data-toggle="dropdown">
                    English
                    <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="item">
                      <a href="#">
                        Spanish
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        German
                      </a>
                    </li>
                    <li class="item">
                      <a href="#">
                        Italian
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>