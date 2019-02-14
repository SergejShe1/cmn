<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Chess Online</title>#

</head>
<body>

<?php

$board = createBoard(8, '0');
renderBoard($board);
$board = setValue($board, 5, 5, 'k');
renderBoard($board);

function setValue(array $board, int $i, int $a, string $value): array
{
    $board[$i][$a] = $value;

    return $board;
}


function createBoard(int $n, string $value): array
{
    $n++;
    $board = [];
    for ($i = 1; $i < $n; $i++) {
        for ($a = 1; $a < $n; $a++) {
            $board[$i][$a] = $value;
        }
    }

    return $board;
}

/**
 * @param array $board
 */
function renderBoard(array $board): void
{
    echo '<br>';
    echo '----------------BOARD----------------</br>';
    foreach ($board as $row) {
        echo '<br>';
        foreach ($row as $item) {
            echo '<button>'.$item.'</button>';
        }
    }
}

?>
</body>

</html>