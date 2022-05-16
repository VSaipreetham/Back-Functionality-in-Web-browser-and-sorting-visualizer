<html>
    <head>
        <title>SignIn</title>
    </head>
    <body style="background-color:black">
        <div style="padding:20px 20px 20px 40px;margin:60px 500px 10px 500px; background-color:green">
            <h2>Login</h2>
            <form action="work.php" method="POST">
            <?php 
                if(@$_GET['Empty']==true)
                {
            ?>
                    <div style="color:white"><?php echo $_GET['Empty'] ?></div>                                
            <?php
                }
            ?>

            <?php 
                if(@$_GET['Invalid']==true)
                {
            ?>
                    <div style="color:white"><?php echo $_GET['Invalid'] ?></div>                                
            <?php
                }
            ?>
                <input type="text" name="un" placeholder="Username"><br><br>
                <input type="password" name="pwd" placeholder="Password"><br><br>
                <input style="margin:auto;display:block" type="submit" name="login">
            </form>
        </div>
    </body>
</html>




