<?php
// get_data.php
function getData($db) {
    $sql = "SELECT * FROM users";
    $result = $db->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>
