<div class="row">
    <?php 
    foreach ($dataAllPro as $key => $value) {
    ?>
    <div class="blog-list-style">
        <!--LIST STYLE DEC START-->
        <div class="list-style-dec">
            <div class="blog-thumb">
                <a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img style="padding: 10px 0px" src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>"/></a>
                
            </div>
            <div class="text">
                <div class="text3">
                    <div class="blog1-hd">
                        <div class="name-pro">
                            <span class="nameProList"><a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><?php echo $value['product_name']; ?></a></span>
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
                <?php echo $value['descript_short']; ?>
                <a class="button ajax_add_to_cart_button btn btn-default" href="javascript:void(0)" rel="nofollow" title="Mua ngay" data-id-product="10" data-minimal_quantity="1" onclick="addCart(<?= $value['product_id']?>)"> <i class="icon-shopping-cart"></i> <span>Mua ngay</span> </a>
                <a class="like-2" href="#"><i class="icon-heart"></i></a>
            </div>
        </div>
        <!--LIST STYLE DEC END-->
    </div>
    <?php } ?>
</div>