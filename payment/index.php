<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/favicon.jpg">
    <link rel="stylesheet" href="../courses/courses.css">
    <link rel="stylesheet" href="./payment.css">
    <title>Donate for Course</title>
</head>
<body>
    <section id="payment-section">
        <div class="logo">
            <img src="../images/dolagobinda-logo.webp" alt="">
        </div>
        
        <div class="course-container">
            <div class="course-details">
                <div>
                    <h3>Thank you for enroll in our course.<br> Please complete the payment.</h3>
                    <br>
                    <ul>
                        <li>Call Us: +91 9439942450</li>
                        <li>Mail Us: sdct.official@gmail.com</li>
                    </ul>
                </div>
                

                <div>
                    <h4>Terms & Conditions:</h4>
                    <br>
                    <ul>
                        <li>1. Enroll, who meet the course eligibility criteria.</li>
                        <li>2. After course start, donation are non-refundable.</li>
                        <li>3. Students will receive a confirmation message upon successful payment.</li>
                        <li>4. We can modify the course schedule, content, or trainer without prior notice.</li>
                        <li>5. Students are responsible for internet connection and working computer systems.</li>
                    </ul>
                    <div class="instamojo-logo">
                        <p>Payment Gateway:</p>
                        <img src="../images/instamojo-logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="course-form">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Payment Details</h3>
                    <br><br>
                    <div>
                        <p>Amount</p>
                        <input type="number" id="name" name="amount" value="999" required>
                    </div>
                    <div>
                        <p>Course</p>
                        <input type="text" id="name" name="course" value="DCA" required>
                    </div>
                    <div>
                        <p>Student Name</p>
                        <input type="text" id="state" name="name" value="Deepak Panda" required>
                    </div>
                    <div>
                        <p>Phone Number</p>
                        <input type="tel" id="phone" name="phone" value="7978981899" required pattern="[0-9]{10}">
                    </div>
            
                    <input type="submit" value="Donate ₹999" class="btn">
                </form>
            </div>
        </div>
        
    </section>

</body>
</html>