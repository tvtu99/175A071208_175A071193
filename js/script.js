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