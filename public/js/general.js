/*
* registarform
* */
$(document).ready(function(){
    $("#registerform").hide();
});
function showRegistar(){
    $("#loginform").hide(1000);
    $("#searchbox").hide(1000);
    $("#registerform").slideToggle("slow");
}
/*
* loginform
* */
     $(document).ready(function(){
            $("#searchbox").hide();
          });
       function showLogin(){
            $("#searchbox").hide(1000);
           $("#registerform").hide(1000);
            $("#loginform").slideToggle("slow");
       }
/*
 * searchform
 */
      $(document).ready(function(){
            $("#loginform").hide();
        });
        function showSearch(){
            $("#loginform").hide(1000);
            $("#registerform").hide(1000);
            $("#searchbox").slideToggle("slow");
        }
/*
*menu
 */
      $(document).ready(function(){
       $("#buttons-exam").hide();
    });
    function showButtonExam(){
    $("#buttons-exam").slideToggle("slow");
}
        
        
        
        
        