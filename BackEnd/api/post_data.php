<?php
// post_data.php
function postData($db) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($db->query($sql) === TRUE) {
        echo json_encode(array("message" => "Record created successfully"));
    } else {
        echo json_encode(array("message" => "Error: " . $sql . "<br>" . $db->error));
    }
}
?>
