<?php 
use illuminate\support\Str;

function greenTitle ($title){
    return Str::of($title->title)
    ->replace("(", "<span>")
    ->replace(")", "</span>");

}