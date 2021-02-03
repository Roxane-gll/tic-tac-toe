<?php

require "functions.php";

// Un tableau de 3x3 par defaut avec des valeurs de cellules a null.
$game = [[null,null,null],
    [null,null,null],
    [null,null,null]];//todo instanciate me.

play($game);



function showCharacter($cell): string
{
    if($cell==1){
        return "X";
    }elseif ($cell==2){
        return "O";
    }else{
        return " ";
    }
}

function isEmpty($game,$res):bool
{
    return $game[$res[0]][$res[1]]==null;
}

function hasAnyEmptyCell($game):bool
{
    foreach($game as $value){
        foreach($value as $cell){
            if($cell==null){
                return true;
            }
        }
    }
    return false;
}

function changePlayer($player){
    if($player==1){
        return 2;
    }else{
        return 1;
    }
}
