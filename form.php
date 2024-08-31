<?php

function getGreeting() {
    $currentHour = (int)date('H');

    if ($currentHour >= 2 && $currentHour < 11) {
        return 'Good Morning';
    } elseif ($currentHour >= 11 && $currentHour < 16) {
        return 'Good Afternoon';
    } elseif ($currentHour >= 16 && $currentHour < 21) {
        return 'Good Evening';
    } else {
        return 'Good Night';
    }
}

$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$greeting = getGreeting();
$favorite = isset($_POST['favorite']) ? htmlspecialchars($_POST['favorite']) : '';
include 'form.view.php'
?>