var __data = [
    {
        id: 1,
        title: "Պատասխանատու վարքագիծ",
        text: `- Պատասխանատու վարքագիծը առողջության վրա ազդող  ամենակարևոր
							գործոնն է, դու ճիշտ ես: Այդ գործոնից է կախված մնացած բոլոր
							գործոնների ազդեցությունը: Մարդն իր պատասխանատու վերաբերմունքով
							կարող է ճիշտ սնվել, մարզվել, զերծ մնալ վնասակար սովորություններից,
							զերծ մնալ կասկածելի շփումներից, կրթվել, պահպանել իր դրական և
							ամուր հոգեվիճակը: Անգամ ժառանգական հիվանդությունների դեպքում
							մարդու պատասխանատու վերաբերմունքից է կախված այդ հիվանդությունը
							կպահպանվի՞ նույն մակարդակում, որում ի հայտ է եկել, կբուժվի՞,
							կբարելավվի՞ վիճակը, թե՞ կխորանա բարձիթողիության պատճառով և
							կկործանի օրգանիզմը: Պատասխանատու վարքագիծը նաև կարևորվում է
							այն առումով, որ այն միակ գործոնն է, որ բացառապես կախված է
							մեզանից և մեր ընտրությունից: Մնացած բոլոր գործոններն այս
							կամ այն չափով կախված չեն մարդու սեփական որոշումներից:`
    },
    {
        id: 2,
        title: "Աղքատություն",
        text: ""
    },
    {
        id: 3,
        title: "Մարզանք",
        text: ""
    },
    {
        id: 4,
        title: "Սնունդ, սննդի հասանելիություն",
        text: ""
    },
    {
        id: 5,
        title: "Շրջակա և սոցիալական միջավայր",
        text: ""
    },
    {
        id: 6,
        title: "Շրջակա և սոցիալական միջավայր",
        text: ""
    },
    {
        id: 7,
        title: "Ժառանգականություն",
        text: ""
    }, {
        id: 8,
        title: "Ապրելու և աշխատանքի պայմանները",
        text: ""
    },
    {
        id: 9,
        title: "Հոգեվիճակ",
        text: ""
    }
    , {
        id: 10,
        title: "Կրթություն",
        text: ""
    }
    , {
        id: 11,
        title: "Իրազեկվածություն",
        text: ""
    },


];

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
    $(".lesson-popup-layer").css({"opacity": "1", "z-index": "0"});

    $(".user-avatar-small").click(function () {
        $(".lesson-popup-layer").css({"opacity": "1", "z-index": "0"});
    });
    $(".lesson-popup-close, #pop_button").click(function () {
        $(".lesson-popup-layer").css({"opacity": "0", "z-index": "-1"});
    });

    $(function () {

        var Sort = $("div.droptrue").sortable({
            connectWith: "div",
            activate: function (event, ui) {
                console.log('activate')
                console.log(event)
                console.log(ui)
            },
            update: function (event, ui) {
                console.log('update');

                if (!ui.item.hasClass('true-item')) {
                    var data = GetItem(ui.item.attr('data-id'));
                    console.log(data)
                    $('#pop_title').show();
                    $('#pop_title').attr('class', 'blue-txt');
                    $('#pop_title span').html(data.title);
                    $('#pop_text').html(__data[0].text);
                    $('#pop_button').show();
                    $('#pop_button').html('Վերադասավորել');
                    $(".lesson-popup-layer").css({"opacity": "1", "z-index": "0"});
                    $("#sortable1, #sortable3").sortable("cancel");
                } else {
                    var data = GetItem(ui.item.attr('data-id'));
                    $('#pop_title').show();
                    $('#pop_title').attr('class', 'blue-txt');
                    $('#pop_title span').html(data.title);
                    $('#pop_text').html(__data[0].text);
                    $('#pop_title').attr('class', 'green-txt');
                    $('#pop_title i').show();
                    $('#pop_button').html('Հաջորդ դասը');
                    $('#sortable3 strong').hide();
                    $(".lesson-popup-layer").css({"opacity": "1", "z-index": "0"});

                    console.log('Else')
                }
            }
        });

        $("div.dropfalse").sortable({
            connectWith: "div",
            dropOnEmpty: false
        });

        $("#sortable1, #sortable3").disableSelection();
    });


});

//объявляем переменные
var base = 60;
var clocktimer, dateObj, dh, dm, ds, ms;
var readout = '';
var h = 1, m = 1, tm = 1, s = 0, ts = 0, ms = 0, init = 0;

//функция для очистки поля
function ClearСlock() {
    clearTimeout(clocktimer);
    h = 1;
    m = 1;
    tm = 1;
    s = 0;
    ts = 0;
    ms = 0;
    init = 0;
    readout = '00:00:00.00';
    // document.MyForm.stopwatch.value=readout;
}

//функция для старта секундомера
function StartTIME() {
    var cdateObj = new Date();
    var t = (cdateObj.getTime() - dateObj.getTime()) - (s * 1000);
    if (t > 999) {
        s++;
    }
    if (s >= (m * base)) {
        ts = 0;
        m++;
    } else {
        ts = parseInt((ms / 100) + s);
        if (ts >= base) {
            ts = ts - ((m - 1) * base);
        }
    }
    if (m > (h * base)) {
        tm = 1;
        h++;
    } else {
        tm = parseInt((ms / 100) + m);
        if (tm >= base) {
            tm = tm - ((h - 1) * base);
        }
    }
    ms = Math.round(t / 10);
    if (ms > 99) {
        ms = 0;
    }
    if (ms == 0) {
        ms = '00';
    }
    if (ms > 0 && ms <= 9) {
        ms = '0' + ms;
    }
    if (ts > 0) {
        ds = ts;
        if (ts < 10) {
            ds = '0' + ts;
        }
    } else {
        ds = '00';
    }
    dm = tm - 1;
    if (dm > 0) {
        if (dm < 10) {
            dm = '0' + dm;
        }
    } else {
        dm = '00';
    }
    dh = h - 1;
    if (dh > 0) {
        if (dh < 10) {
            dh = '0' + dh;
        }
    } else {
        dh = '00';
    }
    readout = dh + ':' + dm + ':' + ds;
    // document.MyForm.stopwatch.value = readout;
    $('#timer').html(readout)
    clocktimer = setTimeout("StartTIME()", 1);
}

//Функция запуска и остановки
StartStop()

function StartStop() {
    if (init == 0) {
        ClearСlock();
        dateObj = new Date();
        StartTIME();
        init = 1;
    } else {
        clearTimeout(clocktimer);
        init = 0;
    }
}
