<?php

/**
 * Sert à générer une classe de couleur CSS en fonction des valeurs des deux paramétres i et j.
 */
function colorClass(int $i, int $j): string
{
    if ($i == 1 || $j == 1) {
        return "firstRowCol";
    } elseif ($i % 2 == 0) {
        return "pair";
    } else {
        return "impair";
    }
}

/**
 * Sert à générer une class CSS font-weight en fonction des valeurs des deux paramétres i et j.
 */
function fontWeightClass(int $i, int $j): string
{
    if ($i == 1 || $j == 1 || $i == $j) {
        return "bold";
    } else {
        return "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de multiplication</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Tableau de multiplication</h1>
        <table>
            <?php for ($i = 1; $i <= 9; $i++) : ?>
                <tr>
                    <?php for ($j = 1; $j <= 9; $j++) : ?>
                        <td class="<?= colorClass($i, $j) . " " . fontWeightClass($i, $j) ?>">
                            <?= $i * $j == 1 ? "&nbsp;" : $i * $j ?>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
    </main>

    <footer>
        <p>&copy; Copyright &middot; Mokrane RACHEDI &middot; UMMTO</p>
    </footer>
</body>

</html>