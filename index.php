<?php require("./function.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Polpharma API - European CDMO and API Manufacturing</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- main file that's required -->
    <link href="./css/webflow.min.css" rel="stylesheet" type="text/css">
    <link href="./css/main_style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" async="" src="./js/destination.js"></script>
</head>
<body>
<?php
// Example usage:
$images = [
    ["src" => "./images/66d71a79810ecd3282f39006_bold_men_in_lab.webp", "is_active" => false],
    ["src" => "./images/6703c7df74651d97ab8fb744_67000ac545525798db61d46a_2024.09.18-SG-API_135.webp", "is_active" => true],
    ["src" => "./images/6703c684b17bcff115089297_Warszawa_Biuro Handlowe_1.webp", "is_active" => false],
];

$texts = [
    [
        "src" => "./images/66d71a79810ecd3282f39006_bold_men_in_lab.webp",
        "title" => "Polpharma API",
        "content" => "We are proud of our 70 years of experience in supporting patients’ health with high quality APIs..."
    ],
    [
        "src" => "./images/6703c7df74651d97ab8fb744_67000ac545525798db61d46a_2024.09.18-SG-API_135.webp",
        "title" => "API Manufacturing Sites",
        "content" => "Polpharma utilizes up-to-date technologies, which ensure the safety of products, employees, and the natural environment..."
    ],
    [
        "src" => "./images/6703c684b17bcff115089297_Warszawa_Biuro Handlowe_1.webp",
        "title" => "Polpharma Group",
        "content" => "For over 80 years, trusted by patients, healthcare professionals, and business partners alike..."
    ],
];

echo generateDynamicContent($images, $texts);
?>
    <!-- JS Libraries -->
    <script src="./js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <!-- GSAP -->
    <script src="./js/gsap.min.js"></script>
    <script src="./js/ScrollTrigger.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
