$(document).ready(function () {
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
});

