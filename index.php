<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }
    .abc-slides {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .abc-slides li {
      position: relative;
      width: 100vw;
      height: 100vh;
      cursor: pointer;
      font-size: 100vw;
      text-align: center;
      outline: none;
    }
    @media (orientation: landscape) {
      .abc-slides li {
        font-size: 100vh;
      }
    }

    <?php
      $colors = ['#ff0000', '#ffa700', '#22ff00', '#00dfff', '#a300ff'];
      $colorpos = 0;
      
      $i = 1;
      while ($i < 27) { echo '.abc-slides li.slide-' . $i . ' { color: ' . $colors[$colorpos] . '; }
    ';

        $i++;
        $colorpos++;

        if ($colorpos > 4) {
          $colorpos = 0;
        }

      }
    ?>
    
    .abc-slides li span {
      height: 90vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
    }
    .abc-slides.abc-slides--lowercase li span {
      text-transform: lowercase;
    }

    @media (min-width: 768px) {
      .abc-slides li {
        font-size: 75vh;
      }
    }
    @media (orientation: landscape) {
      .abc-slides li span {
        height: 100vh;
      }
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
      bottom: 0;
      left: 0;
      right: 0;
      height: 40px;
      display: flex;
      flex-direction: row;
      justify-content: center;
    }

    .buttons .button {
      width: 40px;
      height: 40px;
      background-color: #fff;
      padding: 0px;
      font-size: 30px;
    }

  </style>

</head>
<body>
  
  <ul class="abc-slides">

    <?php

      $num = 1;
      foreach (range('a', 'z') as $i) {
        echo '<li class="slide-' . $num . ' letter-' . $i . '"><span>' . $i . '</span><div class="btn-play" data-file="/audio/Letter_' . $i . '.mp3"></div></li>';
        echo '
    ';
        $num++;
      }

      
      $i = 1;
      
    ?>

  </ul>

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
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.abc-slides').slick({
        'arrows': false
      });

      $('.button--case').click(function(){
        $('.abc-slides').toggleClass('abc-slides--lowercase');
      });

      $('.button--restart').click(function(){
        $('.abc-slides').slick('slickGoTo', 0);
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