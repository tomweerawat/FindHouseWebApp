  <?php if(!empty($posts)): foreach($posts as $post): ?>
<div class="row" id="postList">
  <?php
          $status=$post['proptype'];
          $id=$post['property_id'];
          $img=$post['image'];
          if($status == "ขาย"){
            $status_label = "sale";
            $status_desc = "ขาย";
          }else{
            $status_label = "rent";
            $status_desc = "ให้เช่า";
          }
        ?>
      <div class="col-md-4">

        <article class="aa-properties-item">
          <a href="#" class="aa-properties-item-img">
            <img src="<?php echo base_url().$img ?>" width="200px" height="200px" alt="img">
          </a>
          <div class="aa-tag for-<?php echo $status_label ?>">
            <?= $status_desc ?>
          </div>
          <div class="aa-properties-item-content">
            <div class="aa-properties-about">
              <h4><a href="#"><?php echo $post['propertyname']; ?></a></h4>
              <div style="float:right">
                <img src="<?php echo base_url().'asset/front/icon/001-bed.png';?>"> <?php echo $post['broom'];?> ห้องนอน</img>
                <img src="<?php echo base_url().'asset/front/icon/003-bathtub.png';?>"> <?php echo $post['rroom'];?> ห้องน้ำ </img>
              </div>
            </div>
            <div class="aa-properties-detial">
              <span class="aa-price">
                <?php
                    echo number_format($post['price']);
                ?> ฿
              </span>
              <a href="<?php echo base_url() ?>detail_prop/index/<?= $id ?>" class="btn btn-primary">รายละเอียด</a>
            </div>
          </div>
        </article>
      </div>
    <?php endforeach; else: ?>
      <p>ขออภัย, ไม่พบรายการประกาศ</p>
      <?php endif; ?>

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <div id="ajax_paging">
    <?php echo $this->ajax_pagination->create_links(); ?>
    </div>
  </div>
  <div class="col-md-4">
  </div>
</div>
</div>
