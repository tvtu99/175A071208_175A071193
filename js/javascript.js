/*
$(document).ready(function () {
    let addButton = $('.add-button');
    let name_task = $('.add-field');
    let tasks = $('.tasks')
    //thêm một task khi co sk add

    $(addButton).click(function () { 
        $('.tasks').append(`<li class="task">
            <div class="task-checked col-1">
                <input type="checkbox">
            </div>
            <div class="task col-2">${name_task.val()}</div>
            <div class="task-remove col-3"></div>
        </li>`);
        $(name_task).val('');
    });
    //remove
    $(tasks).on('click','.task-remove',function(){ 
        $(this).parent().remove();
    });
    //checked
    $(tasks).on('change','.task-checked input',function(){ 
        $(this).parent().next().toggleClass('checked');
    });

    $('#tasks-list').sortable();
});
*/