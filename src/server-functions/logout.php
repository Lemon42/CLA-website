<?php
session_start();
session_destroy();
header('Location: ../internal-system/login.php');
exit();