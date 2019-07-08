
<a href=
<?php echo '"'.'http://'.$_SERVER["HTTP_HOST"].'/ilya_main'.'"'?></a>
<p style="float: right" id="glav">На главную</p>
<form action=
<?php echo '"'.'http://'.$_SERVER["HTTP_HOST"].'/dolgi/formUpdate'.'"'?>
name="dolgForm" method="POST">
Имя долга: <span id="getSelectTarget">
        <?php 
        $fetched = $data->fetchAll();
        $result = "<select name=\"dolgName\">";
        foreach ($fetched as $row) {
                $result = $result . "<option value=\"".$row["nameDolg"]."\">" .$row["nameDolg"]. "</option>";
        }
        echo $result . "</select>"; 
        ?>
</span>
<br>
<input type="radio" name="delorpost" value="1" checked>добавить<br>
<input type="radio" name="delorpost" value="0">удалить<br>
<input type="submit">
</form>
<div class="container">
    <div class="nDolg">
        <?php 
        $rowCounter = 0;
        foreach ($fetched as $row) {
            if ($row['checkFlag']==1) {
                $rowCounter++;
            }
        }
        echo '<p id="numberDolg">'.$rowCounter.'</p>';
        ?>
    </div>
    <div class="lDolg">
    <?php 
        $result = "";
        foreach ($fetched as $row) {
            if ($row['checkFlag']==1) {
                $result = '<p id="tableDolg">'.$row["nameDolg"].'</p>' . $result;
            }
        }
        echo $result; 
        ?>
    </div>
</div>