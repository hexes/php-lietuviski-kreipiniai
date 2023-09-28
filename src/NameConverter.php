<?php

namespace LithuanianNameConverter;

class NameConverter {

    public function toVocative($name) {

        $specialCases = [ // Add any special cases here
            
        ];
        
        if (array_key_exists($name, $specialCases)) {
            return $specialCases[$name];
        }

        if (preg_match('/as$/', $name)) {
            return preg_replace('/as$/', 'ai', $name);
        }
        if (preg_match('/is$/', $name)) {
            return preg_replace('/is$/', 'i', $name);
        }
        if (preg_match('/us$/', $name)) {
            return preg_replace('/us$/', 'au', $name);
        }
        if (preg_match('/ė$/', $name)) {
            return preg_replace('/ė$/', 'e', $name);
        }
        return $name;
    }
    
}
