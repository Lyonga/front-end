
$(document).ready(function(){
  
   $('#showPass').on('click', function(){
    var pass=$("#pass");
    if(pass.attr('type')==='password')
    {
     pass.attr('type','text');
    }else{
     pass.attr('type','password');
    }
  });
});
