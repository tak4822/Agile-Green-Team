$(function(){
    var myAjax = $.ajax({
        type: 'GET',
        url: 'js/government-party.json',
        dataType: 'json',
        success : function(data){
            console.log(data);
            for (var i = 0; i < data.length; i += 1) {

            }
        }
    })
})