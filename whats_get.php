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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.form-box{max-width:300px;margin:0px;background:#fff;padding:0px;border-radius:10px;}
input,select,textarea,button{width:100%;margin:4px 0;padding:2px 10px;font-size:12px;color:#7e2f3a;font-weight:500;}
button{background:#25D366;color:#fff;border:none;font-size:15px;cursor:pointer;}
.success{background:#e6ffe6;color:#155724;padding:10px;margin-bottom:10px;border-radius:5px;}
.error{background:#ffe6e6;color:#721c24;padding:10px;margin-bottom:10px;border-radius:5px;}
</style>


</head>
<body>

<a href="#"><i class="fa-solid fa-note-sticky" style="font-size:40px;color:#7e2f3a;bottom:140px;right:0px;position:fixed;z-index:999999" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i></a>

<a href="#"><i class="fa-brands fa-whatsapp" style="font-size:40px;color:#7e2f3a;bottom:100px;right:0px;position:fixed;z-index:999999"></i></a>


<!----Popup Box-->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" style="border:2px solid red;max-width:300px;position:fixed;bottom:9vh;right:60px">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

<div class="form-box" id="staticBackdrop">

<?php if ($successMsg): ?>
  <div class="error"><?= $successMsg ?></div>
<?php endif; ?>
<h4 style="color: #7e2f3a;letter-spacing:3px">GetQuote</h4>

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




      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->


    </div>
  </div>
</div>





<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!--Bootstrap Script-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>