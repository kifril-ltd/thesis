<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
    @foreach($charts as $chart)
        <img src="https://quickchart.io/chart?c={{$chart}}">
    @endforeach
</body>
</html>
