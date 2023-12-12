<?php

  class Blog {
    private Array $blobContent;
    private String $owner;
    private String $bio;

    public function __construct(String $ownerName, String $bio) {
      $this->blobContent = new array();
      $this->owner = $ownerName;
      $this->bio = $bio;
    }

  }


?>
