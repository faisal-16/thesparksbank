<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body3">
    <?php include'navbar.php'; ?>
    <div class="transfer_box">
        <h2>TRANSFER MONEY</h2>
        <form class="form_box" method="POST">
            <input type="text" name="sender" placeholder="Sender" required>
            <input type="text" name="reciever" placeholder="Reciever" required>
            <input type="text" name="amount" placeholder="Amount" required>
            <button class="btn2" type="submit" name="submit">Transact</button>
        </form>
    </div>
    <?php include'config.php';
        if(isset($_POST['submit']))
        {
            $sender=$_POST['sender'];
            $reciever=$_POST['reciever'];
            $amount=$_POST['amount'];

            $sql = "SELECT * from users where id=$sender";
            $query = mysqli_query($conn,$sql);
            $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

            $sql = "SELECT * from users where id=$reciever";
            $query = mysqli_query($conn,$sql);
            $sql2 = mysqli_fetch_array($query);
            // constraint to check input of negative value by user
            if (($amount)<0)
            {
              ?>  <script type="text/javascript">
                alert("Oops! Negative values cannot be transferred");
                </script>
              <?php
            } // constraint to check insufficient balance.
            else if($amount > $sql1['balance']) 
            {
              ?><script type="text/javascript">
               alert("Bad Luck! Insufficient Balance");  // showing an alert box.
                </script>
             <?php
            }// constraint to check zero values
            else if($amount == 0){
              ?>
                <script type='text/javascript'>
                alert('Oops! Zero value cannot be transferred');
               </script>
               <?php
            }
            else {
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$sender";
                mysqli_query($conn,$sql);
                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id= $reciever";
                mysqli_query($conn,$sql);
                
                $sender1 = $sql1['name'];
                $receiver1 = $sql2['name'];
                $sql = "INSERT INTO history(sender,reciever,amount) VALUES ('$sender1','$receiver1','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                    ?>
                     <script> alert('Transaction Successful');
                                     window.location='history.php';
                     </script>
                <?php  
                }
                $newbalance= 0;
                $amount =0;
        }
    
}
?>
</body>
</html>