<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php

            $count = 7;
            for ($i = 0; $i < $count; $i++) {
                $char = chr(65 + $i);
                echo "<td>$char</td>";
            }
            ?>
        </tr>
        <tr>
            <?php

            $count = 7;
            for ($i = 0; $i < $count; $i++) {
                echo "<td>$i</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>