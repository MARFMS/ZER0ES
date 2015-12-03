<?php
    function which_language($lang){
        switch ($lang) {
            case 'Python':
            case 'python':
            case 'py':
                $ret = 'py';
                break;

            case 'Java':
            case 'java':
                $ret = 'java';
                break;

            default:
                $ret = 'plain';
                break;
        }
        return "brush: " . $ret . ";";
    }

    function hi(){
        return "Hello, world!";
    }

    function bracketize($str){
        return "[" . $str . "]";
    }
?>
