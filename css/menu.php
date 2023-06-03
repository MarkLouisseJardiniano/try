<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
        <!--navbar-->
        <header>
            <a href="#" class="logo">
                <img src="logo.jpg" alt="">
            </a>
        <nav>
            <ul >
                <li><a href="home.php" class="active">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="home.php#about">ABOUT</a></li>
                <li><a href="location.php">LOCATION</a></li>
                <li><a href="reservation.php">RESERVATION</a></li>
            </ul>
            <li><a href="index.html" class="act">HOME</a></li>
            <li><a href="signin.html" class="sign">Sign In</a></li>
        </nav>
        </header>
        <!--filter-->
        <aside class="food-type" id="food-type">
            <button class="dropbtn">MENU
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-caret-down"></i></a>
                </button>
              <div class="food-filter" id="food">
                  <button type="button" class="buttons active-btn" id="musttry-item">Must Try</button>
                  <button type="button" class="buttons" id ="pizza-item">PIZZA</button>
                  <button type="button" class="buttons" id ="milktea-item">DRINKS</button>
                  <button type="button" class="buttons" id ="combo-item">BREAKFAST</button>
                  <button type="button" class="buttons" id ="merienda-item">MERIENDA MEALS</button>
          </div>
    
      </aside>
      <!--itemheading-->
      <section class="item-heading" id="item-heading">
        <div class="item-btn">
            <h6 id="title">MUST TRY</h6>
        </div>
      </section>
      <!--item-->
       <section class="food-item" id="food-item">
    <?php
    $xmlMenu = simplexml_load_file("xml/phpproject.xml") or die("Failed to load XML file");

    foreach ($xmlMenu->menu as $menu) {
        if ($menu->category == "musttry-item") {
    ?>
     
    <div class="food-items musttry-item">
        <img src="images/<?php echo $menu->image; ?>" alt="">
        <h1><?php echo $menu->title ?></h1>
        <p><?php echo $menu->price ?></p>
        <button onclick="delivery()" type="button" id="now-btn">Order Now</button>
    </div>
    <?php
        

} elseif ($menu->category == "pizza") {
    ?>
    <div class="food-items pizza-item">
        <img src="images/<?php echo $menu->image; ?>" alt="">
        <h1><?php echo $menu->title ?></h1>
        <p><?php echo $menu->price ?></p>
        <button onclick="delivery()" type="button" id="now-btn">Order Now</button>
    </div> 
    <?php
        

    } elseif ($menu->category == "drinks") {
        ?>

    <div class="food-items milktea-item">
        <img src="images/<?php echo $menu->image; ?>" alt="">
        <h1><?php echo $menu->title ?></h1>
        <p><?php echo $menu->price ?></p>
        <button onclick="delivery()" type="button" id="now-btn">Order Now</button>
    </div>
    <?php
        

    } elseif ($menu->category == "breakfast") {
        ?>

    <div class="food-items combo-item">
        <img src="images/<?php echo $menu->image; ?>" alt="">
        <h1><?php echo $menu->title ?></h1>
        <p><?php echo $menu->price ?></p>
        <button onclick="delivery()" type="button" id="now-btn">Order Now</button>
    </div>
    <?php
        

    } elseif ($menu->category == "merienda") {
        ?>

    <div class="food-items merienda-item">
        <img src="images/<?php echo $menu->image; ?>" alt="">
        <h1><?php echo $menu->title ?></h1>
        <p><?php echo $menu->price ?></p>
        <button onclick="delivery()" type="button" id="now-btn">Order Now</button>
    </div>
    <?php
}
    }
    ?>
</section>






      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="main.js"></script>

        <script>
            function delivery(){
    document.location.href="location.php";
            }
        </script>
</body>
</html>