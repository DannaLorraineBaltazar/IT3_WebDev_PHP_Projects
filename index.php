<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboarding Profile - Junior Dev</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #ffeef2; /* pastel pink background */
            font-family: Arial, sans-serif; /* clean body font */
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 16px rgba(0,0,0,0.1);
            text-align: center;
            width: 380px;
            border: 2px solid #f8cdd4;
        }

        h1 {
            font-family: 'Dancing Script', cursive; /* girly heading font */
            font-size: 30px;
            color: #333;
            margin-bottom: 8px;
        }

        .bio {
            font-style: italic;
            color: #555;
            margin-bottom: 15px;
        }

        h3 {
            color: #444;
            margin-bottom: 8px;
            text-align: left;
        }

        ul {
            text-align: left;
            margin: 0 0 20px 0;
            padding-left: 20px;
        }

        ul li {
            margin: 4px 0;
            color: #333;
        }

        #initBtn {
            background-color: #f8cdd4; /* pastel pink button */
            color: #333;
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
            font-family: Arial, sans-serif;
        }

        #initBtn:hover { background-color: #f4b6c2; }

        .system-info {
            margin-top: 20px;
            padding: 15px;
            border-left: 4px solid #f8cdd4;
            background: #fff0f5;
            border-radius: 8px;
            font-size: 14px;
            color: #444;
        }

        .system-info h3 {
            text-align: center; /* only the heading is centered */
            margin-bottom: 12px;
        }

        .system-info p {
            text-align: left; /* details stay aligned left */
            margin: 4px 0;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Junior Software Engineer</h1>
        <p><strong>Name:</strong> Danna Lorraine Baltazar</p>
        <p class="bio">"Ready to learn PHP and MySQL this semester!"</p>

        <h3>Current Tech Stack:</h3>
        <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript (Basics)</li>
            <li>XAMPP Environment</li>
        </ul>

        <button id="initBtn">Initialize System</button>

        <div class="system-info">
            <h3>Server Information</h3>
            <p><strong>Server Status:</strong> Online</p>
            <p><strong>Server Date:</strong> <?php echo date('l, F j, Y'); ?></p>
            <p><strong>Server Time:</strong> <?php echo date('g:i A'); ?></p>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
        </div>
    </div>

    <script>
        document.getElementById('initBtn').addEventListener('click', function() {
            alert('Welcome to the team, Danna! System Initialized.');
        });
    </script>

</body>
</html>