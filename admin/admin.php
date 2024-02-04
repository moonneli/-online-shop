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

           section{
              width: 450px;
              height: 100vh;
              /* background-color: blue; */
               position: absolute;
            left:0px;
          top:37px;
          z-index: 2;
          }
           /* menu{
          width: 200px;
          height:100vh;
          position: absolute;
         top: 0px;
      left:0px;
          background-color: #333;
         } */
  menu>ul{
        width: 100%;
        height: 100%;
        background-color: #333;
        top: 0;
        /* border: 2px solid yellow; */
         }

      ul>  li{
          width:200px;
          height:100px;
          line-height:100px;
          text-align: center;
        border-bottom:1px solid yellow;
        list-style: none;
        margin-left:  50px;
          }

         li>a{
          text-decoration: none;
        color: white;
         }
        li>a:hover{
          color:yellow;
        }

    </style>
  <body>


    <section>

      <menu>
          <ul>
              <li><a href="admin.php"> پیشخوان</a></li>
              <li><a href="../t31.php">مشاهده فروشگاه</a></li>
              <li><<a href="admin.php?add-new-product">محصول جدید</a></li>
              <li> <a href="admin.php?orders">سفارشات</a></li>
              <li><a href="admin.php?cats">دسته بندی</a></li>
              <li><a href="admin.php?comments">مدیریت نظرات</a></li>
              <li> <a href="#">خروج</a></li>
          </ul>
      </menu>

    </section>
  <header  >  <br>  &nbsp; &nbsp; &nbsp; &nbsp; لیست محصولات</header>
    <article>
      <!-- <div class="box1" > -->
 <?php
          if (isset($_GET['add-new-product'])) {

           require_once'add-new-product.php';


            } elseif (isset($_GET['orders'])) {
            require_once 'orders.php';
            } elseif (isset($_GET['cats'])) {
            require_once 'cats.php';
            } elseif (isset($_GET['comments'])) {
            require_once 'comments.php';
            }elseif(isset($_GET['edit-product']) && isset($_GET['id']) && !empty($_GET['id'])){
              require_once 'edit-product.php';
         }else {

 ?>

<!-- </div> -->

      <table class="table float-right">

          <tr>
<thead>
              <th  >ردیف</th>
              <th>تصویر</th>
              <th>نام</th>
              <th>دسته بندی</th>
              <th>قیمت</th>
              <th>مشاهده</th>
              <th>حذف</th>
              <th>ویرایش</th>

                </thead>
                  </tr>
                  <tbody>






  <?php
$num = 1;
             $product_query= mysqli_query( $conn," SELECT *FROM product");
  while ($product_row =  mysqli_fetch_array ($product_query)):



    $id = $product_row['cat_id'];
    $cat_query = mysqli_query($conn, "SELECT * FROM category WHERE id = '$id'");
    $cat_row = mysqli_fetch_array($cat_query);
   ?>
                 <tr>
                    <td ><?php echo $num++; ?></td>

                    <td><img src="../image/<?php echo $product_row['image']; ?>" style=" width:100px; height:100px;"></td>
                    <td style="width:50px"><?php  echo $product_row['title']; ?></td>
                  <td> <?php echo $cat_row['cat_name']; ?></td>
                    <td> <?php echo $product_row['price']; ?></td>

                <td><a href="../single.php?id= <?php echo $product_row['id']; ?>" class="btn btn-primary">مشاهده</a></td>
                  <td><a href="action.php?delete_product=<?php  echo $product_row['id']; ?>" class="btn btn-danger">حذف</a></td>

                    <td> <a href="admin.php?edit-product&id=<?php echo $product_row['id']; ?>" class="btn btn-warning">ویرایش</a></td>

</tr>

              <?php  endwhile; ?>
            </tbody>
          </table>


                <?php
}
?>
  </article>


</body>
</html>
