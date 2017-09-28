
$(function(){
/*==========================================================
            DISPLAY ALL POLICIES ON COMPARE PAGE 
==========================================================*/


function displayAllPolicies (party, divName, colour) {
        
    for (var i = 0; i < (party.policies.length) ; i += 1) {
        var showChar = 200;
        var currentPolicy = party.policies[i];
        var currentClass = ".compare__policies--" + currentPolicy.name.toLowerCase();         
        $(currentClass).append("<div class='pol policy__item policy__item--"+colour+"' data-colour='" + colour + "' data-policy='" +currentPolicy.name+ "'><h3>" + party.name + "</h3>" + "<p>" + currentPolicy.description + "</p></div>");
    }
    $('.policy__item').click(function(){   
        policyVoting($(this));
    
    });

}
//==========================================
//GLOBAL VARIABLES
//==========================================
liberalCount = 0;
greenCount = 0;
conservativeCount = 0;
ndpCount = 0;

var cardArr = document.getElementsByClassName('.policy__item')

// for(var i=0; i<cardArr.length; i++){
//     cardArr[i].addEventListener('click', function(){
//         console.log("YUP");
//     }, false);
// }


/*==========================================
VOTING FUNCTION
============================================*/

function policyVoting(clicked){

var currentElem = $(clicked);
var currentCol = $(clicked).data('colour');
var currentPol = $(clicked).data('policy');
var policyClass = ".compare__policies--"+currentPol;

if($(policyClass).children().hasClass('selected')){
    $(policyClass).children().removeClass('selected');
    $(policyClass).children().css("background", "white")
    currentElem.addClass('selected');
    currentElem.css({"background":currentCol});
}

else {
    currentElem.addClass('selected');
}
countSelected();


}

function countSelected(){
     var currentCol = $('.selected').data("colour");
        switch(currentCol){
        case "green":
            greenCount += 1;
            break;
        case "blue":
            conservativeCount += 1;
            break;
        case "red":
            liberalCount += 1;
            break;
        case "orange":
            ndpCount += 1;
            break;
        }
        console.log("NDP" + ndpCount +  "LIB " + liberalCount + "CONS" + conservativeCount + "GREEN" + greenCount );
        
    }
    




$('#comparePage').ready(function(){
var myAjax = $.ajax({
    type: 'GET',
    url: 'js/government-party.json',
    dataType: 'json',
    success : function(data){
        myAjaxObj = data; 
        displayAllPolicies(myAjaxObj.greenPartyObj, '.compare__policies--green', "green");
        displayAllPolicies(myAjaxObj.liberalPartyObj, '.compare__policies--red', "red");
        displayAllPolicies(myAjaxObj.conservativePartyObj, '.compare__policies--blue', "blue");
        displayAllPolicies(myAjaxObj.ndpPartyObj, '.compare__policies--orange', "orange");
    }
})

})
})