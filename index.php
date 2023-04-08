<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <div>
            <?php
            include("config.php");
            $query = $conn->query("SELECT * FROM users");
            ?>
            <table>
                <tr>
                    <td>No</td>
                    <td>E-Mail</td>
                </tr>
                <?php
                $no = 1;
                while ($row = $query->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['email']}</td>
                    </tr>";
                    $no++;
                }
                ?>
            </table>
        </div>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>

</html>