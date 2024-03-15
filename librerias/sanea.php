<?php

function sanea($input, $tipo, $min_long, $max_long, $regexp = '') {
    
    if(isset($input) && strlen($input) >= $min_long){
        
        $output = trim($input);
        $output = htmlspecialchars($output, ENT_QUOTES, "UTF-8");
        $output = preg_replace('/[\\\^\`|~¬<>\'\*#\$\&]/', '', $output);
        
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
        $b = array('A', 'Á', 'A', 'A', 'A', 'A', 'AE', 'Ç', 'E', 'É', 'E', 'E', 'I', 'Í', 'I', 'I', 'D', 'Ñ', 'O', 'Ó', 'O', 'O', 'O', 'O', 'U', 'Ú', 'U', 'Ü', 'Y', 's', 'a', 'á', 'a', 'a', 'a', 'a', 'ae', 'ç', 'e', 'é', 'e', 'e', 'i', 'í', 'i', 'i', 'n', 'o', 'ó', 'o', 'o', 'o', 'o', 'u', 'ú', 'u', 'ü', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        $output = str_replace($a, $b, $output); 
        
        if(strlen($output) >= $min_long && strlen($output) <= $max_long ) {
            
            if($regexp == '' || preg_match($regexp, $output)) {
            
                switch ($tipo) {
                    case 'string':
                        $output = filter_var($output, FILTER_SANITIZE_STRING);                        
                        break;                    
                    case 'email':
                        $output = filter_var($output, FILTER_SANITIZE_EMAIL);
                        $output = filter_var($output, FILTER_VALIDATE_EMAIL);
                        break;
                    case 'url':
                        $output = filter_var($output, FILTER_SANITIZE_URL);
                        $output = filter_var($output, FILTER_VALIDATE_URL);
                        break;
                    case 'int':
                        $output = filter_var($output, FILTER_SANITIZE_NUMBER_INT);
                        $output = intval($output);                        
                        break;
                    case 'float':
                        $output = filter_var($output, FILTER_SANITIZE_FLOAT_INT);
                        $output = floatval($output);
                        break;
                    default:
                        echo 'Error. El tipo de saneo no es correcto';
                        $output = FALSE;
                }
                        
            } else {
                echo 'Error. El dato no concuerda con el patr&oacute;n';
                $output = FALSE;
            }
        
        } else {
            echo 'Error. La longitud del dato es incorrecta';
            $output = FALSE;
        }
        
    } else {
        echo 'Error. El dato no esta definido o esta vacio';
        $output = FALSE;
    }
    
    
    if(strlen($output) < $min_long) {
        $output = FALSE;        
    }   
    
    return $output;
};