<?php

/* Publications */
?>
<script>
$(document).ready(function () {
$("#spinner").toggleClass("hidden");
    $.ajax({
         url: "./wp-json/wp/v2/posts?categories=111",
        method: "GET",
        dataType: 'json',
        success: function(data) {
          console.log(data);
          var mydata = data;
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
     const maxValue = 400
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
    
   
            html_to_append +=
                                    '<article class="thumbnail item" itemscope="" itemtype="http://schema.org/CreativeWork">'+
				'<a class="blog-thumb-img" href="/5-ways-baby-boomers-changing-healthcare/" title="">'+
					'<img src="http://placehold.it/500x250" class="img-responsive" />'+
				'</a>'+
        '<div class="caption">'+
					'<h4 itemprop="headline">'+
           ' <a href="#" rel="bookmark">'+TrimMyString(item.title.rendered ,200)+'</a>'+
          '</h4>'+
					'<p itemprop="text" class="flex-text text-muted">'+TrimMyString(tooHugeToHandle, maxValue)+ '</p>'+
				'</div>'+     
                                    '</article>';                    
                    });



          $("#owl-container").html(html_to_append);
        

          $("#spinner").toggleClass("hidden");


        },
        error: function() {
        //  $("#show-publications).html('');
                 
                
        }
				
      });
  
			/*-- Articles --*/ 



});





</script>


  
  
  
 

</section>