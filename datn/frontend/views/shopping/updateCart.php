<?php 
use frontend\common\Cart;
$Cart=new Cart();
 ?>
<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading classfont" style="color:#fff;font-size: 20px;height: 50px;background-color: #1ABC9C">
			<i class="icon-shopping-cart"></i>  Xem giỏ hàng
		</div>
		<div class="panel-body">
			<div class="col-md-12 col-sm-12" >
				<div class="order-table">
					<div class="order-hd">
						<table class="tbody" style="font-size: 15px">
							<tbody>	
								<?php 
								foreach ($cart as $key => $value) {
									?>
									<tr>
										<td class="product-img"><img src="<?php echo $value['image']?>"></td>
										<td class="produt-name classfont" style="font-size: 16px"><?php echo $value['product_name']?></td>
										<td class="produt-price">
											<span class="">
												<?php echo number_format($value['price'],0,"",".").' đ';?>
											</span>
										</td>
										<td class="produt-quantity">
											<div class="input-stepper">
												<button data-input-stepper-decrease="" onclick="itemdown(<?= $key?>)">-</button>
												<input type="text" id="amount_<?php echo $key;?>" name="amount_<?php $key;?>" value="<?php echo $value['amount'];?>">
												<button data-input-stepper-increase="" onclick="itemup(<?= $key?>)">+</button>
											</div>
										</td>
										<td class="produt-total">
											<span class="blue">
												<?php echo number_format($value['price']*$value['amount'],0,"",".").' đ';?>
											</span>
										</td>
										<td class="product-del"><span class="icon-del"><i class="fa fa-trash-o" title="click để xóa giỏ hàng" aria-hidden="true" style="font-size: 26px;color: #1ABC9C" onclick="deleteItem(<?= $key?>)"></i></span></td>
									</tr>

									<?php } ?>
								</tbody>
							</table>
							<div class="row">
								<div class="col-md-12">
									<ul class="sub-total" >
										<li>
											<span style="color: #000">Tổng tiền tạm tính:</span>
											<span class="price-tag black" style="font-size: 18px; color: #">
												<?php echo number_format($total,0,"",".").' đ'; ?>
											</span>
										</li>
										<li>
											Bằng chữ:
											<span class="price-tag" style="color: #000;font-size: 16px">
												<i><?php

													echo $Cart->convert_number_to_words($total).' đồng';
													?></i>
												</span>
											</li>
											
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>