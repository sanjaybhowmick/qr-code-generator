<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Free Online URL QR Code Generator - Create & Download QR Codes Instantly</title>
<meta name="description" content="Generate and download free URL QR codes instantly with our easy-to-use online QR code generator. Perfect for sharing links, boosting marketing efforts, and enhancing user engagement.">

<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<main> 
<h2>Generate URL QR Code</h2>
<form method="POST" action="" enctype="multipart/form-data">
<div class="full-width">
<label for="url">Enter URL:</label>
<input type="text" id="url" name="url" required>
</div>

<div class="full-width">
<button type="submit">Generate QR Code</button>
</div>
</form>
<?php
// Include the phpqrcode library
include('phpqrcode/qrlib.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the URL from the form
$url = $_POST['url'];

// Generate a unique filename
$output_file = 'qr_codes/' . uniqid() . '.png';

// Ensure the directory exists
if (!file_exists('qr_codes')) {
mkdir('qr_codes', 0777, true);
}

// Generate the QR code with a larger size
$qr = new QRcode();
$qr->png($url, $output_file, QR_ECLEVEL_L, 10); // Size 10 for larger QR code

echo "<p>QR code generated successfully.</p>";
echo "<a href='download.php?file=$output_file' download>Download QR Code</a>";
echo "<br>";
echo "<img src='$output_file' alt='QR Code' style='width:300px; height:300px;'>"; // Display a larger image
}
?>
</main> 

</body>
</html>
