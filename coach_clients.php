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
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
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
        <h1>My Clients</h1>
    </div>
	<br><br>
	<input type="text" id="searchInput" onkeyup="searchName()" placeholder="Search for names..">

    <table id="customerTable">
        <tr>
            <th>Name</th>
            <th>Message</th>
            <th>Send</th>
        </tr>
        <!-- Sample Data -->
        <tr>
            <td>John Doe</td>
            <td><input type="text" placeholder="Write a message"></td>
            <td><button onclick="sendMessage()">Send</button></td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td><input type="text" placeholder="Write a message"></td>
            <td><button onclick="sendMessage()">Send</button></td>
        </tr>
        <!-- Add more customers as needed -->
    </table>

    <script>
        function searchName() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("customerTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }

        function sendMessage() {
            alert("Message sent! (In a real application, this would send an actual message)");
        }
    </script>
</body>
</html>
