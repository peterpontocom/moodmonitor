<?php
include "connection.php";
if (isset($_POST["addAccount"])) {
  $username = $_POST["username"];
  $useremail = $_POST["useremail"];
  $userpassword = $_POST["userpassword"];
  $sql = "INSERT INTO user (id, username, email, password) VALUES ('Default','$username', '$useremail', '$userpassword')";
  if (mysqli_query($connect, $sql)) {
    echo "Data saved successfully";
    $_SESSION["accountAdded"] = true;
    header("Location: ../views/pages/securityAndPrivacity/index.php");
  }
}
if (isset($_SESSION["accountAdded"])) {
  header("Location: ../views/pages/securityAndPrivacity/index.php");
}
?>

<?php if (isset($_POST["save"])) {
  $diaryTitle = $_POST["diaryTitle"];
  $diaryContent = $_POST["diaryContent"];
  $diary = "INSERT INTO diary (id, title, content) VALUES ('Default', '$diaryTitle', '$diaryContent')";
  if (mysqli_query($connect, $diary)) {
    echo "Success";
    header("Location: ../views/pages/main/progress/index.php");
  }
}
?>
