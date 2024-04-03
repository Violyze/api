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

echo "\n";
echo "\n";
echo "No resi   :   $resi";
echo "\n";
echo "Status    :   $status";
echo "\n";
echo "Courier   :   $courier";
echo "\n";
echo "Desc      :   $desc";
echo "\n";
echo "\n";

foreach ($hist as $his) {
    echo $his->date;
    echo "\n";
    echo $his->desc;
    echo "\n";
    echo $his->location;
    echo "\n";
}
?>
