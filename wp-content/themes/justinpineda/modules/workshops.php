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
          var html_to_append2 = '';
          blogPosts = _.sortBy(data, function(o) { return new moment(o.date.when); }).reverse();
          console.log('sorted', blogPosts);
          $.each(blogPosts, function(i, item) {
    
          var dttt = item.date.when.toString();
          var dt = dttt.replace(" ", "T");
          //var dt = moment(dtt).toDate();
         // var mm = dt.getMonth()+1;
          var mm =  moment(dt).format('MMM');
         // var dd = dt.getDate();
          var dd = moment(dt).format('do');
        // var yy = dt.getFullYear();
          var yy = moment(dt).format('YYYY');
         // var hh = dt.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
           var hh =moment(dt).format('h:mm a');

            
           
            html_to_append +=
            '<li>'+
            
          '<span class="date">'+mm+' <strong>'+dd+'</strong></span>'+
            '<h3><a href="'+item.slug+'">'+item.title.rendered + '</a></h3>'+
            '<p>' +item.date.instructor +'</p>'+
                                        '</li>';
            
          $("#show-data").html(html_to_append);

            html_to_append2 ='<header>'+
            '<h2>'+item.title.rendered + '</h2>'+
            '</header>'+
            '<a href="'+item.slug+'" class="image featured"><img src="'+item.attachment_url_images +'" alt="" /></a>'+
            
           '<div class="row"><div class="workshop-date col-7">'+mm+'. '+dd+', '+yy+' @'+hh+'</p>'+
           '<p><label>Instructor: </label> ' +item.date.instructor +'</p></div>'+
           '<div class="workshop-button col-5 text-right"><button class="btn btn-register"><i class="fa fa-pencil-square mr-1" aria-hidden="true"></i>Join this</button></div></div>';
           
                    });
         
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