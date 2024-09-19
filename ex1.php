<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1</title>
    <style>
        table, th, td {
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
                echo "<td>$i</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>