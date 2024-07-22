<html>
<head>

    <title>Login and Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container login-container">
            <form action="data.php" method = "GET">
                <h1>Login</h1>
                <input type="email" placeholder="Email" name="Email" required />
                <input type="password" placeholder="Password" required />
                <button type="submit">Login</button>
                <span>Don't have an account? <a href="#" id="switch-to-signup">Sign Up</a></span>
            </form>
        </div>
        <div class="form-container signup-container">
            <form action="data2.php" method = "GET">
                <h1>Sign Up</h1>
                <input type="text" placeholder="Name" name="name" required />
                <input type="email" placeholder="Email" name="Email" required />
                <input type="password" placeholder="Password" required />
                <button type="submit">Sign Up</button>
                <span>Already have an account? <a href="#" id="switch-to-login">Login</a></span>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>