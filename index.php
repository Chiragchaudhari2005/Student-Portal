<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
        }
        .section {
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }
        .info {
            font-size: 0.9em;
            color: #666;
            border: 1px dashed #ccc;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to the Student Portal</h1>
    <p>This is your personalized dashboard for managing your academic journey.</p>
    
    <div class="info">
        <?php
            // This PHP code snippet demonstrates that the server-side runtime is active.
            // It gets and displays the current date and time.
            date_default_timezone_set('Asia/Kolkata'); // Set to your local timezone
            echo "Current Server Date and Time: " . date("Y-m-d H:i:s");
        ?>
    </div>

    <div class="section">
        <h2>Course Enrolments</h2>
        <p>View and manage the courses you are currently enrolled in.</p>
        <ul>
            <li>Data Science Fundamentals</li>
            <li>Web Development Bootcamp</li>
        </ul>
        <a href="#">Go to Enrolment Section</a>
    </div>

    <div class="section">
        <h2>Attendance</h2>
        <p>Track your attendance for all your courses.</p>
        <p><em>(Attendance data would be displayed here.)</em></p>
        <a href="#">View My Attendance Report</a>
    </div>
    
    <div class="section">
        <h2>Schedules</h2>
        <p>View your class schedules and important deadlines.</p>
        <p><em>(Schedule calendar would be displayed here.)</em></p>
        <a href="#">Check My Schedule</a>
    </div>

</div>

</body>
</html>