$(function() {
 applyPagination();
 function applyPagination() {
    $("#ajax_paging a").click(function() {
    var url = $(this).attr("href");
    $.ajax({
       type: "POST",
       data: "ajax=1",
       url: url,
       beforeSend: function() {
      $("#content").html("");
       },
       success: function(msg) {
      $("#content").html(msg);
      applyPagination();
       }
    });
    return false;
    });
 }
});
