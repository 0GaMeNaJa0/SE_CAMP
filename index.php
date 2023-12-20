<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php $multi_x = 3; ?>
    <div>
        <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

        <table>
            <tbody>
                <?php
                for ($i = 1; $i <= 24; $i++) {
                    $multiple_value = $i * $multi_x;
                    echo "<tr>";
                    echo "<td>$multi_x</td>";
                    echo "<td>x</td>";
                    echo "<td>$i</td>";
                    echo "<td>=</td>";
                    echo "<td>$multiple_value</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>