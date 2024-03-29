<?php 
use frontend\models\Widget;
use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Feedback;
use kartik\rating\StarRating;

$dataWidget = Widget::find()->asArray()->where('widget.condition="wish" and status=1')->all();
if($dataWidget){
    foreach ($dataWidget as $keyW => $valueW) {
        $dataCat = Category::find()->asArray()->where('category.cat_id='.$valueW['cat_parent'])->one();
        $modelFeed = new Feedback();
        $dataPro="";
        if($valueW['cat_parent']==0){
            $dataPro = $modelFeed->reportFeedback(4);
            // echo "<pre>";print_r($dataPro);die;
        }
        else{
            $dataPro = $modelFeed->reportFeedbackByCategory($valueW['cat_parent'],4);
        }
 ?>
<div class="row">
    <h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px"><?php echo $valueW['widget_name']; ?></h4><br/>
    <div class="blog-grid3">
        <div class="row">
        <?php 
        foreach ($dataPro as $key => $value) {

         ?>
            <!--BOOK DEC START-->
            <div class="col-md-3 col-sm-3">
                <div class="book-tab-dec">
                    <figure>
                        <a class="pro_mage" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img class="img_pro_show" src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                        <?php 
                        if($value['sale']>0){
                         ?>
                            <figcaption class="ribbon-wrap">
                                <span class="ribbon">-<?php echo $value['sale'].'%' ?></span>
                            </figcaption>
                        <?php } ?>
                        
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
        </div>  
    </div>
</div>
<?php }} ?>
