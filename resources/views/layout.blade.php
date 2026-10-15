<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 320px;
        }
        h1 {
            margin-top: 0;
            color: #333333;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            font-size: 16px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #3b82f6;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2563eb;
        }
        .error {
            color: #dc2626;
            margin-bottom: 12px;
            font-size: 14px;
        }
        .error p {
            margin: 4px 0;
        }
        .message {
            color: #16a34a;
            font-size: 20px;
            margin: 20px 0;
        }
        .link {
            margin-top: 20px;
            font-size: 14px;
            color: #555555;
        }
        a {
            color: #3b82f6;
        }
    </style>
</head>
<body>
    <div class="card">
        @yield('content')
    </div>
</body>
</html>
