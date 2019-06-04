<?php 
$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
 $insert = mysqli_query($connect,"INSERT INTO posts (post_text,img,users_id) VALUES ('" . $_POST['post_text'] . "','images/" . $_FILES['img']['name'] . "','" . $_POST['users_id'] . "')");

   move_uploaded_file( $_FILES['img']['tmp_name'], 'images/' .  $_FILES['img']['name']);
   header('Location: http://begimjan/innsta/posts.php?id='.$_POST['users_id']);
 ?>

 