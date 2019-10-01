<!doctype html>
<html>
<head>

<script type="text/javascript" src="<?= Yii::getAlias('@web')?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= Yii::getAlias('@web')?>/js/turn.min.js"></script>
<style type="text/css">
html, body {
    margin: 0;
    height: 92%;
}

body.hide-overflow {
    overflow: hidden;
}

/* helpers */

.t {
    display: table;
    width: 100%;
    height: 100%;
    padding: 5px 0;
    background-color: #ccc;
}

.tc {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.rel {
    position: relative;
}

/* book */

.book {
    margin: 0 auto;
    width: 100%;
    height: 100%;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.book .page {
    height: 100%;
}

.book .page img {
    max-width: 100%;
    height: 100%;
    width: 100%;
}
</style>
</head>
<body>
<div class="row">
	<div class="col-md-2" id="content-left">
		<div class="row">
			<div class="col-md-5">
				<img style="width: 100%;height: auto;" src="<?= $dataDetail['image']?>">
			</div>
			<div class="col-md-7 classfont" style="font-size: 13px;line-height: 10px">
				<div class="row">
					<div class="col-md-12 " style="font-size: 15px; font-weight: bold;"><?= $dataDetail['product_name']?></div>
					<div class="col-md-12"><?= $dataDetail['author_name']?></div>
					<div class="col-md-12 red"><?php $ban=$dataDetail['price_out']*(100-$dataDetail['sale'])/100;
												 echo number_format($ban,0,"",".").'đ';?>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
			<a  style="width: 80%;margin: 15px 0px 0px 15px;" class="button_cart button ajax_add_to_cart_button btn btn-default"  href="javascript:void(0)" rel="nofollow" title="Mua ngay" data-id-product="10" data-minimal_quantity="1" onclick="addCart(<?= $dataDetail['product_id']?>)"> <i class="icon-shopping-cart"></i> <span>Mua Ngay</span> </a>
		</div>
	</div>
	<div class="col-md-7"  >
		<div class="t">
		    <div class="tc rel">
		    	<div id="zoom-viewport">
			        <div class="book" id="book">
			        	<div class="page"><img src="<?= $dataDetail['image']?>" alt="" /></div>
			        	 <?php 
					    foreach ($dataimage as $key => $value) {
						$link=str_replace('../../', '', $value['img_link']);

						?>
						<div class="page"><img src="<?= Yii::$app->homeUrl.$link?>" alt="" /></div>

						<?php }?>
			            <div class="page"><img src="<?= $dataDetail['image_after']?>" alt="" /></div>
			            
			        </div>
			    </div>
		    </div>
		</div>

		<script>
		/*
		 * Turn.js responsive book
		 */

		/*globals window, document, $*/

		(function () {
		    'use strict';

		    var module = {
		        ratio: 1.38,
		        init: function (id) {
		            var me = this;

		            // if older browser then don't run javascript
		            if (document.addEventListener) {
		                this.el = document.getElementById(id);
		                this.resize();
		                this.plugins();

		                // on window resize, update the plugin size
		                window.addEventListener('resize', function (e) {
		                    var size = me.resize();
		                    $(me.el).turn('size', size.width, size.height);
		                });
		            }
		        },
		        resize: function () {
		            // reset the width and height to the css defaults
		            this.el.style.width = '';
		            this.el.style.height = '';

		            var width = this.el.clientWidth,
		                height = Math.round(width / this.ratio),
		                padded = Math.round(document.body.clientHeight * 0.9);

		            // if the height is too big for the window, constrain it
		            if (height > padded) {
		                height = padded;
		                width = Math.round(height * this.ratio);
		            }

		            // set the width and height matching the aspect ratio
		            this.el.style.width = width + 'px';
		            this.el.style.height = height + 'px';

		            return {
		                width: width,
		                height: height
		            };
		        },
		        plugins: function () {
		            // run the plugin
		            $(this.el).turn({
		                gradients: true,
		                acceleration: true
		            });
		            // hide the body overflow
		            document.body.className = 'hide-overflow';
		        }
		    };

		    module.init('book');
		}());
		
		</script>
		
	</div>
	<div class="col-md-3" id="content-right">
		
		<div class="row">
			<div class="col-md-7">
				<span class="classfont" style="font-size: 17px">Sách vừa xem</span>
			</div>
			<div class="col-md-5">
				<a class="left carousel-control" href="#myCarousel" style="position: relative;padding: 15px;margin-left:20px;" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
	          	<a class="right carousel-control" href="#myCarousel" style="position: relative;padding: 15px;" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
		<div class="col-md-12">
	        
		<div class="carousel slide" data-ride="carousel" data-interval="false" data-type="multi" data-interval="3000" id="myCarousel">
	      <div class="carousel-inner">
	        <?php 
	        $i=0;
	        foreach ($preview_session as $key => $value) {
	            $i++;
	             if($i==1){
	          ?>
	        <div class="item active">
	        <?php }
	        else{ ?>
	            <div class="item">
	        <?php } ?>
	                <div class="col-md-12 col-sm-12 col-xs-12" style="">
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

                                <div class="col-md-12" >
	                            	<a href="<?= Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>" class="ahover blue">Xem chi tiết</a>
	                            </div>
                            </div>
                            
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
</body>
<script type="text/javascript">
	// caroulser
		$('.carousel[data-type="multi"] .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
		    next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));
		  
		  for (var i=0;i<1;i++) {
		    next=next.next();
		    if (!next.length) {
		    	next = $(this).siblings(':first');
		  	}
		    next.children(':first-child').clone().appendTo($(this));
		  }
		});
</script>
</html>



