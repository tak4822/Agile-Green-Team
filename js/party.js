
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
            console.log(objIndex);

        
            
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
        function displayInfo (cur){

            //MAIN MEMBERS SECTION *** NEED TO CROP IMAGES

            for (var i = 0; i < cur.prominentMembers.length; i += 1 ){
                var cMem = cur.prominentMembers[i];
                var currentClass = ".member" + i;
                var currentImage = "img/" + cMem.image;
                console.log(currentImage + currentClass);
                $(currentClass).find("img").attr({'src': currentImage, 'alt' : 'an image of ' + cMem.name});
                $(currentClass + " h4").text(cMem.name); 
                $(currentClass + "p").text(cMem.position);

            }

            $('#history').html("<h2> History of " + cur.name + "</h1> <p>" + cur.history + "<p>" );


                var policyCont = "";

                for (var i=0; i < cur.prominentPolicies.length; i += 1) {
                   policyCont += "<h3>" + cur.prominentPolicies[i].name + "</h3> <p> " + cur.prominentPolicies[i].description + "</p>"
                }

                console.log(policyCont);


                $




                

            $('#policies').html(
                "<h2> Prominent policies of the " + cur.name + "</h2>" + policyCont);

                // for (var i=0; i < cur.prominentPolicyTitles.length; i += 1) {
                //     "<h3>" cur.prominentPolicyTitles[i] "</h3>"
                // }
                //will make a prominent policy part of the object
        }

        
            // currentObj = $(this).data('object-name');
            // console.log(currentObj);


            function createDiv (obj, c ) {
                var element = "<div class='"+c+"'>";
                element += ""
            }
})
})
