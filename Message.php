
<?php

    include("MessageUtils.php");

    class Message {
        private $content;
        
        public function __construct(?String $content = "") {
            $this->content = (gettype($content) == 'string') ? $content : "";
        }

        public function getMessage() { return $this->content; }
        public function setMessage($content) { $this->content = $content; }
        

    }


?>