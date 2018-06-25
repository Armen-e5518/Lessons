$(document).ready(function () {

    $('#region').change(function () {
        var ob = $(this);
        var data = {};
        data.id = ob.val();
        $.ajax({
            type: "POST",
            url: "/ajax/get-city-by-region", //actionGetCityByRegion
            data: data,
            success: function (res) {
                if (res) {
                    $('#city').html('<option value="">--</option>')
                    res.forEach(function (val, indx) {
                        $('#city').append('<option value="' + (indx * 1 + 1) + '">' + val + '</option>')
                    })
                }
            }
        });
    })
    $('#city').change(function () {
        var ob = $(this);
        var data = {};
        data.id = ob.val();
        $.ajax({
            type: "POST",
            url: "/ajax/get-community", //actionGetCommunity
            data: data,
            success: function (res) {
                if (res) {
                    $('#community').html('<option value="">--</option>');
                    $.each(res, function (index, value) {
                        $('#community').append('<option value="' + index + '">' + value + '</option>')
                    });
                }
            }
        });
    })


})