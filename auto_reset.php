
<?php
date_default_timezone_set("Asia/Kolkata");

$file = 'result.json';
$currentDate = date("d-m-Y");
$currentTime = date("H:i");

if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);

    // If no last_reset key, set it today 11:59 AM
    if (!isset($data['last_reset'])) {
        $data['last_reset'] = $currentDate . " 11:59";
        file_put_contents($file, json_encode($data));
    } else {
        // Check if current date is greater than last_reset date
        $resetTime = DateTime::createFromFormat('d-m-Y H:i', $data['last_reset']);
        $now = new DateTime();

        if ($now > $resetTime) {
            // Reset the result
            $data = [
                "last_reset" => $currentDate . " 11:59",
                "FARIDABAD" => "",
                "SHRI GANESH" => "",
                "GHAZIABAD" => "",
                "GALI" => "",
                "DESAWAR" => "",
                "DELHI BAZAR" => ""
            ];
            file_put_contents($file, json_encode($data));
        }
    }
}
?>
