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
<style >


</style>

  </head>
  <body>
    <header  >  <br>  &nbsp; &nbsp; &nbsp; &nbsp; نظرات تایید شده</header>

     <table class="table  float-right" style="  position: absolute;
       top: 200px;">
        <tr>
        <thead>

            <th  >ردیف</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>محتوا</th>
            <th>پذیرفتن</th>

            <th>حذف</th>


        </tr>
        </thead>
        <tbody>


            <tr>
              <td>1</td>
                   <td>تست</td>
                   <td>تست</td>
                   <td>سلام نظر جدید</td>
                   <td><a href="#" class="btn btn-primary">پذیرفتن</a></td>
                   <td>
                       <a href="#" class="btn btn-danger">حذف</a>
                   </td>



            </tr>
            </tbody>
            </table>

           <header style="position:absolute; top:300px;">  <br>  &nbsp; &nbsp; &nbsp; &nbsp;نظرات تایید نشده</header>

              <table class="table float-right"  style=" position: absolute;
                top: 500px;">
                  <thead>
                  <tr>
                      <th>ردیف</th>
                      <th>نام</th>
                      <th>ایمیل</th>
                      <th>محتوا</th>
                      <th>نپذیرفتن</th>
                      <th>حذف</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1</td>
                      <td>تست</td>
                      <td>تست</td>
                      <td>سلام نظر جدید</td>
                      <td><a href="#" class="btn btn-primary">نپذیرفتن</a></td>
                      <td>
                          <a href="#" class="btn btn-danger">حذف</a>
                      </td>

                  </tr>
                  </tbody>
              </table>



  </body>
</html>
