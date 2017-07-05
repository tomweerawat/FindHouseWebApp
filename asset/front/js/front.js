function send_data() {
  $.ajax({
    url: "http://localhost:8181/tnfindhouse/changePass/get_newPass",
    type: 'POST',
    dataType: 'json',
    enctype:'multipart/form-data',
    data: $('#form_register').submit(),
    encode:true,
    success:function(data) {
      if(!data.success){
        if(data.errors){
          $('#message').html(data.errors).addClass('alert alert-danger');
          // $('#message').hide(1000);
          $('#message').show(2000);
        }
      }else {
        alert(data.message);
        setTimeout(function() {
          window.location.reload()
        }, 400);
      }
    }
  })
}
function send_login() {
  $.ajax({
    url: "http://localhost:8181/tnfindhouse/login/chk_login",
    type: 'POST',
    dataType: 'json',
    data: $('#form_login').serialize(),
    encode:true,
    success:function(data) {
      if(!data.success){
        if(data.errors){
          $('#error').html(data.errors).addClass('alert alert-danger');
          // $('#message').hide(1000);
          $('#error').show(2000);
        }
      }else {
        alert(data.message);
        setTimeout(function() {
          window.location.reload()
        }, 400);
      }
    }
  })
}
function send_forgot() {
  $.ajax({
    url: "http://localhost:8181/tnfindhouse/login/chk_forgot",
    type: 'POST',
    dataType: 'json',
    data: $('#form_forgot').serialize(),
    encode:true,
    success:function(data) {
      if(!data.success){
        if(data.errors){
          $('#error').html(data.errors).addClass('alert alert-danger');
          // $('#message').hide(1000);
          $('#error').show(2000);
        }
      }else {
        alert(data.message);
        setTimeout(function() {
          window.location.reload()
        }, 400);
      }
    }
  })
}
