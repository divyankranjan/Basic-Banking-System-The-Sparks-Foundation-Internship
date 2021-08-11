<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Sparks Bank </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;
        }

        * {
            font-family: Poppins;
        }

        .footer {
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="center mt-0 #ffab00 amber accent-3">
        <h3><b>Payment</b></h3>
    </div>
    <div class="container-fluid">

        <?php
        include './connection.php';
        if (isset($_REQUEST['cust_id'])) {
            $sid = $_GET['cust_id'];
            $sql = "SELECT * FROM  customer where cust_id=$sid";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            $rows = mysqli_fetch_assoc($result);
        }
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>

            <div class="container-fluid">
                <table class="table table-sm table-striped table-condensed table-bordered">
                    <tr>
                        <th class="text-center">Client Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Balance</th>
                    </tr>
                    <tr>
                        <td class="center py-2"><?php echo (isset($rows['cust_id']) ? $rows['cust_id'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['cust_name']) ? $rows['cust_name'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['cust_email']) ? $rows['cust_email'] : ''); ?></td>
                        <td class="center py-2"><?php echo (isset($rows['cust_balance']) ? $rows['cust_balance'] : ''); ?></td>
                    </tr>
                </table>
            </div>

            <div class="container">
                <br><br><br>
                <label for="to">Transfer To:</label>
                <select id="to" name="to" class="form-control" required>
                    <option value="" disabled selected>Select a customer</option>
                    <?php
                    include 'config.php';
                    $sid = $_REQUEST['cust_id'];
                    $sql = "SELECT * FROM customer where cust_id!=$sid";
                    $result = mysqli_query($conn, $sql);
                    if (!$result) {
                        echo "Error " . $sql . "<br>" . mysqli_error($conn);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option class="table" value="<?php echo $rows['cust_id']; ?>">

                            <?php echo $rows['cust_name']; ?>
                            <?php echo $rows['cust_balance']; ?>

                        </option>
                    <?php
                    }
                    ?>
            </div>
            </select>
            <br>
            <label for="amount">Amount to be transferred:</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
            <div class="text-center">
                <button class="btn mt-3 waves-effect waves-light" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
            <br>
        </form>
    </div>
    </div>
    <footer class="center footer">
    <br>
    <h6 class="info"><b>Divyank Ranjan © 2021 Bank of Sparks</b></h6>

  </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
<?php
include './connection.php';

if (isset($_POST['submit'])) {

    $from = $_GET['cust_id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customer where cust_id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    if (($amount) < 0) {
        echo '<script>';
        echo ' alert("Please enter correct amount.")';
        echo '</script>';
    }

    else if ($amount > $sql1['cust_balance']) {
        echo '<script>';
        echo ' alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    }
    else if ($amount == 0) {

        echo "<script>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $sql = "SELECT * from customer where cust_id=$to";
        $query = mysqli_query($conn, $sql);
        $sql2 = mysqli_fetch_array($query);

        $Sender = $sql1['cust_name'];
        $Receiver = $sql2['cust_name'];
        $newbalance = $sql1['cust_balance'] - $amount;
        $sql = "UPDATE customer set cust_balance=$newbalance where cust_id=$from";
        mysqli_query($conn, $sql);
        $newbalance = $sql2['cust_balance'] + $amount;
        $sql = "UPDATE customer set cust_balance=$newbalance where cust_id=$to";
        mysqli_query($conn, $sql);


        $sql = "INSERT INTO transactions(`Sender`, `Receiver`, `Balance`) VALUES ('$Sender','$Receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful !!');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>
