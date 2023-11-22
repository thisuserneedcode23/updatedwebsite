<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeShop Signup</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="signup-container">
    <span class="coffee-icon">☕</span>
    <h2>Coffee Shop Sign Up</h2>
    <form action="signup.php" method="post" onsubmit="return validateForm()">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>

      <button type="submit">Sign Up</button>
    </form>

    <button onclick="redirectToHomepage()">Already have an account?</button>
  </div>

  <script>
    function validateForm() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
      }

      return true;
    }

    function redirectToHomepage() {
      window.location.href = "login.html";
    }
  </script>
</body>
</html>
