<?php

require "functions.php";

// Un tableau de 3x3 par defaut avec des valeurs de cellules a null.
$game = null;//todo instanciate me.

play($game);

/**
 * Affichez X si la valeur du joueur vaut 1, si c'est 2 afficher O sinon afficher un espace vide.
 * @param $cell
 * @return string
 */
function showCharacter($playerValue): string
{
    //todo implement me
    return "~";
}

/**
 * Cette fonction reçoit le numéro du joueur actuel, et renvoie l'autre joueur.
 * @param int $player
 * @return int
 */
function changePlayer(int $player): int
{
    //todo implement me
}

/**
 * Cette fonction prend en parametre la grille et vérifie si la case LINE/COLUMN est vide
 * @param array $grid
 * @param int $line
 * @param int $column
 * @return bool
 */
function isEmpty($grid = [], int $line, int $column): bool
{
    //todo implement me
}

/**
 * Vérifier s'il reste une cellule vide.
 * @param array $grid
 * @return bool
 */
function hasAnyEmptyCell($grid = []): bool
{
    //todo implement me
}

