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
<div class="row" style="margin: 0">
    <h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px"><?php echo $valueW['widget_name']; ?></h4><br/>
    <div class="blog-grid3" >
        <div class="row" style="margin: 0">
        <?php 
        foreach ($dataPro as $key => $value) {

         ?>
            <!--BOOK DEC START-->
            <div class="col-md-12 col-sm-12" style="">
                <div class="book-tab-dec book-home">
                    <div class="row">
                        <div class="col-md-5">
                            <figure class="figure-home-seller">
                                <a class="pro_mage" href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img class="img_pro_show" src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                                <?php 
                                if($value['sale']>0){
                                 ?>
                                    <figcaption class="ribbon-wrap">
                                        <span class="ribbon">-<?php echo $value['sale'].'%' ?></span>
                                    </figcaption>
                                <?php } ?>
                                
                            </figure>
                        </div>
                        <div class="col-md-7">
                            <div class="text" style="font-size: 12px;padding-left: 0">
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
                </div>
            </div>
            <!--BOOK DEC END-->
         <?php } ?>   
        </div>
        <?php
        if(!$valueW['cat_parent']){ ?>
        <div class="row" style="float: right; margin-right: 30px;">
            <a href="<?php echo Yii::$app->homeUrl.'product/sach-ban-chay-nhat';?>">Xem tất cả  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
        <?php }?>
        
    </div>
</div>
<?php }} ?>
