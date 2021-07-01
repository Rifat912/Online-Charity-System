<?php 
session_start();
$Amount = $_SESSION['Amount'];
?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var myamt= "<?php echo"$Amount"?>";
var options = {
	
    "key": "rzp_test_haRHQnStrU78a7", // Enter the Key ID generated from the Dashboard
	//var amt = sessionStorage.getItem("amt");
	
    "amount": myamt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    
    "handler": function (response){
        //console.log(resonse);
		var a=alert("Thank you for help");
		if(a){window.location.href="Home1.php";
		}
		else{window.location.href="index2.php";
		}
    },
    
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
//document.getElementById('save1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
prompt("Thank you for help");
</script>