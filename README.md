# QR Code Generator

A web-based tool that generates QR codes for:
1. Contact information (vCard format)
2. Website URLs

## Features

- **vCard QR Code Generator**
  - Creates scannable contact cards that can be saved directly to phone contacts
  - Supports all standard vCard fields (name, organization, phone numbers, email, address, etc.)
  - Responsive design works on all devices

- **URL QR Code Generator**
  - Generates QR codes for any website URL
  - Automatically adds HTTPS protocol if not specified
  - Creates clean, high-resolution QR codes

- **Common Features**
  - Download QR codes as high-resolution PNG images
  - Simple, intuitive interface
  - Client-side processing (no server required)
  - Built with Bootstrap for professional styling

## Live Demos

[View Live Demo for vCard](https://qr-code-generator-19h.pages.dev/vcard)
[View Live Demo for URL](https://qr-code-generator-19h.pages.dev/url)


## Installation

No installation required - these are client-side HTML/JS applications that can run directly in a browser.

To use locally:
1. Clone this repository or download the HTML files
2. Open either `vcard.html` or `url.html` in any modern web browser

## Usage

### vCard QR Code Generator

1. Fill in the contact information form (first name and mobile number are required)
2. Click "Generate QR Code"
3. Scan the QR code with a smartphone to save the contact
4. Click "Download QR Code" to save as a PNG image

### URL QR Code Generator

1. Enter the website URL (e.g., "example.com" or "https://example.com")
2. Click "Generate QR Code"
3. Scan the QR code with any QR scanner to visit the website
4. Click "Download QR Code" to save as a PNG image

## Technical Details

- **Frontend Framework**: Bootstrap 5
- **QR Code Library**: QRCode.js
- **Dependencies**:
  - jQuery (for DOM manipulation)
  - Bootstrap JS
- **Browser Support**: All modern browsers (Chrome, Firefox, Safari, Edge)

## Customization

You can easily customize:
- QR code colors by modifying the `colorDark` and `colorLight` parameters
- Size by changing the `width` and `height` values
- Form fields by editing the HTML form elements

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements.


## Credits

- QRCode.js by davidshimjs
- Bootstrap for responsive design components
- jQuery for simplified JavaScript
