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
});

// video randomizer

$(document).ready(function() {

    var videos = [
        // '7C8uDuhLqvg',
        // 'Mr-93C176qI',
        // 'Mr-93C176qI?start=58'
        'conservative',
        'greenparty',
        'liberal',
        'ndp'
    ];

    var index=Math.floor(Math.random() * videos.length);
    // $("#iframe").attr('src',"http://www.youtube.com/embed/" + videos[index] + "?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;mute=1&amp;loop=1");
    // $("#iframe").attr('src',"http://www.youtube.com/embed/" + videos[index] + "?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;mute=1&amp;loop=1");

    $('#partyVideo').attr('src', 'vid/' +videos[index] + '.mp4');


});