<?php
require_once(APP."ProfileController.php");
$Profile = new ProfileController();
if ($Profile->isAdmin($_SESSION['Login_id'])) {
    echo "XD";
}
else {
    $Profile->Redirect("/");
}