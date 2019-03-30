<?php

/* Workshop Reg */
?>
<!--<select id='options'></select>


<div id='cn'>
  
</div>
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>-->



<script>
  
  
  $.getJSON( "<?php echo esc_url( home_url( '/' ) ); ?>/wp-json/wp/v2/workshops?_embed", function( data ) {
 
   for(var a =0; a <= data.length -1; a++){
     var title  = data[a].title['rendered'];
     var id  = data[a].id;
     $('#wpforms-2104-field_3').append("<option value="+id+">"+title+"</option>");
   } 
    
    
 
 }); 
  
  
  

</script>
