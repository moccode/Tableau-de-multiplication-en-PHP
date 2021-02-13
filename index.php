<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de multiplication</title>
</head>

<body>
    <main>
        <h2>Tableau de multiplication</h2>
        <table>
            <?php for ($i = 1; $i <= 9; $i++) : ?>
                <tr>
                    <?php for ($j = 1; $j <= 9; $j++) : ?>
                        <td>
                            <?= $i * $j == 1 ? "&nbsp;" : $i * $j ?>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
    </main>
</body>

</html>