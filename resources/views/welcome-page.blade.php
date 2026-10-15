<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
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
            margin-top: 10px;
        }
        .message {
            color: #16a34a;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome Page</h1>

        <form action="/greet" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}">
            <br>
            <button type="submit">Say Hello</button>
        </form>

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        @isset($name)
            <div class="message">Welcome, {{ $name }}!</div>
        @endisset
    </div>
</body>
</html>
