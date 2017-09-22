var province  = $( '.svg__porv' );
var provinceNav  = $('.mpMap__provNav__list');
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
    const provName =this.getAttribute('id');
    const provNameCap = provName.charAt(0).toUpperCase() + provName.slice(1);
    showMps(provNameCap);
  });
}

for(var i=0; i<provinceNav.length; i+=1) {
  provinceNav[i].addEventListener('click', function(e) {
    e.preventDefault();
    const provName = $(this).data("prov");
    const provNameCap = provName.charAt(0).toUpperCase() + provName.slice(1);
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
          $(".liberal").find(".mpList__list").append(mpHtml);
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
	hideLists();
}

function hideLists() {
	var partyArr = ["liberal", "ndp", "conservative", "green"];
	for(var i=0; i<partyArr.length; i+=1){
		const provListArr = $('.' + partyArr[i]).find('.mpList__name');
		var isLong= false;
		if( provListArr.length > 5 ){
			for(var x=5; x<provListArr.length; x+=1){
				provListArr[x].className += " hidden";
				provListArr[x].style.display = "none";
			}
			var party = partyArr[i].toString();
			var contiImg = `<li onClick="showMoreMps('${party}')" onmouseover="changeCol('${party}')" onmouseout="backCol('${party}')" class="mpList__last"><img src="img/continue.svg" alt="show more"></li>`;
			$('.' + partyArr[i]).find(".mpList__list").append(contiImg);
		}
	}
}

function showMoreMps(party){
	$('.' + party).find('.hidden').css("display","block");
	$('.' + party).find(".mpList__last").css("display","none");
}

function changeCol(party){
	$("." + party).find(".mpList__last>img").attr("src","img/continue-yellow.svg");
}

function backCol(party){
	$("." + party).find(".mpList__last>img").attr("src","img/continue.svg");
}

$(function(){
	// when user hover map
	// Change colors
	// message box pops up
  $('.svg__porv').hover(function(){
		$(this).addClass('svg__porv__hover');
    var title = $(this).attr('title');
    $(this).data('tipText', title).removeAttr('title');
    $('<p class="popup"></p>')
    .html(title + "<br><i class='map__smallText__popup'>Click to see MPs</i>")
    .appendTo('body')
    .fadeIn('slow');
  }, function() {
			$(this).removeClass('svg__porv__hover');
      $(this).attr('title', $(this).data('tipText'));
      $('.popup').remove();
  }).mousemove(function(e) {
      var mousex = e.pageX + 20; //Get X coordinates
      var mousey = e.pageY + 10; //Get Y coordinates
      $('.popup').css({ top: mousey, left: mousex });
  });

	// hover effects in svg map
	var provNameByNav;
	$('.mpMap__provNav__list').hover(function(){
		provNameByNav = $(this).data("prov");
		$(this).css({"background": "#C0C31B","color":"white"});
		$("#" + provNameByNav).css({"fill": "#C0C31B"});
	},function(){
		$(this).css({"background": "#ffffff","color":"#444444"});
		$("#" + provNameByNav).css({"fill": "#444"});
	});

	$("lis.mpList__last").hover(function(){
		console.log("hi");
		$(this).css("background","#C0C31B");
		$(this).find('img').css("fill","#C0C31B");

	},function(){
		$(this).find('img').attr("fill","#444444");
	});
});
