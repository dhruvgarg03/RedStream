<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "aloobhujia";
$dbname = "redstream_db";
if(isset($_POST['fndnr']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$bloodtype=$_POST['blood-type'];
$city=$_POST['city'];
$state=$_POST['state'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $qy1 = "INSERT INTO doner VALUES ('$name','$phone','$email','$bloodtype','$city','$state')";
    $stmt=mysqli_query($conn,$qy1);
    if($stmt)
    {
      echo '<script>showPopup("Inserted successfully")</script>';
    }
    echo '<header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:redstream001@gmail.com" class="contact-link">redstream001@gmail.com</a>
          </li>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <a href="tel:+917558951351" class="contact-link">+91-7558-951-351</a>
          </li>
        </ul>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">Red Stream</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>
          
        </button>
      </div>
    </div>
  </header>';
$qy2="SELECT * from registered_users where bloodgroup='$bloodtype'";
$stmt1=mysqli_query($conn,$qy2);
if($stmt1)
{
    echo '<table><tbody><thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Blood Type</th>
        <th>City</th>
        <th>State</th>
    </tr>
</thead>';
while($result=mysqli_fetch_array($stmt1))
{
    // echo $result['name'].'<br><br>';
    // echo $result['PhoneNO'].'<br><br>';
    // echo $result['email'].'<br><br>';
    // echo $result['bloodgroup'].'<br><br>';
    // echo $result['district'].'<br><br>';
    // echo $result['state'].'<br><br>';
    echo '<tr>'.'<td>'.$result['name'].'</td>'.'<td>'.$result['PhoneNO'].'</td>'.'<td>'.$result['email'].'</td>'.'<td>'.$result['bloodgroup'].'</td>'.'<td>'.$result['district'].'</td>'.'<td>'.$result['state'].'</td>'.'</tr>';

       
}
echo '</tbody></table>';
echo '<footer class="footer">
<div class="footer-top section">
  <div class="container">
    <div class="footer-brand">
      <a href="#" class="logo">Red Stream</a>
      <p class="footer-text">
        We are passionate about connecting blood donors with recipients and bridging the gap in the healthcare industry. 
        We strive to create a community that fosters empathy, support, and solidarity among individuals who are committed to making a difference.
      </p>
      <div class="schedule">
        <div class="schedule-icon">
          <ion-icon name="time-outline"></ion-icon>
        </div>
        <span class="span">
          24 X 7:<br>
          365 Days
        </span>
      </div>
    </div>
    <ul class="footer-list">
      <li>
        <p class="footer-list-title">Other Links</p>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">Home</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">Find donor</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">About us</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">Blog</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">Contact</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">Login / Register</span>
        </a>
      </li>
    </ul>
    <ul class="footer-list">
      <li>
        <p class="footer-list-title">Our Services</p>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">xxxxxxxxx</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">xxxxxxxxx</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">xxxxxxxxx</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">xxxxxxxxx</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">xxxxxxxxx</span>
        </a>
      </li>
      <li>
        <a href="#" class="footer-link">
          <ion-icon name="add-outline"></ion-icon>
          <span class="span">xxxxxxxxx</span>
        </a>
      </li>
    </ul>
    <ul class="footer-list">
      <li>
        <p class="footer-list-title">Contact Us</p>
      </li>
      <li class="footer-item">
        <div class="item-icon">
          <ion-icon name="location-outline"></ion-icon>
        </div>
        <a href="https://goo.gl/maps/BYA5MxQUg5B8ZFLcA">
        <address class="item-text">
          Near Thaluk Headquarters,<br>
          Vaikom, Kottayam, Kerala IN
        </address>
      </a>
      </li>
      <li class="footer-item">
        <div class="item-icon">
          <ion-icon name="call-outline"></ion-icon>
        </div>
        <a href="tel:+917052101786" class="footer-link">+91-7558-951-351</a>
      </li>
      <li class="footer-item">
        <div class="item-icon">
          <ion-icon name="mail-outline"></ion-icon>
        </div>
        <a href="mailto:help@example.com" class="footer-link">redstream001@gmail.com</a>
      </li>
    </ul>
  </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <p class="copyright">
      &copy; 2024 All Rights Reserved by Red Stream
    </p>
    <ul class="social-list">
      <li>
        <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/Annabel07785340" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>
    </ul>
  </div>
</div>
</footer>';
}
$conn->close();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donarinfo</title>
    <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

<!--css-->
<link rel="stylesheet" href="./assets/css/style.css">


<!-- google font link-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
    <style>

        header {
            background-color: #001f3f;
        }

body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            margin: 0;
            padding: 0;
            /* display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center; */
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 200px;
            margin-left: 100px;
            margin-bottom: 200px;
            /* text-align: center; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #001f3f;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
          /* .popup {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background: linear-gradient(135deg, #ffffff, #a3d2ee);
      color: #0e254e;
      font-size: 16px;
      z-index: 9999;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    } */
    </style>
</head>
<body id="top">

<!-- <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="contact-list">
          <li class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <a href="mailto:redstream001@gmail.com" class="contact-link">redstream001@gmail.com</a>
          </li>
          <li class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <a href="tel:+917558951351" class="contact-link">+91-7558-951-351</a>
          </li>
        </ul>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://youtu.be/Af0gk_kiGac" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">Red Stream</a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="index.php" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="#pp" class="navbar-link" data-nav-link>Find donor</a>
            </li>
            <li>
              <a href="#about" class="navbar-link" data-nav-link>About Us</a>
            </li>
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
            <li>
              <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>
        <a href="register.php" class="btn">Login / Register</a>
        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>
      </div>
    </div>
  </header> -->


  






  <!-- <footer class="footer">
    <div class="footer-top section">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">Red Stream</a>
          <p class="footer-text">
            We are passionate about connecting blood donors with recipients and bridging the gap in the healthcare industry. 
            We strive to create a community that fosters empathy, support, and solidarity among individuals who are committed to making a difference.
          </p>
          <div class="schedule">
            <div class="schedule-icon">
              <ion-icon name="time-outline"></ion-icon>
            </div>
            <span class="span">
              24 X 7:<br>
              365 Days
            </span>
          </div>
        </div>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Other Links</p>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Home</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Find donor</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">About us</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Blog</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Contact</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">Login / Register</span>
            </a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Our Services</p>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">xxxxxxxxx</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">xxxxxxxxx</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">xxxxxxxxx</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">xxxxxxxxx</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">xxxxxxxxx</span>
            </a>
          </li>
          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>
              <span class="span">xxxxxxxxx</span>
            </a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <a href="https://goo.gl/maps/BYA5MxQUg5B8ZFLcA">
            <address class="item-text">
              Near Thaluk Headquarters,<br>
              Vaikom, Kottayam, Kerala IN
            </address>
          </a>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <a href="tel:+917052101786" class="footer-link">+91-7558-951-351</a>
          </li>
          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <a href="mailto:help@example.com" class="footer-link">redstream001@gmail.com</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 All Rights Reserved by Red Stream
        </p>
        <ul class="social-list">
          <li>
            <a href="https://www.facebook.com/andro.pool.54?mibextid=ZbWKwL" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_vladimir_putin.___/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/Annabel07785340" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer> -->

    




  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>
</html>