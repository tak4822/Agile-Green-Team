//NAVBAR FUNCTIONS
$(function(){

    $(".menu-btn").click(function(){
        openNav();
        console.log("yello");
    })
    $("#mySidenav").click(function(){
        closeNav();
    })
    function openNav() {
        $("#mySidenav").css({"width":"400px"});
        $("#main").css({"margin-right":"400px"});
        $('.menu-btn').hide();
    }
    function closeNav() {
        $("#mySidenav").css({"width":"0"});
        $("#main").css({"margin-right":"0"})
        $('.menu-btn').show();
    }
})
