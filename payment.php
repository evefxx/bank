<html>
<head>
<title>Bankpayment</title>
</head>
<body>
<?php
$strname = $_POST["Name"];
$strphone = $_POST["phone"];
$stremail = $_POST["Email"];
$strdate = $_POST["txtdate"];
$strtotal = $_POST["total"];
if($flgSend)
{
echo "ทางเราได้รับการแจ้งยืนยันโอนเรียบร้อยแล้ว จะทำการส่งสินค้าให้ท่านภายใน 48 ชั่วโมง";
}
else
{
echo "เกิดเหตุขัดข้อง ไม่สามารถแจ้งยืนยันการโอนเงินได้ กรุณาลองใหม่อีกครั้ง";
}
?>
</body>
</html>
