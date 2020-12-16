<?php

function loadBookings(){
        global $con;

        $qry = $con->query("SELECT booking.id AS booking_id, booking.hotel_id, booking.check_in, booking.check_out, booking.adults, booking.children,
                            hotel.id, hotel.company, hotel.continent, hotel.country, hotel.city, hotel.street
                            FROM booking INNER JOIN hotel ON booking.hotel_id = hotel.id ORDER BY id ASC;");
        if($qry === false){
            echo mysqli_error($con)." - ";
            exit(LINE);
        } else {
            while ($row = $qry->fetch_assoc()){
                echo '
                <li class="table-row">
                    <div class="col col-1" data-label="Id">' . $row['booking_id'] . ' </div>
                    <div class="col col-3" data-label="Check in">' . $row['check_in'] . '</div>
                    <div class="col col-3" data-label="Check out">' . $row['check_out'] . '</div>
                    <div class="col col-2" data-label="Adults Status">' . $row['adults'] . '</div>
                    <div class="col col-2" data-label="Children Status">' . $row['children'] . '</div>
                    <div class="col col-3" data-label="Company Status">' . $row['company'] . '</div>
                    <div class="col col-3" data-label="Continental Status">' . $row['continent'] . '</div>
                    <div class="col col-3" data-label="Country Status">' . $row['country'] . '</div>
                    <div class="col col-3" data-label="City Status">' . $row['city'] . '</div>
                    <div class="col col-3" data-label="Street Status">' . $row['street'] . '</div>
                </li>
                ';
            }
        }
        $qry->close();
    }

function booking_count(){
    global $con;

        $qry = $con->query("SELECT COUNT(id) FROM booking;");
        if($qry === false){
            echo mysqli_error($con)." - ";
            exit(LINE);
        } else {
            while ($row = $qry->fetch_assoc()){
                echo '
                <li class="table-header">
                    <div class=" col col-2">Total bookingen:</div>
                    <div class="col col-1">' . $row['COUNT(id)'] . '</div>
                </li>
                ';
            }
        }
        $qry->close();
    }

?>