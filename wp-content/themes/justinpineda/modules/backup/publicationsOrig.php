

<div id='load_here'>
  
</div>
<?php

$paged = ( get_query_var('page') == 0 ) ? 1 :
                get_query_var('page');

 
    $wp_query = new WP_Query( array( 
          'category_name' => 'Publications',
          'posts_per_page' => 3,
          'nopaging' => false,
          'offset' => $paged   ) ); 


    foreach($wp_query->posts as $value){
      echo '<h3>'.$value->post_title.'</h3>';
      echo '<i>'.$value->post_content.'</i>';
      echo '<hr>';
    }


    //echo '<pre>'.json_encode($wp_query->posts).'</pre>';   
   
 


               $wp_query_count = new WP_Query( array( 
                'category_name' => 'Publications'));                             
            $total = round((count($wp_query_count->posts) -1) / 3) + 1;
            for($a = 1; $a <= $total; $a++){
            $page = $a;
            ?>
            <a href='#0' loc='<?php echo home_url(); ?>/?paged=<?php echo $page; ?>' onclick='get_pages(this);'>page <?php echo $page; ?></a>
            <?php
              }	


?>



<script>
function get_pages(e){
 
    var url = e.getAttribute('loc');
     $.get(url, function( data ) {
     var con = $(data).find('#load_here');
       console.log(con);
      $('#load_here').html('test' + con);
       
    });
}
</script>