$(document).ready(function(){
    setTimeout(function(){
          $.get("check.php", function(data){
          if(data==0) window.location.href="logout.php";
          });
      },1*60*1000);
  });