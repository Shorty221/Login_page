// api/soap_handler.php
function getUserEmail($id) {
    // Logic to fetch from DB
    return "user_$id@example.com";
}

$server = new SoapServer(null, array('uri' => "http://localhost/soap"));
$server->addFunction("getUserEmail");
$server->handle();