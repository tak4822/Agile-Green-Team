$(function(){
  $('.filter__input').change(function(){
    hideCard($(this));
  });
});

const parties = ["blue","green","red","orange"];
const policies = ["youth","marijuana","firstnations","housing","health","Enviroment","privacy","veteran","pipeline"];

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
      localStorage.setItem(partyOrPolocy, 'true');
    } else {
      $('.compare__policies--' + partyOrPolocy).show();
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
});
