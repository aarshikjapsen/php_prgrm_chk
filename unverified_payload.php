if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payload = $_POST['payload'];

    // Perform some actions with the payload
    $result = performActions($payload);

    // Store the result or perform other operations
    storeResult($result);

    // Display a success message to the user
    echo "Payload processed successfully!";
}

function performActions($payload) {
    // Perform some actions with the payload
    $num = intval($payload);
    $result = $num + 10;
    return $result;
}

function storeResult($result) {
    // Store the result in a file or perform other operations
    file_put_contents('result.txt', $result . PHP_EOL, FILE_APPEND);
}
