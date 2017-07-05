<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>ตั้งรหัสผ่านใหม่</h1>
        <?php if($status==0){?>
          <div class="alert alert-success">
            <strong>ยืนยันตัวตนสำเร็จ</strong> กรุณาตั้งรหัสผ่านใหม่.
          </div>
        <?php }else if($status==1){ ?>
          <div class="alert alert-success">
            <strong>ตั้งรหัสผ่านใหม่สำเร็จ</strong> กรุณาลงชื่อเข้าสู่ระบบ.
          </div>
          <?php }else if($status==2){ ?>
            <div class="alert alert-danger">
              <strong>ตั้งรหัสผ่านใหมไม่่สำเร็จ</strong> กรุณาตั้งรหัสผ่านใหม่.
            </div>
            <?php } ?>
        <form id="form_forgot" action="<?php echo base_url('login/change_forgot/').$uid ?>" method="post">
        <div class="form-group">
          <label for="new_pass">Password:</label>
          <input type="password" class="form-control" id="regis_password" name="regis_password">
        </div>
        <div class="form-group">
          <label for="con_newpass">Confirm-Password:</label>
          <input type="password" class="form-control" id="password_confirm" name="password_confirm">
        </div>
        <button type="submit" class="btn-lg btn-primary">ยืนยัน</button>
      </div>
    </form>
    </div> <!-- /container -->
