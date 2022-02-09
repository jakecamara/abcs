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
  </style>

</head>
<body>
  
  <ul class="abc-slides">

    <?php

      $num = 1;
      foreach (range('A', 'Z') as $i) {
        echo '<li class="slide-' . $num . '"><span>' . $i . '</span></li>';
        echo '
    ';
        $num++;
      }

      
      $i = 1;
      
    ?>

  </ul>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.abc-slides').slick({
        'arrows': false
      });
    });
  </script>
  
</body>
</html>