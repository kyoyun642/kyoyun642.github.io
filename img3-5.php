<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>PHP 달력</title>
</head>
<body>
  <h1>달력 출력 예제</h1>

  <table border="1">
    <tr>
      <th>일</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th><th>토</th>
    </tr>
    <tr>
    <?php
    $year = date("Y");
    $month = date("n");
    $today = date("j");
    $first_day = mktime(0, 0, 0, $month, 1, $year);
    $first_day_weekday = date("w", $first_day);
    $total_days = date("t", $first_day);

    for ($i = 0; $i < $first_day_weekday; $i++) {
        echo "<td></td>";
    }

    $week_day = $first_day_weekday;

    for ($day = 1; $day <= $total_days; $day++) {
        if ($day == $today) {
            echo "<td><b>{$day}</b></td>";
        } else {
            echo "<td>{$day}</td>";
        }

        $week_day++;
        if ($week_day == 7) {
            echo "</tr><tr>";
            $week_day = 0;
        }
    }

    if ($week_day != 0) {
        for ($i = $week_day; $i < 7; $i++) {
            echo "<td></td>";
        }
    }
    ?>
    </tr>
  </table>

</body>
</html>


