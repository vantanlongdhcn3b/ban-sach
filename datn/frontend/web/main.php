<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="kode_wrapper">
	   <!-- register Modal -->
	    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
			<div class="modal-dialog login1">
				<div class="modal-content">
					<div class="user-box">
						<!--FORM FIELD START-->
						<form>
							<div class="input-dec3">
								<input type="text" placeholder="E-mail">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="input-dec3">
								<input type="text" placeholder="Password">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="dialog-footer">
								<button class="dialog-button">Register</button>
							</div>
						</form>
						<!--FORM FIELD END-->
					</div>
				</div>
				<div class="clearfix"></div>    
			</div>
	    </div>
	    <!-- register Modal end-->
	    
	    <!-- SIGNIN MODEL START -->
	    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
			<div class="modal-dialog login1">
				<div class="modal-content">
					<div class="user-box">
						<!--FORM FIELD START-->
						<form>
							<div class="input-dec3">
								<input type="text" placeholder="E-mail">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="input-dec3">
								<input type="text" placeholder="Password">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="dialog-footer">
								<button class="dialog-button">Login</button>
								<a href="#">Forgot Password<i class="fa fa-question-circle"></i></a>
							</div>
						</form>
						<!--FORM FIELD END-->
					</div>
				</div> 
				<div class="clearfix"></div>  
			</div>
	    </div>
	    <!-- SIGNIN MODEL END -->
  		<!--HEADER START-->
    	<header class="header-1">
    		<!--TOP BAR START START-->
    		<div class="top-bar">
    			<div class="container">
	    			<div class="pull-left">
	    				<ul>
	    					<li><i class="fa fa-paper-plane"></i><a href="#">Free shipping on orders above $100</a></li>
	    					<li>
	    						<!-- Single button -->
								<div class="dropdown lang-wrap">
								  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    							<i class="fa fa-globe"></i>
								    English
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dLabel">
								    <li><a href="#"><img src="images/laung-1.jpg" alt="">English (UK)</a></li>
								    <li><a href="#"><img src="images/laung-2.jpg" alt="">English (US)</a></li>
								    <li><a href="#"><img src="images/laung-3.jpg" alt="">German</a></li>
								    <li><a href="#"><img src="images/laung-4.jpg" alt="">Russian</a></li>
								    <li><a href="#"><img src="images/laung-5.jpg" alt="">Chinese</a></li>
								    <li><a href="#"><img src="images/laung-6.jpg" alt="">Philippines</a></li>
								  </ul>
								</div>
							</li>
	    				</ul>
	    			</div>
	    			<div class="pull-right">
	    				<div class="user-wrap">
	    					<div class="wishlist-wrap">
	    						<i class="fa fa-heart"></i>
	    						<!-- Single button -->
								<div class="dropdown">
									<em>Wishlist:</em>
								  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    0 items
								    <span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="dLabel">
								    <li><a href="#">1</a></li>
								    <li><a href="#">2</a></li>
								    <li><a href="#">3</a></li>
								    <li><a href="#">4</a></li>
								  </ul>
								</div>
	    					</div>
	    					<div class="user-dec">
	    						<i class="fa fa-sign-in"></i>
	    						<a href="#" data-toggle="modal" data-target="#signin-box">Sign In</a>
	    						<a href="#" data-toggle="modal" data-target="#reg-box">Register</a>
	    					</div>
	    				</div>
	    				<ul class="social-1">
	    					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	    					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	    					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	    					<li><a href="#"><i class="fa fa-rss"></i></a></li>
	    				</ul>
	    			</div>
	    		</div>
    		</div>
    		<!--TOP BAR END-->
    		<!--LOGO WRAP START-->
    		<div class="logo-wrap">
    			<div class="container">
    				<!--LOGO DEC START-->
	    			<div class="logo-dec">
	    				<a href="index.html">
	    				
	    				<span>B</span>
	    				<img class="icon-logo" src="images/harry-potter-logo.png" alt=""/>
	    				<span>K</span>
	    				
	    				</a>
	    			</div>
	    			<!--LOGO DEC END-->
	    			<!--SEARCH WRAP START-->
	    			<div class="searh-wrap">
	    				<ul class="tags-1">
	    					<li><a href="#">How to Order</a></li>
	    					<li><a href="#">Payment</a></li>
	    					<li><a href="#">Shipping</a></li>
	    					<li><a href="#">Return</a></li>
	    					<li><span>Call Us: +92 42 588 6785</span></li>
	    				</ul>
	    				<form>
	    					<div class="select-menu">
		    					<select>
	                                <option value="1">book</option>
	                                <option value="9">novel</option>
	                                <option value="2">books</option>
	                                <option value="3">Select 4</option>
	                                <option value="6">Select 5</option>
	                                <option value="8">Select 6</option>
	                            </select>
                            </div>
                            <div class="text-filed-1">
                            	<input type="text" placeholder="Search by title, author, subject or ISBN here...  ">
                            	<button><i class="fa fa-search"></i></button>
                            </div>
	    				</form>
	    			</div>
	    			<!--SEARCH WRAP END-->
	    			<!--CART WRAP START-->
	    			<div class="cart-wrap">
	    				
		    			<!--DL Menu Start-->
			            <div id="kode-responsive-navigation" class="dl-menuwrapper">
			                <button class="dl-trigger">Open Menu</button>
			                <ul class="dl-menu">
								<li><a href="index-2.html">home</a>
									<ul class="dl-submenu">
			                           <li><a href="index-3.html">index 2</a></li>
			                        </ul>
								</li>
			                    <li class="menu-item kode-parent-menu"><a href="#">Pages</a>
			                        <ul class="dl-submenu">
			                           <li><a href="login-forms.html">login forms</a></li>
	    								<li><a href="comingsoon.html">coming soon</a></li>
	    								<li><a href="checkout.html">check out</a></li>
	    								<li><a href="404.html">404</a></li>
	    								<li><a href="widgets.html">widgets</a></li>
	    								<li><a href="shortcode.html">shortcode</a></li>
			                        </ul>
			                    </li>
			                    <li class="menu-item kode-parent-menu"><a href="about-author.html">about author</a>
			                    </li>
			                    <li class="menu-item kode-parent-menu"><a href="#">products</a>
			                        <ul class="dl-submenu">
			                            <li><a href="product-detail.html">product detail</a></li>
		    							<li><a href="product-detail2.html">product detail 2</a></li>
		    							<li><a href="product-detail3.html">product detail 3</a></li>
		    							<li><a href="grid_03_columns.html">product 3 col</a></li>
		    							<li><a href="grid_04_columns.html">product 4 col</a></li>
			                        </ul>
			                    </li>
			                    <li class="menu-item kode-parent-menu"><a href="#">blog</a>
			                        <ul class="dl-submenu">
			                            <li><a href="blog-classic.html">blog-classic</a></li>
		    							<li><a href="blog-detail.html">blog-detail</a></li>
		    							<li><a href="blog-detail-fullwidth.html">blog detail 2</a></li>
		    							<li><a href="blog-full-width.html">blog full width</a></li>
		    							<li><a href="blog_masonry_2_columns.html">blog masonry</a></li>
		    							<li><a href="blog-grid2.html">blog 2</a></li>
		    							<li><a href="list-style_01_columns.html">list style 1</a></li>
		    							<li><a href="list-style_01_sidebar.html">list style sidebar</a></li>
			                        </ul>
			                    </li>
			                    <li><a href="contact-us.html">Contact Us</a></li>
			                </ul>
			            </div>
			            <!--DL Menu END-->
	    				<a href="#"><i class="fa fa-truck"></i></a>
	    				<div class="cart">
	    					<div class="show2">
		    					<i class="icon-shopping-cart"></i>
		    					<small>2</small>
		    					<span>Giỏ hàng rỗng</span>
		    				</div>
		    				<div class="cart-form">
		    					<ul>
		    						<li>
		    							<div class="thumb">
		    								<a href="#"><img src="extra-images/cart.jpg" alt=""></a>
		    							</div>
		    							<div class="text">
		    								<span>Book Name</span>
		    								<p>1 x $59.00</p>
		    								<a class="closed" href="#">x</a>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="thumb">
		    								<a href="#"><img src="extra-images/cart.jpg" alt=""></a>
		    							</div>
		    							<div class="text">
		    								<span>Book Name</span>
		    								<p>1 x $59.00</p>
		    								<a class="closed" href="#">x</a>
		    							</div>
		    						</li>
		    						<li>
		    							<div class="thumb">
		    								<a href="#"><img src="extra-images/cart.jpg" alt=""></a>
		    							</div>
		    							<div class="text">
		    								<span>Book Name</span>
		    								<p>1 x $59.00</p>
		    								<a class="closed" href="#">x</a>
		    							</div>
		    						</li>
		    					</ul>
		    					<div class="cart-footer">
		    						<a class="ad-cart" href="#"><i class="fa fa-cart-arrow-down"></i>View Cart</a>
		    						<a class="cart-chekout" href="#"><i class="fa fa-mail-forward"></i>checkout</a>
		    					</div>
		    				</div>
	    				</div>
	    			</div>
	    			<!--CART WRAP END-->
	    		</div>
    		</div>
    		<!--LOGO WRAP END-->
    		<!--NAVIGATION WRAP START-->
    		<div class="container-fluid nav-container">
    			<div class="navigation-wrap">
    				<!--CATEGORIES WRAP START-->
    				<div class="categories-menu">
						<span>CATEGORIES</span>
					    <i class="fa fa-reorder show"></i>
					    <ul class="categories-ul">
					    	<li><a href="#"><i class="fa fa-image"></i>Kho sách giảm giá</a>
					    		<!--MEGA MENU START-->
					    		<div class="mega-menu1">
					    			<div class="fetch-book2">
					    				<h4>Featured BOOK</h4>
					    				<figure>
					    					<img src="extra-images/featured-4.jpg" alt="">
					    					<figcaption>
					    						<span class="pricelable">
					    							<sub>$</sub>29.00
					    						</span>
					    					</figcaption>
					    				</figure>
					    				<div class="text">
					    					<h6>He LIE TREE</h6>
					    					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud rem.</p>
					    					<a class="btn-1" href="#">read more</a>
					    					<a class="btn-1 active" href="#">purchase</a>
					    				</div>
					    			</div>
					    			<div class="fetch-bookmtea">
					    				<ul>
					    					<li class="fetch-book2">
					    						<h4>BIOGRAPHIES</h4>
					    					</li>
					    					<li>
					    						<a href="#">Historical, Political & Military</a>
					    					</li>
					    					<li>
					    						<a href="#">Business & Industry</a>
					    					</li>
					    					<li>
					    						<a href="#">Science, Technology & Medicine</a>
					    					</li>
					    					<li>
					    						<a href="#">Literary</a>
					    					</li>
					    					<li>
					    						<a href="#">individual Composers & Musicians, </a>
					    					</li>
					    					<li>
					    						<a href="#">Specific Bands & Groups</a>
					    					</li>
					    					<li>
					    						<a href="#">Historical, Political & Military</a>
					    					</li>
					    					<li>
					    						<a href="#">More...</a>
					    					</li>
					    				</ul>
					    			</div>
					    		</div>
					    		<!--MEGA MENU END-->
					    	</li>
					    	<li><a href="#"><i class="icon-ascending-line-graphic-of-business-stats"></i>Sách bán chạy</a>
					    		<!--MEGA MENU START-->
					    		<div class="mega-menu1">
					    			<div class="fetch-bookmtea">
					    				<ul>
					    					<li class="fetch-book2">
					    						<h4>BIOGRAPHIES</h4>
					    					</li>
					    					<li>
					    						<a href="#">Historical, Political & Military</a>
					    					</li>
					    					<li>
					    						<a href="#">Business & Industry</a>
					    					</li>
					    					<li>
					    						<a href="#">Science, Technology & Medicine</a>
					    					</li>
					    					<li>
					    						<a href="#">Literary</a>
					    					</li>
					    					<li>
					    						<a href="#">individual Composers & Musicians, </a>
					    					</li>
					    					<li>
					    						<a href="#">Specific Bands & Groups</a>
					    					</li>
					    					<li>
					    						<a href="#">Historical, Political & Military</a>
					    					</li>
					    					<li>
					    						<a href="#">More...</a>
					    					</li>
					    				</ul>
					    			</div>
					    			<div class="fetch-book2">
					    				<h4>Featured BOOK</h4>
					    				<figure>
					    					<img src="extra-images/featured-4.jpg" alt="">
					    					<figcaption>
					    						<span class="pricelable">
					    							<sub>$</sub>29.00
					    						</span>
					    					</figcaption>
					    				</figure>
					    				<div class="text">
					    					<h6>He LIE TREE</h6>
					    					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud rem.</p>
					    					<a class="btn-1" href="#">read more</a>
					    					<a class="btn-1 active" href="#">purchase</a>
					    				</div>
					    			</div>
					    		</div>
					    		<!--MEGA MENU END-->
					    	</li>
					    	<li><a href="#"><i class="fa fa-user"></i>Sách mới phát hành</a>
					    		<!--MEGA MENU START-->
					    		<div class="mega-menu1">
					    			<div class="fetch-book2 fetch-bookstyle2">
					    				<h4>Featured BOOK</h4>
					    				<figure>
					    					<img src="extra-images/style2.jpg" alt="">
					    					<figcaption>
					    						<span class="ribbon hot">hot</span>
					    					</figcaption>
					    				</figure>
					    				<div class="text">
					    					<h6>He LIE TREE</h6>
					    					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem.</p>
					    					<a class="btn-1" href="#">read more</a>
					    					<a class="btn-1 active" href="#">purchase</a>
					    				</div>
					    			</div>
					    			<div class="fetch-bookmtea">
					    				<ul>
					    					<li class="fetch-book2">
					    						<h4>BIOGRAPHIES</h4>
					    					</li>
					    					<li>
					    						<a href="#">Historical, Political & Military</a>
					    					</li>
					    					<li>
					    						<a href="#">Business & Industry</a>
					    					</li>
					    					<li>
					    						<a href="#">Science, Technology & Medicine</a>
					    					</li>
					    					<li>
					    						<a href="#">Literary</a>
					    					</li>
					    					<li>
					    						<a href="#">individual Composers & Musicians, </a>
					    					</li>
					    					<li>
					    						<a href="#">Specific Bands & Groups</a>
					    					</li>
					    					<li>
					    						<a href="#">Historical, Political & Military</a>
					    					</li>
					    					<li>
					    						<a href="#">More...</a>
					    					</li>
					    				</ul>
					    			</div>
					    		</div>
					    		<!--MEGA MENU END-->
					    	</li>
					    	<li><a href="#"><i class="fa fa-child"></i>Sách ngoại văn</a>
					    		<!--MEGA MENU START-->
					    		<div class="mega-menu1">
				    				<div class="col-md-4">
				    					<div class="widget widget-accordian">
				    						<div class="widget-padding">
												<!--WIDGET ACCORDIAN START-->
												<div class="side_accordian">
													<div id="section10" class="accordion accordion-close">
														<span>Our Collection</span>
													</div>
													<div class="accordion-content" style="display: none;">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div>
						                        </div>
						                        <!--WIDGET ACCORDIAN END-->
						                        <!--WIDGET ACCORDIAN START-->
												<div class="side_accordian">
													<div id="section11" class="accordion accordion-close">
														<span>Our Mission</span>
													</div>
													<div class="accordion-content" style="display: none;">
														<div class="accordion-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div>
													</div>
						                        </div>
						                        <!--WIDGET ACCORDIAN END-->
						                        <!--WIDGET ACCORDIAN START-->
												<div class="side_accordian">
													<div id="section12" class="accordion accordion-close">
														<span>Our Philosophy</span>
													</div>
													<div class="accordion-content" style="display: none;">
														<div class="accordion-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div>
													</div>
						                        </div>
						                        <!--WIDGET ACCORDIAN END-->
						                        <!--WIDGET ACCORDIAN START-->
												<div class="side_accordian">
													<div id="section13" class="accordion accordion-close">
														<span>Reviews</span>
													</div>
													<div class="accordion-content" style="display: none;">
														<div class="accordion-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div>
													</div>
						                        </div>
						                    </div>
					                    </div>
			                  		</div>
			                  		<div class="col-md-4">
			                  			<div class="widget widget-featured">
											<div class="widget-padding">
												<!--FEATURED 3 START-->
												<div class="featured-dec3">
													<figure>
														<img alt="" src="extra-images/widget-featured1.jpg">
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
														<img alt="" src="extra-images/widget-featured2.jpg">
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
											</div>
										</div>
			                  		</div>
			                  		<div class="col-md-4">
			                  			<div class="fetch-wrap">
											<div class="fetch-book2 fetch-bookstyle2">
							    				<h4>Featured BOOK</h4>
							    				<figure>
							    					<img src="extra-images/style2.jpg" alt="">
							    					<figcaption>
							    						<span class="ribbon hot">hot</span>
							    					</figcaption>
							    				</figure>
							    				<div class="text">
							    					<h6>He LIE TREE</h6>
							    					<p>Sed ut perspiciatis unde ovxxa</p>
							    					<a class="btn-1" href="#">read more</a>
							    					<a class="btn-1 active" href="#">purchase</a>
							    				</div>
							    			</div>
							    		</div>
			                  		</div>
					    		</div>
					    		<!--MEGA MENU END-->
					    	</li>
					    	<li><a href="#"><i class="fa fa-university"></i>Sách kinh tế</a></li>
					    	<li><a href="#"><i class="fa fa-laptop"></i>Sách văn học trong nước</a></li>
					    	<li><a href="#"><i class="fa fa-spoon"></i>Cooking, Food & Wine</a></li>
					    	<li><a href="#"><i class="fa fa-book"></i>Educational & Professional</a></li>
					    	<li><a href="#"><i class="fa fa-image"></i>Entertainment</a></li>
					    	<li><a href="#"><i class="fa fa-newspaper-o"></i>Entrance Exams</a></li>
					    	<li><a href="#">show more categories</a></li>
					    </ul>
					</div>
					<!--CATEGORIES WRAP END-->
					<!--NAVIGATION DEC START-->
	    			<ul class="nav-dec">
	    				<li>
	    					<a href="index-2.html">HOME</a>
	    					<ul>
	    						<li><a href="index-3.html">HOME 2</a></li>
	    					</ul>
	    				</li>
	    				<li>
	    					<a href="blog-classic.html">blog</a>
	    					<ul>
	    						<li><a href="blog-classic.html">blog-classic</a></li>
    							<li><a href="blog-detail.html">blog-detail</a></li>
    							<li><a href="blog-detail-fullwidth.html">blog detail 2</a></li>
    							<li><a href="blog-full-width.html">blog full width</a></li>
    							<li><a href="blog_masonry_2_columns.html">blog masonry</a></li>
    							<li><a href="blog-grid2.html">blog 2</a></li>
    							<li><a href="list-style_01_columns.html">list style 1</a></li>
    							<li><a href="list-style_01_sidebar.html">list style sidebar</a></li>
	    					</ul>
	    				</li>
	    				<li>
	    					<a href="#">pages</a>
	    					<ul>
	                           <li><a href="login-forms.html">login forms</a></li>
								<li><a href="comingsoon.html">coming soon</a></li>
								<li><a href="checkout.html">check out</a></li>
								<li><a href="widgets.html">widgets</a></li>
								<li><a href="shortcode.html">short code</a></li>
								<li><a href="header-style.html">header</a></li>
	                        </ul>
	    				</li>
	    				<li>
	    					<a href="#">book detail</a>
	    					<ul>
	    						<li><a href="book-detail.html">book detail 1</a></li>
    							<li><a href="book-detail2.html">book detail 2</a></li>
    							<li><a href="book-detail3.html">book detail 3</a></li>
    							<li><a href="grid_03_columns.html">book 3 col</a></li>
    							<li><a href="grid_04_columns.html">book 4 col</a></li>
	    					</ul>
	    				</li>
	    				<li>
	    					<a href="about-author.html">Author</a>
	    				</li>
	    				<li>
							<a href="404.html">404</a>
	    				</li>
	    				<li>
	    					<a href="contact-us.html">Contact Us</a>
	    				</li>
	    			</ul>
	    			<!--NAVIGATION DEC END-->
	    		</div>
    		</div>
    		<!--NAVIGATION WRAP END-->
    	</header>
		<!--HEADER END-->


		<div class="container main-banner">
			<ul class="bxslider">
				<li>
		        	<div class="slider-outer">
			        	<div class="bx-slider-wrap">
				        	<div class="container">
				        		<img class="image-1" src="images/slider-1-1.png" alt=""/>
				        		<div class="slider-caption">
				        			<div class="caption-dec">
					        			<h5>BEST SELLERS ON SALE</h5>
					        			<h3>UPTO 50% OFF</h3>
					        			<h4>+EXTRA 10% OFF</h4>
					        			<h6>Use Coupon Code : BSB20010K16</h6>
					        		</div>
					        		<a href="#">BUY NOW</a>
				        		</div>
				        		<img class="image-2" src="images/slider-1-2.png" alt=""/>
				        	</div>
				        </div>
				    </div>
				</li>
				<li>
		        	<div class="slider-outer">
			        	<div class="bx-slider-wrap">
				        	<div class="container">
				        		<img class="image-1" src="images/slider-1-1.png" alt=""/>
				        		<div class="slider-caption">
				        			<div class="caption-dec">
					        			<h5>BEST SELLERS ON SALE</h5>
					        			<h3>UPTO 50% OFF</h3>
					        			<h4>+EXTRA 10% OFF</h4>
					        			<h6>Use Coupon Code : BSB20010K16</h6>
					        		</div>
					        		<a href="#">BUY NOW</a>
				        		</div>
				        		<img class="image-2" src="images/slider-1-2.png" alt=""/>
				        	</div>
				        </div>
				    </div>
				</li>
				<li>
		        	<div class="slider-outer">
			        	<div class="bx-slider-wrap">
				        	<div class="container">
				        		<img class="image-1" src="images/slider-1-1.png" alt=""/>
				        		<div class="slider-caption">
				        			<div class="caption-dec">
					        			<h5>BEST SELLERS ON SALE</h5>
					        			<h3>UPTO 50% OFF</h3>
					        			<h4>+EXTRA 10% OFF</h4>
					        			<h6>Use Coupon Code : BSB20010K16</h6>
					        		</div>
					        		<a href="#">BUY NOW</a>
				        		</div>
				        		<img class="image-2" src="images/slider-1-2.png" alt=""/>
				        	</div>
				        </div>
				    </div>
				</li>
		   </ul>
		</div>
		<!--CUSTOMER CARE WRAP START-->
		
		<!--CUSTOMER CARE WRAP START-->

		<div class="kf_content_wrap">
			<section>
				<div class="container">
					<!--HEADING 1 START-->
					<div class="heading-1">
						<h3>Sách mới phát hành</h3>
					</div>
					<!--HEADING 1 END-->
					<div class="container">
						<div class="row">
							<ul class="nav nav-tabs">
								<li ><a href="#danhgia" data-toggle="tab">Tiểu thuyết</a></li>
								<li ><a href="#morong" data-toggle="tab">Sách thiếu nhi</a></li>
								<li><a href="#lienhe" data-toggle="tab">Ngôn tình</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="danhgia">VERY GOOD
								<div class="tabs-slider-wrap">
									<div class="row">
										<div id="tabs-slider" class="owl-carousel owl-theme">
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
										</div>
									</div>
								</div>

								</div>
								<div class="tab-pane" id="morong">KHONG CO GI

								</div>
								<div class="tab-pane" id="lienhe">19001000
									<div class="featured-slider">
						<div class="row">
							<div id="owl-demo-featured" class="owl-carousel owl-theme">
								<!--FEATURED DEC START-->
								<div class="item">
									<div class="featured-dec">
										<figure>
											<img src="extra-images/bookstore1.jpg" alt=""/>
										</figure>
										<div class="text">
											<div class="text-dec">
												<ul class="tags-2">
													<li>Category : <a href="#">FICTION</a></li>
												</ul>
												<h5><a href="#">ARGO</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
											</div>
											<div class="featured-footer">
												<span class="price-tag">
													<sub>$</sub>230.99
												</span>
												<div class="cart-2">
													<a class="like-icon" href="#"><i class="fa fa-heart"></i></a>
													<a class="cart-icon" href="#"><i class="fa fa-shopping-cart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--FEATURED DEC END-->
								<!--FEATURED DEC START-->
								<div class="item">
									<div class="featured-dec">
										<figure>
											<img src="extra-images/bookstore2.jpg" alt=""/>
											<figcaption class="ribbon-wrap">
												<span class="ribbon">Sale</span>
											</figcaption>
										</figure>
										<div class="text">
											<div class="text-dec">
												<ul class="tags-2">
													<li>Category : <a href="#">BIOGRAPHY</a></li>
												</ul>
												<h5><a href="#">Ask for what you want</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
											</div>
											<div class="featured-footer">
												<span class="price-tag red">
													<del> $96.00 </del>
													<sub>$</sub>58.00
												</span>
												<div class="cart-2">
													<a class="like-icon" href="#"><i class="fa fa-heart"></i></a>
													<a class="cart-icon" href="#"><i class="fa fa-shopping-cart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--FEATURED DEC END-->
								<!--FEATURED DEC START-->
								<div class="item">
									<div class="featured-dec">
										<figure>
											<img src="extra-images/bookstore3.jpg" alt=""/>
										</figure>
										<div class="text">
											<div class="text-dec">
												<ul class="tags-2">
													<li>Category : <a href="#">HUMAN PSYCHIC</a></li>
												</ul>
												<h5><a href="#">THE ICEBERG</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
											</div>
											<div class="featured-footer">
												<span class="price-tag">
													<sub>$</sub>99.00
												</span>
												<div class="cart-2">
													<a class="like-icon" href="#"><i class="fa fa-heart"></i></a>
													<a class="cart-icon" href="#"><i class="fa fa-shopping-cart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--FEATURED DEC END-->
								<!--FEATURED DEC START-->
								<div class="item">
									<div class="featured-dec">
										<figure>
											<img src="extra-images/bookstore1.jpg" alt=""/>
											<figcaption class="ribbon-wrap">
												<span class="ribbon">Sale</span>
											</figcaption>
										</figure>
										<div class="text">
											<div class="text-dec">
												<ul class="tags-2">
													<li>Category : <a href="#">FICTION</a></li>
												</ul>
												<h5><a href="#">ARGO</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
											</div>
											<div class="featured-footer">
												<span class="price-tag">
													<sub>$</sub>230.99
												</span>
												<div class="cart-2">
													<a class="like-icon" href="#"><i class="fa fa-heart"></i></a>
													<a class="cart-icon" href="#"><i class="fa fa-shopping-cart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--FEATURED DEC END-->
								<!--FEATURED DEC START-->
								<div class="item">
									<div class="featured-dec">
										<figure>
											<img src="extra-images/bookstore2.jpg" alt=""/>
										</figure>
										<div class="text">
											<div class="text-dec">
												<ul class="tags-2">
													<li>Category : <a href="#">FICTION</a></li>
												</ul>
												<h5><a href="#">ARGO</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
											</div>
											<div class="featured-footer">
												<span class="price-tag">
													<sub>$</sub>230.99
												</span>
												<div class="cart-2">
													<a class="like-icon" href="#"><i class="fa fa-heart"></i></a>
													<a class="cart-icon" href="#"><i class="fa fa-shopping-cart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--FEATURED DEC END-->
							</div>
						</div>
					</div>
								</div>
							</div>
						</div>
					</div>
					<br/>
					
					
				</div>
			</section>
			
			<section>
				<div class="container">
					<div class="tabs-wrap1">
						<ul class="nav nav-tabs books-tab" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">New Arrivals</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Best Sellers</a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Collections</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<!--TABS SLIDER START-->
								<div class="tabs-slider-wrap">
									<div class="row">
										<div id="tabs-slider" class="owl-carousel owl-theme">
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
										</div>
									</div>
								</div>
								<!--TABS SLIDER END-->
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<!--TABS SLIDER START-->
								<div class="tabs-slider-wrap">
									<div class="row">
										<div id="tabs-slider2" class="owl-carousel owl-theme">
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
										</div>
									</div>
								</div>
								<!--TABS SLIDER END-->
							</div>
							<div role="tabpanel" class="tab-pane fade" id="messages">
								<!--TABS SLIDER START-->
								<div class="tabs-slider-wrap">
									<div class="row">
										<div id="tabs-slider3" class="owl-carousel owl-theme">
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore11.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Women</small>
														<h5><a href="#">Foget Her Notes</a></h5>
														<span class="price-tag red">
															<del> $350.00 </del>
															<sub>$</sub>230.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore12.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon new">new</span>
															<div class="clear"></div>
														</figcaption>
													</figure>
													<div class="text">
														<small>LOVE & DATING</small>
														<h5><a href="#">BY THE TIME YOU READ</a></h5>
														<span class="price-tag black">
															<sub>$</sub>58.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore13.jpg" alt=""/>
														<figcaption class="ribbon-wrap">
															<span class="ribbon">Sale</span>
															<div class="clear"></div>
															<span class="ribbon hot">hot</span>
														</figcaption>
													</figure>
													<div class="text">
														<small>Inspiration</small>
														<h5><a href="#">AFTER</a></h5>
														<span class="price-tag red">
															<del> $96.00 </del>
															<sub>$</sub>72.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
											<!--BOOK DEC START-->
											<div class="item">
												<div class="book-tab-dec">
													<figure>
														<img src="extra-images/bookstore14.jpg" alt=""/>
													</figure>
													<div class="text">
														<small>BIOGRAPHY</small>
														<h5><a href="#">SPELLS</a></h5>
														<span class="price-tag black">
															<sub>$</sub>99.00
														</span>
														<a class="add-cart" href="#">Add to Cart</a>
													</div>
												</div>
											</div>
											<!--BOOK DEC END-->
										</div>
									</div>
								</div>
								<!--TABS SLIDER END-->
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="featured-author-bg">
				<div class="container">
					<!--FEATURED AUTHOR START-->
					<div class="featured-author">
						<!-- AUTHOR START-->
						<div class="author-1">
							<figure>
								<img src="extra-images/bookstore15.jpg" alt="">
							</figure>
							<div class="text">
								<!--HEADING 2 START-->
								<div class="heading-2">
									<h2>Featured AUTHOR</h2>
									<span>Best of Stephem Johns</span>
								</div>
								<!--HEADING 2 END-->
								<div class="text-2">
									<h3><a href="#">Stephen John</a></h3>
									<span>Book Writer - Fiction</span>
									<p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet. </p>
									<p>Phasellus quis ipsum in lacus accumsan posuere eu vel nunc phasellus vitae odio risus.</p>
									<em>Stephen Johns</em>
								</div>
								<!--SOCIAL 2 START-->
								<ul class="social-2">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope"></i></a></li>
								</ul>
								<!--SOCIAL 2 END-->
							</div>
						</div>
						<!-- AUTHOR END-->
					</div>
					<div class="authorbook-slider">
						<h5>Books by<span> Same author</span></h5>
						<ul class="bxslider">
							<li>
								<div class="author-book margin-bottom">
									<figure>
										<img src="extra-images/bookstore16.jpg" alt="">
									</figure>
									<a class="readmore2" href="#">READ NOW<i class="fa fa-angle-right"></i></a>
								</div>
								<div class="author-book">
									<figure>
										<img src="extra-images/bookstore17.jpg" alt="">
									</figure>
									<a class="readmore2" href="#">READ NOW<i class="fa fa-angle-right"></i></a>
								</div>
							</li>
							<li>
								<div class="author-book margin-bottom">
									<figure>
										<img src="extra-images/bookstore17.jpg" alt="">
									</figure>
									<a class="readmore2" href="#">READ NOW<i class="fa fa-angle-right"></i></a>
								</div>
								<div class="author-book">
									<figure>
										<img src="extra-images/bookstore16.jpg" alt="">
									</figure>
									<a class="readmore2" href="#">READ NOW<i class="fa fa-angle-right"></i></a>
								</div>
							</li>
							<li>
								<div class="author-book margin-bottom">
									<figure>
										<img src="extra-images/bookstore16.jpg" alt="">
									</figure>
									<a class="readmore2" href="#">READ NOW<i class="fa fa-angle-right"></i></a>
								</div>
								<div class="author-book">
									<figure>
										<img src="extra-images/bookstore17.jpg" alt="">
									</figure>
									<a class="readmore2" href="#">READ NOW<i class="fa fa-angle-right"></i></a>
								</div>
							</li>
						</ul>
					</div>
					<!--FEATURED AUTHOR END-->
				</div>
			</section>
			<section>
				<div class="container">
					<!--HEADING 1 START-->
					<div class="heading-1">
						<h2>Featured BLOG POSTS</h2>
						<span>Lorem ipsum dolor sit consectetuer</span>
					</div>
					<!--HEADING 1 END-->
					<div class="row">
						<!--FEATURED BOLG 1 START-->
						<div class="col-md-4 col-sm-6">
							<div class="featured-blog1">
								<figure>
									<img src="extra-images/bookstore18.jpg" alt="">
									<figcaption class="date-wrap">
										<span class="date">
											<b>26</b>FEB
										</span>
									</figcaption>
								</figure>
								<div class="text">
									<h5><a href="#">PULSE - THE BOOK</a></h5>
									<ul class="blog-meta">
										<li>by<a href="#">Admin</a></li>
										<li>by<a href="#">in FICTION</a></li>
									</ul>
									<p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
								</div>
								<div class="blog-footer">
									<a class="comment-icon" href="#"><i class="fa fa-heart"></i>30</a>
									<a class="comment-icon" href="#"><i class="fa fa-comment"></i>30</a>
									<a class="comment-icon more" href="#"><i class="fa fa-long-arrow-right"></i>more</a>
								</div>
							</div>
						</div>
						<!--FEATURED BOLG 1 END-->
						<!--FEATURED BOLG 1 START-->
						<div class="col-md-4 col-sm-6">
							<div class="featured-blog1">
								<div class="blog1-slider">
									<ul class="bxslider">
										<li>
											<figure>
												<img src="extra-images/bookstore19.jpg" alt="">
											</figure>
										</li>
										<li>
											<figure>
												<img src="extra-images/bookstore19.jpg" alt="">
											</figure>
										</li>
									</ul>
									<div class="date-wrap">
										<span class="date">
											<b>26</b>FEB
										</span>
									</div>
								</div>
								<div class="text">
									<h5><a href="#">THE SECOND</a></h5>
									<ul class="blog-meta">
										<li>by<a href="#">Admin</a></li>
										<li>in<a href="#"> NON FICTION</a></li>
									</ul>
									<p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
								</div>
								<div class="blog-footer">
									<a class="comment-icon" href="#"><i class="fa fa-heart"></i>30</a>
									<a class="comment-icon" href="#"><i class="fa fa-comment"></i>30</a>
									<a class="comment-icon more" href="#"><i class="fa fa-long-arrow-right"></i>more</a>
								</div>
							</div>
						</div>
						<!--FEATURED BOLG 1 END-->
						<!--FEATURED BOLG 1 START-->
						<div class="col-md-4 hidden-sm">
							<div class="featured-blog1">
								<div class="blog1-video">
									<img src="extra-images/bookstore20.jpg" alt="">
									<div class="date-wrap play-icon-wrap">
										<span class="date">
											<b>26</b>mar
										</span>
									</div>
									<a class="play-icon" href="#"><i class="fa fa-play"></i></a>
								</div>
								<div class="text">
									<h5><a href="#">DESIGNING WITH TYPE</a></h5>
									<ul class="blog-meta">
										<li>by<a href="#">Admin</a></li>
										<li>in<a href="#"> NON FICTION</a></li>
									</ul>
									<p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
								</div>
								<div class="blog-footer">
									<a class="comment-icon" href="#"><i class="fa fa-heart"></i>30</a>
									<a class="comment-icon" href="#"><i class="fa fa-comment"></i>30</a>
									<a class="comment-icon more" href="#"><i class="fa fa-long-arrow-right"></i>more</a>
								</div>
							</div>
						</div>
						<!--FEATURED BOLG 1 END-->
					</div>
				</div>
			</section>
			<section class="fechd-publisher-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="fechd-brand">
								<!--HEADING 1 START-->
								<div class="heading-1">
									<h2>Featured PUBLISHERS</h2>
									<span>Lorem ipsum dolor sit consectetuer</span>
								</div>
								<!--HEADING 1 END-->
								<!--BRAND WRAP START-->
								<ul class="brand-wrap">
									<li class="col-md-4 col-sm-4 col-xs-4">
										<a href="#"><img src="images/brand1.png" alt=""></a>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-4">
										<a href="#"><img src="images/brand2.png" alt=""></a>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-4">
										<a href="#"><img src="images/brand2.png" alt=""></a>
									</li>
								</ul>
								<ul class="brand-wrap brand-wrap2">
									<li class="col-md-4 col-sm-4 col-xs-4">
										<a href="#"><img src="images/brand4.png" alt=""></a>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-4">
										<a href="#"><img src="images/brand5.png" alt=""></a>
									</li>
									<li class="col-md-4 col-sm-4 col-xs-4">
										<a href="#"><img src="images/brand6.png" alt=""></a>
									</li>
								</ul>
								<!--BRAND WRAP END-->
							</div>
						</div>
						<!--PUBLISHER SLIDER START-->
						<div class="col-md-4">
							<div class="publisher-slider">
								<ul class="bxslider">
									<li>
										<!--FEACHERD PUBLISHER START-->
										<div class="fechd-publisher">
											<figure>
												<img src="extra-images/featuredauthor.jpg" alt="">
											</figure>
											<div class="text">
												<span>Lorem ipsum sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tincidunt.</span>
												<p>
													James Stewart, 
													<a href="#">Company name</a>
												</p>
											</div>
										</div>
										<!--FEACHERD PUBLISHER END-->
									</li>
									<li>
										<!--FEACHERD PUBLISHER START-->
										<div class="fechd-publisher">
											<figure>
												<img src="extra-images/featuredauthor.jpg" alt="">
											</figure>
											<div class="text">
												<span>Lorem ipsum sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tincidunt.</span>
												<p>
													James Stewart, 
													<a href="#">Company name</a>
												</p>
											</div>
										</div>
										<!--FEACHERD PUBLISHER END-->
									</li>
									<li>
										<!--FEACHERD PUBLISHER START-->
										<div class="fechd-publisher">
											<figure>
												<img src="extra-images/featuredauthor.jpg" alt="">
											</figure>
											<div class="text">
												<span>Lorem ipsum sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tincidunt.</span>
												<p>
													James Stewart, 
													<a href="#">Company name</a>
												</p>
											</div>
										</div>
										<!--FEACHERD PUBLISHER END-->
									</li>
									<li>
										<!--FEACHERD PUBLISHER START-->
										<div class="fechd-publisher">
											<figure>
												<img src="extra-images/featuredauthor.jpg" alt="">
											</figure>
											<div class="text">
												<span>Lorem ipsum sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tincidunt.</span>
												<p>
													James Stewart, 
													<a href="#">Company name</a>
												</p>
											</div>
										</div>
										<!--FEACHERD PUBLISHER END-->
									</li>
									<li>
										<!--FEACHERD PUBLISHER START-->
										<div class="fechd-publisher">
											<figure>
												<img src="extra-images/featuredauthor.jpg" alt="">
											</figure>
											<div class="text">
												<span>Lorem ipsum sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tincidunt.</span>
												<p>
													James Stewart, 
													<a href="#">Company name</a>
												</p>
											</div>
										</div>
										<!--FEACHERD PUBLISHER END-->
									</li>
								</ul>
							</div>
						</div>
						<!--PUBLISHER SLIDER END-->
					</div>
				</div>
			</section>
		</div>
		
		<!--FOOTER START-->
		<footer class="footer-1">
			<div class="container">
				<div class="row">
					<!--WIDGET TEXT START-->
					<div class="col-md-4">
						<div class="widget widget-text">
							<!--WIDGET HEADING START-->
							<div class="widget-hd">
								<h3>KITAAB - The Book Shop</h3>
							</div>
							<!--WIDGET HEADING END-->
							<div class="text">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
								<a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
							</div>
							<div class="news-latter">
								<h5>Email Newsletters:</h5>
								<div class="input-dec">
									<form>
										<input type="text" placeholder="Email Address">
										<button><i class="fa fa-envelope"></i></button>
									</form>
								</div>
								<a href="#">Privacy Policy</a>
							</div>
						</div>
					</div>
					<!--WIDGET TEXT END-->
					<!--WIDGET LATEST NEWS START-->
					<div class="col-md-4">
						<div class="widget new-1">
							<!--WIDGET HEADING START-->
							<div class="widget-hd">
								<h3>Latest News</h3>
							</div>
							<!--WIDGET HEADING END-->
							<ul>
								<li>
									<!--NEWS DEC START-->
									<div class="new-dec">
										<span class="date">
											<b>04</b>FEB
										</span>
										<div class="text">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium</p>
											<a href="#">26 Comments</a>
										</div>
									</div>
									<!--NEWS DEC END-->
								</li>
								<li>
									<!--NEWS DEC START-->
									<div class="new-dec">
										<span class="date">
											<b>26</b>FEB
										</span>
										<div class="text">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium</p>
											<a href="#">26 Comments</a>
										</div>
									</div>
									<!--NEWS DEC END-->
								</li>
								<li>
									<!--NEWS DEC START-->
									<div class="new-dec">
										<span class="date">
											<b>03</b>FEB
										</span>
										<div class="text">
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium</p>
											<a href="#">26 Comments</a>
										</div>
									</div>
									<!--NEWS DEC END-->
								</li>
							</ul>
						</div>
					</div>
					<!--WIDGET LATEST NEWS END-->
					<!--WIDGET CONTACT START-->
					<div class="col-md-4">
						<div class="widget contact-ft">
							<!--WIDGET HEADING START-->
							<div class="widget-hd">
								<h3>Get In Touch</h3>
							</div>
							<!--WIDGET HEADING END-->
							<ul>
								<li>
									<span>
										Address: 
									</span>
									<div class="text">
										<address>
											45, 3rd Floor, Loft Towers<br> Media City, Dubai, UAE
										</address>
									</div>
								</li>
								<li>
									<span>
										Phone: 
									</span>
									<div class="text">
										<em>
											+971 4 5670980 - <small>Office</small>
										</em>
										<em>
											+971 5657860 - <small>Fax</small>
										</em>
									</div>
								</li>
								<li>
									<span>
										Email:
									</span>
									<div class="text">
										<a href="#">support@sitename.com</a>
										<a href="#">info@sitename.com</a>
									</div>
								</li>
								<li>
									<span>
										Follow Us:
									</span>
									<div class="text">
										<ul class="social-1">
					    					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					    					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					    					<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
					    					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					    					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					    					<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
					    					<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
					    					<li><a href="#"><i class="fa fa-spotify"></i></a></li>
					    					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					    				</ul>
					    			</div>
								</li>
							</ul>
						</div>
					</div>
					<!--WIDGET CONTACT END-->
				</div>
			</div>
		</footer>
		<!--FOOTER END-->
		<div class="copy-right copy-right2">
			<div class="container">
				<p>© 2016 , Design by <a href="index.html">kode forest</a></p>
				<ul class="ft-nav">
					<li>
						<a href="#">home</a>
					</li>
					<li>
						<a href="#">About Us</a>
					</li>
					<li>
						<a href="#">Categories</a>
					</li>
					<li>
						<a href="#">Features</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
					<li>
						<a href="#">Shop</a>
					</li>
					<li>
						<a href="#">Contact Us</a>
					</li>
				</ul>
				<ul class="brand-icons">
					<li><a href="#"><i class="icon-visa-pay-logo"></i></a></li>
					<li><a href="#"><i class="icon-master-card-logo"></i></a></li>
					<li><a href="#"><i class=" icon-payoneer-logo"></i></a></li>
					<li><a href="#"><i class="icon-paypal-logo"></i></a></li>
					<li><a href="#"><i class="icon-skrill-pay-logo"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- START GO UP -->
        <div class="go-up">
            <a href="#" ><i class="fa fa-angle-up"></i></a>    
        </div>
        <!--END GO UP-->
</div>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
