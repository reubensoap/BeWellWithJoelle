<?php

require_once('model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action == 'home') {
    include('main.html');
} else if ($action == 'menHealth'){
    include('contact-male.html');
} else if ($action == 'femaleHealth'){
    include('contact-women.html');
} else if ($action == 'contact'){

    $name = filter_input(INPUT_POST, 'Name');
    $email = filter_input(INPUT_POST, 'Email');
    $mess = filter_input(INPUT_POST, 'Mess');

    $body = '<html><body>';
    $body .= '<div style="text-align: center;">';
    $body .= '<h2 style="padding-bottom: 10px;">Thank You '. strip_tags($_POST['Name']) . ', I Will Get Back With You Shortly</h2>';
    $body .= '<p style="padding-bottom: 10px;">In the mean time, contemplate on how I can assist you in our up-coming session.</p>';
    $body .= '<a href="https://joellewellness.000webhostapp.com/" style="padding: 5px 10px; background: #6b6dff; text-decoration: none; color: white;">Back To Site</a>';
    $body .= '</div></body></html>';

    $headers = "From: reubencode117@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "Thank You! - Reuben Pena";
    $to_email = $email;


/* --------------------------------------------------------------- */

    $meBody = '<html><body>';
    $meBody .= '<h2>Contact Information From Requester</h2></br>';
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['Name']) . "</td></tr>";
    $meBody .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['Email']) . "</td></tr>";
    $meBody .= "<tr><td><strong>Message:</strong></td><td>" . $mess . "</td></tr>";
    $meBody .= "</table>";
    $meBody .= "</body></html>";


    $meHeaders = "From: reubencode117@gmail.com\r\n";
    $meHeaders .= "MIME-Version: 1.0\r\n";
    $meHeaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $meSubject = "New Message From Tester Joelle";
    $meTo_email = 'reubensoapy@gmail.com';

    if (mail($to_email, $subject, $body, $headers)) {
        
        mail($meTo_email, $meSubject, $meBody, $meHeaders);
        include('contact-sent.html');

    }

} else if ($action == 'form'){

    $sex = filter_input(INPUT_POST, 'sex');

    $name = filter_input(INPUT_POST, 'Name');
    $email = filter_input(INPUT_POST, 'Email');
    $phone = filter_input(INPUT_POST, 'Phone');
    $age = filter_input(INPUT_POST, 'Age');
    $birthDate = filter_input(INPUT_POST, 'BirthDate');
    $placeOfBirth = filter_input(INPUT_POST, 'PlaceOfBirth');
    $weight = filter_input(INPUT_POST, 'Weight');
    $pastWeight = filter_input(INPUT_POST, 'PastWeight');
    $weightChoice = filter_input(INPUT_POST, 'WeightChoice');

    /* ---------------------------------------------------- */

    $relationshipStatus = filter_input(INPUT_POST, 'RelationshipStatus');
    $residence = filter_input(INPUT_POST, 'Residence');
    $occupation = filter_input(INPUT_POST, 'Occupation');
    $workWeek = filter_input(INPUT_POST, 'WorkWeek');
    $children = filter_input(INPUT_POST, 'Children');
    $pets = filter_input(INPUT_POST, 'Pets');

    /* ---------------------------------------------------- */

    $healthConcerns = filter_input(INPUT_POST, 'HealthConcerns');
    $otherHealthConcerns = filter_input(INPUT_POST, 'OtherHealthConcerns');
    $lifeFeltBest = filter_input(INPUT_POST, 'LifeFeltBest');
    $lifeEvents = filter_input(INPUT_POST, 'LifeEvents');
    $ancestry = filter_input(INPUT_POST, 'Ancestry');
    $sleep = filter_input(INPUT_POST, 'Sleep');
    $sleepWhy = filter_input(INPUT_POST, 'SleepWhy');

    if($sex == 'W'){
        $periodNotes = filter_input(INPUT_POST, 'PeriodNotes');
        $birthControl = filter_input(INPUT_POST, 'BirthControl');
    }

    /* ---------------------------------------------------- */

    $supplements = filter_input(INPUT_POST, 'Supplements');
    $healers = filter_input(INPUT_POST, 'Healers');
    $sports = filter_input(INPUT_POST, 'Sports');

    /* ---------------------------------------------------- */

    $childBreakfast = filter_input(INPUT_POST, 'ChildBreakfast');
    $childLunch = filter_input(INPUT_POST, 'ChildLunch');
    $childDinner = filter_input(INPUT_POST, 'ChildDinner');
    $childSnacks = filter_input(INPUT_POST, 'ChildSnacks');
    $childLiquids = filter_input(INPUT_POST, 'ChildLiquids');

    /* ---------------------------------------------------- */

    $normalBreakfast = filter_input(INPUT_POST, 'NormalBreakfast');
    $normalLunch = filter_input(INPUT_POST, 'NormalLunch');
    $normalDinner = filter_input(INPUT_POST, 'NormalDinner');
    $normalSnacks = filter_input(INPUT_POST, 'NormalSnacks');
    $normalLiquids = filter_input(INPUT_POST, 'NormalLiquids');
    $familySupport = filter_input(INPUT_POST, 'FamilySupport');
    $cook = filter_input(INPUT_POST, 'Cook');
    $percentCook = filter_input(INPUT_POST, 'PercentCook');
    $sugerCrave = filter_input(INPUT_POST, 'SugerCrave');
    $importantHealth = filter_input(INPUT_POST, 'ImportantHealth');


    $body = '<html><body>';
    $body .= '<div style="text-align: center;">';
    $body .= '<h2 style="padding-bottom: 10px;">Thank You '. strip_tags($_POST['Name']) . ', I Will Get Back With You Shortly</h2>';
    $body .= '<p style="padding-bottom: 10px;">In the mean time, contemplate on how I can assist you in our up-coming session. Also contemplate on previous life events that we can discuss together.</p>';
    $body .= '<a href="https://joellewellness.000webhostapp.com/" style="padding: 5px 10px; background: #6b6dff; text-decoration: none; color: white;">Back To Site</a>';
    $body .= '</div></body></html>';

    $headers = "From: reubencode117@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "Thank You! - Male Person";
    $to_email = $email;


/* --------------------------------------------------------------- */

    $meBody = '<html><body>';
    $meBody .= '<h2>Personal Information From Requester</h2></br>';
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['Name']) . "</td></tr>";
    $meBody .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['Email']) . "</td></tr>";
    $meBody .= "<tr><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
    $meBody .= "<tr><td><strong>Age:</strong> </td><td>" . $age . "</td></tr>";
    $meBody .= "<tr><td><strong>Birth Date:</strong> </td><td>" . $birthDate . "</td></tr>";
    $meBody .= "<tr><td><strong>Place of birth:</strong> </td><td>" . $placeOfBirth . "</td></tr>";
    $meBody .= "<tr><td><strong>Weight:</strong> </td><td>" . $weight . "</td></tr>";
    $meBody .= "<tr><td><strong>Past Weight:</strong> </td><td>" . $pastWeight . "</td></tr>";
    $meBody .= "<tr><td><strong>Weight Choice:</strong> </td><td>" . $weightChoice . "</td></tr>";
    $meBody .= "</table>";

    $meBody .= "<h2>Social Information From Requester</h2></br>";
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr><td><strong>Relationshop Status:</strong> </td><td>" . $relationshipStatus . "</td></tr>";
    $meBody .= "<tr><td><strong>Residence:</strong> </td><td>" . $residence . "</td></tr>";
    $meBody .= "<tr><td><strong>Occupation:</strong> </td><td>" . $occupation . "</td></tr>";
    $meBody .= "<tr><td><strong>Work Week:</strong> </td><td>" . $workWeek . "</td></tr>";
    $meBody .= "<tr><td><strong>Children:</strong> </td><td>" . $children . "</td></tr>";
    $meBody .= "<tr><td><strong>Pets:</strong> </td><td>" . $pets . "</td></tr>";
    $meBody .= "</table>";

    $meBody .= "<h2>Health Information From Requester</h2></br>";
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr><td><strong>Health Concerns:</strong> </td><td>" . $healthConcerns . "</td></tr>";
    $meBody .= "<tr><td><strong>Other Health Concerns:</strong> </td><td>" . $otherHealthConcerns . "</td></tr>";
    $meBody .= "<tr><td><strong>Point in time, you felt best:</strong> </td><td>" . $lifeFeltBest . "</td></tr>";
    $meBody .= "<tr><td><strong>Current:</strong> </td><td>" . $lifeEvents . "</td></tr>";
    $meBody .= "<tr><td><strong>Ancestry:</strong> </td><td>" . $ancestry . "</td></tr>";
    $meBody .= "<tr><td><strong>Sleep:</strong> </td><td>" . $sleep . "</td></tr>";
    $meBody .= "<tr><td><strong>Why:</strong> </td><td>" . $sleepWhy . "</td></tr>";
    if($sex == 'W'){
        $meBody .= "<tr><td><strong>Period Notes:</strong> </td><td>" . $periodNotes . "</td></tr>";
        $meBody .= "<tr><td><strong>Birth Control Notes:</strong> </td><td>" . $birthControl . "</td></tr>";  
    }
    $meBody .= "</table>";

    $meBody .= "<h2>Medical Information From Requester</h2></br>";
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr><td><strong>Supplements:</strong> </td><td>" . $supplements . "</td></tr>";
    $meBody .= "<tr><td><strong>Any Healers, Helpers?:</strong> </td><td>" . $healers . "</td></tr>";
    $meBody .= "<tr><td><strong>Role in Sports, exercise:</strong> </td><td>" . $sports . "</td></tr>";
    $meBody .= "</table>";

    $meBody .= "<h2>Food Information From Requester</h2></br>";
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr><td><strong>Child Habbits</strong> </td><td></td></tr>";
    $meBody .= "<tr><td><strong>BreakFast:</strong> </td><td>" . $childBreakfast . "</td></tr>";
    $meBody .= "<tr><td><strong>Lunch:</strong> </td><td>" . $childLunch . "</td></tr>";
    $meBody .= "<tr><td><strong>Dinner:</strong> </td><td>" . $childDinner . "</td></tr>";
    $meBody .= "<tr><td><strong>Snacks:</strong> </td><td>" . $childSnacks . "</td></tr>";
    $meBody .= "<tr><td><strong>Liquids:</strong> </td><td>" . $childLiquids . "</td></tr>";
    $meBody .= "<tr><td><strong>Adult Habbits</strong> </td><td></td></tr>";
    $meBody .= "<tr><td><strong>BreakFast:</strong> </td><td>" . $normalBreakfast . "</td></tr>";
    $meBody .= "<tr><td><strong>Lunch:</strong> </td><td>" . $normalLunch . "</td></tr>";
    $meBody .= "<tr><td><strong>Dinner:</strong> </td><td>" . $normalDinner . "</td></tr>";
    $meBody .= "<tr><td><strong>Snacks:</strong> </td><td>" . $normalSnacks . "</td></tr>";
    $meBody .= "<tr><td><strong>Liquids:</strong> </td><td>" . $normalLiquids . "</td></tr>";
    $meBody .= "<tr><td><strong>Family, Friends support:</strong> </td><td>" . $familySupport . "</td></tr>";
    $meBody .= "<tr><td><strong>Do they cook:</strong> </td><td>" . $cook . "</td></tr>";
    $meBody .= "<tr><td><strong>How much of the time?:</strong> </td><td>" . $percentCook . "</td></tr>";
    $meBody .= "<tr><td><strong>Any habbits like suger? Smoking?:</strong> </td><td>" . $sugerCrave . "</td></tr>";
    $meBody .= "<tr><td><strong>Important notes about health?:</strong> </td><td>" . $importantHealth . "</td></tr>";
    $meBody .= "</table>";

    $meBody .= "</body></html>";


    $meHeaders = "From: reubencode117@gmail.com\r\n";
    $meHeaders .= "MIME-Version: 1.0\r\n";
    $meHeaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    if($sex == 'W'){
        $meSubject = "New Female Form Input From Tester Joelle";
    } else {
        $meSubject = "New Male Form Input From Tester Joelle";
    }
    $meTo_email = 'reubensoapy@gmail.com';

    if (mail($to_email, $subject, $body, $headers)) {
        
        mail($meTo_email, $meSubject, $meBody, $meHeaders);
        include('contact-sent.html');

    }

} else if ($action == 'blog-dash'){
    header('location: admin-dash');
}

?>