<?php

function remoteSiteLogger(){
    $postData = [
        "username" => "",//your username
        "password" => "",//your passsword
    ];
    $curlInit = curl_init("pass in the url to the loin page of the site");

    //set the return transfer to true to be able to read the output that comes back from the server;
    curl_setopt($curlInit, CURLOPT_POST, true);
    curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInit, CURLOPT_POSTFIELDS, $postData);

    //capture the responce and store it in a variable for later use.
    $response = curl_exec($curlInit);

}