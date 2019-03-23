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
$wp = new WP_Query(array(
    'post_per_page' => 6,
    'category__not_in' => 109,
    'orderby' => 'date',
    'order' => 'ASC'
));
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

    </style>

<?php
/** MENU */
?>

 








<body class="homepage is-preload">
<div id="spinner" class="hidden"><img src="<?php
echo get_stylesheet_directory_uri();
?>/images/spinner.gif" height="50"></div>

    <div id="page-wrapper">

        <!-- Header --
        <section id="header" class="container">

            </!-- Logo --
            <h1 class="logo"><a href="index.html"><img src="<?php
echo get_stylesheet_directory_uri();
?>/images/logo.svg"></a></h1>

            </!-- Nav --
            <nav id="nav">
                <?php
echo wp_nav_menu();
?>
               </!--<ul>
                    <li class="current"><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">Academe</a>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam dolore nisl</a></li>
                            <li>
                                <a href="#">Phasellus consequat</a>
                                <ul>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam dolore nisl</a></li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                    <li><a href="#">Nisl sed aliquam</a></li>
                                    <li><a href="#">Dolore adipiscing</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">C.V.</a></li>
                </ul>
            </nav>-->

            <!-- Banner -->
            <section id="banner">
                <header>
                    <p>There are about 4000 cyber attacks out there.</p>
                    <h2>Stay Protected</h2>
                    <button class="btn btn-register"  data-toggle="modal" data-target="#myModal" >Register Now</button>

                </header>
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
<div id="work">
    <div class="container">
        <div class="col-12">
                <section id="Workshops" class="slider">
                    <header class="major"><h2>Workshops</h2></header>
                    
                        <div class="row">
                            <div class="col-4 col-12-medium">
                                <section id="show-data2">
                                  <!--
                                 <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button">Find out more</a></li>
                                        </ul>
                                    </footer> -->
                                </section>
                            </div>
                            <div class="col-8 col-12-medium">
                                <section id="workshoplist">
                                
                                    <ul class="dates" id="show-data">
                                        
                                    
                                    </ul>
                                </section>
                            </div>



                        </div>
                    
                </section>

            </div>
        </div>

</div>
        <!-- Main -->
        <section id="main">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12  pl-0">

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

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class="row">
                

                    <div class="col-4 col-6-medium col-12-small">
                        <section>
                            <header>
                                <h2>Tempus consequat</h2>
                            </header>
                            <ul class="divided">
                                <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                                <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                                <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                                <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                                <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                                <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <section>
                            <header>
                                <h2>Ipsum et phasellus</h2>
                            </header>
                            <ul class="divided">
                                <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                                <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                                <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                                <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                                <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                                <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-12-medium">
                        <section>
                            <header>
                                <h2>Vitae tempor lorem</h2>
                            </header>
                            <ul class="social">
                                <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                                <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                                <li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
                                <li><a class="icon fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
                                <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                            </ul>
                            <ul class="contact">
                                <li>
                                    <h3>Address</h3>
                                    <p>
                                        Untitled Incorporated<br />
                                        1234 Somewhere Road Suite<br />
                                        Nashville, TN 00000-0000
                                    </p>
                                </li>
                                <li>
                                    <h3>Mail</h3>
                                    <p><a href="#">someone@untitled.tld</a></p>
                                </li>
                                <li>
                                    <h3>Phone</h3>
                                    <p>(800) 000-0000</p>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-12">

                        <!-- Copyright -->
                        <div id="copyright">
                            <ul class="links">
                                <li>&copy; Pineda Cyber Security. All rights reserved.</li>
                                
                            </ul>
                                
                        
                        </div>
                        <div class="centered"><small>Template origin: <a href="http://html5up.net">HTML5 UP</a></small></div>
                        
                    </div>
                </div>
            </div>
        </section>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php 
        echo do_shortcode( '[wpforms id="2100" title="sample"]' );
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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


			<?php include 'modules/workshops.php';
			include 'modules/articles.php' ?>
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
        
       

    














