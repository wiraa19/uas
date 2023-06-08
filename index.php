<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

.login-container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid transparent;
}
.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 40px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #f88f01;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #db7d02;
}

body {
  background:url(/gambar/kereta_api.jpg);
        background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment:fixed;
            height: 100%;
            width: 100%;
}

.container {
  background-color: rgba(255, 255, 255, 0.9);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

h1 {
  color: #000000;
}

label {
  color: #000000;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  background-color: rgba(255, 255, 255, 0.7);
  border: none;
  color: #333;
}

input[type="submit"] {
  background-color: #f88f01;
}

input[type="submit"]:hover {
  background-color: #db7d02;
}

</style>
</head>
 <body>
<div class="from">
    <div class="container-text">
        <span>
            <h1>Penjadwalan kereta api </h1>
    </span>
    </div>
    <div class="container">
    <h1>SIGN UP</h1>
    <form action="data_login.php" method="post">
<div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required min-length="6">
      </div>
      <input type="submit" value="Sign Up">
    </form>
  </div>
</body>
</html>