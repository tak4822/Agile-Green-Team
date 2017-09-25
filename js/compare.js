
// when check box is chnaged
// if it is checked, it shows
// if it is not checked, it hides
$('.filter__input').change(function(){
  var input = $(this).val();
  if($(this).is(":checked")){
    $('.'+ input).show()
  } else{
    $('.'+ input).hide()
  }
});

