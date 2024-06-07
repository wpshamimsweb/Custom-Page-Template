<?php
/**
* The template for displaying the footer
*
* @package ThemeHunk
* @subpackage Oneline lite
* @since Oneline Lite 1.0
*/
?>
<div class="footer-wrapper"><!-- Footer wrapper start -->
<?php
if ( is_active_sidebar( 'first-footer-widget-area'  )
|| is_active_sidebar( 'second-footer-widget-area' )
|| is_active_sidebar( 'third-footer-widget-area'  )
){
   echo oneline_lite_svg_enable('footer_top_svg_background');
    	get_sidebar('footer');
    }
?>
</div>
<div class="foot-copyright">
<?php echo oneline_lite_svg_enable(); ?>
<div class="footer-content">
<?php if( get_theme_mod('copyright_textbox')!=''){
echo '<span class="text-footer">'.esc_html(get_theme_mod( 'copyright_textbox')).'</span>';
} else { ?>

<span class="text-footer">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
<a href="<?php echo esc_url( __( 'https://themehunk.com/', 'oneline-lite' ) ); ?>"><?php printf( __('Powered by %s', 'oneline-lite' ), 'ThemeHunk' ); ?></a>
</span>
<?php } ?>
<div class="social-ft">
<?php oneline_lite_social_links(); ?>
</div>
</div>
</div>
<?php $back_to_top = get_theme_mod('oneline-lite_backtotop_disable');?> 
<?php if($back_to_top=='' || $back_to_top=='0') { ?> 
<a href="javascript:void(0);" id="scroll" title="<?php echo esc_html(__('Scroll to Top','oneline-lite')); ?>"><span></span></a>
<?php } ?>
<?php wp_footer(); ?>

