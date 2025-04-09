<?php
function getPost($key) {
  return isset($_POST[$key]) ? floatval($_POST[$key]) : 0;
}

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['shape']) {
    case "triangle":
      $w = getPost("tri_width");
      $h = getPost("tri_height");
      $area = ($w * $h) / 2;
      $result = "삼각형 면적: " . round($area, 2);
      break;

    case "rectangle":
      $w = getPost("rect_width");
      $h = getPost("rect_height");
      $area = $w * $h;
      $result = "직사각형 면적: " . round($area, 2);
      break;

    case "circle":
      $r = getPost("circle_radius");
      $area = pi() * $r * $r;
      $result = "원 면적: " . round($area, 2);
      break;

    case "box":
      $w = getPost("box_width");
      $l = getPost("box_length");
      $h = getPost("box_height");
      $volume = $w * $l * $h;
      $result = "직육면체 부피: " . round($volume, 2);
      break;

    case "cylinder":
      $r = getPost("cyl_radius");
      $h = getPost("cyl_height");
      $volume = pi() * $r * $r * $h;
      $result = "원통 부피: " . round($volume, 2);
      break;

    case "sphere":
      $r = getPost("sphere_radius");
      $volume = (4/3) * pi() * pow($r, 3);
      $result = "구 부피: " . round($volume, 2);
      break;
  }
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>계산 결과</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    a { display: inline-block; margin-top: 20px; }
  </style>
</head>
<body>
  <h1>계산 결과</h1>
  <p><?= $result ?></p>
  <a href="index.html">돌아가기</a>
</body>
</html>
