<?php
/* Template Name: HomePage */
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

 








<body class="homepage is-preload">
<!--<div id="spinner" class="hidden"><img src="<?php
echo get_stylesheet_directory_uri();
?>/images/spinner.gif" height="50"></div>-->
<div id="spinner" class="loading hidden">Loading&#8230;</div>
    <div id="page-wrapper">

      

            <!-- Banner -->
            <section id="banner">
            <div class="container">
                <header>
                    <p>There are about 4000 cyber attacks out there.</p>
                    <h2>Stay Protected</h2>
                    <a href="#work" class="btn btn-register" >Register Now</a>

                </header>
                </div>
            </section>

            <!-- Intro -->
            <section id="intro" class="container">
                <div class="row">
                    <div class="col-4 col-12-medium">
                        <section class="first">
                            <a href="#Workshops" class="toggle-slide">
                                <i class="icon featured fa-cog"></i>
                                <header>
                                    <h2>Workshops</h2>
                                </header>
                            </a>
                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                        </section>

                    </div>
                    <div class="col-4 col-12-medium">
                        <section class="middle">
                            <a href="#Articles" class="toggle-slide">
                                <i class="icon featured alt fa-flash"></i>
                                <header>
                                    <h2>Articles</h2>
                                </header>
                            </a>
                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                        </section>
                    </div>
                    <div class="col-4 col-12-medium">
                        <section class="last">
                            <a href="#Publications" class="toggle-slide">
                                <i class="icon featured alt2 fa-star"></i>
                                <header>
                                    <h2>Publications</h2>
                                </header>
                            </a>
                            <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                        </section>
                    </div>
                </div>
                <!-- <footer>
                    <ul class="actions">
                        <li><a href="#" class="button large">Get Started</a></li>
                        <li><a href="#" class="button alt large">Learn More</a></li>
                    </ul>
                </footer> -->
            </section>

        </section>

        <div id="myApp" ng-app="myApp">
<section id="work">
    <div class="container">
        <div class="mr-4">
                <section id="Workshops" class="slider">
                    <header class="major"><h2>Workshops</h2></header>
                  
                        <div class="row">
                            <div class="col-12 col-12-medium">
                            <?php include 'modules/workshops_ang.php';?>
                            
                          </div>

                        </div>



                      
                    
                </section>

            </div>
        </div>

        </section>
      

<!-- Publications -->
<section id="Publications">
    <div class="container">
     <div class="row">
                    
                    <div class="col-12">

    <header class="major">
        <h2>Publications</h2>
    </header>
 
        
    <div id="show-publications">
<?php include 'modules/publications_ang.php';?>
  </div>
 </div>
        </div>
 

 </div>
</section>
</div>
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
                            <div class="pt-4 pb-4 col-md-12">
                            <div class="centered"><a href="./articles" class="btn btn-primary">More Articles...</a></div>
                            </div>
                        </section>

                    </div>
                
                    
                </div>
            </div>
        </section>

        
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Register</h5>
        <button type="button" class="btn-dark close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php 
        echo do_shortcode( '[wpforms id="2100" title="Register Now."]' );
        ?>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
    </div>


       
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
            include 'modules/articles.php' ;
  //  include 'modules/publications.php' ;
//include 'modules/workshop_ang.php'; 
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
        
       

    














