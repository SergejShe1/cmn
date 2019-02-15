<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Chess Online</title>#
    <link rel="stylesheet" type="text/css" href="style.css">
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

function renderBoard(array $board): void
{
    echo '<br>';
    echo '----------------BOARD----------------</br>';
    foreach ($board as $row) {
    echo '<br>';
        foreach ($row as $item) {
            if  ($board[a][i]%2)          //all black
            //if  ([i]%2)                    //all white
                echo '<button class="square white">' . $item . '</button>';
            else
                echo '<button class="square black">' . $item . '</button>';
            }
    }
    echo '<br>';
}

?>
</body>

</html>