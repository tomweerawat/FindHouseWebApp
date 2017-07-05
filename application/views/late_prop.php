<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" style="background-color:#f2f2f2">
    <h1>รายการประกาศล่าสุด</h1>
    <div id="content">
    <!-- Latest property -->

          <div class="row">
            <?php
                foreach($rs_word->result() as $row_word):
                    $status=$row_word->proptype;
                    $id=$row_word->property_id;
                    $img=$row_word->image;
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
                        <h4><a href="#"><?php echo $row_word->propertyname; ?></a></h4>
                        <div style="float:right">
                          <img src="<?php echo base_url().'asset/front/icon/001-bed.png';?>"> <?php echo $row_word->broom;?> ห้องนอน</img>
                          <img src="<?php echo base_url().'asset/front/icon/003-bathtub.png';?>"> <?php echo $row_word->rroom;?> ห้องน้ำ </img>
                        </div>
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          <?php
                              echo number_format($row_word->price);
                          ?> ฿
                        </span>
                        <a href="<?php echo base_url() ?>detail_prop/index/<?= $id ?>" class="btn btn-primary">รายละเอียด</a>
                      </div>
                    </div>
                  </article>
                </div>
              <?php endforeach; ?>
          </div>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
              <div id="ajax_paging">
              <?php echo $pagination; ?>
              </div>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
  </div>
  <div class="col-md-2"></div>
</div>
