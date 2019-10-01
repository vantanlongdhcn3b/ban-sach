<?php 
use yii\helpers\Html;

 ?>
<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
<img alt="" src="<?php echo Yii::$app->user->identity->avata; ?>"/>
<div class="user-box">
  <span class="name">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <?php 
    echo Yii::$app->user->identity->username;
     ?>
      <i class="fa fa-angle-down"></i>
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
  </span>
  <span class="status">
    <i class="fa fa-circle"></i> Online
  </span>
</div>
</div>