
$(document).ready(function(){$('#sidebar').affix({
      offset: {
        top: 240
      }
});	
});

$("#logout_btn").click(function() {
    $.ajax({
        url: 'index.php?argument=logout',
        success: function(data){
            location.href = 'login.php';
        }
    });
});