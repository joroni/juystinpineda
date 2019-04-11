


<?php
 
 
$wp_query = new WP_Query( array( 
			'category_name' => 'Publications',
			'posts_per_page' => 3,
			'nopaging' => false,
			'offset' => get_query_var('page')   ) ); 

			
	
foreach($wp_query->posts as $value){
  echo '<h3>'.$value->post_title.'</h3>';
  echo '<i>'.$value->post_content.'</i>';
  echo '<hr>';
}
 
                                $wp_query_count = new WP_Query( array( 
                                  'category_name' => 'Publications'));                             
                              $total = round((count($wp_query_count->posts) -1) / 3) + 1;
                              for($a = 1; $a <= $total; $a++){
                              $page = $a;
                              ?>
                              <a href='http://178.128.63.151/justinpineda2/?page=<?php echo $page; ?>'>page <?php echo $page; ?></a>
                              <?php
                                }	
//echo '<pre>'.json_encode($wp_query->posts).'</pre>';
?>