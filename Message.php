
<?php

    include("MessageUtils.php");

    class Message {
        private $content;
        
        public function __construct(?String $content = "") {
            $this->content = (gettype($content) == 'string') ? $content : "";
        }

        //heyyy
        // HEYYY AGAINNNNNN

        public function getMessage() { return $this->content; }
        public function setMessage($content) { $this->content = $content; }
        public function print() {
            print($this->content);
        }
        

    }


?>
