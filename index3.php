<?php
    session_start();
    if(isset($_SESSION['User']))
    {
        echo '<div style="text-align:right; background-color:lightgray; padding-bottom: 1px; ">';
        echo '<h3><a href="logout.php?logout">Logout</a></h3>';
        echo '</div>';

    }
    else
    {
        header("location:signin.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Visualizer</title>

    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <header>
        <nav>
            <div class="array-inputs">
                <p>Size of the array:</p>
                <input id="a_size" type="range" min=20 max=150 step=1 value=80>
                <p>Speed of the algorithm:</p>
                <input id="a_speed" type="range" min=1 max=5 step=1 value=4>
                <button id="a_generate">Generate New Array!</button>
            </div>

            <div class="header_right">
                <p class="nav-heading">Sorting visualizer</p>

                <div class="algos">
                    <button >Selection</button>
                </div>
            </div>

        </nav>
    </header>

    <section>

        <div id="Info_Cont1">
            <form action="index3.php" method="post">
                <h4><input type="submit" name="choice" value="Bubble Sort"></h4><br>
                <h4><input type="submit" name="choice" value="Merge Sort"></h4><br>
                <h4><input type="submit" name="choice" value="Quick Sort"></h4><br>

                <br><br><br><br><br><br>
                <input type="submit" name="choice" style="text-decoration: none;display: inline-block;padding: 8px 16px"
                <?php 
                if(!isset($_SESSION['top']))
                {
                ?> disabled 
                <?php   
                } 
                ?>
                
                <?php 
                if(isset($_SESSION['top']))
                {
                    if ($_SESSION['top'] == -1)
                    { 
                ?> disabled 
                <?php   
                    }
                } 
                ?>
                value="<< Previous"
                class="previous"
                onmouseover="this.style.color='red'"
                onmouseout="this.style.color='black'" 
                >
            </form>
        </div>

        <div id="array_container">
            
        </div>

        <div id="Info_Cont2">
            <p></p>
        </div>

    </section>

    <footer>

    </footer>

    <script src="./scripts/main.js"></script>   
    <script src="./scripts/visualizations.js"></script> 

    <script src="./scripts/selection_sort.js"></script>
</body>


</html>

<?php
    if(!isset($_SESSION['top']) && !isset($_SESSION['func']))
    {
        $_SESSION['top'] = -1;
        $_SESSION['func'] = array();
    }

    if(isset($_POST['choice']))
    {
        if($_POST['choice']=="Bubble Sort")
        {
            $_SESSION['top']++;
            $_SESSION['func'][$_SESSION['top']]=$_SERVER['REQUEST_URI'];
            header('Location: index2.php');
        }
        else if($_POST['choice']=="Selection Sort")
        {
            $_SESSION['top']++;
            $_SESSION['func'][$_SESSION['top']]=$_SERVER['REQUEST_URI'];
            header('Location: index3.php');
        }
        else if($_POST['choice']=="Merge Sort")
        {
            $_SESSION['top']++;
            $_SESSION['func'][$_SESSION['top']]=$_SERVER['REQUEST_URI'];
            header('Location: index4.php');
        }
        else if($_POST['choice']=="Quick Sort")
        {
            $_SESSION['top']++;
            $_SESSION['func'][$_SESSION['top']]=$_SERVER['REQUEST_URI'];
            header('Location: index5.php');
        }
        else if($_POST['choice']=="<< Previous")
        {
            $x = $_SESSION['top'];
            $_SESSION['top']--;
            header("Location:".$_SESSION['func'][$x]);
        }
        echo '$_SESSION["top"]';
    }
?>