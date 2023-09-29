<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #4e54c8, #8f94fb);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10;
        }

        h1 {
            font-size: 28px;
            text-align: center;
        }

        form {
            background: linear-gradient(to bottom, #667eea, #764ba2);
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 5.5px;
            margin-bottom: 15px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.8);
        }

        input[type="submit"] {
            background: #4e54c8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #764ba2;
        }
    </style>
</head>
<body>
    <div>
        <h1>Sign Up</h1>
        <form action="insert.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Age:</label>
            <input type="number" name="age"><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
