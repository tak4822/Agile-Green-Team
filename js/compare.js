//==========================================
//GLOBAL VARIABLES
//==========================================
liberalCount = 0;
greenCount = 0;
conservativeCount = 0;
ndpCount = 0;

var cardArr = document.getElementsByClassName('.policy__item');

//==========================================
//CHART
//==========================================

var ctx = document.getElementById('myChart').getContext('2d');

var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ["Liberal", "Conservative", "NDP", "Green"],
        datasets: [{
            label:["Liberal", "Conservative", "NDP", "Green"],

            backgroundColor: ['rgb(215,25,32)',
                              'rgb(26,71,130)',
                              'rgb(243,112,33)',
                              'rgb(61,155,53)'],

            borderColor: ['rgb(215,25,32)',
                            'rgb(26,71,130)',
                            'rgb(243,112,33)',
                            'rgb(61,155,53)'],
            data: []
        }]
    },

    // Configuration options go here
    options: {}
});
$(".overlay").click(function(){
  $(this).hide();
});

$('.result-button').click(function(){
  $('.overlay').css('display','block');
  var r = localStorage.getItem('Liberal');
  var b = localStorage.getItem('Conservative');
  var o = localStorage.getItem('NDP');
  var g = localStorage.getItem('Green');
  var partyObj = {Liberal:r,Conservative:b,NDP:o,Green:g};
  var votedPartyArr=[r,b,o,g];
  var stragedParties = ["Liberal", "Conservative", "NDP", "Green"];

  var numOfVoted=0;

  for(var i=0; i<votedPartyArr.length; i+=1){
    numOfVoted += Number(votedPartyArr[i]);
  }
  var sortable = [];
  for(var prop in partyObj){
    sortable.push([prop,partyObj[prop]]);
  }
  sortable.sort(function(a, b) {
    return b[1] - a[1];
  });
  console.log(sortable[0][0]);

  var pickedParty = "";
  if(sortable[0][1]===sortable[1][1] && sortable[0][1]===sortable[2][1] && sortable[0][1]===sortable[3][1]){
    pickedParty = sortable[0][0] +", "+ sortable[1][0]+", "+ sortable[2][0] +" and "+ sortable[3][0];
  } else if(sortable[0][1]===sortable[1][1] &&sortable[0][1]===sortable[2][1]){
    pickedParty = sortable[0][0] +", "+sortable[1][0]+" and "+ sortable[3][0];
  }else if(sortable[0][1]===sortable[1][1]){
    pickedParty = sortable[0][0] +" and "+sortable[1][0];
  }else{
    pickedParty = sortable[0][0];
  }
  console.log(sortable[0][0] +", "+ sortable[1][0]+", "+ sortable[2][0] +" and "+ sortable[3][0]);

  $("#result-leberal").text(r);
  $("#result-con").text(b);
  $("#result-ndp").text(o);
  $("#result-green").text(g);

  $('#picked-party').text(pickedParty);
  $('.num-of-vote').text(numOfVoted);

  chart.data.datasets[0].data = [r,b,o,g];
  chart.update();
});

function displayAllPolicies (party, divName, colour) {

    for (var i = 0; i < (party.policies.length) ; i += 1) {

      var isSelected="";
      var isColour="";
      //console.log(currentPolicy)
      var curPol = policies[i].toUpperCase();
      if(localStorage.getItem(curPol) === colour) {
        isSelected = 'selected';
        isFlip = 'card--back';
        isColour='style="background:'+colour+'; padding:0;"';
      } else{
        isSelected = "";
        isColour="";
      }
      console.log(isSelected);
      var currentPolicy = party.policies[i];
      var currentClass = ".compare__policies--" + currentPolicy.name.toLowerCase();

      var currentDiv = "<article "+isColour+" class='"+isSelected+" js-flip flip policy__item policy__item--"+colour+"''  data-policy='" +currentPolicy.name + "' data-colour='" + colour + "' >";
      currentDiv += "<div class='policyCard'>";
          currentDiv += "<div class='policyCard--inner'>";
          //FRONT PART OF CARD
              currentDiv += "<label for='"+currentPolicy.name.toLowerCase()+"--" + colour +"' class='card--front '>";
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


/*==========================================
VOTING FUNCTION
============================================*/

function policyVoting(clicked){

  var currentElem = $(clicked);
  var currentCol = $(clicked).data('colour');
  var currentPol = $(clicked).data('policy').toLowerCase();
  var policyClass = ".compare__policies--"+currentPol;

  if($(policyClass).children().hasClass('selected')){
    $(policyClass).children().css("padding", "0 20px 20px 20px");
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
  });
});

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
    console.log(selectedParty);
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
  localStorage.setItem('Green', greenCount);
  localStorage.setItem('Conservative', conservativeCount);
  localStorage.setItem('Liberal', liberalCount);
  localStorage.setItem('NDP', ndpCount);
}
