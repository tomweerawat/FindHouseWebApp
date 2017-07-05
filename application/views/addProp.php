<div class="container" style="margin-top:10px">
<?php echo $map['js']; ?>
  <!-- Main component for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>เพิ่มรายการประกาศ</h1>
    <h4>ส่วนข้อมูลทั่วไป</h4>
    <div class="row">
      <form role="form" method="post" action="<?php echo base_url("addProp/getData"); ?>" enctype="multipart/form-data">
      <div class="col-md-4">
        <div class="form-group">
            <label>ชื่อประกาศ</label>
            <input class="form-control" name="propertyname" placeholder="กรุณาใส่ชื่อประกาศ" />
            <label>ประเภทของประกาศ</label>
            <select class="form-control" name="proptype">
              <option value="" selected>--------- ตัวเลือก ---------</option>
              <option value="ขาย">ขาย</option>
              <option value="ให้เช่า">ให้เช่า</option>
            </select>
            <label>ประเภทของอสังหาริมทรัพย์</label>
            <select class="form-control" name="ptype">
              <option value="" selected>--------- ตัวเลือก ---------</option>
              <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
              <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
              <option value="คอนโด">คอนโด</option>
              <option value="ที่ดิน">ที่ดิน</option>
            </select>
            <label>สถานที่ใกล้เคียง</label>
            <select class="form-control" name="ntype">
              <option value="" selected>--------- ตัวเลือก ---------</option>
              <option value="สถานีรถไฟฟ้าบีทีเอส">สถานีรถไฟฟ้าบีทีเอส</option>
              <option value="สถานีรถไฟฟ้าเอ็มอาร์ที">สถานีรถไฟฟ้าเอ็มอาร์ที</option>
              <option value="โรงพยาบาล">โรงพยาบาล</option>
              <option value="โรงเรียน">โรงเรียน</option>
              <option value="วัด">วัด</option>
              <option value="สถานที่ราชการ">สถานที่ราชการ</option>
              <option value="อื่นๆ">อื่นๆ</option>
            </select>
            <input class="form-control"  name="ndetail" placeholder="กรุณาระบุ"/>
            <label>รายละเอียด</label>
            <textarea class="form-control" name="detail" rows="4" ></textarea>
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
            <input type="text" id="lng" class="form-control" name="lng" placeholder="Longitude" value="<?=$lng;?>" />
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
            <input class="form-control" name="house" placeholder="" />
            <label>เลขที่</label>
            <input class="form-control" name="number" placeholder="" />
            <label>ถนน</label>
            <input class="form-control" name="road" placeholder="" />
            <label>ตำบล/แขวง</label>
            <input class="form-control" name="subdistrict" placeholder="" />
            <label>อำเภอ/เขต</label>
            <input class="form-control" name="district" placeholder="" />
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
            <input class="form-control" name="zipcode" placeholder="" />
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>ราคา</label>
              <input type="text" class="form-control" name="price" placeholder="ระบุราคา">
          <div class="row">
              <div class="col-md-6">
                <label>จำนวนห้องน้ำ</label>
                <input class="form-control" name="rroom" placeholder="" />
              </div>
              <div class="col-md-6">
                <label>จำนวนห้องนอน</label>
                <input class="form-control" name="broom" placeholder="" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>ปีที่สร้างเสร็จ</label>
                <input class="form-control" name="finish_year" placeholder="" />
              </div>
              <div class="col-md-6">
                <label>ขนาดพื้นที่</label>
                <input class="form-control" name="area" placeholder="" />
              </div>
          </div>
          <label>รูปภาพประกอบ</label>

          <input type="file" name="userfile[]" id="files" multiple>
          <p class="help-block">*อัปโหลดรูปได้ไม่เกิน 5 รูป</p>
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
  </div>

</div>
