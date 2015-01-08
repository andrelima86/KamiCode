<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title> Test Json </title>
</head>
<body>


<?php 


/*$str = '{
    "daily": {
        "summary": "No precipitation for the week; temperatures rising to 6° on Tuesday.",
        "icon": "clear-day",
        "data": [
            {
                "time": 1383458400,
                "summary": "Mostly cloudy throughout the day.",
                "icon": "partly-cloudy-day",
                "sunriseTime": 1383491266,
                "sunsetTime": 1383523844,
                "temperatureMin": -3.46,
                "temperatureMinTime": 1383544800,
                "temperatureMax": -1.12,
                "temperatureMaxTime": 1383458400
            }
        ]
    }
}';*/

$str = file_get_contents('test1.json');
$json = json_decode($str, true);

$temperatureMin = $json['daily']['data'][0]['time'];
$temperatureMax = $json['health']['data'][0]['name'];

echo $temperatureMin ; 

echo $temperatureMax;



?>

</body>
</html>