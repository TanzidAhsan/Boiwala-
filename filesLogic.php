<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'boi');
$sql = "select * from files";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Downloads files
if (isset($_GET['file_id'])) {
$id = $_GET['file_id'];



// fetch file to download from database
$sql = "select * from files where id = $id";
$result = mysqli_query($conn, $sql);

$file = mysqli_fetch_assoc($result);
$filepath = 'uploads/' . $file['name'];
if (file_exists($filepath)) {
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($filepath));
header('Expires: 0');
 header('Cache-Control: must-revalidate');
 header('Pragma: public');
header('Content-Length: ' . filesize('uploads/' . $file['name']));
readfile('uploads/' . $file['name']);
$newCount = $file['downloads'] + 1;

$updateQuery = "update files SET downloads=$newCount WHERE id=$id";
mysqli_query($conn, $updateQuery);
exit;
}

}







if (isset($_POST['save'])) { 


$filename = $_FILES['myfile']['name'];

$destination = 'uploads/' . $filename;
$extension = pathinfo($filename, PATHINFO_EXTENSION);


$file = $_FILES['myfile']['tmp_name'];
$size = $_FILES['myfile']['size'];


if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg','txt'])) {
echo "You file extension must be .zip, .pdf , .docx or .txt";
} elseif ($_FILES['myfile']['size'] > 10000000) {
echo '<script>alert("File to large!")</script>' ;
} else {
 if (move_uploaded_file($file, $destination)) {
 $sql = "INSERT INTO files (name, size,downloads) VALUES ('$filename', $size, 0)";
if (mysqli_query($conn, $sql)) {
header('Location: indexpdf.php');
}
} else {
echo '<script>alert("Failed to upload file.")</script>' ;
}
}
}