<?php 
use backend\assets\AppAssetFix;

AppAssetFix::register($this);
 ?>
	<div class="row" style="opacity: 1;">
		<div class="col-lg-12">
			<div id="email-box" class="clearfix">
				<div class="row">
					<div class="col-lg-12">
						
						<header id="email-header" class="clearfix">
							<div id="email-header-title" class="visible-md visible-lg">
								<i class="fa fa-inbox"></i>Thông báo
							</div>
							
							<div id="email-header-pagination" class="pull-right">
								<div class="btn-group pagination pull-right">
									<button class="btn btn-primary" type="button" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Previous">
										<i class="fa fa-chevron-left"></i>
									</button>
									<button class="btn btn-primary" type="button" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Next">
										<i class="fa fa-chevron-right"></i>
									</button>
								</div>
								<div class="num-items pull-right hidden-xs">
									
								</div>
							</div>
						</header>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div id="email-navigation" class="email-nav-nano hidden-xs hidden-sm has-scrollbar">
							<div class="email-nav-nano-content" tabindex="0" style="right: -17px;">
								<ul id="email-nav-items" class="clearfix">
									<li class="">
										<a href="javascript:void(0)?>">
											<i class="fa fa-inbox"></i>
											Thông báo Hóa đơn mới
											
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star"></i>
											Thông báo số lượng sách
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-pencil"></i>
											Thông báo phản hồi KH
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-envelope"></i>
											Thông báo
											
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-trash-o"></i>
											Thông báo
											
										</a>
									</li>
								</ul>
								
							</div>
							<div class="nano-pane" style="display: block;"><div class="nano-slider" style="height: 110px; transform: translate(0px, 0px);"></div></div></div>
							<div id="email-content" class="email-content-nano has-scrollbar" style="height: 230px;">
								<div class="email-content-nano-content" tabindex="0" style="right: -17px;">
									<ul id="email-list">
										<?php 
										$i=0;
										foreach ($dataAllComm as $key => $value) { 
											 $timeComm=date('d-m-Y H:s:i',$value['created_at']);
											$i++;
											if($i%2==0){
										?>
										<li class="unread clickable-row" data-href="<?= $value['url']?>">
										<?php }
										else{?>
										<li class="clickable-row" data-href="<?= $value['url']?>">
										<?php } ?>
											<div class="chbox">
												<div class="checkbox-nice">
													<input id="m-checkbox-2" type="checkbox" value="<?= $value['status']?>">
													<label for="m-checkbox-2"></label>
												</div>
											</div>
											<div class="message">
												<span class="subject"><?= $value['title']?></span>
											</div>
											<div class="meta-info">
											<a href="javascript:;" class="attachment">
											
											</a>
											<span class="date" style="line-height: 16px; margin-right: 10px"><?= $timeComm?></span>
											</div>
											
										</li>
										<?php } ?>
									</ul>
								</div>
								<div class="nano-pane"><div class="nano-slider" style="height: 45px; transform: translate(0px, 0px);"></div></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>		