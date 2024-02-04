<?php
  require_once 'config.php';?>;



        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./admin/node_modules/bootstrap/dist/css/bootstrap.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="style2.css">
    <title>Document</title>
<style>

</style>
</head>
<body>


<header>
    <div class="logo"></div>

    <div class="ham">
           <input type="checkbox"  id="demo6">
            <label for="demo6">
               <span class="line"> </span>
                <span class="line"> </span>
                <span class="line"> </span>
            </label>

    <menu>
         <ul>
            <li><a href="">home</a></li>
            <li ><a href="#dem">category</a>
            
            <li><a href="#demo5">contact us</a></li>
            <li><a href="#demo5">about us</a></li>

        </ul>
    </menu>
    </div>


   <menu>
        <ul>
            <li><a href="t31.php">Home</a></li>
            <li><a href="#dem">category</a></li>
            <li><a href="#demo5">contact us</a></li>

  <li><a href="#demo5">about us</a></li>
        </ul>
    </menu>

    <div class="se">
  <form  action="t31.php" method="get">


      <input type="text" class="loc"  name="search"  >

        <input type="submit" class="reg" name="submit" value="GO"  >

    </form>
    </div>
</header>
<section>
   <div class="bo2">  </div>
</section>







<div id="dem" >


 <?php

$query = mysqli_query($conn , "SELECT * FROM category");
while ($row = mysqli_fetch_array($query)): ?>

<a href="t31.php?cat=<?php echo $row['id'] ?> "class="list" style="color: black;">
  <?php  echo $row['cat_name'];?></a>
<?php endwhile; ?>

 </div>



<div class="box4">

   <?php

   if(isset($_GET['submit'])){
             $search = $_GET['search'];
             $query = mysqli_query($conn, "SELECT * FROM product WHERE title LIKE '%$search%'
                 OR price LIKE '%$search%'");

 }elseif(isset($_GET['cat'])){


                  $cat = $_GET['cat'];
                  $query = mysqli_query($conn, "SELECT * FROM product WHERE cat_id = '$cat'");
              }

   else{
   $query = mysqli_query($conn , "SELECT * FROM product");
 }


 while ($row = mysqli_fetch_array($query)): ?>
 <h3  class="title">  <br>   &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp

      <?php echo $row['title']; ?>


 <br>  <p style="font-size:15px; margin:15px">
 <?php echo $row['price']; ?>RLS</p>




    <div class="card-footer">
<a href="cartController.php?add-to-cart=<?php echo $row['id']; ?>" class="btn btn-primary">add to card</a>
<a href="single.php?id=<?php echo $row['id'];   ?>" class="btn btn-danger">more info</a>
                            </div>
<img class="demo3" src="image/<?php echo $row['image'] ; ?>" alt="">
 </h3>

 <?php endwhile;?>

 </div>

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
       <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, eius quis sint minus dolore numquam suscipit repellat delectus tenetur autem nesciunt nulla debitis maiores possimus. Molestias aut cum odio nam?<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur sed suscipit perferendis facere quo quas, quae quibusdam accusamus libero, magni reprehenderit asperiores molestias tempora qui error ullam officia enim assumenda.

</div>

 <div class="box11">
 <span  class="demo5"style="font-style:italic;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
</div>
<div class=" boxy">
<div class="elevator"></div>
</div>


 <div id="demo5" style="font-size:20px" > &nbsp; &nbsp;<h1>  تماس با ما  : </h1>
<div class="box9" style="color:white; font-size: 15px"><h3> شماره تماس  :123456 <br> <br> ایمیل  : info@yahoo.com </h3></div>
<div class="box10"style="color:white;font-size: 15px"><h3>ادرس: <br> <br> asdfghjkl;'qwertyuio' </h3></div>

</div>


<script src="./jQuery.js" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
  $(window).scroll(function(){
if($(window).scrollTop()>200){

  $(".elevator").css("display", "flex");
  $(".boxy").css("display","flex");
$(".demo").css("display", "block");
}

 else{
   $(".elevator").css("display","none");
   $(".boxy").css("display","none");
 }
   })
 $(".box4").animate({"right":"0px"},2000);
 $(".elevator").click(function(){

   $("body, html").animate({scrollTop:0},500);

 })
 })
 $(function(){
          $("ul>li>a").click(function(){
              $("body,html").animate({scrollTop:$(this.hash).offset().top});
          })
      })
      $(function(){
 $("#box1").click(function(){

 $(".bo1").delay(1000).animate({"left":"400","top":"300"},2000)

 })
 })
 window.addEventListener("scroll",function()
    {
        if( window.pageYOffset>200){
            document.querySelector("header").classList.add("fix");
        }
        else{
            document.querySelector("header").classList.remove("fix")        }
    })
 </script>


</body>

</html>
