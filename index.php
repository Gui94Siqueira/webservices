<?php
    header("Content-type: Application/json");

    $msg = array("msg" => "API v1.0 senac Lapa tito",
                  "versao" => "1.0");
    echo json_encode($msg);

?>