<?php
$environment = getenv('ACAVERSO_ENV');

if ($environment === 'azure') {
    include 'auxiliary/config-remote.php';
} else {
    include 'auxiliary/config-local.php';
}
?>
