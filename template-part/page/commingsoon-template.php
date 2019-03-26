<?php
/*
* Template Name: comming soon
*
*/
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css">
     <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font.css">
     <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fontawesome.css">
     <style media="screen">
       html , body{
         width:100%;
         height:100%;
         font-family:IRANSansDNFaNum;
         direction:rtl;
       }
       .loading{
           width:100%;
           height:100%;
           background-image: url("pic/6.gif"),linear-gradient(#333333, #444444);
           background-size:200px,cover;
           background-repeat:no-repeat,no-repeat;


       }
       .fh{
         font-size: 2rem;
       }
       .fr{
         font-size: 1.8rem;
       }
       @media (min-width: 576px) {
         .fh{
           font-size: 2.5rem;
         }
         .fr{
           font-size: 1.9rem;
         }
       }
       @media (min-width: 992px) {
         .fh{
           font-size: 3rem;
         }
         .fr{
           font-size: 2rem;
         }
       }
     </style>
   </head>
   <body>
     <section class="loading d-flex flex-column justify-content-center">

       <header class="text-center">
         <div class="p-0 p-md-4 fh d-flex flex-column flex-md-row justify-content-center">

           <span class="text-light">شرکت دیجیتال مارکتینگ</span>
           <span class="text-danger pr-1">دیجی رسان</span>
         </div>
         <div class="text-light fr mt-5 pt-5">
             در حال بروز رسانی سایت هستیم
         </div>
       </header>
       <div class="socialmedia d-flex flex-row justify-content-center pt-3">

           <a href="#" class="px-2 text-light"> <i class="fab fa-3x fa-instagram"></i> </a>
           <a href="#" class="px-2 text-light"> <i class="fab fa-3x fa-linkedin"></i> </a>
           <a href="#" class="px-2 text-light"> <i class="fab fa-3x fa-youtube"></i> </a>



       </div>

     </section>
   </body>
 </html>