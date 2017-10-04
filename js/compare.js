

function displayAllPolicies (party, divName, colour) {

    for (var i = 0; i < (party.policies.length) ; i += 1) {

      var isSelected="";
      var isColour="";
      //console.log(currentPolicy)
      var curPol = policies[i].toUpperCase();
      console.log(curPol);
      if(localStorage.getItem(curPol) === colour) {
        isSelected = 'selected';
        isColour='style="background:'+colour+';"';
      }
      console.log(isSelected);
      var currentPolicy = party.policies[i];
      var currentClass = ".compare__policies--" + currentPolicy.name.toLowerCase();
      // $(currentClass).append("<label for='"+currentPolicy.name.toLowerCase()+"--" + colour +"'  class='"+isSelected+" pol policy__item policy__item--"+colour+"' data-colour='" + colour + "' "+isColour+" data-policy='" +currentPolicy.name+ "'><h3>" + party.name + "</h3>" + "<p>" + currentPolicy.description + " <input type='radio' name='compare__policies--" + currentPolicy.name.toLowerCase()+"' id='"+currentPolicy.name.toLowerCase()+ "--" + colour +"' class='radio' value='"+colour+"'></p></label>");

      var currentDiv = "<article class='js-flip flip policy__item policy__item--"+colour+"''  data-policy='" +currentPolicy.name + "' data-colour='" + colour + "' >";
      currentDiv += "<div class='policyCard'>";
          currentDiv += "<div class='policyCard--inner'>";
          //FRONT PART OF CARD
              currentDiv += "<label for='"+currentPolicy.name.toLowerCase()+"--" + colour +"' class='card--front'>";
              currentDiv += "<h3>" + party.name + "</h3>";
              currentDiv += "<p>" + currentPolicy.description + " </p>";
              currentDiv += "<input type='radio' name='compare__policies--" + currentPolicy.name.toLowerCase()+"' id='"+currentPolicy.name.toLowerCase()+ "--" + colour +"' class='radio' hidden>";
              currentDiv += "</label>";
          //BACK OF CARD
              currentDiv += "<div class='card--back' style='background-color:"+colour+"'>";
                  currentDiv += "<h2> VOTED </h2>";
          currentDiv += "</div>";
      currentDiv += "</div>";
  currentDiv += "</article>";

      $(currentClass).append(currentDiv);
    }
}

$('.js-flip').click(function(){   
  policyVoting($(this));
});
//==========================================
//GLOBAL VARIABLES
//==========================================
liberalCount = 0;
greenCount = 0;
conservativeCount = 0;
ndpCount = 0;

var cardArr = document.getElementsByClassName('.policy__item');

/*==========================================
VOTING FUNCTION
============================================*/

function policyVoting(clicked){

  var currentElem = $(clicked);
  var currentCol = $(clicked).data('colour');
  var currentPol = $(clicked).data('policy').toLowerCase();
  var policyClass = ".compare__policies--"+currentPol;

  if($(policyClass).children().hasClass('selected')){
    $(policyClass).children().removeClass('selected');
    $(policyClass).children().css("background", "white");
    // $(policyClass).children().addClass('selected');
    localStorage.setItem(currentElem.data('policy').toUpperCase(), currentElem.data('colour'));
    currentElem.addClass('selected');
    currentElem.css({"background":currentCol});
  }
  else {
    currentElem.addClass('selected');
    currentElem.css({"background":currentCol}); 
  }
  countVoting();
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

$(function(){
  $('.filter__input').change(function(){
    hideCard($(this));
  });
});

const parties = ["blue","green","red","orange"];
const policies = ["youth","marijuana","firstnations","housing","health","environment","privacy","veteran","pipeline"];

//check which party or policy should be hidden
function hideCard(filter){
  //get value from input
  var partyOrPolocy = filter.val();
  // if it is party's filter
  if(parties.indexOf(partyOrPolocy) >= 0){
    if(filter.prop('checked') === false){
      $('.policy__item--' + partyOrPolocy).hide();
      localStorage.setItem(partyOrPolocy, 'true');
    } else {
      $('.policy__item--' + partyOrPolocy).show();
      localStorage.removeItem(partyOrPolocy);
    }
  }
  // if it is policy's filter
  else if(policies.indexOf(partyOrPolocy) >= 0){
    if(filter.prop('checked') === false){
      $('.compare__policies--' + partyOrPolocy).hide();
      $('.' + partyOrPolocy).hide();
      localStorage.setItem(partyOrPolocy, 'true');
    } else {
      $('.compare__policies--' + partyOrPolocy).show();
      $('.' + partyOrPolocy).show();
      localStorage.removeItem(partyOrPolocy);
    }
  }
}

//after ajax, check filter and hide cards
$(document).ajaxComplete(function(){
  $('.filter__input').each(function(){
    if( localStorage.getItem($(this).val()) ){
      $(this).attr('checked', false);
      hideCard($(this));
    }
  });
  var cards = $('.policy__item');
  for(var i=0; i<cards.length; i+=1){
    cards[i].addEventListener('click', function(e) {
      e.preventDefault();
      policyVoting($(this));
    });
  }

});

function countVoting(){
  liberalCount = 0;
  greenCount = 0;
  conservativeCount = 0;
  ndpCount = 0;
  for(var i=0; i<policies.length; i+=1){
    var selectedParty = $('.compare__policies--'+policies[i]).find('.selected').data('colour');
    // console.log(selectedParty);
    switch(selectedParty){
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
  }
  localStorage.setItem('green_p', greenCount);
  localStorage.setItem('blue_p', conservativeCount);
  localStorage.setItem('red_p', liberalCount);
  localStorage.setItem('orange_p', ndpCount);

}
