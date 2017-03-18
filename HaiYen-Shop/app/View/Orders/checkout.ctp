<?php if ($this->Session->check('cart')): ?>
<section>
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Order',array('action' => 'checkout'));?>
				<div class="FormContent">
					<div class="freebirdFormviewerViewHeaderHeader">
						<h3>Đăng ký mua hàng</h3>
					</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tên của bạn</label>
						
							<?php echo $this->Form->input('buyer_name',array('label' => false,'placeholder' => 'Nhập tên','class' => 'form-control', 'id' => 'exampleInputEmail1'));?>

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Nhập email</label>
							<?php echo $this->Form->input('buyer_email',array('label' => false,'placeholder' => 'Nhập Email','class' => 'form-control', 'id' => 'exampleInputPassword1'));?>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Điện thoại di động</label>
							
							<?php echo $this->Form->input('buyer_phone',array('label' => false,'placeholder' => 'Nhập số điện thoại','class' => 'form-control', 'id' => 'exampleInputEmail1'));?>

						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Địa chỉ</label>
							<?php echo $this->Form->input('buyer_address',array('label' => false,'placeholder' => 'Nhập địa chỉ','class' => 'form-control', 'id' => 'exampleInputPassword1'));?>

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tên người nhận</label>
							<?php echo $this->Form->input('receiver_name',array('label' => false,'placeholder' => 'Nhập tên người nhận','class' => 'form-control', 'id' => 'exampleInputEmail1'));?>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Phone(sdt người nhận)</label>
						<?php echo $this->Form->input('receiver_phone',array('label' => false,'placeholder' => 'Nhập sdt người nhận','class' => 'form-control', 'id' => 'exampleInputPassword1'));?>

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Địa chỉ (người nhận)</label>
						<?php echo $this->Form->input('receiver_address',array('label' => false,'placeholder' => 'Nhập địa chỉ người nhận','class' => 'form-control', 'id' => 'exampleInputEmail1'));?>

					</div>	
					<?php echo $this->Form->button('Gửi Đi',array('type' => 'submit','label' => false,'class' => 'btn') );?>
			</div>
		<?php echo $this->Form->end();?>
	</div>
		<div class="col-md-6">
		      <table class="table cot_phai " border="0">
			  	<div class="FormContent">
					<div class="freebirdFormviewerViewHeaderHeader">
						<h3>Thông tin đơn hàng</h3>
					</div>
                    <thead>
						<tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>                            
                        </tr>
					</thead>
                    
                        
                        <?php $cart = $this->Session->read('cart');?>
						<?php foreach ($cart as $product):?>
							<tr>
	                            <td><?php echo $product['name'];?></td> 
	                            <td><?php echo number_format($product['quantity']);?></td>
								<td><?php echo number_format($product['sale_price']);?> .000 VNĐ</td>
								
	                        </tr>		
						<?php endforeach;?>
						<tr>
                            <td>Tạm tính</td>
							<td></td>
							<td>
								<?php $payment = $this->Session->read('payment');?>
								<?php echo number_format($payment['total']); ?> .000 VNĐ
							</td>
							
						</tr>
						<?php if($this->Session->check('payment.coupon')){ ?>
						<tr>
                            <td>Giảm giá</td>
							<td></td>
							<td><?php echo number_format($payment['total'] - $payment['pay']);?> .000 VNĐ</td>				
                        </tr>

                        <tr>
                            <th>Thành tiền</th>
							<th></th>
							<td class="gia"><?php echo number_format($payment['pay']);?> .000 VNĐ</td>
                        </tr>
                        <?php }else{ ?>
                        <tr>
                            <th>Thành tiền</th>
							<th></th>
							<td class="gia"><?php echo number_format($payment['total']);?> .000 VNĐ</td>
                        </tr>
                        <?php } ?>
					
            </table>
		</div>
</div>
</section>

<?php else: ?>
    Không có sản phẩm nào trong giỏ hàng của bạn!
<?php endif ?>