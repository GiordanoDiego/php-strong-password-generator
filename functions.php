<?php   
    
    function getName($length, $numberYN, $lettersYS, $specialCharacterYS) {
        $numbers ='0123456789';
        $letters ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $specialCharacter = '?!-*$&';
        $characters ="";
        
        if(isset($numberYN) && $numberYN == "1"){
            $characters .= $numbers;
        }
        if(isset($lettersYS) && $lettersYS == "1"){
            $characters .= $letters;
        }
        if(isset($specialCharacterYS) && $specialCharacterYS == "1"){
            $characters .= $specialCharacter;
        }
     
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
     
        return $randomString;
    };


?>