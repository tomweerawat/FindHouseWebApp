<style>
  /* carousel */
  .media-carousel
  {
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
  }
  /* Previous button  */
  .media-carousel .carousel-control.left
  {
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 200px
  }
  /* Next button  */
  .media-carousel .carousel-control.right
  {
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 200px
  }
  /* Changes the position of the indicators */
  .media-carousel .carousel-indicators
  {
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
  }
  /* Changes the colour of the indicators */
  .media-carousel .carousel-indicators li
  {
  background: #c0c0c0;
  }
  .media-carousel .carousel-indicators .active
  {
  background: #333333;
  }
  /*.media-carousel img
  {
  width: 200px;
  height: 200px
  }*/
  /* End carousel */
</style>
<script>
  $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
  });
</script>
<div class="container">
  <div class='row'>
    <div class='col-md-12'>
      <div class='row'>
        <div class='col-md-2'>
          <h4>บ้านเดี่ยว</h4>
        </div>
        <div class='col-md-8'>
        </div>
        <div class='col-md-2'>
          <a href="<?php echo base_url('show_by_type/sale_house') ?>">ดูทั้งหมด >></a>
        </div>
      </div>
      <hr>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <?php if(!empty($posts)): for($i=0;$i<3;$i++){ ?>
              <?php
                      $status=$posts[$i]['proptype'];
                      $id=$posts[$i]['property_id'];
                      $img=$posts[$i]['image'];
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
                      <h4><a href="<?php echo base_url() ?>detail_prop/index/<?= $id ?>"><?php echo $posts[$i]['propertyname']; ?></a></h4>
                      <div style="float:right">
                      <img src="<?php echo base_url().'asset/front/icon/001-bed.png';?>" style="width:24px; height:24px;"> <?php echo $posts[$i]['broom'];?> ห้องนอน</img>
                      <img src="<?php echo base_url().'asset/front/icon/003-bathtub.png';?>" style="width:24px; height:24px;"> <?php echo $posts[$i]['rroom'];?> ห้องน้ำ </img>
                      </div>
                    </div>
                    <div class="aa-properties-detial">
                      <span class="aa-price">
                        <?php
                            echo number_format($posts[$i]['price']);
                        ?> ฿
                      </span>
                      <a href="<?php echo base_url() ?>detail_prop/index/<?= $id ?>" class="btn btn-primary">รายละเอียด</a>
                    </div>
                  </div>
                </article>
              </div>
            <?php } else: ?>
              <p>ขออภัย, ไม่พบรายการประกาศ</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="item">

            <div class="row">
              <?php if(!empty($posts)): for($i=3;$i<6;$i++){ ?>
              <?php
                      $status=$posts[$i]['proptype'];
                      $id=$posts[$i]['property_id'];
                      $img=$posts[$i]['image'];
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
                      <h4><a href="<?php echo base_url() ?>detail_prop/index/<?= $id ?>"><?php echo $posts[$i]['propertyname']; ?></a></h4>
                      <div style="float:right">
                        <img src="<?php echo base_url().'asset/front/icon/001-bed.png';?>" style="width:24px; height:24px;"> <?php echo $posts[$i]['broom'];?> ห้องนอน</img>
                        <img src="<?php echo base_url().'asset/front/icon/003-bathtub.png';?>" style="width:24px; height:24px;"> <?php echo $posts[$i]['rroom'];?> ห้องน้ำ </img>
                      </div>
                    </div>
                    <div class="aa-properties-detial">
                      <span class="aa-price">
                        <?php
                            echo number_format($posts[$i]['price']);
                        ?> ฿
                      </span>
                      <a href="<?php echo base_url() ?>detail_prop/index/<?= $id ?>" class="btn btn-primary">รายละเอียด</a>
                    </div>
                  </div>
                </article>
              </div>
            <?php } else: ?>
              <p>ขออภัย, ไม่พบรายการประกาศ</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>
    </div>
  </div>
</div>
