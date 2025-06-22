<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cccd.css">
    <title>Document</title>
</head>

<body>
    <form action="insert_cccd.php" id="cccd" method="post">
        <h1>CC/DC Information</h1>
        <input type="hidden" name="cc_ID">

        <label for="cardNo">Card Number:</label>
        <input type="text" name="cardNo" id="cardNo" required /><br>

        <label for="NameOnCard">Name on Card:</label>
        <input type="text" name="nameOnCard" id="NameOnCard" required /><br>

        <label for="CVVNo">CVV Number</label>
        <input type="text" name="CVV" id="CVVNo" required /><br>

        <label for="expireDate">Expire Date</label>
        <input type="date" name="expire_date" id="expireDate" required /><br>

        <button type="submit">Pay Now</button>
        <section id="contact">
            <p>For more inquiries <a href="#">Contact Us</a></p>
        </section>
    </form>
    <script>
        document.getElementById("cccd").addEventListener("submit", function () {
           
            alert("Payment information submitted successfully!");

        
            var form = document.getElementById("cccd");

           
            var formData = new FormData(form);

          
            var xhr = new XMLHttpRequest();

            
            xhr.open("POST", "insert_cccd.php", true);

            
            xhr.onload = function () {
                if (xhr.status === 200) {
          
                    alert("Payment has been reserved successfully!");
                } else {
              
                    alert("Error: " + xhr.responseText);
                }
            };

            xhr.send(formData);
        });
    </script>
</body>

</html>