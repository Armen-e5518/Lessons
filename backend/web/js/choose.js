$('#add_new_form').click(function (e) {
    var index = $('.index:last').attr('data-index') * 1 + 1;
    index = index ? index : 1;
    $('#choose').append(
        ' <div class="item index" data-index="' + index + '">' +
        '      <H4>Items ' + index + ' </H4>' +
        '    <a href="#" class="delete" style="color: red">Delete</a>' +
        '      <div class="row">' +
        '          <div class="col-md-8">' +
        '              <lable>Title</lable>' +
        '              <input class="form-control" type="text" name=test[index_' + index + '][title]>' +
        '              <lable>Man</lable>' +
        '              <input value="1" type="radio" name=test[index_' + index + '][status]>' +
        '              <lable>Female</lable>' +
        '              <input value="2" type="radio" name=test[index_' + index + '][status]>' +
        '              <lable>Both</lable>' +
        '              <input value="3" type="radio" name=test[index_' + index + '][status]>' +
        '          </div>' +
        '      </div>' +
        '  </div>'
    )

})
$(document).ready(function () {
    $(document).on('click', '#choose .delete', function () {
        $(this).closest('.item').remove();
    })
})

