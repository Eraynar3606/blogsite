require('./bootstrap');
import $ from "jquery";
$(function() {
    $("#bilgiler").click(function(){
      var veri=$("#bilgiler").serialize();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
     $.ajax({
    url:"/getir",
    method:"POST",
    data:veri,
    success:function(result){
      console.log(result);
    }
     });
    });
    });
 



















































































































