<?php
session_start();
session_unset();
session_destroy();

header("Location: ../views/client-log.php");
exit;
