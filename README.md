<h1>iSchool E-Learning Web App</h1>

https://github.com/user-attachments/assets/c8e087fa-0888-47c3-9b75-42a6fb82b891


<h2>Introduction</h2>
<p>The <strong>iSchool E-Learning</strong> web application is a comprehensive online learning platform designed to facilitate seamless education delivery. It provides users with an interactive learning experience, enabling course enrollment, feedback submission, and secure payments. The application features an intuitive admin panel for managing content and user data efficiently.</p>

<h2>Features</h2>
<ul>
    <li><strong>User Authentication</strong>: Secure login and logout functionality.</li>
    <li><strong>User Registration</strong>: Simple and quick signup process.</li>
    <li><strong>Feedback System</strong>: Allows users to submit feedback on courses and platform experience.</li>
    <li><strong>Course Enrollment</strong>: Users can browse and enroll in available courses.</li>
    <li><strong>Payment Gateway Integration</strong>: Integrated with Paytm for secure payments.</li>
    <li><strong>Admin Panel</strong>: Manages users, courses, and payments effectively.</li>
    <li><strong>Database Management</strong>: Stores and retrieves user and course information efficiently.</li>
    <li><strong>Contact Form</strong>: Provides users with an easy way to reach out for support.</li>
</ul>

<h2>Technologies Used</h2>
<ul>
    <li><strong>Frontend</strong>: HTML, CSS, JavaScript, jQuery, Bootstrap</li>
    <li><strong>Backend</strong>: PHP, MySQL (for database management)</li>
    <li><strong>Payment Gateway</strong>: Paytm Integration</li>
</ul>

<h2>Setup Instructions</h2>
<pre>
# Clone the repository
git clone https://github.com/your-repo/ischool-e-learning.git
cd ischool-e-learning

# If using Composer for PHP dependencies
composer install  

# If using Node.js for frontend dependencies
npm install  
</pre>

<h2>Database Setup</h2>
<pre>
CREATE DATABASE ischool_db;
USE ischool_db;
SOURCE database.sql;
</pre>

<h2>Starting a Local Server</h2>
<pre>
php -S localhost:8000  # Using PHP built-in server
</pre>
<p>Or using XAMPP, ensure Apache and MySQL services are running.</p>

<h2>Database Connection in PHP</h2>
<pre>
$conn = new mysqli("localhost", "root", "", "ischool_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
</pre>

<h2>AJAX Call for Login Request</h2>
<pre>
$.ajax({
    url: "login.php",
    type: "POST",
    data: {email: userEmail, password: userPassword},
    success: function(response) {
        if (response == "success") {
            window.location.href = "dashboard.php";
        } else {
            alert("Invalid credentials!");
        }
    }
});
</pre>

<h2>CSS Bootstrap Example</h2>
<pre>
&lt;button class="btn btn-primary"&gt;Enroll Now&lt;/button&gt;
</pre>

<h2>Paytm Payment Gateway Integration</h2>
<pre>
require_once("../PaytmKit/lib/config_paytm.php");
require_once("../PaytmKit/lib/encdec_paytm.php");
</pre>
