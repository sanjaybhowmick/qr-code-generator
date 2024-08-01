## Generate QR Code using PHP

### Instructions:

    **Download the Library:**
    
        Download the library from [phpqrcode GitHub](https://github.com/t0k4rt/phpqrcode).

    ** Include the Library: **
        Extract the downloaded library and place it in your project directory.
        Modify the include('path/to/phpqrcode/qrlib.php'); line to the correct path where you have placed the qrlib.php file.

    ** Create the Directory for QR Codes: **
        Ensure the qr_codes directory exists and is writable by the web server. The script will create the directory if it doesn't exist.

    ** Create the Download Script: **
        Save the download.php script in the same directory as your main files.

### Explanation:

    ** URL(url.php): **
        1. This setup allows users to input a URL, generate the corresponding QR code, view it on the webpage, download it, and then automatically delete the file from the server.
        2. The form includes field for URL.
        3. Handles form submissions for URL QR code generation.
        4. Generates a larger QR code image (size 10) and saves it.
        5. Displays the generated QR code image.
        6. Provides a link to download the QR code image.

    ** vCard(vcard.php): **
        1. This setup allows users to input vCard information, generate the corresponding QR code, view it on the webpage, download it, and then automatically delete the file from the server.
        2. The form includes fields for First Name, Last Name, Organization, Position, Work Phone Number, Mobile Phone 3. Number, Email, Website, Street Address, City, State, Zip, and Country.
        4. Handles form submissions for generating vCard QR code.
        5. Generates a larger QR code image (size 10) and saves it.
        6. Displays the generated QR code image.
        7. Provides a link to download the QR code image.

    ** PHP Script (download.php): **
        1. Handles the file download.
        2. Deletes the file after it has been downloaded.


### Demo:

[URL](https://www.blbwd.com/qr/url.php) | [vCard](https://www.blbwd.com/qr/vcard.php)