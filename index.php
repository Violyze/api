<?php
$courier = $_GET['courier'];
$resi = $_GET['resi'];
$url = "https://api.binderbyte.com/v1/track?api_key=e1d26f00d58de2826078425649709298dc3dbe7a2acdac8689359565bf9aa370&courier=$courier&awb=$resi";
$data = file_get_contents($url);
$datas = json_decode($data);

$hist = $datas->data->history;

$resi       = $datas->data->summary->awb;
$status     = $datas->data->summary->status;
$courier    = $datas->data->summary->courier;
$desc       = $datas->data->summary->desc;

echo "<br>";
echo "<br>";
echo "no resi   :   $resi";
echo "<br>";
echo "status    :   $status";
echo "<br>";
echo "courier   :   $courier";
echo "<br>";
echo "desc      :   $desc";
echo "<br>";
echo "<br>";

foreach ($hist as $his) {
    echo $his->date;
    echo "<br>";
    echo $his->desc;
    echo "<br>";
    echo $his->location;
    echo "<br>";
}
?>
