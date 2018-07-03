$('.l_lesson .item').click(function (e) {
    var sorting = $('.all_lessons .item:last').attr('data-sorting') ? $('.all_lessons .item:last').attr('data-sorting') : 0;
    sorting = sorting * 1 + 1;
    var name = $(this).find('input').attr('name');
    console.log(sorting)
    $(this).attr('data-sorting', sorting)
    $(this).find('input').attr('name', name + '[' + sorting + ']');
    $('.all_lessons .box-body').append($(this).clone())
    $(this).find('input').attr('name', name);
})

$(document).ready(function () {

    $(document).on('click', '.all_lessons .fa-close', function () {
        $(this).closest('.item').remove();
    })
})

