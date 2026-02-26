<?php

require 'features/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'components/header.php'; ?>
    <style>
        #header_title {
            font-weight: 700;
            text-align: center;
            background-color: #982598;
            color: #ffffff;
        }

        #header_subtitle {
            color: #202040;
            text-align: center;
        }

        #header_logo_cover {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0 1rem 0;
        }

        .header_logo {
            transition: all 500ms ease;
        }

        .header_logo:hover {
            transform: translate(-5px, -5px);
            transition: all 200ms ease;
            filter: drop-shadow(10px 10px 5px #00000080);
        }

        #header_logo1 {
            height: 120px;
        }

        #header_logo2 {
            margin: 0 2rem 0 2rem;
            height: 125px;
        }

        #header_logo3 {
            height: 150px;
        }
    </style>
</head>
<body>
    <?php require 'components/navside.php'; ?>

    <div id="main_space">
        <div id="header_logo_cover">
            <img src="assets/images/logo/inthanin.png" alt="Inthanin Logo" id="header_logo1" class="header_logo">
            <img src="assets/images/logo/tun.png" alt="Triam'nom Logo" id="header_logo2" class="header_logo">
            <img src="assets/images/logo/scit.png" alt="SCIT Logo" id="header_logo3" class="header_logo">
        </div>
        <h1 id="header_title">คณะสีอินทนิล</h1>
        <h2 id="header_subtitle">เตรียมฯน้อม</h2>
    </div>
</body>
</html>