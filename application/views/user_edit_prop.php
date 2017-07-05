<div class="container" style="margin-top:10px">
<?php echo $map['js']; ?>
  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>แก้ไขข้อมูล</h1>
    <h4>ส่วนข้อมูลทั่วไป</h4>
    <div class="row">
      <form role="form" method="post" action="<?php echo base_url("user_manage_prop/update/").$property_id; ?>" enctype="multipart/form-data">
      <div class="col-md-4">
        <div class="form-group">
            <label>ชื่อประกาศ</label>
            <input class="form-control" name="propertyname" placeholder="<?php echo $propertyname;?>" />
            <label>ประเภทของประกาศ</label>
            <select class="form-control" name="proptype">
              <?php if($proptype=="ขาย"){?>
                <option value="ขาย" selected>ขาย</option>
                <option value="ให้เช่า">ให้เช่า</option>
              <?php }else{?>
                <option value="ขาย">ขาย</option>
                <option value="ให้เช่า" selected>ให้เช่า</option>
              <?php }?>

            </select>
            <label>ประเภทของอสังหาริมทรัพย์</label>
            <select class="form-control" name="ptype">
              <?php if($ptype=="บ้านเดี่ยว"){?>
              <option value="บ้านเดี่ยว" selected>บ้านเดี่ยว</option>
              <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
              <option value="คอนโด">คอนโด</option>
              <option value="ที่ดิน">ที่ดิน</option>
              <?php }
              else if($ptype=="ทาวน์เฮ้าส์"){?>
                <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                <option value="ทาวน์เฮ้าส์" selected>ทาวน์เฮ้าส์</option>
                <option value="คอนโด">คอนโด</option>
                <option value="อพาร์ตเมนต์">อพาร์ตเมนต์</option>
                <option value="ที่ดิน">ที่ดิน</option>
                <?php }else if($ptype=="คอนโด"){?>
                  <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                  <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
                  <option value="คอนโด" selected>คอนโด</option>
                  <option value="อพาร์ตเมนต์">อพาร์ตเมนต์</option>
                  <option value="ที่ดิน">ที่ดิน</option>
                  <?php }else if($ptype=="อพาร์ตเมนต์"){?>
                    <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                    <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
                    <option value="คอนโด">คอนโด</option>
                    <option value="อพาร์ตเมนต์" selected>อพาร์ตเมนต์</option>
                    <option value="ที่ดิน">ที่ดิน</option>
                    <?php }else{?>
                      <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                      <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
                      <option value="คอนโด">คอนโด</option>
                      <option value="อพาร์ตเมนต์">อพาร์ตเมนต์</option>
                      <option value="ที่ดิน" selected>ที่ดิน</option>
                        <?php }?>
            </select>
            <label>สถานที่ใกล้เคียง</label>
            <select class="form-control" name="ntype">
              <?php if($ntype=="สถานีรถไฟฟ้าบีทีเอส"){?>
                <option value="สถานีรถไฟฟ้าบีทีเอส" selected>สถานีรถไฟฟ้าบีทีเอส</option>
                <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                <option value="โรงพยาบาล">โรงพยาบาล</option>
                <option value="โรงเรียน">โรงเรียน</option>
                <option value="วัด">วัด</option>
                <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                <option value="อื่นๆ">อื่นๆ</option>
                <?php }else if($ntype=="สถานีรถไฟฟ้าเอ็มอาร์ที"){?>
                  <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                  <option value="สถานีรถไฟฟ้าเอ็มอาร์ที" selected>สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                  <option value="โรงพยาบาล">โรงพยาบาล</option>
                  <option value="โรงเรียน">โรงเรียน</option>
                  <option value="วัด">วัด</option>
                  <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                  <option value="อื่นๆ">อื่นๆ</option>
                  <?php }else if($ntype=="โรงพยาบาล"){?>
                    <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                    <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                    <option value="โรงพยาบาล" selected>โรงพยาบาล</option>
                    <option value="โรงเรียน">โรงเรียน</option>
                    <option value="วัด">วัด</option>
                    <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                    <?php }else if($ntype=="โรงเรียน"){?>
                      <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                      <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                      <option value="โรงพยาบาล">โรงพยาบาล</option>
                      <option value="โรงเรียน" selected>โรงเรียน</option>
                      <option value="วัด">วัด</option>
                      <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                      <option value="อื่นๆ">อื่นๆ</option>
                      <?php }else if($ntype=="วัด"){?>
                        <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                        <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                        <option value="โรงพยาบาล">โรงพยาบาล</option>
                        <option value="โรงเรียน">โรงเรียน</option>
                        <option value="วัด" selected>วัด</option>
                        <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                        <?php }else if($ntype=="สถานที่ราชการ"){?>
                          <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                          <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                          <option value="โรงพยาบาล">โรงพยาบาล</option>
                          <option value="โรงเรียน">โรงเรียน</option>
                          <option value="วัด">วัด</option>
                          <option value="สถานที่ราชการ" selected>สถานที่ราชการ</option>
                          <option value="อื่นๆ">อื่นๆ</option>
                          <?php }else{?>
                            <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
                            <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
                            <option value="โรงพยาบาล">โรงพยาบาล</option>
                            <option value="โรงเรียน">โรงเรียน</option>
                            <option value="วัด">วัด</option>
                            <option value="สถานที่ราชการ">สถานที่ราชการ</option>
                            <option value="อื่นๆ" selected>อื่นๆ</option>
                            <?php }?>
            </select>
            <input class="form-control"  name="ndetail" placeholder="<?php echo $ndetail;?>"/>
            <label>รายละเอียด</label>
            <textarea class="form-control" name="detail" rows="4" placeholder="<?php echo $detail;?>"></textarea>
          </div>
      </div>
      <div class="col-md-8">
        <?php echo $map['html'];?>
        <div class="row">
          <div class="col-md-6">
            <label>ละติจูต</label>
            <input type="text" id="lat" class="form-control" name="lat" placeholder="Latitude" value="<?=$lat;?>" />
          </div>
          <div class="col-md-6">
            <label>ลองติจูต</label>
            <input type="text" id="lng" class="form-control" name="lng" placeholder="Longitude" value="<?=$long;?>" />
          </div>
        </div>
      </div>
    </div>
