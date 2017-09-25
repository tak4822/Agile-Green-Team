
$(function(){
    
 //CLICK FUNCTION FOR EACH IMAGE
    $('.partyContainer__img--overlay').click(function(){
        showSelectedParty(this);
        objIndex = $(this).data('index');   
        var myAjax = $.ajax({
            type: 'GET',
            url: 'js/government-party.json',
            dataType: 'json',
            success : function(data){
                myAjaxObj = data; 

                switch(objIndex){
                    case 0 : 
                        var curObj = myAjaxObj.greenPartyObj;
                        break;

                    case 1: 
                        var curObj =  myAjaxObj.liberalPartyObj;
                        break;

                    case 2:
                        var curObj =  myAjaxObj.ndpPartyObj;
                        break;

                    case 3: 
                        var curObj =  myAjaxObj.conservativePartyObj;
                        break;
                }
                displayMembers(curObj);
                displayLogo(curObj);
                displaySeats(curObj);
                displayHistory(curObj);
                displayPolicies(curObj);
                changeBorderCol(curObj);
                showContent();
            }
        })
    })    


    //======================================================
    //DIFFERENT FUNCTIONS FOR DISPLAYING DATA ON PARTIES PAGE
    //======================================================
    function showSelectedParty(clicked){
       
        //OTHER PARTIES
        var currentImage = $(clicked).siblings('img');
        var otherPartiesOverlay = $('.partyContainer__img--overlay').not($(clicked));
        var otherPartiesImage = $('.partyContainer__img').not(currentImage);
        //hide the overlay
        $(clicked).hide(); 

        otherPartiesOverlay.show();
        otherPartiesOverlay.css({"transform":"scale(0.7)"});
        otherPartiesImage.css({"transform":"scale(0.7"});
        currentImage.css({"transform":"scale(1)"});

    }     
 
       
    // DISPLAY MEMBERS
    function displayMembers(cur) {
        for (var i = 0; i < cur.prominentMembers.length; i += 1){
            var currentClass = ".member" + i;
            var cMem = cur.prominentMembers[i];
            var currentImage = "img/" + cMem.image;
            console.log(currentImage + currentClass);
            $(currentClass).find("img").attr({'src': currentImage, 'alt' : 'an image of ' + cMem.name});
            $(currentClass + " h4").text(cMem.name); 
            $(currentClass + " p").text(cMem.position);         
        }

    }
    
    function displayLogo(cur){
        //DISPLAY LOGO 
        var currentLogo = "img/" + cur.logo; 
        $('.partyInfo__logo img').attr("src", currentLogo);
    }

    function displaySeats(cur){
        //DISPLAY PROGRESS BARS
        var senatePercentage = cur.position[0].senatePercentage + "%";
        var hocPercentage = cur.position[1].hocPercentage + "%";
        $('.senate__seats').css({"width": senatePercentage, "background": cur.colour});
        $('.hoc__seats').css({"width": hocPercentage, "background": cur.colour});
        $('.seatContainer__bar').css({"border-color": cur.colour});
        $('#sen').text(cur.position[0].senateSeats);
        $('#hoc').text(cur.position[1].hocSeats);
    }

    
    //CHANGE BORDERS TO BE PARTY COLOURS
    function changeBorderCol(cur) {
        $('.borderedItem').css({"border-color": cur.colour});  
    }

    function displayPolicies(cur){
        for (var i = 0; i < cur.prominentPolicies.length; i += 1) {
            var currentClass = ".policy" + i;
            console.log(currentClass);
            $(currentClass + " h3").text(cur.prominentPolicies[i].name);
            $(currentClass + " p").text(cur.prominentPolicies[i].description);
        }
    }  

    function displayHistory(cur){
        $('.partyInfo__history p').text(cur.history);
    }

    
    function showContent(){
        $('.partyInfo').show();
        $('.partyInfo__history').show();
        $('.partyInfo__policies').show();  
    }

    /*==========================================================
             DISPLAY ALL POLICIES ON COMPARE PAGE 
    ==========================================================*/

   
    function displayAllPolicies (party, divName, colour) {
        
        
        for (var i = 0; i < (party.policies.length - 1) ; i += 1) {
            
            var currentPolicy = party.policies[i];
            var currentClass = ".compare__policies--" + currentPolicy.name.toLowerCase();

            $(currentClass).append("<div class='policy__item--"+colour+"'><h3>" + party.name + "</h3>" + "<p>" + currentPolicy.description + "</p></div>");

        }
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
})