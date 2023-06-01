<?php

$headerCSP = "Content-Security-Policy: default-src 'self'; script-src 'self' cdnjs.cloudflare.com;";

header($headerCSP);
header("X-XSS-Protection: 1; mode=block");


?>