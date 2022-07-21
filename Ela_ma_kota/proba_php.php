<?php 
    function convertLetterToNumberValue($letter) {
        if ($letter == " ") {
            return 0;
        } if ($letter == "e") {
            return 33;
        } if ($letter == "l") {
            return 555; 
        } if ($letter == "a") {
            return 2;
        } if ($letter == "n") {
            return 66;
        } if ($letter == "i") {
            return 444;
        } if ($letter == "m") {
            return 6;
        } if ($letter == "k") {
            return 55;
        }if ($letter == "o") {
            return 666;
        } if ($letter == "t") {
            return 8;
        }
        else {
            return null;
        }
    };

    
    function convertNumberValueToLetter($numberValue) {
        if ($numberValue == 0) {
            return " ";
        } if ($numberValue == 5) {
            return "j";
        }  if ($numberValue == 22) {
            return "b";
        } if ($numberValue == 2) {
            return "a";
        }  if ($numberValue == 555) {
            return "l"
        }  if ($numberValue == 33) {
            return "e";
        }  if ($numberValue == 222) {
            return "c";
        } if ($numberValue == 9999) {
            return "z";
        } if ($numberValue == 66) {
            return "n";
        }  if ($numberValue == 444) {
            return "i";
        }  else if ($numberValue == 55) {
            return "k";
        } else {
            return null;
        }
    };

    class PhoneKeyboardConverter {

        public static function convertToNumeric($text) {
            $letters = $text.array_change_key_case().str_split("");
        
            for ($i = 0; $i < count($letters); $i++) {
                $letter= $letters[$i];
        
                $numberValue = convertLetterToNumberValue($letter);
                $result.array_push($numberValue);
            }

             return $result;
        }
        
        
        public static function convertToString ($numberArray) {
        
                for ($i = 0; $i < count($numberArray); $i++) {
                    $numberValue = $numberArray[$i];
            
                    $letter = convertNumberValueToLetter($numberValue);
            
                    $result.array_push($letter);
                }
            
            return $result.join(',', $numberArray);
        
        }
    };

    $stringResult = PhoneKeyboardConverter::convertToString([5,2,22,555,33,222,9999,66,444,55]);
    echo $stringResult;

    $numericResult = PhoneKeyboardConverter::convertToNumeric('Ela nie ma kota'); 
    echo $numericResult;

?>