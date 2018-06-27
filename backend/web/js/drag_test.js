var g_ob;
var JQ = jQuery;
$('.color').hover(function () {
    g_ob = $(this);
})

var color_d = function ($) {
    var g_ob;

    $('.color').hover(function () {
        g_ob = $(this);
    })

    $('.color').ColorPicker({
        color: '#0000ff',
        onShow: function (colpkr) {
            $(colpkr).fadeIn(500);
            return false;
        },
        onHide: function (colpkr) {
            $(colpkr).fadeOut(500);
            return false;
        },
        onChange: function (hsb, hex, rgb) {
            g_ob.val('#' + hex);
            g_ob.css('backgroundColor', '#' + hex);
        }
    });


};
color_d(JQ)

$('#add_new_form').click(function (e) {
    var index = $('.index:last').attr('data-index') * 1 + 1;
    index = index ? index : 1;
    $('#drag').append(
        '<div class="item index" data-index = ' + index + '>' +
        '      <H4>Items ' + index + ' </H4>' +
        '      <a href="#" class="delete" style="color: red">Delete</a>' +
        '      <div class="row">' +
        '          <div class="col-md-6">' +
        '              <lable>Icon</lable>' +
        '              <input class="form-control" type="file" name=test[index_' + index + '][img]>' +
        '              <lable>Color</lable>' +
        '              <input class="form-control color" autocomplete="off" id="color" type="text" name=test[index_' + index + '][color]>' +
        '              <lable>Title</lable>' +
        '              <input class="form-control" type="text" name=test[index_' + index + '][title]>' +
        '          </div>' +
        '          <div class="col-md-6">' +
        '              <lable>Text</lable>' +
        '              <input class="form-control" type="text" name=test[index_' + index + '][text]>' +
        '              <lable>Right</lable>' +
        '              <input class="" type="checkbox" name=test[index_' + index + '][status]>' +
        '          </div>' +
        '      </div>' +
        '</div>'
    )
    color_d(JQ)
})
$(document).ready(function () {
    $(document).on('click', '#drag .delete', function () {
        $(this).closest('.item').remove();
    })
})

