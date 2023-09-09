<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    // Save the form data to a text file (e.g., data.txt)
    $data = "Name: $name\n";
    $data .= "Email: $email\n";
    $data .= "Contact: $contact\n";
    $data .= "Gender: $gender\n";
    $data .= "Age: $age\n\n";

    file_put_contents('data.txt', $data, FILE_APPEND);

    echo "Form data has been saved!";
} else {
    echo "No form data submitted.";
}
?>

</body>
</html>
