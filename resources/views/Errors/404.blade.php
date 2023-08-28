<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
            padding: 100px;
        }
        
        h1 {
            font-size: 72px;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 18px;
            margin-bottom: 40px;
        }
        
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>Oops! The page you are looking for doesn't exist.</p>
    <a href="{{ route('home') }}"><button>Go to Main Page</button></a>
</body>
</html>
