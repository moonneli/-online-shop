<?php
    require_once 'config.php';?>
<<?php
      $id =  $_GET['id'];
      $query = mysqli_query($conn , "SELECT * FROM product WHERE id = '$id'");
      $row = mysqli_fetch_array($query);

      ?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="style2.css">
    <title><?php echo  $row['title']; ?></title>
<style >
body{
  height:1000px;
background-attachment: fixed;
background:url(./image/wall2.jpg) center center;
background-size: cover;
background-attachment: fixed;
}
  .list{
    color:black;
  }
  a:hover{
    color:  black;
  }
  #svg1{
    position: absolute;
    top: 1700px;
    left:0;
  }
  .bo1{

    position: absolute;
    top: 2200px;
  }
  .box11{
    top: 2800px;

  }
.price{
  top: 300px;
  color: black;
}
#dem{
  top:1150px;
}
.bo2{
  top:110px;
}
</style>
</head>
<body>
    <header>
        <div class="logo"></div>
        <menu>
            <ul>
                <li><a href="t31.php">home</a></li>
                <li><a href="#dem">category</a></li>
                <li><a href="#demo5">contact us</a></li>

            </ul>
        </menu>
        <div class="se">
      <form  action="t31.php" method="get">


          <input type="text" class="loc"  name="search"  value="">

            <button  type="submit" class="reg" name="search-reg"style="text-decoration: none; color: black; background-color:red">GO </button>


        </div>
        </form>
    </header>
    <div class="bo2">

    </div>
    <!-- <div id="demo">
       <h1> &nbsp &nbsp &nbsp &nbsp Category</h1>  </div> -->
    <div id="dem" >



       <?php


      $cat_query = mysqli_query($conn , "SELECT * FROM category");
      while ($cat_row = mysqli_fetch_array($cat_query)): ?>

      <a href="t31.php?cat=<?php echo $cat_row['id'] ?> "class="list"> <?php  echo $cat_row['cat_name'];  ?></a>
      <?php endwhile; ?>


  </div>

   <div class="box6">
    <a href="t31.php?cat=<?php echo $row['cat_id']; ?>" style="color:white;">

      <span  class="line"style=" width:100%; height:100%;position:absolute; top:10px;text-align:center;line-height: 25px; text-decoration:underline">
                               <?php
                              $cat_id = $row['cat_id'];
                              $get_cat_post = mysqli_query($conn, "SELECT * FROM category WHERE id = '$cat_id'");
                              $get_cat_row = mysqli_fetch_array($get_cat_post);
                              echo $get_cat_row['cat_name'];
                               ?>
      </span>
                           </a>

</div>

 <img class="box5" src="image/<?php echo $row['image'] ; ?>" alt="">
       <h1 class="name">   :   نام محصول <br> <br>
         <?php echo $row['title']; ?> </h1>
       <h2 class="price"  style="position:absolute; top:1600px; left:1000px;">   : قیمت  &nbsp    <br> <br> <br>
                <?php echo $row['price']; ?> RLS  &nbsp  &nbsp        </h2>
                <h3 class="des">&nbsp &nbsp &nbsp &nbsp &nbsp
                  <!-- <?php echo $row['discription']; ?></h3> -->


                <svg  id="svg1" viewBox="0 0 1440 690" xmlns="http://www.w3.org/2000/svg"

               class="transition duration-300 ease-in-out delay-150">
               <path d="M 0,700 C 0,700 0,350 0,350 C 160.40000000000003,355.8666666666667
               320.80000000000007,361.7333333333333 490,344 C 659.1999999999999,326.2666666666667
               837.2,284.93333333333334 997,282 C 1156.8,279.06666666666666 1298.4,314.5333333333333 1440,350
                C 1440,350 1440,700 1440,700 Z" stroke="none" stroke-width="0"
                fill="#663957" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0">
               </path></svg>


                <div class="bo1">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque libero facere laudantium sunt, non est deserunt cupiditate exercitationem, omnis, tenetur nostrum mollitia odit ducimus. Esse ea hic eveniet eos tenetur!
                    <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur sed suscipit perferendis facere quo quas, quae quibusdam accusamus libero, magni reprehenderit asperiores molestias tempora qui error ullam officia enim assumenda.

               </div>

               <div class=" boxy">
<div class="elevator"></div>
</div>


  <div class="box11" >
   <span style="font-style:italic;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
  </div>
 <div id="demo5" ><h1>contact us</h1>
<div class="box9" style="color:white"><h3> call:123456 <br> <br> emaile: info@yahoo.com </h3></div>
<div class="box10"style="color:white"><h3>adress: <br>  asdfghjkl;'qwertyuio' </h3></div>

</div>
</html>
</body>
