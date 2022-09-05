<<style>
    form { padding: 50px 30px}
    form>div { padding: 10px 0 }
    label { display: block; font: .6em Arial; color: #666 }
    input {padding: 5px 10px; border: 1px solid#333; border-radius: 5px;}
</style>
<?php
    require_once "../function.php";
    $mid = getParam("mid", "");
    $morder = getParam("morder", "");
    $mname = getParam("mname", "");
?>

<form>
    <input type="hidden" name="action" value="medit">
    <input type="hidden" name="mid" value="<?=$mid?>">
    <div><label for="morder">Order</label><input type="number" name="morder" id="morder" value="<?=$morder?>"></div>
    <div><label for="mname">Name</label><input type="text" name="mname" id="mname" value="<?=$mname?>"></div>
    <div><input type="submit" value="Edit"></div>
</form>
