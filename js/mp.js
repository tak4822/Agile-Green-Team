var province  = document.querySelectorAll( '.cls-1' );

for(var i=0; i<province.length; i+=1) {
  province[i].addEventListener('click', function(e) {
    e.preventDefault();
    alert(this.getAttribute('id'));
  });
}
