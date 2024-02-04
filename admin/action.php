

// if(isset($_GET['delete_product'])){
//
//     $id = $_GET['delete_product'];
//      $query = mysqli_query($conn, "DELETE FROM product WHERE id = '$id'");
//      header('Location:admin.php');
// // echo $_GET['delete_product'];
//
//
//    }elseif (isset($_GET['delete_cat'])){
//
//      $id = $_GET['delete_cat'];
//     $query = mysqli_query($conn, "DELETE FROM category WHERE id = '$id'");
//       header('Location:admin.php?cats');

  // }elseif(isset($_GET['add-new-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
  //   $title = $_POST['title'];
  //   $image = $_FILES['image']['name'];
  // $upload = '../image/'. basename($image);
  //      $desc = $_POST['desc'];
  //      $cat = $_POST['cat'];
  //      $price = $_POST['price'];
  //
  //  $query = mysqli_query($conn, "INSERT INTO product(`title`, `price`, `discribtion`, `image`, `cat_id`) VALUES ('$title','$price','$desc','$image','$cat')");

// if($query){
//
//   move_uploaded_file($_FILES['image']['tmp_name'], $upload);
//         header('Location: admin.php');}
//
// }elseif(isset($_GET['add-cat']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
//
//   $cat= $_POST['cat'];
//
// $query=mysqli_query($conn,"INSERT INTO category(`cat_name`) VALUES('$cat')");
//
//       header('Location: admin.php?cat');}


//       elseif (isset($_GET['edit-product'])&& !empty($_GET['edit-product'])&& $_SERVER['REQUEST_METHOD'] == 'POST') {
//
//         $id= $_GET['edit-product'];
//         $title = $_POST['title'];
//         $image = $_FILES['image']['name'];
//         $upload = '../image/'. basename($image);
//            $desc = $_POST['desc'];
//            $cat = $_POST['cat'];
//            $price = $_POST['price'];
// echo '<pre>';
// print_r($_POST);
// die();
 //
 //
 //
 //
 // // $query = mysqli_query($conn, "UPDATE product SET title='$title', price='$price', discribtion='$desc', image='$image', cat_id='$cat' WHERE id='$id'");
 //  $query = mysqli_query($conn, "UPDATE products SET title = '$title' , image = '$image' , discribtion = '$desc', cat_id = '$cat', price = '$price' WHERE id = $id");
 //
 //        if($query){
 //
 //          move_uploaded_file($_FILES['image']['tmp_name'], $upload);
 //                header('Location: admin.php');}
 //              }  else {
 //                  die('we cant send product');
 //                }
 //      ?> -->
 <?php
     require_once '../config.php';

if(isset($_GET['delete_product'])){

    $id = $_GET['delete_product'];
    $query = mysqli_query($conn, "DELETE FROM product WHERE id = '$id'");
    header('Location: admin.php');



}elseif (isset($_GET['delete_cat'])){


    $id = $_GET['delete_cat'];
    $query = mysqli_query($conn, "DELETE FROM category WHERE id = '$id'");
    header('Location:admin.php?cats');

}elseif(isset($_GET['add-new-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $upload = '../image/'. basename($image);
    $desc = $_POST['desc'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];

    $query = mysqli_query($conn, "INSERT INTO product(title,image,discription,cat_id,price) VALUES('$title', '$image','$desc','$cat','$price')");

    if($query){
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        header('Location: admin.php');
    }else{
        die('we cant send product');
    }
}elseif(isset($_GET['add-cat']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
   $cat = $_POST['cat'];
    $query = mysqli_query($conn, "INSERT INTO category(cat_name) VALUES('$cat')");
    header('Location: admin.php?cats');
}elseif(isset($_GET['edit-product']) && !empty($_GET['edit-product']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_GET['edit-product'];
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $upload = '../image/'. basename($image);
    $desc = $_POST['desc'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $query = mysqli_query($conn, "UPDATE product SET title = '$title' , image = '$image' ,discription = '$desc', cat_id = '$cat', price = '$price' WHERE id = $id");

    if($query){
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);
        header('Location: admin.php');
    }else{
        die('we cant send product');
    }

}
?>
