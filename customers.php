<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body2">
    <?php include'navbar.php'; ?>
    <div class="table_box">
        <table class="customer_table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody>
                <?php include'config.php';
                $sql="SELECT * FROM users;";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td ><?php echo $rows['id']; ?></td>
                    <td ><?php echo $rows['name']; ?></td>
                    <td ><?php echo $rows['email']; ?></td>
                    <td ><?php echo $rows['balance']; ?> </td>
                    <td ><button class="btn">view</button></td>
                <?php
                }  
                ?>
            </tbody>
        </table>
        <button class="transfer_btn" onclick="location.href='transfer.php';" style="cursor: pointer;">TRANSFER</button>
    </div>
</body>
</html>