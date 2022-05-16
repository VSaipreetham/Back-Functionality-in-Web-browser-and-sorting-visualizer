<?php
    session_start();
    if(isset($_POST['login']))
    {
       if(empty($_POST['un']) || empty($_POST['pwd']))
       {
            header("location:signin.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            if($_POST['un']=="admin" && $_POST['pwd']=="admin")
            {
                $_SESSION['User']=$_POST['un'];
                header("location:index2.php");
            }
            else
            {
                header("location:signin.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
?>