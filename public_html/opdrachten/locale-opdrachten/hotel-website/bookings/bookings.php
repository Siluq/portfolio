<?php
 include('../config/connect.php');
 include('../assets/src/bookings_show.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order overzicht</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../assets/css/table.css">
</head>
<body>
    <div class="container">
        <h2>All customers</h2>

        <br>
        <a href="<?php echo BASEHREF; ?>"><button class="home">Home</button></a>
        <br>
        <br>

        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Id</div>
                <div class="col col-3">Check in</div>
                <div class="col col-3">Check out</div>
                <div class="col col-2">Adults</div>
                <div class="col col-2">Children</div>
                <div class="col col-3">Company</div>
                <div class="col col-3">Continental</div>
                <div class="col col-3">Country</div>
                <div class="col col-3">City</div>
                <div class="col col-3">Street</div>
            </li>
        
        <?php
            loadBookings();
        ?>
        <?php
            booking_count();
         ?> 
        </ul>
    </div>
</body>
</html>