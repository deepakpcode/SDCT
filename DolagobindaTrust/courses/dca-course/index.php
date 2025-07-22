<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="../../components/nav.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../components/footer.css">
    <link rel="stylesheet" href="../courses.css">
    <title>DCA Course</title>
</head>
<body>
<?php 
       include("../../components/nav.php");
    ?>
    
    <!-- DCA Course Section -->
    <section id="programs">
        <div class="headings">
            <h2>DCA Course</h2>
            <p>A Diploma in Computer Applications (DCA) is a short-term academic or vocational program designed to teach foundational concepts of computer applications and information technology. The course is widely chosen by individuals aiming to gain computer literacy, improve their technological skills, or pursue entry-level jobs in the IT and administrative sectors.</p>
        </div>
        <div class="course-container">
            <div class="course-details">
                <div>
                    <h3>Eligibility</h3>
                    <ul>
                        <li><i class="fa-solid fa-check"></i> 10th Grade (high school) or Equivalent.</li>
                        <li><i class="fa-solid fa-check"></i> Age between 15 to 40 years</li>
                        <li><i class="fa-solid fa-check"></i> Must have personal computer or laptop</li>
                    </ul>
                </div>
                
                <h4>Course Duration: 1.5 Month</h4>

                <div>
                    <h3>Course Content</h3>
                    <h4>1. Fundamentals of Computer</h4>
                    <h4>2. MS Windows</h4>
                    <h4>3. MS Word</h4>
                    <h4>4. MS Excel</h4>
                    <h4>5. MS Powerpoint</h4>
                    <h4>6. Internet</h4>
                    <h4>7. Typing</h4>
                </div>
                <div class="course-date">
                    <i class="fa-solid fa-calendar-days"></i><h5> Application Deadline: <span>10th May '25</span></h5>
                </div>
                <div>
                    <h3>How You will Get DCA Certificate</h3>
                    <ul>
                        <li>Step 1- Enroll our course for Certification.</li>
                        <li>Step 2- We will contact you for confirmation.</li>
                        <li>Step 3- Join us online for practical based study.</li>
                        <li>Step 4- You must have 80% attendance.</li>
                        <li>Step 5- Final Assignment and Viva.</li>
                    </ul>
                </div>
            </div>
            <div class="course-form">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Enroll Now</h3>

                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    <div class="input-row">
                        <input type="number" id="age" name="age" placeholder="Enter your age" min="15" max="40" required>

                        <select id="gender" name="gender" required>
                            <option value="">-- Select Gender --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required pattern="[0-9]{10}">

                    <input type="text" id="state" name="state" placeholder="Enter your state" required>

                    <input type="text" id="city" name="city" placeholder="Enter your city" required>

                    <label for="certificate">Upload Matric Certificate (PDF, PNG)*</label>
                    <input type="file" id="certificate" name="certificate" accept=".pdf,.doc,.docx" required>

                    <label for="photo">Upload Photo (JPG, PNG)*</label>
                    <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" required>

                    <input type="submit" value="Submit" class="btn">
                </form>
            </div>
        </div>
    </section>
    <!-- DCA Course Section end -->
    
    <?php 
       include("../../components/footer.php");
    ?>
    

    <script src="../script.js"></script>
</body>
</html>