<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $contractID = $_POST['contractID'];
    $theme = $_POST['theme'];
    $reference = $_POST['reference'];
    $activityDescription = $_POST['text'];
    $status = $_POST['status'];
    $proxyUnit = $_POST['proxyUnit'];
    $proxyValue = $_POST['proxyValue'];
    $committedUnits = $_POST['committedUnits'];
    $committedValue = $_POST['committedValue'];
    $deliveredUnits = $_POST['deliveredUnits'];
    $deliveredValue = $_POST['deliveredValue'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Prepare data to save (e.g., in a CSV format)
    $data = [
        $contractID,
        $theme,
        $reference,
        $activityDescription,
        $status,
        $proxyUnit,
        $proxyValue,
        $committedUnits,
        $committedValue,
        $deliveredUnits,
        $deliveredValue,
        $startDate,
        $endDate,
    ];

    // Open or create a file to save the data
    $file = fopen("submissions.csv", "a");

    // Save the data to the file
    fputcsv($file, $data);

    // Close the file
    fclose($file);

    // Redirect to a thank you page or show a success message
    echo "Form submitted successfully!";
}
