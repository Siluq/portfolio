<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../config/database.php';
    include_once '../objects/product.php';

    $naam         = isset($_GET['naam'])         ? $_GET['naam']         : null;
    $beschrijving = isset($_GET['beschrijving']) ? $_GET['beschrijving'] : null;
    $prijs        = isset($_GET['prijs'])        ? $_GET['prijs']        : null;
    $categorie    = isset($_GET['categorie'])    ? $_GET['categorie']    : null;

    $database = new Database();
    $db = $database->getConnection();

    $product = new Product($db);
    $product->create($naam, $beschrijving, $prijs, $categorie);


    // if($naam == null || $beschrijving == null || $prijs == null || $categorie == null) {
    //     http_response_code(404);
    //     echo json_encode(array("message" => "product toevoegen mislukt, ik lust de invoer niet"));
    // }else{
    //     http_response_code(200);
    //     echo json_encode(array("message" => "product toevoegen gelukt"));
    // }
?>