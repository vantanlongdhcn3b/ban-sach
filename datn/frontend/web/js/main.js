
//login và signup trên modal sử dụng ajax
function openLogin(){
    $.get('/hocphp/datn/site/login', function(data) {
      $("#contentModaLoginlAjax").html(data);
    });
}

 function openSignup(){
    $.get('/hocphp/datn/site/signup', function(data) {
      $("#contentModalSignupAjax").html(data);
    });
}
function checkLogin(){
    //khi bị click
        $.ajax(
            {
                //post lên cả form vào action login
                url:"http://localhost/hocphp/datn/site/login",
                type:'POST',
                data:$("#login-form").serialize(),//post lên theo array
                success:function(response){
                    $("#contentModaLoginlAjax").html(response);
                },
                error:function(e){
                    //alert();
                    location.reload();
                }
            });
        return false;
    //});
}

function checkSignup(){
    //khi bị click
        $.ajax(
            {
                //post lên cả form vào action login
                url:"http://localhost/hocphp/datn/site/signup",
                type:'POST',
                data:$("#form-signup").serialize(),//post lên theo array
                success:function(response){
                    $("#contentModalSignupAjax").html(response);
                },
                error:function(e){
                    //alert();
                    location.reload();
                }
            });
        return false;
    //});
}

function changeImage(src){
    src_before=$("#imgpro_before").attr('src');
    $("#imgpro_before").attr({
            'src':src
    });
    $("#imgpro_after").attr({
            'src':src_before
    });
}
//end login









