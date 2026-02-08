<?php

header("Content-Type: text/html");

$serviceUrl = "http://localhost/php_demo/Login/soap/server.php";

$options = [
    'location' => $serviceUrl,
    'uri'      => $serviceUrl,
    'trace'    => 1 
];

try {
 
    $client = new SoapClient(null, $options);

 
    $users = $client->getUsers();

    echo "<html><head><script src='https://cdn.tailwindcss.com'></script></head><body class='bg-gray-100 p-10'>";
    echo "<div class='max-w-xl mx-auto bg-white p-6 rounded shadow-lg'>";
    echo "<h1 class='text-2xl font-bold text-purple-700 mb-4'>SOAP API Response</h1>";
    
    if (!empty($users)) {
        echo "<ul class='divide-y'>";
        foreach ($users as $user) {
            echo "<li class='py-2'><strong>{$user['username']}</strong> - {$user['email']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p class='text-gray-500'>No users found in database.</p>";
    }
    
    echo "<a href='../index.php' class='inline-block mt-4 text-blue-500 hover:underline'>&larr; Back to Home</a>";
    echo "</div></body></html>";

} catch (SoapFault $e) {
    echo "<div style='color:red; border:1px solid red; padding:10px;'>";
    echo "<strong>SOAP Error:</strong> " . $e->getMessage();
    echo "</div>";
}
?>