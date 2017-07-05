<style>
    body {
      background-color:#fff;
      -webkit-font-smoothing: antialiased;
      margin-top: 20px;
    }

    .form-search {
        background-color: #bfbfbf;
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        border-color:#d2d2d2;
        border-width: 5px;
        box-shadow:0 1px 0 #cfcfcf;
        opacity: 0.9;
    }

    .form-control {
        border-radius: 5px;

    }

    .wrapper {
        text-align: center;
    }
</style>
<div class="jumbotron" style="background-image:url(<?php echo base_url('asset/front/search-bg.jpg') ?>); font-family: 'Prompt', sans-serif;">
  <div class="container">
    <h1 style="font-family: 'Prompt', sans-serif; color:white;">คุณกำลังมองหาอะไรอยู่?</h1>
    <p style="font-family: 'Prompt', sans-serif; color:white;">ค้นหาบ้านที่ใช่ในสไตล์คุณได้ทีนี่</p>

    <div class="row">
        <div class="col-md-12">
            <div class="form-search">
              <div class="row"><div class="col-md-1">
              <form action="<?php echo base_url('search')?>" method="post" enctype="multipart/form-data">
              </div>
                <div class="col-md-2">
                  <label>จังหวัด</label>
                  <select class="form-control" name="province" >
                    <option value="0" selected>--- ทุกจังหวัด ---</option>
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
                </div>
                <div class="col-md-2">
                  <label>หมวดหมู่</label>
                  <select class="form-control" name="ptype">
                    <option value="0" selected>--- ทุกหมวดหมู่ ---</option>
                    <option value="บ้านเดี่ยว">บ้านเดี่ยว</option>
                    <option value="ทาวน์เฮ้าส์">ทาวน์เฮ้าส์</option>
                    <option value="คอนโด">คอนโด</option>
                    <option value="ที่ดิน">ที่ดิน</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label>ช่วงราคา</label>
                  <select class="form-control" name="price">
                    <option value="0" selected>--- ทุกราคา ---</option>
                    <option value="1">0 - 500,000</option>
                    <option value="2">500,001 - 1,000,000</option>
                    <option value="3">1,000,001 - 2,000,000</option>
                    <option value="4">2,000,001 - 3,000,000</option>
                    <option value="5">3,000,001 - 4,000,000</option>
                    <option value="6">4,000,001 - 5,000,000</option>
                    <option value="7">5,000,001 ขึ้นไป</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label>ประเภทรายการประกาศ</label>
                  <select class="form-control" name="proptype">
                    <option value="0" selected>--- ทุกประเภท ---</option>
                    <option value="ขาย">ขาย</option>
                    <option value="ให้เช่า">ให้เช่า</option>
                  </select>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 15px;">ค้นหา</button>
                </div>
              </form>
            </div>
            </div>
      </div>
    </div>
  </div>
</div>
