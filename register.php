<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="loginstyle.css">
  <title>Travel In India Website</title>
</head>
<body>
    <nav>
        <div class="icon">
            <a href="login.php"> <i  class="fa-sharp fa-regular fa-circle-left"></i></a>
           
        </div>
        <div class="logo">
            <h1>Travel.Com</h1>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="popular_places.php">Popular Places</a></li>
            <li><a href="packages.php">Packages </a></li>
            <li><a href="gallary.php">Gallary</a></li>

            <li><a href="booking.php">Booking</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>

        <div class="icon">
            <input type="text" value="" placeholder="Search..." >
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->

        </div>
        <div class="icon">
            <a href="index.php"><i class="fa-sharp fa-regular fa-circle-right"></i></a>
            
        </div>
    </nav>
    <section>
        
        <div class="form-box">
            <div class="form-value">
                <form action="register_action.php" method="post">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person"></ion-icon>
                        <input type="text" placeholder="Your username" name="name">
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" placeholder="Your email" name="email">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" placeholder="Your password" name="password">
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox" >I agree to the terms & conditions</label>
                      
                    </div>
                    <div class="register">
                    <input type="submit" name="Submit" value="Register" class="order_btn">
                </div>
                    <div class="login">
                        <p>Already have an account <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>