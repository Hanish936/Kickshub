<?php
$apikey = "rzp_test_VMai7ExxolkM7e";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    echo "Payment details for: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
}
?>
<form action="" method="POST">
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $apikey; ?>"
        data-amount="100"
        data-currency="INR"
        data-id="<?php echo 'OID' . rand(10, 100) . 'END'; ?>"
        data-buttontext="Pay with Razorpay"
        data-name="Kickshub"
        data-description="Kickshub shoe collection"
        data-image="https://example.com/your_logo.jpg"
        data-prefill.name="<?php echo $_POST['name']; ?>"
        data-prefill.email="<?php echo $_POST['email']; ?>"
        data-prefill.contact="<?php echo $_POST['phone']; ?>"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" custom="Hidden Element" name="hidden">
</form>
