$(document).ready(function () {
    //click button add khoa
    $("#bt-addkhoa").click(function () { 
        var data = $("#frm-addkhoa").serialize();
        $.ajax({
            type: "POST",
            url: "./xuly/add-khoa.php",
            data: data,
            success: function (data) {
                $('#tb-add-khoa').html(data);
            }
        });
    });
    
});
$(document).ready(function(){  
    $('#show-khoa').change(function(){  
        var id = $(this).val();  
        $.ajax({  
            url:"./xuly/load_monhoc.php",  
            method:"POST",  
            data:{makhoa:id},  
            success:function(data){  
                    $('#shownganh').html(data);  
            }  
        });  
    });  
}); 
$(document).ready(function(){  
    $('#shownganh').change(function(){  
        var id = $(this).val();  
        $.ajax({  
            url:"./xuly/load_monhoc.php",  
            method:"POST",  
            data:{manganh:id},  
            success:function(data){  
                    $('#tb_show_mon').html(data);  
            }  
        });  
    });  
}); 
// $(document).ready(function () {
//     //click button import nganh hoc
//     $("#bt-import_file_nganhhoc").click(function () { 
//         var data = $("#frm-import-nganh").serialize();
//         $.ajax({
//             type: "POST",
//             url: "./xuly/import-nganh.php",
//             data: data,
//             // dataType : 'json',
//             // contentType : false,
//             // cache : false,
//             // processata : false,
//             success: function (data) {
//                 $('#mess-nganh').html(data);
//             }
//         });
//     });
// });