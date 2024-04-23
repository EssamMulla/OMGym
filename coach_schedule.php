<!-- Save this as index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Our Website</title>
<style>
    body {
        font-family: Arial, sans-serif;
        color: black;
        text-align: center;
		background-color: #FFFFF0;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
		color: white;
        padding: 0em;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .navbar ul {
        list-style: none;
        display: flex;
        gap: 1em;
        margin: 0;
        padding: 0;
    }
    .navbar ul li {
        padding: 0.5em 1em;

    }
    .navbar ul li a {
        text-decoration: none;
        color: black;
    }
    .content {
        background-image: url('background.JPEG');
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 350px;
    }
    .logo {
        display: flex;
        align-items: center;
        gap: 0.5em;
    }
    .logo img {
        height: 70px;
		width: 70px;
    }
    .basket {
        display: flex;
        align-items: center;
    }
    .basket span {
        background-color: #ff0000;
        color: #fff;
        border-radius: 50%;
        padding: 0.5em;
        margin-left: 0.5em;
    }
	    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even){background-color: #f9f9f9;}
    tr:hover {background-color: #eaeaea;}
    input[type="time"], input[type="text"], input[type="date"] {
        width: 90%;
        padding: 5px;
        margin: 5px 0;
        box-sizing: border-box;
    }
</style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.jpg" alt="OMGYM Logo">
        </div>
        <ul>
            <li><a href="coach_home.php">Home</a></li>
			<li><a href="coach_clients.php">Client</a></li>
			<li><a href="coach_schedule.php">My Schedule</a></li>
			<li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <div>
        <h1>My Schedule</h1>
    </div>
	<br><br>
	<table>
    <tr>
        <th>יום</th>
        <th>תאריך</th>
        <th>שעת התחלה</th>
        <th>שעת סיום</th>
    </tr>
    <?php
    // Define the days of the week in Hebrew
    $daysOfWeek = ['ראשון', 'שני', 'שלישי', 'רביעי', 'חמישי', 'שישי', 'שבת'];

    // Loop for each day
    foreach ($daysOfWeek as $day) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($day) . "</td>";
        echo "<td><input type='date' name='date[]'></td>";
        echo "<td><input type='time' name='start_time[]'></td>";
        echo "<td><input type='time' name='end_time[]'></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
