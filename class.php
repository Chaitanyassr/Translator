<?php
require_once(Index.php);
echo "test3";
$query = mysqli_query($conn,select korean from translator where english = "English");

echo $query;


// echo "test2";
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

// mysqli_close($conn);
?>