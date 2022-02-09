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

    .case-toggle {
      position: absolute;
      width: 30px;
      height: 30px;
      background-color: #fff;
      right: 0;
      bottom: 0;
      padding: 5px;
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

  <div class="case-toggle">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.2 160h173.6l-41.38 41.38c-12.5 12.5-12.5 32.75 0 45.25c12.49 12.49 32.74 12.51 45.25 0l95.1-96c12.5-12.5 12.5-32.75 0-45.25l-95.1-96c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L338.8 96H165.2C90.87 96 25.15 143.4 1.652 213.9C-3.941 230.7 5.121 248.8 21.9 254.3C25.25 255.5 28.66 256 32.01 256c13.41 0 25.89-8.469 30.36-21.88C77.13 189.8 118.5 160 165.2 160zM490.1 257.7C486.8 256.5 483.3 256 479.1 256c-13.41 0-25.89 8.469-30.36 21.88C434.9 322.2 393.5 352 346.8 352H173.2l41.38-41.38c12.5-12.5 12.5-32.75 0-45.25c-12.49-12.49-32.74-12.51-45.25 0l-95.1 96c-12.5 12.5-12.5 32.75 0 45.25l95.1 96c12.5 12.5 32.75 12.5 45.25 0s12.5-32.75 0-45.25L173.2 416h173.6c74.33 0 140-47.38 163.5-117.9C515.9 281.3 506.9 263.2 490.1 257.7z"/></svg>
  </div>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.abc-slides').slick({
        'arrows': false
      });

      $('.case-toggle').click(function(){
        $('.abc-slides').toggleClass('abc-slides--lowercase');
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