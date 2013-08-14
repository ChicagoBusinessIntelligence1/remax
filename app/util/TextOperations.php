<?php 
class TextOperations
{
public static  function shortenString($text, $charsToCut)
    {
       $posOfWhiteSpace = strpos($text, ' ', $charsToCut-5);
       $shortenStr = substr($text, 0, $posOfWhiteSpace);
       return $shortenStr.'...'; 
    }    
}

 