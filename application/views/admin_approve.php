<div class="container">
  <div class="jumbotron">
  <h2>รายการประกาศ</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width:20%">หัวข้อ</th>
        <th>รายละเอียด</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>เลขที่ประกาศ</td>
        <td><?php echo $property_id;?></td>
      </tr>
      <tr>
        <td>ผู้ประกาศ</td>
        <td><?php echo $user_id;?></td>
      </tr>
      <tr>
        <td>ชื่อประกาศ</td>
        <td><?php echo $propertyname;?></td>
      </tr>
      <tr>
        <td>ประเภทการประกาศ</td>
        <td><?php echo $proptype;?></td>
      </tr>
      <tr>
        <td>ประเภทอสังหาริมทรัพย์</td>
        <td><?php echo $ptype;?></td>
      </tr>
      <tr>
        <td>รายละเอียด</td>
        <td><?php echo $detail;?></td>
      </tr>
      <tr>
        <td>ราคา</td>
        <td><?php echo $price;?></td>
      </tr>
      <tr>
        <td>ที่อยู่</td>
        <td><?php echo $number.", ".$house.", ".$road.", ".$subdistrict.", ".$district.", ".$province.", ".$zipcode;?></td>
      </tr>
      <tr>
        <td>วันที่ประกาศ</td>
        <td><?php echo $created;?></td>
      </tr>
      <tr>
        <td>รูปภาพประกอบ</td>
        <td><?php for($i=0;$i<$num_rows;$i++){ ?>
          <div class="img">
          <a target="_blank" href="<?php $img= $pic[$i];
          echo base_url("".$img.""); ?>">
          <img src="<?php $img= $pic[$i];
          echo base_url("".$img.""); ?>" alt="Fjords" width="300" height="200"></a>
          </div>
          <?php }?>
        </td>
      </tr>
      <tr>
        <td>สถานะการอนุมัติ</td>
        <form class="form" action="<?php echo base_url('admin_manage_prop/admin_approve/'.$property_id);?>" method="post">
        <td><?php if($activation=="No"){?>
          <select name="mydropdown">
            <option value="No">รอการอนุมัติ</option>
            <option value="Yes">อนุมัติ</option>
          </select>
          <?php }else{?>
            <select name="mydropdown">
              <option value="Yes">อนุมัติ</option>
              <option value="No">รอการอนุมัติ</option>
            </select>
            <?php }?>
          </select></td>
      </tr>
    </tbody>
  </table>
    <button type="submit" class="btn btn-success">บันทึก</button></form>
  </div>
</div>

<style>
 div.img {
   margin: 5px;
   border: 1px solid #ccc;
   float: left;
   width: 180px;
   }

 div.img:hover {
     border: 1px solid #777;
 }

 div.img img {
     width: 100%;
     height: auto;
 }

 div.desc {
     padding: 15px;
     text-align: center;
 }
 </style>
