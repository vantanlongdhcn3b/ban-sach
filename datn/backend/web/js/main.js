

$(document).ready(function(){

	var host=window.location.href;//backend
	host = host.split("backend"); 
	tinymce.init({
	  selector: 'textarea', theme: "modern",
	  height: "",
	  width: "",
	  theme: 'modern',
	  plugins: [
	    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
	    'searchreplace wordcount visualblocks visualchars code fullscreen',
	    'insertdatetime media nonbreaking save table contextmenu directionality',
	    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
	  ],
	  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
	  image_advtab: true,
	  menubar: false,
	  remove_script_host : false,
	  external_filemanager_path : host[0] + "filemanager/",
	  filemanager_title: "Quản lý file",
	  external_plugins : {"filemanager" : host[0] + "filemanager/plugin.min.js"},
  
 		});
	//modal avata
	$("#select_avata").click(function(event){

		$("#myModal").modal();
	});
	
	$('#myModal').on('hidden.bs.modal', function () {

    	avataSrc=$("#avata").val();
    	
    	if(avataSrc==""){
    		$("#preview_avata").attr({
    		'src':"/hocphp/datn/backend/web/img/avata_default.png"
    	});
    	}
    	else{
    		$("#preview_avata").attr({
    		'src':avataSrc
    		});
    		$("#avata").val(avataSrc);
    	}
    	
    	
	});

	$("#remove_avata").click(function(){
		$("#preview_avata").attr({
    		'src':'http://localhost/hocphp/datn/backend/web/img/avata_default.png'
    	});
    	$("#avata").val("");
	})



	//modal image product
    $("#select_image").click(function(event){

        $("#ModalImgPro").modal();
    });
    
    $('#ModalImgPro').on('hidden.bs.modal', function () {

        imgSrc=$("#image").val();
        $("#preview_image").attr({
        'src':imgSrc
        });
        $("#image").val(imgSrc);
    });

    $("#remove_image").click(function(){
        $("#preview_image").attr({
            'src':''
        });
        $("#image").val("");
    })

    // groupe image after
    $("#select_image_after").click(function(event){

        $("#ModalImgAfter").modal();
    });
    
    $('#ModalImgAfter').on('hidden.bs.modal', function () {

        imgSrc=$("#image_after").val();
        $("#preview_image_after").attr({
        'src':imgSrc
        });
        $("#image_after").val(imgSrc);
    });

    $("#remove_image_after").click(function(){
        $("#preview_image_after").attr({
            'src':''
        });
        $("#image_after").val("");
    })

    
    

});

function openCreateProvince(){
	$("#modalCreateProvince").modal();

    $.get('/hocphp/datn/backend/web/province/create', function(data) {
      $("#contentModalProvinceCreate").html(data);
    });
}



function checkCreateProvince(){
    //khi bị click
        $.ajax(
            {
                //post lên cả form vào action login
                url:"http://localhost/hocphp/datn/backend/web/province/create",
                type:'POST',
                data:$("#form-create").serialize(),//post lên theo array
                success:function(response){
                    $("#contentModalProvinceCreate").html(response);
                },
                error:function(e){
                    //alert();
                    location.reload();
                }
            });
        return false;
    //});
}

function openCreateAuthor(){
    $("#modalCreateAuthor").modal();

    $.get('/hocphp/datn/backend/web/product/create-author', function(data) {
      $("#contentModalAuthorCreate").html(data);
    });
}

function checkCreateAuthor(){
    $("#modalCreateAuthor").modal('hide');
        $.ajax(
            {
                //post lên cả form vào action login
                url:"http://localhost/hocphp/datn/backend/web/product/create-author",
                type:'POST',
                data:$("#author-form-create").serialize(),//post lên theo array
                success:function(response){
                    $("#contentModalAuthorCreate").html(response);
                },
                error:function(e){
                    //alert();
                    location.reload();
                }
            });
        return false;   
}

function changeParent(cat_id){
    $.get('/hocphp/datn/backend/web/product/getsubcat?cat_id='+ cat_id, function(data) {
      $("#dropdownSubCat").html(data);
    });
}

 $('#image-upload').on('fileuploaded', function(event, data, previewId, index) {
        var src = $('#' + previewId + ' img').attr('src');
        alert(src);
    });






