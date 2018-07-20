$(document).ready(function () {

    setTimeout(function () {
        $('.message').fadeOut(500);
    }, 1500)

    $('#region').change(function () {
        var ob = $(this);
        var data = {};
        data.id = ob.val();
        $.ajax({
            type: "POST",
            url: "/ajax/get-city-by-region", //actionGetCityByRegion
            data: data,
            success: function (res) {
                $('#city').html('<option value="">--</option>')
                $('#community').html('<option value="">--</option>')
                $('#school').html('<option value="">--</option>')
                if (res) {
                    $.each(res, function (index, value) {
                        $('#city').append('<option value="' + index + '">' + value + '</option>')
                    });
                }
            }
        });
    })
    $('#city').change(function () {
        var ob = $(this);
        var data = {};
        data.city_id = ob.val();
        data.region_id = $('#region').val();
        $.ajax({
            type: "POST",
            url: "/ajax/get-community", //actionGetCommunity
            data: data,
            success: function (res) {
                $('#community').html('<option value="">--</option>');
                $('#school').html('<option value="">--</option>');
                if (res) {
                    $.each(res, function (index, value) {
                        $('#community').append('<option value="' + index + '">' + value + '</option>')
                    });
                }
            }
        });
    })
    $('#community').change(function () {
        var ob = $(this);
        var data = {};
        data.community_id = ob.val();
        data.city_id = $('#city').val();
        data.region_id = $('#region').val();
        $.ajax({
            type: "POST",
            url: "/ajax/get-school", //actionGetSchool
            data: data,
            success: function (res) {
                $('#school').html('<option value="">--</option>');
                if (res) {
                    $.each(res, function (index, value) {
                        $('#school').append('<option value="' + index + '">' + value + '</option>')
                    });
                }
            }
        });
    })

})