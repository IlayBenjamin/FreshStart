<?php

  class Blog {
    private Array $blobContent;
    private String $owner;
    private String $bio;

    public function __construct(String $ownerName, String $bio) {
      $this->blobContent = array();
      $this->owner = $ownerName;
      $this->bio = $bio;
    }

  }


?>
