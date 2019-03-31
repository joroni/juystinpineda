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

?>

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







<div id="spinner" class="loading hidden">Loading&#8230;</div>

            <!-- Banner -->
            <section id="banner">
            <div class="container">
                <header>
                    <p>There are about 4000 cyber attacks out there.</p>
                    <h2>Stay Protected</h2>
                    <button class="btn btn-register"  data-toggle="modal" data-target="#myModal" >Register Now</button>

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
<section id="work">
    <div class="container">
        <div class="col-12">
                <section id="Workshops" class="slider">
                    <header class="major"><h2>Workshops</h2></header>
                  
                        <div class="row">
                            <div class="col-12 col-12-medium">
                            <?php include 'modules/workshops-ang.php';?>
                               <!-- <section id="show-data2">
                                  
                                 <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button">Find out more</a></li>
                                        </ul>
                                    </footer> 
                                </section>-->
                            </div>
                            <!-- <div class="col-8 col-12-medium">
                                <section id="workshoplist">
                                
                                    <ul class="dates" id="show-data">
                                        
                                    
                                    </ul>
                                </section>
                            </div>
 -->


                        </div>



                       <!--  <div class="row">
                            <div class="col-4 col-12-medium">
                          
                               <section id="show-data2">
                                  
                                 <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button">Find out more</a></li>
                                        </ul>
                                    </footer> 
                                </section>
                            </div>
                            <div class="col-8 col-12-medium">
                                <section id="workshoplist">
                                
                                    <ul class="dates" id="show-data">
                                        
                                    
                                    </ul>
                                </section>
                            </div>



                        </div> -->
                    
                </section>

            </div>
        </div>

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
                            <div class="pt-4 pb-4 col-md-12">
                            <div class="centered"><Button>More...</Button></div>
                            </div>
                        </section>

                    </div>
                
                    <div class="col-12">

                        <!-- Publications -->
                        <section id="Publications">
                            <header class="major">
                                <h2>Publications</h2>
                            </header>
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <section class="box">
                                        <a href="#" class="image featured"><img src="<?php
echo get_stylesheet_directory_uri();
?>/images/pic08.jpg" alt="" /></a>
                                        <header>
                                            <h3>Magna tempus consequat</h3>
                                            <p>Posted 45 minutes ago</p>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros
                                            lorem et blandit adipiscing feugiat phasellus tempus hendrerit, tortor vitae
                                            mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                            inceptos lorem ipsum dolor sit amet.</p>
                                        <footer>
                                            <ul class="actions">
                                                <li><a href="#" class="button icon fa-file-text">Continue Reading</a>
                                                </li>
                                                <li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
                                            </ul>
                                        </footer>
                                    </section>
                                </div>
                                <div class="col-6 col-12-small">
                                    <section class="box">
                                        <a href="#" class="image featured"><img src="<?php
echo get_stylesheet_directory_uri();
?>/images/pic09.jpg" alt="" /></a>
                                        <header>
                                            <h3>Aptent veroeros aliquam</h3>
                                            <p>Posted 45 minutes ago</p>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros
                                            lorem et blandit adipiscing feugiat phasellus tempus hendrerit, tortor vitae
                                            mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                            inceptos lorem ipsum dolor sit amet.</p>
                                        <footer>
                                            <ul class="actions">
                                                <li><a href="#" class="button icon fa-file-text">Continue Reading</a>
                                                </li>
                                                <li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
                                            </ul>
                                        </footer>
                                    </section>
                                </div>
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
        echo do_shortcode( '[wpforms id="2104" title="Register Now."]' );
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
           // include 'modules/workshops.php' ;
			include 'modules/articles.php' ;
include 'modules/workshop_reg.php'; 
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












