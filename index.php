<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="#home_sec">Home</a></li>
            <li><a  href="#features_sec">features</a></li>
            <li><a href="#about_sec">about</a></li>
            <li><a  href="#foot_sec">contact</a></li>
        </ul>
    </nav>
    <section class="main" id="home_sec">
        <div class="box_A">
            <h1>The sparks bank</h1>
            <p class="para"> Smart Banking for the Good Life ! Helping You Make Smart Financial Choices</p>
        </div>
        <div class="options">
            <div class="box" onclick="location.href='customers.php';" style="cursor: pointer;">
                <img src="images/rating.png" alt="customers">
                <a>All Customers</a>
            </div>
            <div class="box" onclick="location.href='transfer.php';" style="cursor: pointer;">
                <img src="images/money-transfer.png" alt="transfer">
                <a>Transfer Money</a>
            </div>
            <div class="box" onclick="location.href='history.php';" style="cursor: pointer;">
                <img src="images/transaction-history.png" alt="history">
                <a>Transaction History</a>
            </div>
        </div>
    </section>
    <section class="features" id="features_sec">
         <div class="feature_box">
             <img src="images/rupee.png" alt="rupee">
             <p>Personal Loan</p>
         </div>
         <div class="feature_box">
             <img src="images/car.png" alt="car">
             <p>Car Loan</p>
         </div>
         <div class="feature_box">
             <img src="images/house.png" alt="house">
             <p>Home Loan</p>
         </div>
         <div class="feature_box">
             <img src="images/money-bag.png" alt="bag">
             <p>Emergency Savings</p>
         </div>
    </section>
    <section class="about" id="about_sec">
        <div class="about_box">
            <p>The Sparks Bank is a worlwide bank . TSB provides its customers an extreme and wide range of schemes
                and opportunities for them to grow personally and professionally with less amount of interests 
                and more amount of profit.
            </p>
            <p>TSB bank is ranked as worlds No.1 bank for 7 consecutive years.</p>
            <p>With 33,767 branches worlwide we serve the highest number of customers.</p>
        </div>
    </section>
    <footer class="foot" id="foot_sec">
            <div class="info">
                <p>Creator: Faisal Momin</p>
                <p>Task: Bank System</p>
                <p>Copyrigt&#169SparksBank</p>
                <p>All Rights Reserved</p>
            </div>
            <div class="connect">
                <p>Connect Us on</p>
                <img class="social" src="images/facebook.png" alt="facebook" >
                <img class="social" src="images/twitter.png" alt="twitter" >
                <img class="social" src="images/instagram.png" alt="instagram">
                <img class="social" src="images/snapchat.png" alt="snapchat">
            </div>
    </footer>

</body>
</html>