<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
    <div class="page-center">
        <p class="title">ЗАТРАТЫ НА СОЖЕРЖАНИЕ КОТЕЛЬНЫХ</p>
        @if($municipality)
        <p class="title">МУНИЦИПАЛИТЕТ: {{ $municipality }} </p>
        @else
            <p class="title"> ЛИПЕЦКАЯ ОБЛАСТЬ </p>
        @endif
        <p class="title">{{ $startYear }}-{{ $endYear }}</p>
    </div>
</body>
</html>
