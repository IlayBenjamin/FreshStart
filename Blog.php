<?php

  class Blog {
    private array $blogContent;
    private string $owner;
    private string $bio;

    public function __construct(string $ownerName, string $bio) {
      $this->blogContent = array();
      $this->owner = $ownerName;
      $this->bio = $bio;
    }

    public function getOwner() { return $this->owner; }
    public function getBio() { return $this->bio; }
    public function getContent() { return $this->blogContent; }
    public function messageByIndex(int $index) { return $this->blogContent[$index]; }
    public function setOwner(string $ownerName) { $this->owner = $ownerName; }
    public function setBio(string $bio) { $this->bio = $bio; }
    public function loadContent(array $messagesList) { $this->blogContent = $messagesList; }
    public function uploadMessage(string|array $message) { array_push($this->blogContent, $message); }
    public function removeMessageByIndex(int $index) { unset($this->blogContent, $index); }

  }


?>
