<?php 
    function convertLetterToNumberValue($letter) {
        if ($letter == " ") {
            echo "0";
        } if ($letter == "e") {
            echo "33";
        } if ($letter == "l") {
            echo "555"; 
        } if ($letter == "a") {
            echo "2";
        } if ($letter == "n") {
            echo  "66";
        } if ($letter == "i") {
            echo  "444";
        } if ($letter == "m") {
            echo "6";
        } if ($letter == "k") {
            echo "55";
        }if ($letter == "o") {
            echo "666";
        } if ($letter == "t") {
            echo "8";
        }
        else {
            echo null;
        }
    };

    
    function convertNumberValueToLetter($numberValue) {
        if ($numberValue == "0") {
            echo " ";
        } if ($numberValue == "5") {
            echo "j";
        }  if ($numberValue == "22") {
            echo "b";
        } if ($numberValue == "2") {
            echo "a";
        }  if ($numberValue == "555") {
            echo "l";
        }  if ($numberValue == "33") {
            echo "e";
        }  if ($numberValue == "222") {
            echo "c";
        } if ($numberValue == "9999") {
            echo "z";
        } if ($numberValue == "66") {
            echo "n";
        }  if ($numberValue == "444") {
            echo "i";
        }  else if ($numberValue == "55") {
            echo "k";
        } else {
            echo null;
        }
    };

    class PhoneKeyboardConverter {

        public static function convertToNumeric($text) {
            $letters = $text.array_change_key_case().str_split("");
        
            for ($i = 0; $i < count($letters); $i++) {
                $letter= $letters[$i];
        
                $numberValue = convertLetterToNumberValue($letters);
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

    $stringResult = PhoneKeyboardConverter.convertToString(5,2,22,555,33,222,9999,66,444,55);
    echo $stringResult;

    $numericResult = PhoneKeyboardConverter.convertToNumeric('Ela nie ma kota'); 
    echo $numericResult;

?>