<?php

namespace LithuanianNameConverter;

class NameConverter {
    public function toVocative($name) {

        $specialCases = [ // Add any special cases here
            
        ];
        
        if (array_key_exists($name, $specialCases)) {
            return $specialCases[$name];
        }
        $lastTwoChars = substr($name, -2);
        $lastChar = substr($name, -1);


        if ($lastTwoChars === 'as') {
            return substr($name, 0, -2) . 'ai';
        }

        if ($lastTwoChars === 'is') {
            return substr($name, 0, -2) . 'i';
        }

        if ($lastTwoChars === 'us') {
            return substr($name, 0, -2) . 'au';
        }

        if ($lastChar === 'ė') {
            return substr($name, 0, -1) . 'e';
        }

        return $name;
    }
}
