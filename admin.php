<?php include 'auto_reset.php'; ?>
<?php
session_start();
$password = 'admin123'; // Change this if you want

if (!isset($_SESSION['logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['password'] == $password) {
        $_SESSION['logged_in'] = true;
        header("Location: admin.php");
        exit;
    } else {
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
    body {
        background: #2c3e50;
        font-family: 'Poppins', sans-serif;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form {
        background: rgba(255,255,255,0.1);
        padding: 20px;
        border-radius: 10px;
    }
    input[type="password"] {
        padding: 8px;
        border: none;
        border-radius: 5px;
    }
    button {
        padding: 8px 12px;
        background: #27ae60;
        border: none;
        color: #fff;
        border-radius: 5px;
        margin-top: 10px;
    }
</style>
</head>
<body>
<form method="post">
    <h2>Admin Login</h2>
    <input type="password" name="password" placeholder="Enter Password">
    <br><button type="submit">Login</button>
</form>
</body>
</html>
<?php
    exit;
    }
}

$data = json_decode(file_get_contents('result.json'), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    foreach ($data as $key => $value) {
        if (isset($_POST[$key])) {
            $data[$key] = $_POST[$key];
        }
    }
    file_put_contents('result.json', json_encode($data));
    header("Location: admin.php?success=1");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>
    body {
        background: #34495e;
        font-family: 'Poppins', sans-serif;
        color: #ecf0f1;
        padding: 20px;
        text-align: center;
    }
    form {
        background: rgba(255,255,255,0.1);
        padding: 20px;
        border-radius: 10px;
        display: inline-block;
    }
    input[type="text"] {
        padding: 8px;
        margin: 5px;
        width: 200px;
        border: none;
        border-radius: 5px;
    }
    button {
        padding: 10px 20px;
        background: #27ae60;
        border: none;
        color: #fff;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }
    a {
        color: #f1c40f;
        display: block;
        margin-top: 15px;
    }
</style>
</head>
<body>
<h2>Update Satta King Results</h2>
<form method="post">
    <?php foreach ($data as $key => $value): ?>
        <div>
            <label><strong><?php echo $key; ?>:</strong></label><br>
            <input type="text" name="<?php echo $key; ?>" value="<?php echo $value; ?>"><br><br>
        </div>
    <?php endforeach; ?>
    <button type="submit" name="update">Update Results</button>
</form>
<?php if(isset($_GET['success'])) echo "<p>✅ Results updated successfully!</p>"; ?>
<a href="logout.php">Logout</a>
</body>
</html>