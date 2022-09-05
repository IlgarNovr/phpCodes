<?php 
    $day = isset($_GET["day"]) ? $_GET["day"] : 0; 
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
    </head>

    <body>
        <form>
            <select name="day" >
                <?php
                    for($i = 1; $i <= 7; $i++ ){
                        echo '<option'.($day == $i ? ' selected' : '').'>';
                        echo ($i).'</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Ok">
            <?php 
            if($day != 0) {
                echo date('l', strtotime("$day Days"));
            }
            ?>
        </form>

    </body>
</html>