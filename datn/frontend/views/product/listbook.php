<?php 
use frontend\models\Category;
use frontend\models\Product;
use yii\widgets\LinkPager;
use frontend\models\Feedback;
use kartik\rating\StarRating;


$this->title = $dataCat['cat_name'];
$parent=Category::findCatParent($dataCat['parent_id']);
$this->params['breadcrumbs'][] = ['label' => $parent['cat_name'], 'url' => ['index?id='.$parent['cat_id']]];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['listbook?id='.$dataCat['cat_id']]];

?>
<div class="kf_content_wrap">

    <!--GRID 4 WRAP START-->
    <div class="grid-4">
        <div class="grid3-page">
            <div class="container">
                <div class="row">
                    <!--ASIDE BAR WRAP START-->
                    <aside class="col-md-3">
                        <!--WIDGET CATEGORIES WRAP START-->
                        <div class="widget widget-categories">
                            <div class="widget-padding">
                                <!--WIDGET HEADING END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="<?php echo Yii::$app->homeUrl.'product/kho-sach-giam-gia';?>"><strong>Kho sách giảm giá</a></strong></li>
                                            <li><a href="<?php echo Yii::$app->homeUrl.'product/sach-ban-chay-nhat';?>"><strong>Sách bán chạy</strong></a></li>
                                            <li style="border-bottom: 0"><a href="#"><strong>sách mới phát hành</strong></a></li>
                                        </ul>
                                    </div>

                                    <div class="accordion" id="section1">
                                        <span style="font-size: 20px;color: #1ABC9C">Danh mục</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <?php 
                                                $dataCountPro=0;
                                                $modelPro = new Product();
                                                foreach ($listcatsup as $keysup => $valuesup) { 
                                                
                                                $dataCountPro = $modelPro->totalProductByCatSup($valuesup['cat_id']); 
                                             ?>
                                            <li ><a href="<?= Yii::$app->homeUrl.'product/listbook?id='.$valuesup['cat_id']?>" class="<?php echo $valuesup['cat_id']==$dataCat['cat_id']?'activeli': ''?>"><?=  $valuesup['cat_name']?><span class="count"> (<?php echo $dataCountPro; ?>)</span></a>

                                            </li>
                                                
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion" id="section2">
                                        <span>Biography</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="#">All types</a></li>
                                            <li><a href="#">Romance</a></li>
                                            <li><a href="#">Thriller</a></li>
                                            <li><a href="#">Suspense</a></li>
                                            <li><a href="#">Humor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion" id="section3">
                                        <span>Life Sciences</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="#">All types</a></li>
                                            <li><a href="#">Romance</a></li>
                                            <li><a href="#">Thriller</a></li>
                                            <li><a href="#">Suspense</a></li>
                                            <li><a href="#">Humor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion" id="section4">
                                        <span>Sports</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="#">All types</a></li>
                                            <li><a href="#">Romance</a></li>
                                            <li><a href="#">Thriller</a></li>
                                            <li><a href="#">Suspense</a></li>
                                            <li><a href="#">Humor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion" id="section5">
                                        <span>Sale Off</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="#">All types</a></li>
                                            <li><a href="#">Romance</a></li>
                                            <li><a href="#">Thriller</a></li>
                                            <li><a href="#">Suspense</a></li>
                                            <li><a href="#">Humor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion" id="section6">
                                        <span>Featured</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="#">All types</a></li>
                                            <li><a href="#">Romance</a></li>
                                            <li><a href="#">Thriller</a></li>
                                            <li><a href="#">Suspense</a></li>
                                            <li><a href="#">Humor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                                <!--WIDGET ACCORDIAN START-->
                                <div class="side_accordian">
                                    <div class="accordion" id="section7">
                                        <span>Collections</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                            <li><a href="#">All types</a></li>
                                            <li><a href="#">Romance</a></li>
                                            <li><a href="#">Thriller</a></li>
                                            <li><a href="#">Suspense</a></li>
                                            <li><a href="#">Humor</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--WIDGET ACCORDIAN END-->
                            </div>
                        </div>
                        
                        
                        <!--WIDGET RANGE SLIDER END-->
                        <div class="widget widget-ad">
                            <div class="text">
                                <h2>New<span>Collection</span></h2>
                                <div class="clear"></div>
                                <p>Up to 50% Off</p>
                            </div>
                        </div>
                        <!--WIDGET FEATURESD START-->
                        <div class="widget widget-featured">
                            <!--WIDGET HEADING START-->
                            <div class="aside-widget-hd">
                                <h5>Featured Books</h5>
                            </div>
                            <!--WIDGET HEADING END-->
                            <div class="widget-padding">
                                <!--FEATURED 3 START-->
                                <div class="featured-dec3">
                                    <figure>
                                        <img src="extra-images/widget-featured1.jpg" alt="">
                                    </figure>
                                    <div class="text">
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <a href="#">Last Sleep</a>
                                        <span class="price-tag black">
                                            <sub>$</sub>259.95
                                        </span>
                                    </div>
                                </div>
                                <!--FEATURED 3 END-->
                                <!--FEATURED 3 START-->
                                <div class="featured-dec3">
                                    <figure>
                                        <img src="extra-images/widget-featured2.jpg" alt="">
                                    </figure>
                                    <div class="text">
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <a href="#">Unfriended    </a>
                                        <span class="price-tag black">
                                            <del> $96.00</del>
                                            <sub>$</sub>259.95
                                        </span>
                                    </div>
                                </div>
                                <!--FEATURED 3 END-->
                                <!--FEATURED 3 START-->
                                <div class="featured-dec3">
                                    <figure>
                                        <img src="extra-images/widget-featured3.jpg" alt="">
                                    </figure>
                                    <div class="text">
                                        <div class="rating">
                                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                        </div>
                                        <a href="#">White Teeth</a>
                                        <span class="price-tag black">
                                            <sub>$</sub>76.95
                                        </span>
                                    </div>
                                </div>
                                <!--FEATURED 3 END-->
                            </div>
                        </div>

                        <!--WIDGET FEATURESD END-->
                    </aside>
                    <!--ASIDE BAR WRAP END-->
                    
                    
                <div class="col-md-9">
                    <?php 
                    if(!isset($_GET['page']) || $_GET['page']<2){
                     ?>
                        <h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">Sách <?php echo $dataCat['cat_name'];  ?> mới phát hành</h4><br/>
                        <div class="blog-grid3">
                            <div class="row">
                                <?php 
                                foreach ($litsNewPublished as $key => $value) {

                                   ?>
                                   <!--BOOK DEC START-->
                                   <div class="col-md-3 col-sm-4">
                                    <div class="book-tab-dec">
                                        <figure>
                                            <a class="pro_mage" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                                            <?php 
                                            if($value['sale']>0){
                                             ?>
                                                <figcaption class="ribbon-wrap">
                                                    <span class="ribbon">-<?php echo $value['sale'].'%' ?></span>
                                                </figcaption>
                                            <?php } ?>
                                            <div class="button-container">
                                                <div class="cart-button title_font"> 
                                                    <a class="button_cart button ajax_add_to_cart_button btn btn-default" href="javascript:void(0)" rel="nofollow" title="Mua ngay" data-id-product="10" data-minimal_quantity="1" onclick="addCart(<?= $value['product_id']?>)"> <i class="icon-shopping-cart"></i> <span>Mua Ngay</span> </a>

                                                    <a class="quick-view" title="Xem chi tiết" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>" rel="">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                         

                                                    </a> 
                                                    <a class="addToWishlist wishlistProd_10" title="Thêm vào yêu thích" href="javascript:void(0)" rel="nofollow" onclick="WishlistCart(<?= $value['product_id']?>)">
                                                       <i id="iconwish_<?php echo $value['product_id']; ?>" class="fa fa-heart" aria-hidden="true"></i>
                                                        
                                                   </a> 
                                                   
                                                </a>
                                            </div>

                                        </div>
                                    </figure>
                                    <div class="text">
                                        <div class="row" style="height: 40px">
                                            <a class="ahover" style="float: left;" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><?php echo $value['product_name']; ?></a>
                                        </div>
                                        <?php 
                                        $modelFeed=new Feedback();
                                        $rating = $modelFeed->AVGRating($value['product_id']);
                                        if($rating>=3.5){
                                         ?>
                                        <div class="row">
                                            <?php 
                                                
                                                echo StarRating::widget([
                                                    'name' => 'rating',
                                                    'value' =>$rating,
                                                    'pluginOptions' => [
                                                    'displayOnly' => true,
                                                    
                                                    'size' => '14px',
                                                    ]
                                                ]); 
                                            ?>
                                        </div>
                                        <?php } ?>
                                        <div class="row author">
                                            <?php echo $value['author_name']; ?>
                                        </div>
                                        <div class="row" style="float: left;">
                                            <?php 
                                            if($value['sale']!=0){
                                                $ban=$value['price_out']*(100-$value['sale'])/100;
                                                ?>
                                                <del><?php echo number_format($value['price_out'],0,"",".").' đ'; ?></del>
                                            
                                                <span class="red"><?php echo number_format($ban,0,"",".").' đ';?> </span>
                                                <?php }
                                                else{?>
                                                <span class="red"><?php echo number_format($value['price_out'],0,"",".").' đ'; ?></span>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--BOOK DEC END-->
                            <?php } ?>
                            <div class="row" style="float: right">
                                <a href="<?php echo Yii::$app->homeUrl.'product/show-all-new-product-listbook?id='.$dataCat['cat_id'];?>">Xem tất cả  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>   
                        </div>
                    </div>
                    <?php } ?>
                    
                    <!--FILLTER WRAP START-->
                    <h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">Sách <?php echo $dataCat['cat_name'];  ?></h4><br/>
                    <div class="fillter-wrap">
                        <div class="row">
                            <!--SLECTRIC DEC START-->
                            <div class="col-md-4">
                                <div class="slectric-dec">
                                <?php 
                                $dataTypeFilter = array('new' => "Mới nhất",
                                                        'az' => "A đến Z",
                                                        'za' => "Z đến A",
                                                        'price_desc' => "Giá: cao đến thấp",
                                                        'price_asc' => "Giá: thấp đến cao",
                                                        'sale_desc' => "Giảm giá: cao đến thấp",
                                                        'best_seller' => "Bán chạy nhất", );
                                $pager=1; 
                                $url="listbook";
                                $view="grid";
                                if(isset($_GET['page'])){
                                $pager=$_GET['page'];
                                } ?>
                                    <select id="selectFilter" class="grid" onchange="changeStatus('<?= $url?>',this.value,<?= $dataCat['cat_id']?>,<?= $pager?>, this.className,$('#selectPager').val())">
                                    <?php 
                                    foreach ($dataTypeFilter as $keyFi => $valueFi) {?>
                                       <option value="<?= $keyFi?>"><?= $valueFi ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!--SLECTRIC DEC END-->
                            <!--SLECTRIC DEC START-->
                            <div class="col-md-4">
                                <div class="slectric-dec">
                                    <select id="selectPager" class="grid" onchange="changeStatus('<?= $url?>',$('#selectFilter').val(),<?= $dataCat['cat_id']?>,<?= $pager?>, this.className,this.value)">
                                        <option value="8">8 sản phẩm/trang</option>
                                        <option value="16">16 sản phẩm/trang</option>
                                        <option value="32">24 sản phẩm/trang</option>
                                        <option value="60">32 sản phẩm/trang</option>
                                    </select>
                                </div>
                            </div>
                            <!--SLECTRIC DEC END-->
                            <!--TAB DEC START-->
                            <div class="col-md-4">
                                <div class="tab-dec">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active" id="grid">
                                                <a href="javascript:void(0)"  onclick="changeStatus('<?= $url?>',$('#selectFilter').val(),<?= $dataCat['cat_id']?>,<?= $pager?>,'grid',$('#selectPager').val())" title="grid" >
                                                <i class="fa fa-th-large"></i>
                                                </a>
                                            </li>
                                            <li role="presentation" id="list">
                                                <a href="javascript:void(0)"  onclick="changeStatus('<?= $url?>',$('#selectFilter').val(),<?= $dataCat['cat_id']?>,<?= $pager?>,'list',$('#selectPager').val())" title="list" >
                                                <i class="fa fa-th-list"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                            <!--TAB DEC END-->
                        </div>
                    </div>
                    <!--FILLTER WRAP END-->
                    <div class="blog-grid3" id="content-column">
                        <div class="row">
                            <?php 
                            foreach ($dataPro as $key => $value) {

                               ?>
                               <!--BOOK DEC START-->
                               <div class="col-md-3 col-sm-4">
                                <div class="book-tab-dec">
                                    <figure>
                                        <a class="pro_mage" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                                        <?php 
                                            if($value['sale']>0){
                                             ?>
                                                <figcaption class="ribbon-wrap">
                                                    <span class="ribbon">-<?php echo $value['sale'].'%' ?></span>
                                                </figcaption>
                                            <?php } ?>
                                        <div class="button-container">
                                            <div class="cart-button title_font"> 
                                                <a class="button_cart button ajax_add_to_cart_button btn btn-default" href="javascript:void(0)" rel="nofollow" title="Mua ngay" data-id-product="10" data-minimal_quantity="1" onclick="addCart(<?= $value['product_id']?>)"> <i class="icon-shopping-cart"></i> <span>Mua Ngay</span> </a>

                                                <a class="quick-view" title="Xem chi tiết" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>" rel="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    

                                                </a> 
                                                <a class="addToWishlist wishlistProd_10" title="Thêm vào yêu thích" href="#" rel="nofollow" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">
                                                   <i id="iconwish_<?php echo $value['product_id']; ?>" class="fa fa-heart" aria-hidden="true"></i>
                                                   
                                               </a> 
                                               
                                            </a>
                                        </div>

                                    </div>
                                </figure>
                                <div class="text">

                                    <div class="row" style="height: 40px">
                                        <a class="ahover" style="float: left;" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><?php echo $value['product_name']; ?></a>
                                    </div>
                                    <?php 
                                    $modelFeed=new Feedback();
                                    $rating = $modelFeed->AVGRating($value['product_id']);
                                    if($rating>=3.5){
                                     ?>
                                    <div class="row">
                                        <?php 
                                            
                                            echo StarRating::widget([
                                                'name' => 'rating',
                                                'value' =>$modelFeed->AVGRating($value['product_id']),
                                                'pluginOptions' => [
                                                'displayOnly' => true,
                                                
                                                'size' => '14px',
                                                ]
                                            ]); 
                                        ?>
                                    </div>
                                    <?php } ?>
                                    <div class="row author">
                                        <?php echo $value['author_name']; ?>
                                    </div>
                                    <div class="row" style="float: left;">
                                        <?php 
                                        if($value['sale']!=0){
                                            $ban=$value['price_out']*(100-$value['sale'])/100;
                                            ?>
                                            <del><?php echo number_format($value['price_out'],0,"",".").' đ'; ?></del>
                                        
                                            <span class="red"><?php echo number_format($ban,0,"",".").' đ';?> </span>
                                            <?php }
                                            else{?>
                                            <span class="red"><?php echo number_format($value['price_out'],0,"",".").' đ'; ?></span>
                                            <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--BOOK DEC END-->
                        <?php } ?>   
                    </div>
                </div>
            </div>
            <!--KODDE PAGINATION START-->
            <div class="col-md-12">
                <div class="kf-pagination">
                <?php 
                // echo "<pre>";print_r($pages);die();
                $total_page=1;
                $page=1;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    $a=$pages->totalCount % $_GET['per-page'];
                    if($a == 0){
                        $total_page = $a;
                    }
                    else{
                        $total_page = $a+1;
                    }
                    
                }
                 ?>
                    <span class="group-paging-label">Trang <?php echo $page.'/'.$total_page; ?></span>
                    
                    <?php 
                    $id=$dataCat['cat_id'];
                    // echo "<pre>";print_r($page);die();
                    echo LinkPager::widget([
                        'pagination' => $pages,
                        'firstPageLabel' => 'first',
                        'lastPageLabel' => 'last',
                        'prevPageLabel' => '<span class="glyphicon glyphicon-chevron-left"></span>',
                        'nextPageLabel' => '<span class="glyphicon glyphicon-chevron-right"></span>',
                        'maxButtonCount' => 5,

                        'linkOptions' => [
                        'class' => '',
                        'onclick'=>"changeStatus('$url',$('#selectFilter').val(),$id,this.id,'$view',$('#selectPager').val())"
                        ],
                        'activePageCssClass' => 'active',
                        // 'disabledPageCssClass' => 'mydisable',

                        // 'prevPageCssClass' => 'mypre',
                        // 'nextPageCssClass' => 'mynext',
                        // 'firstPageCssClass' => 'myfirst',
                        // 'lastPageCssClass' => 'mylast',
                        ]);
                        ?>
                </div>
            </div>
                    <!--KODDE PAGINATION END-->
                </div>
            </div>
        </div>
    </div>
    <!--GRID 4 WRAP END-->
    <!--BRAND SLIDER WRAP START-->
    <section class="bran-slider-wrap">
        <div class="container">
            <!--HEADING 1 START-->
            <div class="heading-1">
                <h2>Featured PUBLISHERS</h2>
                <span>Lorem ipsum dolor sit consectetuer</span>
            </div>
            <!--HEADING 1 END-->
            <div class="row">
                <div class="brand-slider">
                    <div id="brand-slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <a href="#"><img src="images/brand1.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/brand2.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/brand3.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/brand4.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/brand5.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/brand6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BRAND SLIDER WRAP END-->
    <!--TRACKING BAR START-->
    <div class="tracking-bar">
        <div class="container">
            <div class="text">
                <i class="icon-clock"></i>
                <h3>Where is my order/shipment?</h3>
            </div>
            <div class="text2">
                <div class="input-text">
                    <input type="text" placeholder="Email id">
                </div>
                <div class="input-text">
                    <input type="text" placeholder="Purchase id">
                </div>
                <a class="track" href="#">TRACK MY ORDER</a>
            </div>
        </div>
    </div>
    <!--TRACKING BAR END-->
</div>
