//$('.profilis .foto').toggle();

// var keistiTaba = function (p1) {
//
//     switch (p1) {
//         case 1:
//             return (document.getElementById("tab1").style.display = "block",
//                 document.getElementById("tab2").style.display = "none",
//                 document.getElementById("tab3").style.display = "none");
//         case 2:
//             return (document.getElementById("tab2").style.display = "block",
//                 document.getElementById("tab1").style.display = "none",
//                 document.getElementById("tab3").style.display = "none");
//         case 3:
//             return (document.getElementById("tab3").style.display = "block",
//                 document.getElementById("tab2").style.display = "none",
//                 document.getElementById("tab1").style.display = "none");
//         default:
//             return document.getElementsByClassName("sheet").style.display = "none";
//     }
// }


var activeTab = 2
var sheetai = $('.sheet');
var tabai = $('.tabai li a');

var keistiTaba = function (elementas) {
    sheetai.hide().removeClass('active_sheet');
    tabai.removeClass('active_link');
    var sheetId = $(elementas).attr('href');
    $('[href="' + sheetId + '"]').addClass('active_link');
    $(sheetId).show().addClass('active_sheet');

}