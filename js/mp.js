var province  = document.querySelectorAll( '.cls-1' );

for(var i=0; i<province.length; i+=1) {
  province[i].addEventListener('click', function(e) {
    e.preventDefault();
    alert(this.getAttribute('id'));
  });
}

$.ajax({
	url: 'js/mp.json',
	dataType: 'json',
	data: {name: 'mps'},
	success: function(data){
		var dataArray = data.mps;

		$.each(dataArray, function(i){
			var whichParty = dataArray[i].caucusShortName;
      var mpHtml = '<li class="mpList__name">'+ dataArray[i].firstName +' '+ dataArray[i].lastName +' '+ dataArray[i].provTerrName +'</li>';

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


		});
	}
});
