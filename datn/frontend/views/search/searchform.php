<?php 
use frontend\models\Category;
use frontend\models\Product;
use yii\widgets\LinkPager;
                            
$this->title = 'Tìm kiếm';


$this->params['breadcrumbs'][] = $this->title;
// echo "<pre>";print_r($listcatsup);die();
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
                                            <li style="border-bottom: 0"><a href="<?php echo Yii::$app->homeUrl.'product/show-all-new-pro-store';?>"><strong>sách mới phát hành</strong></a></li>
                                        </ul>
                                    </div>

                                    <div class="accordion" id="section1">
                                        <span style="font-size: 20px;color: #1ABC9C">Danh mục</span>
                                    </div>
                                    <div class="accordion-content">
                                        <ul class="side-meta">
                                        
                                            <?php 
                                                $i=0;
                                                foreach ($dataCatParent as $key => $value) {
                                                    $modelSubCategory=new Category();
                                                    $dataSub= $modelSubCategory->getCategory($value['cat_id']);
                                                    
                                                    $i++;
                                                    $modelPro = new Product();
                                                    $dataCountPro = $modelPro->totalProductByCat($value['cat_id']);
                                                    $count=0;
                                                    foreach ($dataCountPro as $keyC => $valueC) {
                                                        $count+=$valueC['count_pro'];
                                                    }
                                                     
                                             ?>
                                            <li><a href="<?=Yii::$app->homeUrl?>product/index?id=<?php echo $value['cat_id'];?>"><?=  $value['cat_name']?><span class="count"> (<?php echo $count; ?>)</span></a>

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
                        <!--WIDGET CATEGORIES WRAP END-->
                        <!--WIDGET RANGE SLIDER START-->
                        <div class="side-fillter">
                            <!--WIDGET HEADING START-->
                            <div class="aside-widget-hd">
                                <h5>Filter by Price</h5>
                            </div>
                            <!--WIDGET HEADING END-->
                            <!--WIDGET RANGE SLIDER START-->
                            <div class="widget-padding">
                                <div class="slider-range"></div>
                                <div class="rangsldr-meta">
                                    <span>Price:</span>
                                    <input type="text" class="amount" readonly>
                                    <a href="#" class="add-cart">Filter</a>
                                </div>
                            </div>
                            <!--WIDGET RANGE SLIDER END-->
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
                        <!--FILLTER WRAP START-->
                        <h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">Kết quả tìm kiếm <span style="color: #000"><?php echo $question; ?></span></h4><br/>
                        <?php 
                        if(!$question){
                            echo "Không có sách hoặc sản phẩm nào phù hợp với thông tin bạn tìm kiếm. Vui lòng thử lại với từ khóa khác.";
                        }
                        else{  
                         ?>
                    
                        <?php } ?>
                        <!--FILLTER WRAP END-->
                        <div class="blog-grid3" id="content-column">
                            <div class="row">
                            <?php 
                            foreach ($dataSearch as $key => $value) {

                             ?>
                                <!--BOOK DEC START-->
                                <div class="col-md-3 col-sm-4">
                                    <div class="book-tab-dec">
                                        <figure>
                                            <a class="pro_mage" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                                            <figcaption class="ribbon-wrap">
                                                <span class="ribbon">-<?php echo $value['sale'].'%' ?></span>
                                            </figcaption>
                                            <div class="button-container">
                                                <div class="cart-button title_font"> 
                                                    <a class="button_cart button ajax_add_to_cart_button btn btn-default" href="javascript:void(0)" rel="nofollow" title="Add to cart" data-id-product="10" data-minimal_quantity="1" onclick="addCart(<?= $value['product_id']?>)"> <i class="icon-shopping-cart"></i> <span>Add to cart</span> </a>

                                                    <a class="quick-view" title="Xem chi tiết" href="" rel="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    <span class="tapbtn">Quick view</span> 

                                                </a> 
                                                <a class="addToWishlist wishlistProd_10" title="Thêm vào yêu thích" href="#" rel="nofollow" onclick="WishlistCart(<?= $value['product_id']?>)">
                                                 <i  id="iconwish_<?php echo $value['product_id']; ?>" class="fa fa-heart" aria-hidden="true"></i>
                                                 <span class="tapbtn">Add to wishlist</span> 
                                                 </a> 
                                                 <a class="add_to_compare" title="Add to compare" href="" data-id-product="10" data-product-cover="" data-product-name="Convallis Pharetra"> 
                                                <i class="fa fa-plus" aria-hidden="true"></i> 
                                                <span class="tapbtn">Add to compare</span>
                                            </a>
                                                </div>
                                                
                                    </div>
                                        </figure>
                                        <div class="text">
                                            
                                            <div class="rating">
                                                <span style="float: left;"><a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><?php echo $value['product_name']; ?></a></span>
                                                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>

                                            <div class="author">
                                                <span><?php echo $value['author_name']; ?></span>
                                            </div>
                                            <div class="price">
                                                <span class="price-tag" style="">
                                                <?php if($value['sale']>0){
                                                 ?>
                                                <del><?php echo number_format($value['price_out'],0,"",".").' đ'; ?></del>
                                                <?php }
                                                 
                                                $ban=$value['price_out']*(100-$value['sale'])/100;
                                                ?>
                                                <span class="red">
                                                <?php echo number_format($ban,0,"",".").' đ';
                                                ?>  
                                                </span> 
                                            </span>
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
                        //echo "<pre>";print_r($pages);die();
                        // $total_page=1;
                        // $a=$pages->totalCount % $pages->limit;
                        // if($a == 0){
                        //     $total_page = $a;
                        // }
                        // else{
                        //     $total_page = $a+1;
                        // }
                        // $page=1;
                        // if(isset($_GET['page'])){
                        //     $page = $_GET['page'];
                        // }
                        //  ?>
                        //     <span class="group-paging-label">Trang <?php //echo $page.'/'.$total_page; ?></span>
                            
                        //     <?php 
                            
                        //         echo LinkPager::widget([
                        //         'pagination' => $pages,
                        //         'firstPageLabel' => 'first',
                        //         'lastPageLabel' => 'last',
                        //         'prevPageLabel' => '<span class="glyphicon glyphicon-chevron-left"></span>',
                        //         'nextPageLabel' => '<span class="glyphicon glyphicon-chevron-right"></span>',
                        //         'maxButtonCount' => 5,

                        //         'linkOptions' => ['class' => 'page_active'],
                        //         'activePageCssClass' => 'active',
                        //         // 'disabledPageCssClass' => 'mydisable',

                        //         // 'prevPageCssClass' => 'mypre',
                        //         // 'nextPageCssClass' => 'mynext',
                        //         // 'firstPageCssClass' => 'myfirst',
                        //         // 'lastPageCssClass' => 'mylast',
                        //     ]);
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

