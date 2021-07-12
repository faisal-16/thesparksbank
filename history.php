<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #5bbee6;">
      <?php include'navbar.php'; ?>
      <div class="table_box">
        <table class="customer_table">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Reciever</th>
                    <th>Amount</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php include'config.php';
                $sql="SELECT * FROM history;";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td ><?php echo $rows['sender']; ?></td>
                    <td ><?php echo $rows['reciever']; ?></td>
                    <td ><?php echo $rows['amount']; ?></td>
                    <td ><?php echo $rows['timm']; ?> </td>
                <?php
                }  
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>