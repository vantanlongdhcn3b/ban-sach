<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
  <ul class="nav nav-pills nav-stacked">
    <li class="active">
      <a href="<?php echo Yii::$app->homeUrl;?>">
        <i class="fa fa-home" aria-hidden="true"></i>
        <span>Trang chủ</span>
        <span class="label label-primary label-circle pull-right">23</span>
      </a>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">
        <i class="fa fa-table"></i>
        <span>Quản lý danh mục</span>
        <i class="fa fa-angle-right drop-icon"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>product">
            <i class="fa fa-book" aria-hidden="true"></i> List Sách
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>category">
            <span class="glyphicon glyphicon-list-alt"></span> Danh mục sách
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>images">
            <span class="glyphicon glyphicon-list-alt"></span> Ảnh sách
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>author">
            <span class="glyphicon glyphicon-list-alt"></span> Tác Giả
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>translator">
            <span class="glyphicon glyphicon-list-alt"></span> Dịch giả
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>publisher">
            <span class="glyphicon glyphicon-list-alt"></span> Nhà xuất bản
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>supplier">
            <span class="glyphicon glyphicon-list-alt"></span> Nhà phát hành
          </a>
        </li>
        
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>transport">
            <span class="glyphicon glyphicon-list-alt"></span> Phương thức vận chuyển
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>payment">
            <span class="glyphicon glyphicon-list-alt"></span> Phương thức thanh toán
          </a>
        </li>
       
        
      </ul>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">
        <i class="fa fa-envelope"></i>
        <span>Quản lý thành viên</span>
        <i class="fa fa-angle-right drop-icon"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>user">
            <i class="fa fa-user" aria-hidden="true"></i> Khách hàng
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>user">
            <i class="fa fa-user" aria-hidden="true"></i> Admin
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>province">
            <i class="fa fa-map-marker" aria-hidden="true"></i> Tỉnh thành
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">
        <i class="fa fa-bar-chart-o"></i>
        <span>Quản lý đơn hàng</span>
        <i class="fa fa-angle-right drop-icon"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>order">
            Hóa đơn bán hàng
          </a>
        </li>
      </ul>
    </li>
    
    <li>
      <a href="#" class="dropdown-toggle">
        <i class="fa fa-copy"></i>
        <span>Phản hồi</span>
        <i class="fa fa-angle-right drop-icon"></i>
      </a>
      <ul class="submenu">
        <li>
          <a href="<?php echo Yii::$app->homeUrl;?>feedback">
            <i class="fa fa-map-marker" aria-hidden="true"></i> Phản hồi
          </a>
        </li>
      </ul>
    </li>

  </ul>
</div>