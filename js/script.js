
$(function(){
    // $('img').click(function(){

        $('#btn').click(function(){
            $.getJSON("js/government-party.json", function(data) {
                console.log(data);
                console.log('helo');
            });
        // })
        // $.getJSON('government-party.json', function(data) {
        //     console.log(data);
        });

    //  });

    // $.ajax({
    //     url: 'parties.json',
    //     dataType: 'json',
    //     type: 'get',
    //     cache: true,
    //     success: function(){
    //         console.log(data);
    //     }

    // });

})

// })