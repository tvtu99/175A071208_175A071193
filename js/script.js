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
// chọn Khoa -> hiển thị ra bảng chọn ngành
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
//select theo nganh -> môn học 
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
//show giai đoạn Theo năm học
$(document).ready(function(){  
    $('#namhoc_gd').change(function(){  
        var id = $(this).val();  
        $.ajax({  
            url:"./xuly/load_giaidoan.php",  
            method:"POST",  
            data:{namhoc:id},  
            success:function(data){  
                    $('#tb_show_giaidoan').html(data);  
            }  
        });  
    });  
});
//click nút button update giai đoạn
$(document).ready(function () {
    $('#bt_up_gd').click(function (e) { 
        e.preventDefault();
        var data = $('#frm_update_gd').serialize();
        $.ajax({
            type: "POST",
            url: "./xuly/update_giaidoan.php",
            data: data,
            success: function (data) {
                $('#div_up_giaidoan').html(data);
            }
        });
    });
}); 
//click button show lop học phần
$(document).ready(function () {
    $("#bt_show_lophp").click(function (e) { 
        e.preventDefault();
        var data= $('#frm_show_lophp').serialize();
        $.ajax({
            type: "POST",
            url: "./xuly/load_lophp.php",
            data: data,
            success: function (data) {
                $('#tb_show_lophp').html(data);
            }
        });
    });
});
//click nút button update LHP
$(document).ready(function () {
    $('#bt_up_lhp').click(function (e) { 
        e.preventDefault();
        var data = $('#frm_update_lhp').serialize();
        $.ajax({
            type: "POST",
            url: "./xuly/update_lhp.php",
            data: data,
            success: function (data) {
                $('#div_up_lhp').html(data);
            }
        });
    });
}); 