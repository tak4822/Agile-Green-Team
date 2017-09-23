
$(function(){

        //FETCH PARTY INFORMATION
        var myAjax = $.ajax({
            type: 'GET',
            url: 'js/government-party.json',
            dataType: 'json',
            success : function(data){
                console.log(data);
                return data;
            }
        })

        //CLICK FUNCTION FOR EACH IMAGE
        $('.partyContainer__img--overlay').click(function(){
            var objIndex = $(this).data('index');    
            $(this).hide(); 
              //OTHER PARTIES
           var currentImage = $(this).siblings('img');
           var otherPartiesOverlay = $('.partyContainer__img--overlay').not($(this));
           var otherPartiesImage = $('.partyContainer__img').not(currentImage);

           otherPartiesOverlay.show();
           otherPartiesOverlay.css({"transform":"scale(0.7)"});
           otherPartiesImage.css({"transform":"scale(0.7"});
           currentImage.css({"transform":"scale(1)"});

            
        //FETCH PARTY INFORMATION
        var myAjax = $.ajax({
            type: 'GET',
            url: 'js/government-party.json',
            dataType: 'json',
            success : function(data){
                console.log(data);
                myAjaxObj = data; 
                
                switch(objIndex){
                    case 0 : 
                        var curObj = data.greenPartyObj;
                        break;

                    case 1: 
                        var curObj = data.liberalPartyObj;
                        break;

                    case 2:
                        var curObj = data.ndpPartyObj;
                        break;

                    case 3: 
                        var curObj = data.conservativePartyObj;
                        break;

                }
                displayInfo(curObj);
            }
        })


        
        //DISPLAY ON PAGE 
        // WILL BREAK THIS INTO OTHER FUNCTIONS LATER
        function displayInfo (cur){ 
            // DISPLAY MEMBERS
            for (var i = 0; i < cur.prominentMembers.length; i += 1 ){
                var currentClass = ".member" + i;
                var cMem = cur.prominentMembers[i];
                var currentImage = "img/" + cMem.image;
                console.log(currentImage + currentClass);
                $(currentClass).find("img").attr({'src': currentImage, 'alt' : 'an image of ' + cMem.name});
                $(currentClass + " h4").text(cMem.name); 
                $(currentClass + " p").text(cMem.position);         
            }

            //DISPLAY LOGO 
            var currentLogo = "img/" + cur.logo; 
            $('.partyInfo__logo img').attr("src", currentLogo);


            //DISPLAY PROGRESS BARS
            var senatePercentage = cur.position[0].senatePercentage + "%";
            var hocPercentage = cur.position[1].hocPercentage + "%";

        
            $('.senate__seats').css({"width": senatePercentage, "background": cur.colour});
            $('.hoc__seats').css({"width": hocPercentage, "background": cur.colour});
            $('.seatContainer__bar').css({"border-color": cur.colour});
            $('#sen').text(cur.position[0].senateSeats);
            $('#hoc').text(cur.position[1].hocSeats);
            
            //HISTORY
            $('#history').html("<h2> History of " + cur.name + "</h1> <p>" + cur.history + "<p>" );
            //CHANGE BORDERS TO BE PARTY COLOURS
            $('.borderedItem').css({"border-color": cur.colour});

         
            // if(cur.name === "Green Party" ) {
            //     $(".member2").hide();
            //     $('.member3').hide();
            // }

            

                
            for (var i = 0; i < cur.prominentPolicies.length; i += 1) {
                var currentClass = ".policy" + i;
                console.log(currentClass);
                $(currentClass + " h3").text(cur.prominentPolicies[i].name);
                $(currentClass + " p").text(cur.prominentPolicies[i].description);
            }

            $('.partyInfo__history p').text(cur.history);
       
            $('.partyInfo').show();
            $('.partyInfo__history').show();
            $('.partyInfo__policies').show();  
        
    }})

})
