<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABC Scout</title>

  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  />
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }
    .swiper {
      /* width: 100vh;
      height: 100vw; */
    }

    .swiper .swiper-slide {
      position: relative;
      width: 100vw;
      height: calc(100vh - 60px);
      cursor: pointer;
      font-size: 100vw;
      text-align: center;
      outline: none;
    }
    @media (orientation: landscape) {
      /* .swiper .swiper-slide {
        font-size: 100vh;
      } */
    }

    <?php
      $colors = ['#ff0000', '#ffa700', '#22ff00', '#00dfff', '#a300ff'];
      $colorpos = 0;
      
      $i = 1;
      while ($i < 27) { echo '.swiper .slide-' . $i . ' { color: ' . $colors[$colorpos] . '; }
    ';

        $i++;
        $colorpos++;

        if ($colorpos > 4) {
          $colorpos = 0;
        }

      }
    ?>
    
    .swiper .swiper-slide {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
    }
    .slides-lowercase .swiper-slide span {
      text-transform: lowercase;
    }

    @media (min-width: 768px) {
      .swiper .swiper-slide {
        font-size: 75vh;
      }
    }
    @media (orientation: landscape) {
      /* .swiper .swiper-slide span {
        height: 100vh;
      } */
    }
    /* .btn-play {
      position: absolute;
      top: 0;
      left: 0;
      width: 40px;
      height: 40px;
      background-color: #000;
    } */

    .buttons {
      position: absolute;
      z-index: 1000;
      bottom: 0;
      left: 0;
      right: 0;
      height: 60px;
      display: flex;
      flex-direction: row;
      justify-content: center;
    }

    .buttons .button {
      width: 60px;
      height: 60px;
      padding: 0px;
      font-size: 40px;
      text-align: center;
    }

  </style>

</head>
<body>

  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php

        $num = 1;
        foreach (range('a', 'z') as $i) {
          echo '<div class="swiper-slide slide-' . $num . ' letter-' . $i . '"><span>' . $i . '</span></div>';
          echo '
      ';
          $num++;
        }
        
        $i = 1;
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="buttons">
    <div class="button button--restart">
      <i class="fa-solid fa-backward-step"></i>
    </div>
    <div class="button button--case">
      <i class="fa-solid fa-font-case"></i>
    </div>
  </div>
  
  <script src="https://kit.fontawesome.com/e581310d77.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <script>

    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      effect: 'cube',

      pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
    });

    $(document).ready(function(){

      $('.button--case').click(function(){
        $('body').toggleClass('slides-lowercase');
      });

      $('.button--restart').click(function(){
        swiper.slideTo(1);
      });

      $('ul li').each(function(){
        $('.btn-play').click(function(){
          var audioFile = $(this).attr('data-file');
          const audio = new Audio(audioFile);
          audio.play();
        })
      })

    });
  </script>
  
</body>
</html>