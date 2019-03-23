<?php

/* Articles */
?>
<script>
$(document).ready(function () {
$("#spinner").toggleClass("hidden");
    $.ajax({
         url: "./wp-json/wp/v2/posts?categories=8",
        method: "GET",
        dataType: 'json',
        success: function(data) {
          console.log(data);
          var mydata = data.slice(0,6);
          var html_to_append = '';
         

          $.each(mydata, function(i, item) {

            
       
          var dt = new Date(item.date);
          var mm = dt.getMonth()+1;
          var dd = dt.getDate();
          var yy = dt.getFullYear();
          var hh = dt.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });

        //  var d = new Date();
          var month = new Array();
          month[0] = "January";
          month[1] = "February";
          month[2] = "March";
          month[3] = "April";
          month[4] = "May";
          month[5] = "June";
          month[6] = "July";
          month[7] = "August";
          month[8] = "September";
          month[9] = "October";
          month[10] = "November";
          month[11] = "December";
          var n = month[dt.getMonth()];


//My Huge Huge String
let tooHugeToHandle = item.content.rendered.replace(/(<([^>]+)>)/ig,"");
    
    //Trim Max Length
     const maxValue = 200
    // The barber.
     const TrimMyString = (string, maxLength, start = 0) => {
    //Note - `start` is if I want to start after some point of the string
          if (string.length > maxLength) {
          let trimmedString = string.substr(start, maxLength)
           return (
             trimmedString.substr(
             start,
             Math.min(trimmedString.length,   trimmedString.lastIndexOf(' '))
               ) + ' ...'
             )
           }
        return string
    }

    var featuredImage = item.featured_image;
    
    if (featuredImage === false) {
      featuredImage  = "<?php
echo get_stylesheet_directory_uri();
?>/images/pic09.jpg";
    }else{
      featuredImage  = item.featured_image;
    }
    
    //console.log(TrimMyString(tooHugeToHandle, maxValue))
            html_to_append +='<div class="col-4 col-6-medium col-12-small">'+
                                    '<section class="box blog-article">'+
                                        '<a href="'+item.link+'" class="image featured">'+
                                        '<div class="artcle-img" style="height: 150px; background: url('+featuredImage+')  no-repeat center center; background-size:cover;"></div></a>'+
                                      //  <img src="'+featuredImage+ '" alt="" /></a>'+
                                        '<header>'+
                                            '<h3>'+TrimMyString(item.title.rendered ,40)+ '</h3>'+
                                        '</header>'+
                                        '<p>'+TrimMyString(tooHugeToHandle, maxValue)+ '</p>'+
                                        '<footer>'+
                                            '<ul class="actions">'+
                                                '<li><a href="'+item.link+'" class="button alt">Find out more</a></li>'+
                                            '</ul>'+
                                        '</footer>'+
                                    '</section>'+
                                '</div>';
            


                         
                    });
          $("#show-articles").html(html_to_append);
         
          $("#spinner").toggleClass("hidden");


        },
        error: function() {
          $("#show-articles").html('');
                 
                
        }
				
      });
  
			/*-- Articles --*/ 
});



</script>

