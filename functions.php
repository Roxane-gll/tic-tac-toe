<?php


/**
 * The grid we want to draw
 * @param $grid the grid to draw
 */
function drawGrid($grid)
{
    $strMap = "
    A B C     
   ┌─┬─┬─┐
 1 │11│21│31│
   ├─┼─┼─┤
 2 │12│22│32│
   ├─┼─┼─┤
 3 │13│23│33│
   └─┴─┴─┘
";
    foreach ($grid as $rowNumber => $row) {
        foreach ($row as $lineNumber => $cell) {
            $strMap = str_replace($lineNumber + 1 . $rowNumber + 1, showCharacter($cell), $strMap);
        }
    }
    echo $strMap;
}

function askQuestion(string $question): string
{
    echo $question . " : ";
    return trim(fgets(STDIN));
}


/**
 * Check if the game is won.
 * @param $grid
 * @return bool true if t
 */
function checkIfSomeoneWon($grid): bool
{
    $col = [1, 1, 1];
    $row = [1, 1, 1];
    $diagonals = [1, 1];
    foreach ($grid as $rowId => $line) {
        foreach ($line as $colId => $cell) {
            $col[$colId] *= $cell ?? 0;
            $row[$rowId] *= $cell ?? 0;
        }
    }

    for ($i = 0; $i <= 2; $i++) {
        $diagonals[0] *= $grid[$i][$i] ?? 0;
        $diagonals[1] *= $grid[$i][2 - $i] ?? 0;
    }
    foreach ([...$col, ...$row, ...$diagonals] as $val) {
        if ($val == 1 || $val == 8) {
            return true;
        }
    }
    return false;
}

function play(&$game = [])
{
    $player = 1;
    do {
        drawGrid($game);
        do {
            $cell = askQuestion("Joueur " . $player . ": à toi de jouer");

            $res = convertCoordinatesToCell($cell);
        } while ($res == null || !isEmpty($game, $res[0], $res[1]));
        $game[$res[0]][$res[1]] = $player;
        if (checkIfSomeoneWon($game)) {
            drawGrid($game);
            echo "Joueur " . $player . " A GAGNÉ";
            return;
        }
        if (!hasAnyEmptyCell($game)) {
            drawGrid($game);
            echo "Match nul!";
            return;
        }
        $player = changePlayer($player);
    } while (true);


}

function convertCoordinatesToCell($coordinates): ?array
{
    $items = str_split($coordinates);
    $x = null;
    $y = null;
    foreach ($items as $item) {
        switch ($item) {
            case "A":
                $x = 0;
                break;
            case "B":
                $x = 1;
                break;
            case "C":
                $x = 2;
                break;
            case "1":
            case "2":
            case "3":
                $y = $item - 1;
                break;
            default:

                return null;
        }
    }
    return $y !== null && $x !== null ? [$y, $x] : null;
}

