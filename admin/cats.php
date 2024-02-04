<?php
    require_once '../config.php';?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="./style1.css">
    <title>Document</title>

    </head>
<style >

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
           body{

              height: 200vh;

          }



.box1{
  width: 900px;
  height: 100vh;
  direction: rtl;
  font-size: 20px;
  margin-top: 150px;
  position: relative;
   margin-right:0px;
}
.table{
  position: absolute;
  top: 200px;
}

</style>
  </head>
  <body>

    <header >  <br>  &nbsp; &nbsp; &nbsp; &nbsp;    دسته بندی ها</header>
<div class="box1">


      <form  action="action.php?add-cat" method="post">
      <input type="text" name="cat" placeholder="دسته بندی را وارد کنید">
        <input type="submit"  value=" افزودن" >
      </form>
      </div>

      <table class="table float-right">

          <tr>
  <thead>
            <th  >ردیف</th>

            <th>نام</th>

            <th>حذف</th>

</thead>
        </tr>
  <tbody>



              <?php

      $num=1;
    $cat_query=mysqli_query($conn,"SELECT * FROM category");
    while ($cat_row= mysqli_fetch_array ($cat_query)):
  ?>

<tr>

                <td  ><?php echo $num++; ?></td>

                <td> <?php  echo $cat_row['cat_name']; ?></td>




  <td>  <a href="action.php?delete_cat=<?php echo $cat_row['id']; ?>"  class="btn btn-danger">حذف</a></td>



            </tr>
          <?php  endwhile; ?>
        </tbody>
            </table>
</body>
</html>
