<?php
require '../Includes/config.php';
$transportation = implode(' , ', $_POST['transportation']);

$checkUsername = $conn->prepare("SELECT * FROM Enquete WHERE StudentID = ?");
$checkUsername->execute([$_SESSION['ID']]);
if (!$checkUsername->rowCount() > 0) {
    try {
        $stmt = $conn->prepare("INSERT INTO Enquete(ID, StudentID, Distance, Traveltime, Transportation, Starttime, Endtime, Comments)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([null, $_SESSION['ID'], $_POST['distance'], $_POST['traveltime'], $transportation, $_POST['starttime'], $_POST['endtime'], $_POST['comments']]);
        echo "Enquete succesvol ingevuld!<br>";
        echo "<a href='../index.php'>Log uit</a>";
    } catch (PDOException $e) {
        echo "Enquete niet toegevoegd. Error: " . $e;
    }
}else{
    echo "Deze gebruiker heeft de enquete al ingevuld.<br>";
    echo "<a href='../index.php'>Log uit</a>";
}
