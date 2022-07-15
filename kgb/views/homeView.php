<?php

ob_start();
?>


<?php
$content = ob_get_clean();
$title = "Bienvenue sur le site du KGB";
require("templates/template.php");
?>