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
    if($game[$res[0]][$res[1]]==null){
        return true;
    }else{
        return false;
    }
}

function hasAnyEmptyCell($game):bool
{
    $hasEmpty=false
    foreach($game as $value){
        if($value==null){
            $hasEmpty=true
        }
    }
    return
}
