<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            margin: 0 auto;
            border: 1px teal solid;
            width: 200px;
            padding: 15px 25px;
        }

        .crest {
            width: 40px;
            height: 40px;
            margin: 5px 7px;
        }
        #matrix{
            display: grid;
            width: 200px;
            padding: 15px 25px;
            justify-items: center;
            margin: 10px auto;
            grid-template-columns: repeat(<?=$_GET['columns']?>,1fr);
            grid-template-rows: repeat(<?=$_GET['rows']?>,1fr);
            border: 1px teal solid;
        }

        #marked {
            background: teal;
        }
    </style>
</head>
<body>
<form method="get">
    <div class="container">
        <h2>Draw matrix</h2>
        <div>
            <p>Columns</p>
            <select name="columns">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <p>Rows</p>
            <select name="rows">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <h2>Mark</h2>
            <p>Column</p>
            <select name="mark_column">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <p>Row</p>
            <select name="mark_row">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>


        <input type="submit">
    </div>
    <? if (isset($_GET['columns'])) {
        $mark_col=$_GET['mark_column'];
        $mark_row=$_GET['mark_row'];
        print  "<div id='matrix'>";
        for ($i = 1; $i <= $_GET['rows']; $i++) {
            for ($j = 1;$j <= $_GET['columns'] ; $j++) {
                $mark_col == $j && $mark_row == $i ? print "<span id='marked' class='crest'>&#10006;</span>" : print "<span class='crest'>&#10006;</span>";
            }
        }
        if ($mark_col>$_GET['columns'] || $mark_row>$_GET['rows']) print 'Отметьте крестик, координаты которого существуют';
        print "<br>";
        print "</div>";
    } ?>

</form>


</body>
</html>
