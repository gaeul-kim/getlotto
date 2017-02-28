<?
$url = "http://www.nlotto.co.kr/common.do?method=getLottoNumber";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$contents = curl_exec($ch);
if (curl_errno($ch)) {
  echo curl_error($ch);
  echo "\n<br />";
  $contents = '';
} else {
  curl_close($ch);
}

if (!is_string($contents) || !strlen($contents)) {
echo "Failed to get contents.";
$contents = '';
}

$jsonData = json_decode($contents,true);

echo "<h5>최근 당첨번호(".$jsonData['drwNoDate'].")</h5>";
echo "<h2>".$jsonData['drwtNo1']." ";
echo $jsonData['drwtNo2']." ";
echo $jsonData['drwtNo3']." ";
echo $jsonData['drwtNo4']." ";
echo $jsonData['drwtNo5']." ";
echo $jsonData['drwtNo6']." ";
echo " + ".$jsonData['bnusNo']."</h2>";
//echo $contents;
?>