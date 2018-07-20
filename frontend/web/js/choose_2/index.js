$(document).ready(function () {
    if (__pop_text) {
        $('#pop_text').html(__pop_text);
    }
    $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});

    $(".user-avatar-small").click(function () {
        $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
    });
    $(".lesson-popup-close").click(function () {
        $(".lesson-popup-layer").css({"opacity": "0", "z-index": "-1"});
    });

    var index = 0;
    var Choose_data = __Data[index];

    $('.gender-power-btn span').html(Choose_data.title);
    $('.gender-power-btn .fa-arrow-left').click(function () {
        $('.male-responsibility').append('<span class="btn draggable" data-id="' + Choose_data.id + '">' + Choose_data.title + '</span>');
        index++;
        if (__Data[index]) {
            Choose_data = __Data[index];
            $('.gender-power-btn span').html(Choose_data.title);

        } else {
            $('#pop_button').show().html('Հաջորդ դասը').attr('href', '/test/next-lesson?id=' + __choose_test_id + '&g=' + __global_id + '&type=' + __Type);
            $('.lesson-popup-close').hide();
            $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
            SaveUserTestData()
        }

    });
    $('.gender-power-btn .fa-arrow-right').click(function () {
        $('.female-responsibility').append('<span class="btn draggable" data-id="' + Choose_data.id + '">' + Choose_data.title + '</span>');
        index++;
        if (__Data[index]) {
            Choose_data = __Data[index];
            $('.gender-power-btn span').html(Choose_data.title);

        } else {
            $('#pop_button').show().html('Հաջորդ դասը').attr('href', '/test/next-lesson?id=' + __choose_test_id + '&g=' + __global_id + '&type=' + __Type);
            $('.lesson-popup-close').hide();
            $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
            SaveUserTestData()
        }
    })

    $('.gender-power-btn .fa-arrow-up').click(function () {
        $('.male-female-responsibility').append('<span class="btn draggable" data-id="' + Choose_data.id + '">' + Choose_data.title + '</span>');
        index++;
        if (__Data[index]) {
            Choose_data = __Data[index];
            $('.gender-power-btn span').html(Choose_data.title);

        } else {
            $('#pop_button').show().html('Հաջորդ դասը').attr('href', '/test/next-lesson?id=' + __choose_test_id + '&g=' + __global_id + '&type=' + __Type);
            $('.lesson-popup-close').hide();
            $(".lesson-popup-layer").css({"opacity": "1", "z-index": "2"});
            SaveUserTestData()
        }
    })
});

function SaveUserTestData() {
    var data = {};
    data.choose_test_id = __choose_test_id;
    data.male = GetMaleResponsibility();
    data.female = GetFemaleResponsibility();
    data.both = GetBothResponsibility();
    data.time = $('#timer').html();
    $.ajax({
        type: "POST",
        url: "/ajax/save-choose-test", //actionGetCommunity
        data: data,
        success: function (res) {
            if (res) {
                $.each(res, function (index, value) {
                    $('#community').append('<option value="' + index + '">' + value + '</option>')
                });
            }
        }
    });
}

function GetMaleResponsibility() {
    var a = [];
    $('.male-responsibility .draggable').each(function () {
        a.push($(this).attr('data-id'))
    })
    return a;
}

function GetFemaleResponsibility() {
    var a = [];
    $('.female-responsibility .draggable').each(function () {
        a.push($(this).attr('data-id'))
    })
    return a;
}

function GetBothResponsibility() {
    var a = [];
    $('.male-female-responsibility .draggable').each(function () {
        a.push($(this).attr('data-id'))
    })
    return a;
}