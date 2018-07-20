function GetItem(id) {
    var s;
    __data.forEach(function (val, index) {
        if (val.id == id) {
            s = val;
        }
    })
    return s;
}

$(document).ready(function () {

    $('#next').attr('href', '/test/next-lesson?id=' + __id + '&g=' + __global_id + '&type=' + __Type);
    if (__pop_text) {
        $('#pop_text').html(__pop_text);
    }

    $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});

    $(".user-avatar-small").click(function () {
        $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
    });
    $(".lesson-popup-close, #pop_button").click(function () {
        $(".lesson-popup-layer").css({"opacity": "0", "z-index": "-1"});
    });

    $(function () {
        var sortable1 = $("#sortable1").sortable({
            connectWith: 'div',
            update: function (event, ui) {
                console.log('update');

                // if (!ui.item.hasClass('true-item')) {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     console.log(data)
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(data.text);
                //     $('#pop_button').show();
                //     $('#pop_button').html('Վերադասավորել');
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //     $("#sortable1, #sortable3").sortable("cancel");
                // } else {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(__data[0].text);
                //     $('#pop_title').attr('class', 'green-txt');
                //     $('#pop_title i').show();
                //     $('#pop_button').html('Հաջորդ դասը');
                //     $('#sortable3 strong').hide();
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //
                //     console.log('Else')
                // }
            }
        });
        var sortable2 = $("#sortable2").sortable({
            connectWith: 'div',
            // over: function (event, ui) {
            //     if ($("#sortable2 .factor-item").length > 1) {
            //         $("#sortable1").sortable("cancel");
            //     }
            // },
            update: function (event, ui) {
                if ($("#sortable2 .factor-item").length > 1) {
                    $("#sortable1").sortable("cancel");
                    $("#sortable3").sortable("cancel");
                    $("#sortable4").sortable("cancel");
                } else {
                    UpdateList(ui)
                }
                // if (!ui.item.hasClass('true-item')) {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     console.log(data)
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(data.text);
                //     $('#pop_button').show();
                //     $('#pop_button').html('Վերադասավորել');
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //     $("#sortable1, #sortable3").sortable("cancel");
                //                 // } else {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(__data[0].text);
                //     $('#pop_title').attr('class', 'green-txt');
                //     $('#pop_title i').show();
                //     $('#pop_button').html('Հաջորդ դասը');
                //     $('#sortable3 strong').hide();
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //
                //     console.log('Else')
                // }
            }
        });
        var sortable3 = $("#sortable3").sortable({
            connectWith: 'div',
            // over: function (event, ui) {
            //     if ($("#sortable3 .factor-item").length > 4) {
            //         $("#sortable1").sortable("cancel");
            //     }
            // },
            update: function (event, ui) {
                if ($("#sortable3 .factor-item").length > 4) {
                    $("#sortable1").sortable("cancel");
                    $("#sortable2").sortable("cancel");
                    $("#sortable4").sortable("cancel");
                } else {
                    UpdateList(ui)
                }
                // if (!ui.item.hasClass('true-item')) {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     console.log(data)
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(data.text);
                //     $('#pop_button').show();
                //     $('#pop_button').html('Վերադասավորել');
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //     $("#sortable1, #sortable3").sortable("cancel");
                // } else {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(__data[0].text);
                //     $('#pop_title').attr('class', 'green-txt');
                //     $('#pop_title i').show();
                //     $('#pop_button').html('Հաջորդ դասը');
                //     $('#sortable3 strong').hide();
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //
                //     console.log('Else')
                // }
            }
        });
        var sortable4 = $("#sortable4").sortable({
            connectWith: 'div',
            cancel: ".disable-sort-item",
            // over: function (event, ui) {
            //     if ($("#sortable4 .factor-item").length > 6) {
            //         $("#sortable1").sortable("cancel");
            //     }
            // },
            update: function (event, ui) {
                console.log('update');
                if ($("#sortable4 .factor-item").length > 6) {
                    $("#sortable1").sortable("cancel");
                    $("#sortable2").sortable("cancel");
                    $("#sortable3").sortable("cancel");
                } else {
                    UpdateList(ui)
                }
                // if (!ui.item.hasClass('true-item')) {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     console.log(data)
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(data.text);
                //     $('#pop_button').show();
                //     $('#pop_button').html('Վերադասավորել');
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //     $("#sortable1, #sortable3").sortable("cancel");
                // } else {
                //     var data = GetItem(ui.item.attr('data-id'));
                //     $('#pop_title').show();
                //     $('#pop_title').attr('class', 'blue-txt');
                //     $('#pop_title span').html(data.title);
                //     $('#pop_text').html(__data[0].text);
                //     $('#pop_title').attr('class', 'green-txt');
                //     $('#pop_title i').show();
                //     $('#pop_button').html('Հաջորդ դասը');
                //     $('#sortable3 strong').hide();
                //     $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                //
                //     console.log('Else')
                // }
            }
        });

        $("#sortable1, #sortable2, #sortable3, #sortable4").disableSelection();
    });

    function UpdateList(ui) {
        var sortable2_c = $('#sortable2 .factor-item').length;
        var sortable3_c = $('#sortable3 .factor-item').length;
        var sortable4_c = $('#sortable4 .factor-item').length;
        if (sortable2_c == 1 && sortable3_c == 4 && sortable4_c == 6) {
            console.log('oki')

            if (!$('#sortable2 .factor-item').hasClass('true-item')) {
                var data = GetItem($('#sortable2 .factor-item').attr('data-id'));
                console.log(data)
                $('#pop_title').show();
                $('#pop_title span').html(data.title);
                $('#pop_text').html(data.text);
                $('#pop_button').show();
                $('#pop_button').html('Վերադասավորել');
                $('#pop_button').attr('href', '#');
                $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
            } else {
                var data = GetItem($('#sortable2 .factor-item').attr('data-id'));
                $('#pop_title').show();
                $('.lesson-popup-close').hide();
                $('#pop_title span').html(data.title);
                $('#pop_text').html(data.text);
                $('#pop_title').attr('class', 'green-txt');
                $('#pop_title i').show();
                $('#pop_button').show();
                $('#pop_button').html('Հաջորդ դասը');
                $('#pop_button').attr('href', '/test/next-lesson?id=' + __id + '&g=' + __global_id + '&type=' + __Type);
                $('#sortable3 strong').hide();
                $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
                SaveUserTestData()
                console.log('Else')
            }
        }
    }

});

function SaveUserTestData() {
    var data = {};
    data.drag_test_id = __id;
    data.global_lesson_id = __global_id;
    data.time = $('#timer').html();
    $.ajax({
        type: "POST",
        url: "/ajax/save-drag-test", //actionGetCommunity
        data: data,
        success: function (res) {
            if (res) {
                // $.each(res, function (index, value) {
                //     $('#community').append('<option value="' + index + '">' + value + '</option>')
                // });
            }
        }
    });
}