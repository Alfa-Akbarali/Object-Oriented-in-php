<?php
use App\Phone;

    require_once('../vendor/autoload.php');

    $phone_company = new Phone();
    $phone_company->setName('Apple','Iphone 15 pro',1200,'black');
    $phone_company->getName();

