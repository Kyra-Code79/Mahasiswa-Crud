<?php
include 'koneksi.php';

// Get the image name or another attribute to identify the image
$imageName = $_GET['name']; // Replace with your method to get the image attribute

$query = "SELECT photo FROM biodata WHERE nama = '$imageName'"; // Modify the query as needed

$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Set the appropriate content type (e.g., "image/jpeg", "image/png")
    header("Content-type: image/jpeg"); // Modify to match the image type

    // Decode and output the base64-encoded image data
    echo base64_decode($row['photo']);
} else {
    // Handle the case when the image is not found
    echo "Image not found.";
}

mysqli_close($conn);
