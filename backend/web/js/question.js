$(document).ready(function () {


    $('#add_new_form').click(function () {
        var index = $('.index:last').attr('data-index') * 1 + 1;
        console.log(index)
        $('#questions').append(
            '<div class="item">' +
            '     <H4>Question ' + index + ' </H4>' +
            '     <div class="col-md-12 index"  data-index = ' + index + '>' +
            '         <lable>Question</lable>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][question]>' +
            '     </div>' +
            '     <div class="col-md-3">' +
            '         <lable>Answer 1</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_1]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_1]>' +
            '     </div>' +
            '     <div class="col-md-3">' +
            '         <lable>Answer 2</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_2]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_2]>' +
            '     </div>' +
            '     <div class="col-md-3">' +
            '         <lable>Answer 3</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_3]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_3]>' +
            '     </div>' +
            '     <div class="col-md-3">' +
            '         <lable>Answer 4</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_4]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_4]>' +
            '     </div>' +
            '     <hr>' +
            '</div>'
        )
    })

    $(document).on('click', '#questions .delete', function () {
        $(this).closest('.item').remove();
    })

})