<style type="text/css">

    #slider-div  {
        margin-top: 139px !important;
    }
   #slider-div .over-lay {
      background: transparent !important;
   }
   .container, #page {
       max-width: 1024px;
   }

   .about-content {
    font-size: 16.5px;
    
    }
   body {
      width: 1070px;
      margin: 0 auto;
      overflow-x: hidden;
   }

   .header {
    position: fixed;
   }

   .bg_bottom_slider {
       position: relative;
       width: 100%;
       height: 100px;
       background: url(https://i.postimg.cc/L4JYM6dD/bow-8.png) no-repeat center;
       background-size: contain;
       text-align: center;
       z-index: 99;
       margin-top: -51px;
   }
   .caption-container h2.title {
      font-size: 32px;
      text-shadow: 0px 0px 7.2px rgba(18, 17, 12, 0.86);
   }

   .rolam_bg_top {
      position: relative;
       width: 100%;
       height: 100px;
       background: url(https://i.postimg.cc/L4JYM6dD/bow-8.png) no-repeat center;
       background-size: contain;
       text-align: center;
       z-index: 99;
       margin-bottom: -51px;
   }
   #ribbon:before {
       background: none;
   }

   .foot-copyright  .svg-top-container , .contact-wrapper .svg-top-container {
      overflow: hidden;
      max-width: 1070px;
   }

   .flexslider.parallax-lite  , .flexslider.parallax-lite  li {
      height: 400px;
   }

   .flex-direction-nav .flex-next {
       background: url(https://amarwp.com/farkas/wp-content/uploads/2024/05/right-arrow.png) center no-repeat;
       background-size: 70%;
       height: 95px;
   }

   .flex-direction-nav .flex-prev {
       background: url(https://amarwp.com/farkas/wp-content/uploads/2024/05/left-arrow.png) center no-repeat;
       background-size: 70%;
       height: 95px;
   }

   .parallax-lite #ribbon  {
       background-size: 72% !important;
       padding-top: 80px;
       padding-bottom: 80px;
       background-repeat: no-repeat !important;
       background-position: bottom !important;
   }

   .bg_bottom_slider {
      /*margin: -38px auto auto auto;
      width: 80%;*/
   }

   #slider-div .parallax-lite li {
      background-attachment: initial !important;
      background-position: 50% 0px !important;
   }

   .sticky_stm {
      margin-top: 200px !important;
   }


   .smaller  .header-top-bar {
    height: 85px;
   }

   .smaller .top-text-column-left p {
    text-align: center !important;
    /*margin-bottom: 10px;
    margin-top: 10px;*/
   }

  .smaller  .top-text-column-right p {
    /*margin-bottom: 10px;
    margin-top: 10px;*/
   }

   .foot-copyright .svg-top-container {
      display: none;
   }


   section#contact {
      padding-top: 60px;
      padding-bottom: 45px;
   }

   .foot-copyright {
   background: #a61b2c;
   }

   .foot-copyright span.text-footer {
   float: none;
   display: block;
   font-size: 16px;
   text-align: center;
   }

   .section-navigate-background-text {
    font-size: 24px;
    margin-top: 12px;
   }

   .section-navigate-background {
       padding-bottom: 15px;
   }

   .testimonials-wrapper {
      margin-bottom: -37px;
   }

   .flex-direction-nav a {
      top: 33%;
   }

   .testimonials-box {
    padding: 45px 0 0px 0;
   }

   .header .shadow-menu {
      width: 100%;
   }
   .topnav {
     overflow: hidden;
      background-color: #467151;
   }

   .topnav #myLinks {
     display: none;
   }

   .topnav a {
     color: white;
     padding: 14px 16px;
     text-decoration: none;
     font-size: 17px;
     display: block;
   }

   .topnav a.icon {
        background-color: transparent;
        display: none;
        position: absolute;
        right: 10px;
        top: 10px;
    }

   .topnav a.icon:hover {
    background-color: transparent;;
    color: white;
   }

   .topnav a:hover {
     background-color: #ddd;
     color: black;
   }

   .topnav .active {
     background-color: #04AA6D;
     color: white;
   }

   .topnav a .fa {
      font-size: 28px;
   }

   .rolam_sec {
    background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi6-1.jpg')
   }

   .celek_sec {
    background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi2-1.jpg')
   }

   .projektek_sec {
    background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi3.jpg')
   }

   .ujutak_sec {
    background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi4.jpg')
   }

   .egyut_sec {
    background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi1.jpg')
   }

   .project-box .box-icon {
     width: 9%;
     float: left;
     margin-right: 5px;
   }

   .project-box .box-text {
    float: left;
    width: 87%;
   }

   .team-content {
        font-size: 16.5px ;
    }


   @media screen and (max-width:1366px){

      body {
         max-width: 100% !important;
         margin: auto;
         overflow: initial !important;
         padding-right: 15px;
         padding-left: 15px;
      }

   }

    @media screen and (max-width:1024px){

         #main-menu-wrapper {
         display: none !important;
      }

      .topnav a.icon {
        display: block;
      }

      .project-box .box-icon {
         width: auto;
         float: none;
       }

       .project-box .box-text {
        float: none;
        width: auto;
       }

       .project-box  .box-desc {
            margin-top: 20px;
       }

       .smaller .header-top-bar {
            height: 100px;
        }

        .header-top-bar {
            position: relative;
            width: 100%;
            height: 100px;
        }

        .header-top-bar p {
            font-size: 22px !important;
            margin-bottom: 5px;
            margin-top: 18px;
        }

        .top-text-column-right p {
            font-size: 16px !important;
            margin-top: 5px;
        }

        .team-content {
            font-size: 16px !important;
        }

   }

   @media screen and (max-width: 1500px){

     .parallax-lite #ribbon {
          background-size: cover !important;

      }
      #slider-div {
        margin-top: 85px !important;
    }

   }


   @media screen and (max-width: 1500px){

     

   }

     @media screen and (max-width:860px){


      .parallax-lite #ribbon {
          background-size: 100% !important;
          padding-top: 65px;
          padding-bottom: 65px;
          background-attachment: initial; !important;
      }

      #slider-div {
          width: 100%;
      }

      .bg_bottom_slider {
          margin: -38px auto auto auto;
          width: 100%;
          background-size: cover;
          height: 90px;
      }

      .rolam_bg_top {
         background-size: cover;
         height: 90px;
      }


      .rolam_sec {
        background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi6.jpg')
       }

       .celek_sec {
        background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi2.jpg')
       }

       .projektek_sec {
        background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi3-1.jpg')
       }

       .ujutak_sec {
        background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi4-1.jpg')
       }

       .egyut_sec {
        background: url('https://amarwp.com/farkas/wp-content/uploads/2024/05/pi1-1.jpg')
       }


   }

   @media only screen and (max-width: 768px) {

       .section-navigate-background-text {
           font-size: 17px !important;
       }

       .header .shadow-menu {
          width: 100%;
      }

      .header-top-bar ,.smaller .header-top-bar {
         height: 100px;
      }

        .box-icon img {
            height: auto;
        }

    .team-content {
        font-size: 14px !important;
     }

     .about-content {
        font-size: 14px;
    }



     


   /*   #main-menu-wrapper {
          padding-top: 0px;
          padding-bottom: 0px;
          width: 100%;
          height: 0px;
      }

      .toggle-mobile-menu {
         display: block;
         position: fixed;
         top: 76px;
         right: 36px;
         width: 50px;
         height: 0px;
      }*/

      

       /*.box-text {
           margin-left: 25px;
           margin-right: 20px;
           font-size: 12px;
           margin-top: -32px;
       }

       .box-text p:first-child {
             margin-left: 62px;
       } */

   }


   @media only screen and (max-width: 321px) {

        body {
            width: 320px !important;
            max-width: 320px !important;
            margin: auto;
            overflow: scroll !important;
            padding-right: 15px;
            padding-left: 15px;
        }


    }



</style>

<script type="text/javascript">

   function menuToggle() {
     var x = document.getElementById("myLinks");
     if (x.style.display === "block") {
       x.style.display = "none";
     } else {
       x.style.display = "block";
     }
   }

    jQuery(document).ready(function($) {
        // Disable automatic menu item highlighting
        $('#myLinks a').on('click', function(event) {
             $('#myLinks').hide();
        });

    });


</script>
</body>
</html>