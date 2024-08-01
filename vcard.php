<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Free vCard QR Code Generator - Create & Download vCard QR Codes Online</title>
<meta name="description" content="Create and download free vCard QR codes with our easy-to-use online generator. Perfect for sharing contact details, enhancing business networking, and improving personal branding.">

<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<main>     
<h2>Generate vCard QR Code</h2>
<form method="POST" action="" enctype="multipart/form-data">
<div class="full-width">
<label for="first_name">First Name:</label>
<input type="text" id="first_name" name="first_name" required><br>
</div>

<div class="full-width">
<label for="last_name">Last Name:</label>
<input type="text" id="last_name" name="last_name" required><br>
</div>

<div class="full-width">
<label for="organization">Organization:</label>
<input type="text" id="organization" name="organization" required><br>
</div>

<div class="full-width">
<label for="position">Position:</label>
<input type="text" id="position" name="position" required><br>
</div>

<div class="full-width">
<label for="work_phone">Work Phone Number:</label>
<input type="text" id="work_phone" name="work_phone" required><br>
</div>

<div class="full-width">
<label for="mobile_phone">Mobile Phone Number:</label>
<input type="text" id="mobile_phone" name="mobile_phone" required><br>
</div>

<div class="full-width">
<label for="email">Email:</label>
<input type="email" id="email" name="email" required><br>
</div>

<div class="full-width">
<label for="website">Website:</label>
<input type="text" id="website" name="website"><br>
</div>

<div class="full-width">
<label for="street">Street Address:</label>
<input type="text" id="street" name="street" required><br>
</div>

<div class="full-width">
<label for="city">City:</label>
<input type="text" id="city" name="city" required><br>
</div>

<div class="full-width">
<label for="state">State:</label>
<input type="text" id="state" name="state" required><br>
</div>

<div class="full-width">
<label for="zip">Zip:</label>
<input type="text" id="zip" name="zip" required><br>
</div>

<div class="full-width">
<label for="country">Country:</label>
<input type="text" id="country" name="country" required><br>
</div>

<div class="full-width">
<button type="submit">Generate vCard QR Code</button>
</div>
</form>

<?php
// Include the phpqrcode library
include('phpqrcode/qrlib.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Handle vCard QR code generation
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$organization = $_POST['organization'];
$position = $_POST['position'];
$work_phone = $_POST['work_phone'];
$mobile_phone = $_POST['mobile_phone'];
$email = $_POST['email'];
$website = $_POST['website'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];

// Create vCard data
$vcard = "BEGIN:VCARD\n";
$vcard .= "VERSION:3.0\n";
$vcard .= "FN:$first_name $last_name\n";
$vcard .= "N:$last_name;$first_name\n";
$vcard .= "ORG:$organization\n";
$vcard .= "TITLE:$position\n";
$vcard .= "TEL;WORK:$work_phone\n";
$vcard .= "TEL;CELL:$mobile_phone\n";
$vcard .= "EMAIL:$email\n";
$vcard .= "URL:$website\n";
$vcard .= "ADR;TYPE=WORK:;;$street;$city;$state;$zip;$country\n";
$vcard .= "END:VCARD";

// Generate a unique filename
$output_file = 'qr_codes/' . uniqid() . '.png';

// Ensure the directory exists
if (!file_exists('qr_codes')) {
mkdir('qr_codes', 0777, true);
}

// Generate the QR code with a larger size
$qr = new QRcode();
$qr->png($vcard, $output_file, QR_ECLEVEL_L, 10); // Size 10 for larger QR code

echo "<p>vCard QR code generated successfully.</p>";
echo "<a href='download.php?file=$output_file' download>Download vCard QR Code</a>";
echo "<br>";
echo "<img src='$output_file' alt='vCard QR Code' style='width:300px; height:300px;'>"; // Display a larger image
}
?>
</main>    
</body>
</html>
