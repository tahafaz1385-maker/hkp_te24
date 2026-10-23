<?php
require_once("router.php");
require_once("response.php");
app:: get("/", function(){

    res:: debug("home");
});