<?php 
    function getSettingsData() {
        global $conn;
        $sql = "SELECT * FROM settings ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        

        $UserSettings = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
        return $UserSettings;
    }
    

if (isset($_POST['saveSettings'])) {

   $abouttext = mysqli_real_escape_string($conn, $_POST['body']);
   $contactEmail = mysqli_real_escape_string($conn, $_POST['mailadress']);


$sql = "INSERT INTO settings (AboutText, ContactEmail) VALUES ('$abouttext', '$contactEmail')";
if(mysqli_query($conn, $sql)){
    header("Location: usersettings.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
mysqli_close($conn);
}
?>