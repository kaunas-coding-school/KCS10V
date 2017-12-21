$('.submitBtn').click(function(){

    var duomenys = {};
    duomenys["LastName"] =  $('[name="LastName"]').val();
    duomenys["FirstName"] =  $('[name="FirstName"]').val();
    duomenys["Address"] =  $('[name="Address"]').val();
    duomenys["City"] =  $('[name="City"]').val();

    $.post( "/submit.php", duomenys,function( Persons ) {
        for(key in Persons) {
            var person = Persons[key];
            var old_html = $( ".result" ).html();
            $( ".result" ).html(old_html + key + ') <span>'+
                person.FirstName+'</span> <span>'+
                person.LastName+'</span> - ['+person.City+'] '+
                person.Address + '<br/>');
        }
    });
});
