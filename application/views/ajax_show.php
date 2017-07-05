<?php if(!empty($posts)): foreach($posts as $post): ?>
<div class="row">
            <div class="col-md-4">
                <a href="#">
                    <img src="<?php echo base_url().$post['image']?>" class="img-responsive img-box img-thumbnail">
                </a>
            </div>
            <div class="col-md-8">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-picture">
                            <a href="#" title="sintret">
                                <img class="circle img-thumbnail img-box" src="<?php echo base_url().$post['userimage']?>" alt="sintret">
                            </a>
                        </div>
                        <div class="row-content">
                            <div class="list-group-item-heading">
                                <a href="#" title="sintret">
                                    <small><?php echo $post['first_name']?> <?php echo $post['last_name']?></small>
                                </a>
                            </div>
                            <small>
                                <i class="glyphicon glyphicon-time"></i> <?php echo $post['created']?> </span>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <h4><a href="#"><?php echo $post['propertyname']?></a></h4>
                  </div>
                  <div class="col-md-3">
                    <img src="<?php echo base_url().'asset/front/icon/001-bed.png';?>"> <?php echo $post['broom']?>  </img>
                    <img src="<?php echo base_url().'asset/front/icon/003-bathtub.png';?>"> <?php echo$post['rroom']?></img>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <h5><a href="#"><?php echo number_format($post['price']);?> ฿</a></h5>
                  </div>
                  <div class="col-md-3">
                    <a href="<?php echo base_url() ?>detail_prop/index/<?php echo $post['property_id']?>" class="btn btn-primary">รายละเอียด</a>
                  </div>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; else: ?>
          <p>ขออภัย, ไม่พบรายการประกาศ</p>
          <?php endif; ?>
          <?php echo $this->ajax_pagination->create_links(); ?>
