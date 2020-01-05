$(document).ready(function () {
    //click button tra cứu điểm
    $("#tracuudiem").click(function () { 
        var data = $("#frm-tcd").serialize();
        $.ajax({
            type: "POST",
            url: "tracuu.php",
            data: data,
            success: function (data) {
                $('#table-tcd').html(data);
            }
        });
    });
});