<hr>
    <h4>ส่วนข้อมูลที่อยู่</h4>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
            <label>ชื่อหมู่บ้าน/โครงการ</label>
            <input class="form-control" name="house" placeholder="<?php echo $house;?>" />
            <label>เลขที่</label>
            <input class="form-control" name="number" placeholder="<?php echo $number;?>" />
            <label>ถนน</label>
            <input class="form-control" name="road" placeholder="<?php echo $road;?>" />
            <label>ตำบล/แขวง</label>
            <input class="form-control" name="subdistrict" placeholder="<?php echo $subdistrict;?>" />
            <label>อำเภอ/เขต</label>
            <input class="form-control" name="district" placeholder="<?php echo $district;?>" />
            <label>จังหวัด</label>
        <select class="form-control" name="province">
          <option value="" selected>--------- เลือกจังหวัด ---------</option>
          <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
          <option value="กระบี่">กระบี่ </option>
          <option value="กาญจนบุรี">กาญจนบุรี </option>
          <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
          <option value="กำแพงเพชร">กำแพงเพชร </option>
          <option value="ขอนแก่น">ขอนแก่น</option>
          <option value="จันทบุรี">จันทบุรี</option>
          <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
          <option value="ชัยนาท">ชัยนาท </option>
          <option value="ชัยภูมิ">ชัยภูมิ </option>
          <option value="ชุมพร">ชุมพร </option>
          <option value="ชลบุรี">ชลบุรี </option>
          <option value="เชียงใหม่">เชียงใหม่ </option>
          <option value="เชียงราย">เชียงราย </option>
          <option value="ตรัง">ตรัง </option>
          <option value="ตราด">ตราด </option>
          <option value="ตาก">ตาก </option>
          <option value="นครนายก">นครนายก </option>
          <option value="นครปฐม">นครปฐม </option>
          <option value="นครพนม">นครพนม </option>
          <option value="นครราชสีมา">นครราชสีมา </option>
          <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
          <option value="นครสวรรค์">นครสวรรค์ </option>
          <option value="นราธิวาส">นราธิวาส </option>
          <option value="น่าน">น่าน </option>
          <option value="นนทบุรี">นนทบุรี </option>
          <option value="บึงกาฬ">บึงกาฬ</option>
          <option value="บุรีรัมย์">บุรีรัมย์</option>
          <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
          <option value="ปทุมธานี">ปทุมธานี </option>
          <option value="ปราจีนบุรี">ปราจีนบุรี </option>
          <option value="ปัตตานี">ปัตตานี </option>
          <option value="พะเยา">พะเยา </option>
          <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
          <option value="พังงา">พังงา </option>
          <option value="พิจิตร">พิจิตร </option>
          <option value="พิษณุโลก">พิษณุโลก </option>
          <option value="เพชรบุรี">เพชรบุรี </option>
          <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
          <option value="แพร่">แพร่ </option>
          <option value="พัทลุง">พัทลุง </option>
          <option value="ภูเก็ต">ภูเก็ต </option>
          <option value="มหาสารคาม">มหาสารคาม </option>
          <option value="มุกดาหาร">มุกดาหาร </option>
          <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
          <option value="ยโสธร">ยโสธร </option>
          <option value="ยะลา">ยะลา </option>
          <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
          <option value="ระนอง">ระนอง </option>
          <option value="ระยอง">ระยอง </option>
          <option value="ราชบุรี">ราชบุรี</option>
          <option value="ลพบุรี">ลพบุรี </option>
          <option value="ลำปาง">ลำปาง </option>
          <option value="ลำพูน">ลำพูน </option>
          <option value="เลย">เลย </option>
          <option value="ศรีสะเกษ">ศรีสะเกษ</option>
          <option value="สกลนคร">สกลนคร</option>
          <option value="สงขลา">สงขลา </option>
          <option value="สมุทรสาคร">สมุทรสาคร </option>
          <option value="สมุทรปราการ">สมุทรปราการ </option>
          <option value="สมุทรสงคราม">สมุทรสงคราม </option>
          <option value="สระแก้ว">สระแก้ว </option>
          <option value="สระบุรี">สระบุรี </option>
          <option value="สิงห์บุรี">สิงห์บุรี </option>
          <option value="สุโขทัย">สุโขทัย </option>
          <option value="สุพรรณบุรี">สุพรรณบุรี </option>
          <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
          <option value="สุรินทร์">สุรินทร์ </option>
          <option value="สตูล">สตูล </option>
          <option value="หนองคาย">หนองคาย </option>
          <option value="หนองบัวลำภู">หนองบัวลำภู </option>
          <option value="อำนาจเจริญ">อำนาจเจริญ </option>
          <option value="อุดรธานี">อุดรธานี </option>
          <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
          <option value="อุทัยธานี">อุทัยธานี </option>
          <option value="อุบลราชธานี">อุบลราชธานี</option>
          <option value="อ่างทอง">อ่างทอง </option>
          <option value="อื่นๆ">อื่นๆ</option>
        </select>
            <label>รหัสไปรษณีย์</label>
            <input class="form-control" name="zipcode" placeholder="<?php echo $zipcode;?>" />
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>ราคา</label>
              <input type="text" class="form-control" name="price" placeholder="<?php echo $price;?>">
          <div class="row">
              <div class="col-md-6">
                <label>จำนวนห้องน้ำ</label>
                <input class="form-control" name="rroom" placeholder="<?php echo $rroom;?>" />
              </div>
              <div class="col-md-6">
                <label>จำนวนห้องนอน</label>
                <input class="form-control" name="broom" placeholder="<?php echo $broom;?>" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>ปีที่สร้างเสร็จ</label>
                <input class="form-control" name="finish_year" placeholder="<?php echo $finish_year;?>" />
              </div>
              <div class="col-md-6">
                <label>ขนาดพื้นที่</label>
                <input class="form-control" name="area" placeholder="<?php echo $area;?>" />
              </div>
          </div>


          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <button class="btn btn-success" type="submit" name="fileSubmit">บันทึกข้อมูล</button>
        <button class="btn btn-danger" type="button">ยกเลิก</button>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    </form>
<hr>
<style>
.modal-dialog {width:600px;}
.thumbnail {margin-bottom:6px;}
</style>
  <label>รูปภาพประกอบ</label>
  <div class="container">
  <div class="row">
      <?php for($i=0;$i<$num_rows;$i++){?>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image <?php echo $i;?>" href="#"><img class="thumbnail img-responsive" src="<?php echo base_url().$pic[$i] ?>" style="height:200px"></a>
        <a class="btn btn-danger" title="ลบรูป" href="<?php echo base_url('user_manage_prop/delete_img/').$index[$i];?>"><i class="glyphicon glyphicon-trash"></i></a>
      </div>

      <?php }?>
    <hr>

    <hr>
  </div>
  <form role="form" method="post" action="<?php echo base_url('user_manage_prop/upload_img/').$property_id;?>" enctype="multipart/form-data">
  <label>อัปโหลดรูปภาพ</label>
  <input type="file" name="userfile[]" id="files" multiple>
  <button type="submit" class="btn btn-success" title="อัปโหลดรูปภาพ"><i class="glyphicon glyphicon-cloud-upload"></i></button>
</form>
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog" style="width:200px">
  <div class="modal-content">
    <div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
<script>
$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});
</script>

</div>


  </form>
  </div>

</div>
