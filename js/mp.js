var province  = document.querySelectorAll( '.cls-1' );
var mpsArr;

$.ajax({
	url: 'js/mp.json',
	dataType: 'json',
	data: {name: 'mps'},
	success: function(data){
		mpsArr = data.mps;
	}
});

for(var i=0; i<province.length; i+=1) {
  province[i].addEventListener('click', function(e) {
    e.preventDefault();
    var provName =this.getAttribute('id');
    var provNameCap = provName.charAt(0).toUpperCase() + provName.slice(1);
    showMps(provNameCap);
  });
}

function showMps(prov){
  $(".mpList__list").empty();
  $.each(mpsArr, function(i){
    if(mpsArr[i].provTerrName === prov){
      var whichParty = mpsArr[i].caucusShortName;
      var mpHtml = '<li class="mpList__name">'+ mpsArr[i].firstName +' '+ mpsArr[i].lastName +'</li>';

      switch (whichParty) {
        case "Liberal":
          $(".leberal").find(".mpList__list").append(mpHtml);
          break;
        case "NDP":
          $(".ndp").find(".mpList__list").append(mpHtml);
          break;
        case "Conservative":
          $(".conservative").find(".mpList__list").append(mpHtml);
          break;
        case "Green Party":
          $(".green").find(".mpList__list").append(mpHtml);
          break;
        default:
          console.log("no party");
      }
    }
  });
}


$(function(){
  $('.cls-1').hover(function(){
    // Hover over code
    var title = $(this).attr('title');
    $(this).data('tipText', title).removeAttr('title');
    $('<p class="tooltip"></p>')
    .html(title + "<br><i class='map__smallText__popup'>Click to see MPs</i>")
    .appendTo('body')
    .fadeIn('slow');
  }, function() {
      // Hover out code
      $(this).attr('title', $(this).data('tipText'));
      $('.tooltip').remove();
  }).mousemove(function(e) {
      var mousex = e.pageX + 20; //Get X coordinates
      var mousey = e.pageY + 10; //Get Y coordinates
      $('.tooltip').css({ top: mousey, left: mousex });
  });
});
