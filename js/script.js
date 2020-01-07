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