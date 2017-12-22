$('.konteineris').transition({ opacity: 1 });

$('header a').click(function(event){
    event.preventDefault();
    var link = $(this).attr('href');
    $('.konteineris').transition({
        perspective: '100px',
        rotateY: '180deg',
        opacity:0
    }, function () {
        window.location.href = link;
    });

});
