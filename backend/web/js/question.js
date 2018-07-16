$(document).ready(function () {


    $('#add_new_form').click(function () {
        var index = $('.index:last').attr('data-index') * 1 + 1;
        console.log(index)
        $('#questions').append(
            '<div class="item row">' +
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
            '     <div class="col-md-3 ">' +
            '         <lable>Answer 4</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_4]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_4]>' +
            '     </div>' +
            '     <div class="col-md-3 hide-b">' +
            '         <lable>Answer 5</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_5]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_5]>' +
            '     </div>' +
            '     <div class="col-md-3 hide-b">' +
            '         <lable>Answer 6</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_6]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_6]>' +
            '     </div>' +
            '     <div class="col-md-3 hide-b">' +
            '         <lable>Answer 7</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_7]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_7]>' +
            '     </div>' +
            '     <div class="col-md-3 hide-b">' +
            '         <lable>Answer 8</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_8]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_8]>' +
            '     </div>' +
            '     <div class="col-md-3 hide-b">' +
            '         <lable>Answer 9</lable>' +
            '         <br>' +
            '         <span>Right </span>' +
            '         <input  type="checkbox" name = test[index_' + index + '][right_9]>' +
            '         <input class="form-control" type="text" name = test[index_' + index + '][answer_9]>' +
            '     </div>' +
            '     <div class="col-md-3">' +
            '<button type="button" id="" style="margin: 5px 5px;" class="btn btn-success add_new_answer">+</button>' +
            '     </div>' +
            '     <hr>' +
            '</div>'
        )
    })

    $(document).on('click', '#questions .delete', function () {
        $(this).closest('.item').remove();
    })
    $(document).on('click', '#questions .add_new_answer', function () {
        if ($(this).closest('.item').find('.hide-b:first').length) {
            $(this).closest('.item').find('.hide-b:first').removeClass('hide-b');
        } else {
            $(this).hide();
        }
    })

})