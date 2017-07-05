<?php echo $map['js']; ?>
<div class="container">
  <div class="jumbotron">
   <div class="row">
     <div class="col-md-8">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <?php for($i=0;$i<$num_rows;$i++){
           $image['pic'.$i]=$pic[$i];
         }
         //echo "<pre>";print_r($image);exit();
         ?>
         <!-- Indicators -->
         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <?php for($i=1;$i<$num_rows;$i++){ ?>
             <li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
           <?php } ?>

         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
           <div class="item active">
             <img src="<?php echo base_url().$image['pic0'] ?>" alt="Chania" style="height:400px">
           </div>
           <?php for($i=1;$i<$num_rows;$i++){ ?>
           <div class="item">
             <img src="<?php echo base_url().$image['pic'.$i] ?>" alt="Chania" style="height:400px">
           </div>
           <?php } ?>
         </div>
         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
       <!-- carousel -->
       <h2 style="color:#6495ed"><?php echo $propertyname;?></h2>
       <div class="row">
         <div class="col-md-3">
           <span>ราคา <?php echo number_format($price);?> ฿</span>
         </div>
         <div class="col-md-5">

         </div>
         <div class="col-md-4">
           <img src="<?php echo base_url().'asset/front/icon/001-bed.png';?>"> <?php echo $broom;?> ห้องนอน</img>
           <img src="<?php echo base_url().'asset/front/icon/003-bathtub.png';?>"> <?php echo $rroom;?> ห้องน้ำ </img>
         </div>
       </div>
<hr>
       <div class="row">
         <div class="col-md-3">
           <ul>
             <li>เลขที่ประกาศ</li>
             <li>ลักษณะประกาศ</li>
             <li>ประเภทอสังหาฯ</li>
             <li>ขนาด</li>
           </ul>
         </div>
         <div class="col-md-3">
           <ul>
             <li style="color:#808080"><?php echo $property_id;?></li>
             <li style="color:#808080"><?php echo $proptype;?></li>
             <li style="color:#808080"><?php echo $ptype;?></li>
             <li style="color:#808080">-</li>
           </ul>
         </div>
         <div class="col-md-1">

         </div>
         <div class="col-md-2">
           <ul>
             <li>ปีที่สร้างเสร็จ</li>
             <li>ผู้ประกาศ</li>
             <li>วันที่ประกาศ</li>
           </ul>
         </div>
         <div class="col-md-3">
           <ul>
             <li style="color:#808080">-</li>
             <li style="color:#808080"><?php echo $first_name." ".$last_name;?></li>
             <li style="color:#808080"><?php echo $created;?></li>
           </ul>
         </div>

       </div>
       <label>รายละเอียด</label>
       <h5 style="color:#808080"><?php echo $detail; ?></h5>
       <?php echo $map['html'];?>
     </div>
     <div class="col-md-4">
       <div class="panel panel-default">
        <div class="panel-heading">ข้อมูลติดต่อ</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-4"><img src="<?php echo base_url($userimage) ?>" class="img-circle" alt="Cinque Terre" width="66" height="66"></li></div>
              <div class="col-md-8">
                <img src="<?php echo base_url().'asset/front/icon/003-avatar.png';?>"> <?php echo $first_name." ".$last_name;?></img><br/>
                <img src="<?php echo base_url().'asset/front/icon/002-envelope.png';?>"> <?php echo $email;?></img><br/>
                <img src="<?php echo base_url().'asset/front/icon/001-phone-call.png';?>"> <?php echo $tel;?></img>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>
