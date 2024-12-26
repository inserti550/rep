<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "005";
    exit;
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
