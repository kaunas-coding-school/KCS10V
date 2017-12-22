
/*
$('#tab1').toggle();
$('#tab2').toggle();
$('#tab3').toggle();

function keisti_taba(nr) {
    switch (nr) {
        case (1):
            $('#tab1').show();
            $('#tab2').hide();
            $('#tab3').hide();
            break;
        case (2):
            $('#tab2').show();
            $('#tab1').hide();
            $('#tab3').hide();
            break;
        case (3):
            $('#tab3').show();
            $('#tab2').hide();
            $('#tab1').hide();
            break;
        default:
            break;
    }
}*/


var activeTab = 2;
var sheetai = $('.sheet');
var tabai = $('.tab_header li a');

var keistiTab = function(elementas) {

    sheetai.hide().removeClass('active_sheet');

    tabai.removeClass('active_link');

    var sheetId = $(elementas).attr('href');

    $('[href="'+sheetId+'"]').addClass('active_link');

    $(sheetId).show().addClass('active_sheet');
};