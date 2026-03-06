
<?php include 'auto_reset.php'; ?>
<?php
$data = json_decode(file_get_contents('result.json'), true);
date_default_timezone_set("Asia/Kolkata");
$currentDate = date("d M Y");
$currentTime = date("h:i A");
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta name="google-site-verification" content="9GJMaM9rbwzJl4_CBhwXFd3JbCaLDzWZzezNkSRT2Gg" />

<meta charset="UTF-8">
<title>Satta King Result</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }
    h1 {
        margin: 10px 0;
        font-size: 28px;
        color: #FFD700;
    }
    .datetime {
        font-size: 16px;
        margin-bottom: 20px;
        color: #f1c40f;
    }
    .result-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 15px;
        width: 95%;
        max-width: 900px;
    }
    .result-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0,0,0,0.4);
        transition: transform 0.3s ease;
    }
    .result-card:hover {
        transform: scale(1.05);
    }
    .game-name {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #00ffcc;
    }
    .game-time {
        font-size: 14px;
        margin-bottom: 10px;
        color: #ffcc00;
    }
    .result-number {
        font-size: 26px;
        font-weight: bold;
        color: #FFD700;
    }
</style>
</head>
<body>

<h1 style="color:yellow" align="center">SATTA KING SUPERFAST RESULT</h1>
<div class="datetime">
    Date: <?php echo $currentDate; ?> | Time: <?php echo $currentTime; ?>
</div>

<div class="result-container">
    <?php

    $currentTime = date("H:i");
    $games = [
        ['name' => 'FARIDABAD', 'time_24' => '18:15','time_display' => '06:15 PM'],
        ['name' => 'SHRI GANESH', 'time_24' => '16:45','time_display'=>'04:45 PM'],
        ['name' => 'GHAZIABAD', 'time_24' =>'21:55','time_display'=>'09:55 PM'],
        ['name' => 'GALI', 'time_24' => '23:55','time_display'=>'11:55 PM'],
        ['name' => 'DESAWAR', 'time_24' => '05:15','time_display'=>'05:15 AM'],
        ['name' => 'DELHI BAZAR', 'time_24' => '15:10','time_display'=>'03:10 PM']
    ];


usort($games, function($a, $b) use ($currentTime) {
        $timeA = DateTime::createFromFormat('H:i', $a['time_24']);
            $timeB = DateTime::createFromFormat('H:i', $b['time_24']);
                $now = DateTime::createFromFormat('H:i', $currentTime);

                    $diffA = abs($now->getTimestamp() - $timeA->getTimestamp());
                        $diffB = abs($now->getTimestamp() - $timeB->getTimestamp());

                            if ($diffA <= 600 && $diffB > 600) return -1;
                                if ($diffB <= 600 && $diffA > 600) return 1;

                            return $diffA - $diffB;
                                    });


    foreach ($games as $game) {
        $result = isset($data[$game['name']]) && !empty($data[$game['name']]) ? $data[$game['name']] : '--';
        echo '<div class="result-card">';
        echo '<div class="game-name">'.$game['name'].'</div>';
        echo '<div class="game-time">'.$game['time_display'].'</div>';
        echo '<div class="result-number">Result: '.$result.'</div>';
        echo '</div>';
    }
    ?>

<div class="ads" style="padding:8px 0; margin:4px 0; background:linear-gradient">


<p style="color:black; font-size: small;"align="center">
  <h1 style="font-size:small" align="center">🔰🅞🅝🅛🅘🅝🅔 🅖🅐🅜🅔 🅟🅛🅐🅨🔰</h1>
     <h2 align="center"> <b>❤️[[ शिव भाई ]]❤️</b></h2>
     <h3 align="center">✍️ऑनलाइन  खाईवाल✍</h3>
    <h4 align="center">गेम डालने का टाइम लिस्ट | गेम इस टाइमटेबल के अनुसार ok होगी |</h4>
      
        <h5 align="center" space="1%">⏰ दिल्ली बाजार ➳ 03:00 PM</h5>
          <h5 align="center" space="1%">⏰ श्री गणेश       ➳ 04 30 PM</h5>
            <h5 align="center" space="1%">⏰ फरीदाबाद.    ➳ 05:50 PM</h5>
              <h5 align="center" space="1%">⏰ गाजियाबाद.     ➳ 08:55 PM</h5>
                
                  <h5 align="center" space="1%">⏰ गली              ➳ 11:30 PM</h5>
                  <h5 align="center" space="1%">⏰ दिसावर         ➳ 02:00 AM</h5>
                  <h3 align="center">टोटल गलत होने पर भुगतान नहीं दिया जायेगा</h3>

                    <h3 align="center">एक पर्ची में डबल नंबर की पासिंग नहीं मिलेगी</h3>

                      
                        <div class="ads" style="padding:8px 0; margin:8px 0; background: white">


                        <h2 style="color:green; font-size:small; line-height: 1.5;"align="center">


                        गेम डालने के लिए ➡️


                        <a href="https://wa.link/s6iy5n" style="color:blue;font:small"> यहाँ क्लिक करें</a>


                        </h2>


                        </div>

                        </p>


                                </div>
                                                                                                
                                                        <h3 style="color:red">अगर आप खाईवाल की ADS लगवाना चाहते हो | तो नीचे दिए गये नंबर पर कॉन्टैक्ट करे | अगर आपको ADS लगवानी हैं | तो ही मैसेज करे टाइम पास के लिए मैसेज ना करे|</h3>


                                            </a>


                                            </div>


                                              <div class="ads" style=" background:Red" align="center">
                                                Ads डलवाने के लिए  <a href="https://wa.link/nqn736" style="color:blue; font-size: big">👉 यहाँ क्लिक करें</a>
</div>

</body>
</html>