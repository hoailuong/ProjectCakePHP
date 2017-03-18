<div class="container">
  <div class="row row_item">
    <div class="col-md-3 ">
      <div class="item1 item">
        <h2><?php echo $this->element('count_order'); ?></h2>
        <p>Hóa Đơn Mới</p>
        
        <a href="<?php echo $this->webroot.'admin/orders/new_order/';?>"><?php echo $this->html->image('/images/1-a.jpg');?></a>
      </div>
  </div>
    <div class="col-md-3 " >
     <div  class="item2 item">
        <h2><?php echo $this->element('count_contact');?></h2>
        <p>Tỉ Lệ Gia Tăng</p>
        <a href="<?php echo $this->webroot.'admin/contacts/index/';?>"><?php echo $this->html->image('/images/2-a.jpg');?></a>
        </div>
      </div>
    <div class="col-md-3 " >
      <div  class="item3 item">
        <h2><?php echo $this->element('count_user');?></h2>
        
        <p>Đăng Ký Người Dùng</p>
        <a href="<?php echo $this->webroot.'admin/users/index/';?>"><?php echo $this->html->image('/images/4-c.jpg');?></a>
      </div>
    </div> 
  </div>
</div>

