<?php

    final class MessageUtilites {
        static $HELLO_WORLD_MESSAGE_CONTENT = "Hello, World!";
        static $HEY_MESSAGE_CONTENT = "Hey There!";
        static $BYE_MESSAGE_CONTENT = "Good Bye!";

        static function PRINT_MESSAGE($message) {
            print $message;
        }
        
        static function PRINT_EXAMPLE_MESSAGE1() {
            print MessageUtilites::$HELLO_WORLD_MESSAGE_CONTENT;
        }

        static function PRINT_EXAMPLE_MESSAGE2() {
            print MessageUtilites::$HEY_MESSAGE_CONTENT;
        }

        static function PRINT_EXAMPLE_MESSAGE3() {
            print MessageUtilites::$BYE_MESSAGE_CONTENT;
        }

        static function PRINT_ALL(Array $list) {
            foreach($list as $key => $value) {
                print $value;
            }
        }
     
        
    }

?>