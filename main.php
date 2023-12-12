<?php

    $m = new Message("Version 5.0 Released");
    print($m->getMessage());

    $messages = [
        MessageUtilites::$HELLO_WORLD_MESSAGE_CONTENT,
        MessageUtilites::$HEY_MESSAGE_CONTENT,
        MessageUtilites::$BYE_MESSAGE_CONTENT,
        "ILAYYYY"
    ];

    MessageUtilites::PRINT_ALL($messages);
?>