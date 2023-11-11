<?php
$apiUrl = 'http://127.0.0.1:5022/diabetes';

// Retrieve form data using $_GET
$arg_pregnant = $_GET['arg_pregnant'];
$arg_glucose = $_GET['arg_glucose'];
$arg_pressure = $_GET['arg_pressure'];
$arg_triceps = $_GET['arg_triceps'];
$arg_insulin = $_GET['arg_insulin'];
$arg_mass = $_GET['arg_mass'];
$arg_pedigree = $_GET['arg_pedigree'];
$arg_age = $_GET['arg_age'];

$params = array(
    'arg_pregnant' => $arg_pregnant,
    'arg_glucose' => $arg_glucose,
    'arg_pressure' => $arg_pressure,
    'arg_triceps' => $arg_triceps,
    'arg_insulin' => $arg_insulin,
    'arg_mass' => $arg_mass,
    'arg_pedigree' => $arg_pedigree,
    'arg_age' => $arg_age
);

// Print the contents of the $params array for testing
// // Print the entire response for debugging

// Initiate a new cURL session/resource
$curl = curl_init();

// Set cURL options for a GET request
$apiUrl = $apiUrl . '?' . http_build_query($params);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_URL, $apiUrl);

// For testing:
echo "The generated URL sent to the API is:<br>" . $apiUrl . "<br><br>";

// Make a GET request
$response = curl_exec($curl);

// Check for cURL errors
if (curl_errno($curl)) {
    $error = curl_error($curl);
    // Handle the error appropriately
    die("cURL Error: $error");
}

// Close cURL session/resource
curl_close($curl);

// Process the response
$data = json_decode($response, true);

// Print the decoded JSON response for testing
echo "<br>The predicted output in decoded JSON format is:<br>" . var_dump($data) . "<br><br>";

// Check if the response was successful
if (isset($data['0'])) {
    // API request was successful
    // Access the data returned by the API
    echo "The predicted diabetes status is:<br>";

    // Process the data
    foreach ($data as $repository) {
        echo $repository['0'], $repository['1'], $repository['2'], "<br>";
    }
} elseif (isset($data['message'])) {
    // API request failed or returned an error
    // Handle the error appropriately
    echo "API Error: " . $data['message'];
} else {
    // Handle the case where $data is neither a successful response nor an error
    echo "Unexpected response format.<br>";
}
echo "Full Response:<br>" . htmlentities($response) . "<br>";

?>
