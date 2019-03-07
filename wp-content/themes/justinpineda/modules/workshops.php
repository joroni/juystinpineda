<?php

/* Workshops */
?>
<script>
$(document).ready(function () {
$("#spinner").toggleClass("hidden");
    $.ajax({
         url: "./wp-json/wp/v2/workshops?_embed",
        method: "GET",
        dataType: 'json',
        success: function(data) {
          console.log(data);
          var html_to_append = '';
            
          $.each(data, function(i, item) {
       
          var dt = new Date(item.date.when);
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

            html_to_append +=
            '<li>'+
                                            '<span class="date">'+n.substr(0, 3)+' <strong>'+dd+'</strong></span>'+
                                            '<h3><a href="'+item.slug+'">'+item.title.rendered + '</a></h3>'+
                                            '<p>' +item.date.instructor +'</p>'+
                                        '</li>';
            


                         html_to_append2 ='<header>'+
            '<h2>'+item.title.rendered + '</h2>'+
            '</header>'+
            '<a href="'+item.slug+'" class="image featured"><img src="'+item.attachment_url_images +'" alt="" /></a>'+
            '<p class="workshop-date">'+mm+'/'+dd+'/'+yy+' @'+hh+'</p></div>'+
            '<p><label>Instructor: </label> ' +item.date.instructor +'</p>';
                    });
          $("#show-data").html(html_to_append);
          $("#show-data2").html(html_to_append2);
         
          $("#spinner").toggleClass("hidden");


        },
        error: function() {
          $("#show-data").html('');
                    $("#show-data2").html('');
                
        }
				
      });
  
			/*-- WORKSHOP --*/ 
});
</script>