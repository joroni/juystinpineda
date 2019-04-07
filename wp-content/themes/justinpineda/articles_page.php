<?php
/* Template Name: ArticlesPage */
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
/*$wp = new WP_Query(array(
    'post_per_page' => 6,
    'category__not_in' => 109,
    'orderby' => 'date',
    'order' => 'ASC'
));*/
?><!--
<link rel='stylesheet' id='twentynineteen-style-css'  href='</*?php
echo get_stylesheet_directory_uri();
?>/style.css?ver=1.0.0' type='text/css' media='all' />

<link rel='stylesheet' id='twentynineteen-style-css'  href='</*?php
echo get_stylesheet_directory_uri();
?>/css/custom.css?ver=1.0.0' type='text/css' media='all' />
-->

<style>
    #banner {
    background: #CCE8F4 url(<?php echo get_stylesheet_directory_uri();
?>/images/cyber-security2.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    position: relative;
    padding: 8em 0;
    margin: 4em -11% 0 -11%;
}
  .btn-dark {
    color:#fff;
    background:oranger;
  }
  .close{
    color:#333 !important;
  }
    </style>

<?php
/** MENU */
?>

 








<body class="articles is-preload">
<!--<div id="spinner" class="hidden"><img src="<?php
echo get_stylesheet_directory_uri();
?>/images/spinner.gif" height="50"></div>-->
<div id="spinner" class="loading hidden">Loading&#8230;</div>
    <div id="page-wrapper">

      
             
           

        </section>

        <!-- Main -->
        <section id="main">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">

                        <!-- Articles -->
                        <section id="Articles">
                            <header class="major">
                                <h2>Articles</h2>
                            </header>
                            <div class="row" id="show-articles">

                              
                              
                               
                            
                            </div>
                           
                        </section>

                    </div>
                
                 
                </div>
            </div>
        </section>

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row">
                

                 
                    <div class="col-12">

                        <!-- Copyright -->
                        <div id="copyright">
                            <ul class="links">
                                <li>&copy; Pineda Cyber Security. All rights reserved.</li>
                                
                            </ul>
                                
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">



       
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/jquery.min.js"></script>
    <script>  

    
    

    $(".toggle-slide").on("click", function(){
            $('.slider').toggleClass('closed')
        })
				/*-- WORKSHOP --*/ 
 
     
        
      </script>
      
        
			<?php
			include 'modules/articles_all.php' ;
 
?>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/browser.min.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/breakpoints.min.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/util.js"></script>
    <script src="<?php
echo get_stylesheet_directory_uri();
?>/js/main.js"></script>
    
    
     <?php
get_footer();
?>
        
       

    














