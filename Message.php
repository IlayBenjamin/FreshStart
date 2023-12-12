<?php

    class Message {
        private $content;
        
        public function __construct($content) {
            $this->content = $content;
        }

        public function getMessage() { return $this->content; }
        public function setMessage($content) { $this->content = $content; }

    }


?>