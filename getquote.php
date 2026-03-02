<?php
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Collect & sanitize
    $name    = trim($_POST['name'] ?? '');
    $contact = trim($_POST['contact'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $state   = trim($_POST['state'] ?? '');
    $city    = trim($_POST['city'] ?? '');
    $product    = trim($_POST['product'] ?? '');
    $msg     = trim($_POST['msg'] ?? '');

    // Validation
    if ($name && $contact) {

        // WhatsApp number (with country code, NO +)
        $whatsappNumber = "919058917286";

        // Build WhatsApp message
        $waMessage = "Hello Shradha Plywood, Provide me Quotation%0A%0A";
        $waMessage .= "Name: $name%0A";
        $waMessage .= "Contact: $contact%0A";
        $waMessage .= "Email: " . ($email ?: 'N/A') . "%0A";
        $waMessage .= "State: $state%0A";
        $waMessage .= "City: $city%0A";
        $waMessage .= "Product: $product%0A";
        $waMessage .= "Message: " . ($msg ?: 'N/A');

        // Redirect to WhatsApp
        header("Location: https://wa.me/$whatsappNumber?text=$waMessage");
        exit;

    } else {
        $successMsg = "❌ Please fill all required fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{font-family:Arial;background:#f6f6f6;}
.form-box{max-width:420px;margin:40px auto;background:#fff;padding:20px;border-radius:8px;}
input,select,textarea,button{width:100%;margin:8px 0;padding:10px;}
button{background:#25D366;color:#fff;border:none;font-size:16px;cursor:pointer;}
.success{background:#e6ffe6;color:#155724;padding:10px;margin-bottom:10px;border-radius:5px;}
.error{background:#ffe6e6;color:#721c24;padding:10px;margin-bottom:10px;border-radius:5px;}
</style>
</head>

<body>

<div class="form-box">

<?php if ($successMsg): ?>
  <div class="error"><?= $successMsg ?></div>
<?php endif; ?>

<h3>Contact Us</h3>

<form method="POST">

<input type="text" name="name" placeholder="Your Name *" required>

<input type="no" pattern="[0-9]*"  name="contact" placeholder="Contact Number *" required>

<input type="email" name="email" placeholder="Email (Optional)">

<input type="text" name="state" placeholder="Your State ">

<input type="text" name="city" placeholder="Your City">

<select name="product" required>
  <option value="">Select Product</option>
  <option>Plywood</option>
  <option>Boardwood</option>
  <option>Doors</option>
</select>


<textarea name="msg" placeholder="Message (Optional)"></textarea>

<button type="submit">Submit</button>

</form>
</div>

</body>
</html>
