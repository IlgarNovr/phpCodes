<?php 
    $row = isset($_POST["row"]) ? $_POST["row"] : 0;
    $td = isset($_POST["td"]) ? $_POST["td"] : '';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Document</title>
        <style>
            body { padding: 100px }
            input[type=text] {
                border: 1px solid #333;
                padding: 3px;
                margin: 10px;
                width: 150px;
                height: 30px;
                display: block;
            }
            td{
                border: 1px solid #333; 
                padding: 3px;
                margin: 10px;
                width: 150px;
                height: 30px;
            }
        </style>
    </head>

    <body>
        <?php if($td == '' && $row == 0 ) { ?>

            <form method="POST">
                <select name="row" id="row" >
                    <?php
                        for($i = 1; $i <=7; $i++ ){
                            echo '<option>'.($i).'</option>';
                        }
                    ?>
                </select>
                <input type="submit" value="OK" />
            </form>

        <?php } ?>
       
        <?php 
        if($row != 0 && $td == "") {
            echo '<form method="POST">';

            for ($i=0; $i < $row; $i++) { 
                echo '<input type="text" name="td[]">';
            }
            echo '<input type="hidden" name="row"  value="'.$row.'"/>';

            echo '<input type="submit" value="GO " />';
            echo "</form>";
        }
        ?>

        <?php 
        if($td != '') {
            $count = 0;

            echo "<table>";            
            for ($i=0; $i < $row; $i++) { 
                echo '<tr><td>'.$td[$count++].'</td></tr>';
            }
            echo "</table>";            
        }
        ?>
    </body>
</html>