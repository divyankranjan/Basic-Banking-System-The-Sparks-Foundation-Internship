<!DOCTYPE html>
<html lang="en">

<head>
    <title>Money Transfer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/TSB.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
        
    </style>
</head>

<body>
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include 'navbar.php';
    ?>
    <div class="center mt-0 accent-3">
        <h3><b>Transfer Money</b></h3>
    </div>
    <div class="container">
        <br />
        <div class="row">
            <div class="col">

                <div class="container-fluid table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2">Customer Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Bank Balance</th>
                                <th scope="col" class="text-center py-2">Perform Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($result)) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td class="center py-2"><?php echo (isset($rows['cust_id']) ? $rows['cust_id'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['cust_name']) ? $rows['cust_name'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['cust_email']) ? $rows['cust_email'] : ''); ?></td>
                                        <td class="center py-2"><?php echo (isset($rows['cust_balance']) ? $rows['cust_balance'] : ''); ?></td>
                                        <td class="center"><a href="userdetails.php?cust_id=<?php echo $rows['cust_id']; ?>"> <button type="button" class="btn ">Transfer</button></a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
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