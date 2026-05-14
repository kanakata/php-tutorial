<?php
//fetch $subscriptionDate from the database bellow date is hardcoded.
$subscriptionDate = new DateTime("2026-5-8");

//generate the current date.
$currentDate = new DateTime(date("Y-m-d", time()));

if($subscriptionDate > $currentDate){
    //logic to update the subscription table.   
}