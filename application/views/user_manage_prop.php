<div class="container" style="margin-top:20px;">
  <div class="jumbotron" style="background-color:white;">
  <h2>รายการประกาศของคุณ</h2>
  <p>คุณสามารถจัดการแก้ไขหรือลบรายการประกาศของคุณได้</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>เลขที่ประกาศ</th>
        <th>ชื่อประกาศ</th>
        <th>วันที่ประกาศ</th>
        <th>สถานะการอนุมัติ</th>
        <th>การจัดการ</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0;$i<$c_rs;$i++){

      ?>
      <?php if($activation[$i]=="No"){
              $approve="รอการอนุมัติ";
        ?>

        <?php }else{
            $approve="อนุมัติ";
          ?>

          <?php }?>
      <tr>
        <td><?php echo $property_id[$i];?></td>
        <td><?php echo $propertyname[$i];?></td>
        <td><?php echo $created[$i];?></td>
        <td><?php echo $approve;?></td>
        <?php if($activation[$i]=="Yes"){?>
          <td>
              <a class="btn btn-danger" href="<?php echo base_url("user_manage_prop/delete/".$property_id[$i]);?>"><i class="glyphicon glyphicon-trash"></a></td>
        <?php }else{ ?>
        <td><a class="btn btn-primary" href="<?php echo base_url("user_manage_prop/edit/".$property_id[$i]);?>"><i class="glyphicon glyphicon-edit"></i></a>
            <a class="btn btn-danger" href="<?php echo base_url("user_manage_prop/delete/".$property_id[$i]);?>"><i class="glyphicon glyphicon-trash"></a></td>
            <?php }?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
</div>
