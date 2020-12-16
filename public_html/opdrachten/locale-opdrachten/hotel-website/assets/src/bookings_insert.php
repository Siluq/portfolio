<?php 
    if(isset($_POST['where']) && $_POST['where'] != ''
    && isset($_POST['check_in']) && $_POST['check_in'] != ''
    && isset($_POST['check_out']) && $_POST['check_out'] != ''
    && isset($_POST['adult']) && $_POST['adult'] != ''
    && isset($_POST['id_field']) && $_POST['id_field'] != ''){

        $id = dbp($_POST['id_field']);
        $where = dbp($_POST['where']);
        $check_in = dbp($_POST['check_in']);
        $check_out = dbp($_POST['check_out']);
        $adult = dbp($_POST['adult']);

        if(!isset($_POST['child']) || $_POST['child'] == ""){
            $child = 0;
        } else {
            $child = dbp($_POST['child']);
        }
        

        $qry = $con->prepare('INSERT INTO booking (hotel_id ,check_in, check_out, adults, children) VALUES (?,?,?,?,?);');
        if ($qry === false) {
            echo mysqli_error($con)." - ";
            exit(__LINE__);
        }
        $qry->bind_param('issii', $id, $check_in, $check_out, $adult, $child);
        if ($qry->execute() === false) {
            echo mysqli_error($con)." - ";
            exit(__LINE__);
        } else {
            echo "<script>alert('Booking succesvol!')</script>";
            $qry->close();
        }
    }
?>