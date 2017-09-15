
$(function(){


        //FETCH PARTY INFORMATION
        $('.partyContainer__img').click(function(){
            currentObj = $(this).data('object-name');
            // console.log(currentObj);

            var json = (function () {
                var json = null;
                $.ajax({
                    'async': false,
                    'global': false,
                    'url': 'js/government-party.json',
                    'dataType': "json",
                    'success': function (data) {
                        json = data;
                    }
                });
                return json;
            })(); 


            // $.getJSON("js/government-party.json", function(data) {
            //     var myJson = data;

            //     console.log(myJson.currentObj.name);


            // });


})
})
