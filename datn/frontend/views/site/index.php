<?php
use frontend\widgets\mainBannerWidget;
use frontend\widgets\homeNewProductWidget;
use frontend\widgets\homeWishlistWidget;
use frontend\widgets\homeBigSaleWidget;
use frontend\widgets\homeBestSellerWidget;

use frontend\models\Wishlist;
use frontend\models\Feedback;
use kartik\rating\StarRating;
/* @var $this yii\web\View */

$this->title = 'hahaBook';
?>
<?= mainBannerWidget::widget()?>
<div class="kf_content_wrap" style="margin-top: 60px; padding: 0 20px">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-9" style="padding: 0 20px 0 0">
                    <section class="widget">
                        <div class="">
                            <?= homeNewProductWidget::widget()?>
                        </div>
                    </section>
                    <section class="widget">
                        <div class="">
                            <?= homeBigSaleWidget::widget()?>
                        </div>
                    </section>
                    
                </div>
                <div class="col-md-3">
                    <div class="show-right">
                            <?= homeBestSellerWidget::widget()?>
                    </div>

                    <div class="show-right" style="margin-top: 15px">
                            <?= homeWishlistWidget::widget()?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        $session = Yii::$app->session;
        $preview=$session['preview'];
        $modelWishlist = new Wishlist();
        $wishlist = $modelWishlist->getWishlist();
        
        $array=array();
        if($preview!=null && $wishlist!=null){
            $array1=array_merge($preview, $wishlist);
            $array=array_unique ($array);
        }
        elseif($preview!=null && $wishlist==null){
            $array=$preview;
        }
        elseif($preview==null && $wishlist!=null){
            $array=$wishlist;
        }
        if($array!=null){
         ?>
        <div class="row">
            <div class="container">
                <div class="interest">
                    <h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">Có thể bạn quan tâm những sách này</h4><br/>
                        
                        <div class="col-md-10 col-md-offset-1">
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

                            <div class="carousel slide" data-ride="carousel" data-interval="false" data-type="multi" data-interval="3000" id="myCarousel">
                              <div class="carousel-inner">
                                <?php 
                                $i=0;
                                foreach ($array as $key => $value) {
                                    $i++;
                                     if($i==1){
                                  ?>
                                <div class="item active">
                                <?php }
                                else{ ?>
                                    <div class="item">
                                <?php } ?>
                                        <div class="col-md-2 col-sm-4 col-xs-6">
                                            <div class="book-tab-dec">
                                                <figure style="height: 180px">
                                                    <a class="pro_mage" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img style="max-height: 170px"class="img_pro_show" src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                                                    <?php 
                                                    if($value['sale']>0){
                                                     ?>
                                                        <figcaption class="ribbon-wrap">
                                                            <span class="ribbon">-<?php echo $value['sale'].'%' ?></span>
                                                        </figcaption>
                                                    <?php } ?>       
                                                </figure>
                                                <div class="text" style="font-size: 12px;padding-left: 10px;">
                                                    <div class="row" style="height: 40px">
                                                        <a class="ahover" style="float: left;" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><?php echo $value['product_name']; ?></a>
                                                    </div>
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
                                    </div>
                                <?php  }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php }
        ?>
    </div>
    
</div>
