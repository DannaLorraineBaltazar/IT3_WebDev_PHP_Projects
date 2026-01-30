<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Junior Dev Onboarding</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background-color: lightblue;
            font-family: Arial, Helvetica, sans-serif;
        }

        .card {
            background-color: #eca6e7ff;
            width: 350px;
            padding: 25px;
            border-radius: 10px;

            box-shadow: 0 4px 12px rgba(0,0,0, 0.1);
            text-align: center;
        }

        .bio { 
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
        }

        ul li {
            background-color: #f0f2f5;
            margin: 5px 0;
            padding: 8px;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;

            background-color: #007bff;
            color: #ffffff;
        }

        button:hover { 
            background-color: #0056b3;
        }
    </style>
</head>
    
<body>
    <div class="card">
        <h1>Liza's Junior Software Engineer Card</h1>

        <p class="bio"> 
            Junior Software Engineer passionate about web development, problem-solving, and continuous learning.
        </p>

        <h3>Technical Skills</h3>
        <ul>
            <li>HTML & CSS</li>
            <li>JavaScript</li>
            <li>MySQL</li>
            <li>Git & GitHub</li>
        </ul>

        <button id="initBtn">Initialize System</button>

        <div class="system-info">
            <h3>Server Status: Online</h3>
            <p><strong>Date & Time: </strong> <?php echo date('F j, Y, g:i a'); ?></p>
            <p><strong>PHP Version: </strong> <?php echo phpversion(); ?></p>
        </div>
    </div>

    <script>
        document.getElementById("initBtn").addEventListener("click", function() {
            alert("Welcome to the team, Liza! System initialized successfully!");
        });
    </script>
</body>
</html>