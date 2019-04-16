<?php
get_header();

?>
<style media="screen">
  html , body{
    width:100%;
    height:100%;
    font-family:IRANSansDNFaNum;
    direction:rtl;
  }
  .loading{
      width:100%;
      height:80%;
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
<section class="loading d-flex flex-column justify-content-center">

  <header class="text-center">
    <div class="p-0 p-md-4 fh d-flex flex-column flex-md-row justify-content-center">

      <span class="text-light">شرکت دیجیتال مارکتینگ</span>
      <span class="text-danger pr-1">دیجی رسان</span>
    </div>
    <div class="text-light fr mt-5 pt-5">
                 متاسفانه صفحه مورد نظر یافت نشد
    </div>
  </header>
  <div class="socialmedia d-flex flex-row justify-content-center pt-3">

      <a href="https://www.instagram.com/digirasan/" class="px-2 text-light"> <i class="fab fa-3x fa-instagram"></i> </a>
      <a href="http://t.me/DigiRasan" class="px-2 text-light"> <i class="fab fa-3x fa-telegram"></i> </a>
      <a href="https://www.youtube.com/channel/UCSKBXGBnFrlNw8BRN8cCY8A" class="px-2 text-light" title="youtube"> <i class="fab fa-3x fa-youtube"></i> </a>
      <a href="https://www.aparat.com/DigiRasan/%D8%AF%DB%8C%D8%AC%DB%8C_%D8%B1%D8%B3%D8%A7%D9%86" class="px-2 text-light" title="aparat"> <i class="fab fa-3x fa-youtube"></i> </a>



  </div>

</section>


<?php


get_footer();

 ?>
