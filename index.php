<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }
    form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    input {
      margin: 10px;
      padding: 10px;
      width: 200px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <form method="POST" action="submit.php">
    <h2>Enter Your Details</h2>
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
