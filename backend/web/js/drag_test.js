$(document).ready(function () {





    $('#add_new_form').click(function () {
        var index = $('.index:last').attr('data-index') * 1 + 1;
        console.log(index)
        $('#questions').append(

        )
    })

    $(document).on('click', '#questions .delete', function () {
        $(this).closest('.item').remove();
    })

})
