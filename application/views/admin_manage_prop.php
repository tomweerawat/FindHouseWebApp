<div class="container">
  <div class="jumbotron">
  <h2>รายการประกาศ</h2>
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

      <tr>
        <?php if($activation[$i]=="No"){
                $approve="รอการอนุมัติ";
          ?>

          <?php }else{
              $approve="อนุมัติ";
            ?>

            <?php }?>
        <td><?php echo $property_id[$i];?></td>
        <td><?php echo $propertyname[$i];?></td>
        <td><?php echo $created[$i];?></td>
        <td><?php echo $approve;?></td>
        <td><a class="btn btn-primary" href="<?php echo base_url("admin_manage_prop/edit/".$property_id[$i]);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
</div>
