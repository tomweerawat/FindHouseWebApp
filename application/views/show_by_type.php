<style>
    .list-group {border-radius: 0;}
    .list-group .list-group-item {background-color: transparent;overflow: hidden;border: 0;border-radius: 0;padding: 0 16px;}
    .list-group .list-group-item .row-picture,
    .list-group .list-group-item .row-action-primary {float: left;display: inline-block;padding-right: 16px;padding-top: 8px;}
    .list-group .list-group-item .row-picture img,
    .list-group .list-group-item .row-action-primary img,
    .list-group .list-group-item .row-picture i,
    .list-group .list-group-item .row-action-primary i,
    .list-group .list-group-item .row-picture label,
    .list-group .list-group-item .row-action-primary label {display: block;width: 56px;height: 56px;}
    .list-group .list-group-item .row-picture img,
    .list-group .list-group-item .row-action-primary img {background: rgba(0, 0, 0, 0.1);padding: 1px;}
    .list-group .list-group-item .row-picture img.circle,
    .list-group .list-group-item .row-action-primary img.circle {border-radius: 100%;}
    .list-group .list-group-item .row-picture i,
    .list-group .list-group-item .row-action-primary i {background: rgba(0, 0, 0, 0.25);border-radius: 100%;text-align: center;line-height: 56px;font-size: 20px;color: white;}
    .list-group .list-group-item .row-picture label,
    .list-group .list-group-item .row-action-primary label {margin-left: 7px;margin-right: -7px;margin-top: 5px;margin-bottom: -5px;}
    .list-group .list-group-item .row-content {display: inline-block;width: calc(100% - 92px);min-height: 66px;}
    .list-group .list-group-item .row-content .action-secondary {position: absolute;right: 16px;top: 16px;}
    .list-group .list-group-item .row-content .action-secondary i {font-size: 20px;color: rgba(0, 0, 0, 0.25);cursor: pointer;}
    .list-group .list-group-item .row-content .action-secondary ~ * {max-width: calc(100% - 30px);}
    .list-group .list-group-item .row-content .least-content {position: absolute;right: 16px;top: 0px;color: rgba(0, 0, 0, 0.54);font-size: 14px;}
    .list-group .list-group-item .list-group-item-heading {color: rgba(0, 0, 0, 0.77);font-size: 20px;line-height: 29px;}
    .list-group .list-group-separator {clear: both;overflow: hidden;margin-top: 10px;margin-bottom: 10px;}
    .list-group .list-group-separator:before {content: "";width: calc(100% - 90px);border-bottom: 1px solid rgba(0, 0, 0, 0.1);float: right;}

    .bg-profile{background-color: #3498DB !important;height: 150px;z-index: 1;}
    .bg-bottom{height: 100px;margin-left: 30px;}
    .img-profile{display: inline-block !important;background-color: #fff;border-radius: 6px;margin-top: -50%;padding: 1px;vertical-align: bottom;border: 2px solid #fff;-moz-box-sizing: border-box;box-sizing: border-box;color: #fff;z-index: 2;}
    .row-float{margin-top: -40px;}
    .explore a {color: green; font-size: 13px;font-weight: 600}
    .twitter a {color:#4099FF}
    .img-box{box-shadow: 0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23);border-radius: 2px;border: 0;}

    /* search & filter */
    .post-search-panel input[type="text"]{
    	width: 220px;
        height: 28px;
        color: #333;
        font-size: 16px;
    }
    .post-search-panel select{
        height: 34px;
        color: #333;
        font-size: 16px;
    }

    /* loading */
    .loading{position: absolute;left: 0; top: 0; right: 0; bottom: 0;z-index: 2;background: rgba(255,255,255,0.7);}
    .loading .content {
        position: absolute;
        transform: translateY(-50%);
         -webkit-transform: translateY(-50%);
         -ms-transform: translateY(-50%);
        top: 50%;
        left: 0;
        right: 0;
        text-align: center;
        color: #555;
    }
</style>
<script>
  function searchFilter(page_num) {
  page_num = page_num?page_num:0;
  var keywords = $('#keywords').val();
  var sortBy = $('#sortBy').val();
  $.ajax({
    type: 'POST',
    url: '<?php echo base_url(); ?>show_by_type/ajax_<?php echo $ptype; ?>_<?php echo $type; ?>/'+page_num,
    data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
    beforeSend: function () {
      $('.loading').show();
    },
    success: function (html) {
      $('#postList').html(html);
      $('.loading').fadeOut("slow");
    }
  });
}
</script>
<div class="container" style="margin-top:10px">
  <div class="jumbotron" style="background-color:white">
    <div class="row">
      <div class="col-md-8">
        <h4>รายการ<?php echo $title; ?>ล่าสุด</h4>
        <div class="post-search-panel">
    			<input type="text" id="keywords" placeholder="Type keywords to filter posts" onkeyup="searchFilter()"/>
    			<select id="sortBy" onchange="searchFilter()">
    				<option value="">เรียงตาม</option>
    				<option value="asc">ประกาศเก่าสุดสุด</option>
    				<option value="desc">ประกาศล่าสุด</option>
    			</select>
    		</div>
      <div id="postList">
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
              </div>
              <div class="loading" style="display: none;"><div class="content"><img src="<?php echo base_url().'asset/front/loading.gif'; ?>"/></div></div>
            </div>
      <div class="col-md-4">
        right
      </div>
    </div>
  </div>
</div>
