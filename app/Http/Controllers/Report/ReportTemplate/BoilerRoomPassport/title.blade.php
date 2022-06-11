<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
    <div class="page-center">
        <p class="title">ТЕХНИЧЕСКИЙ ПАСПОРТ КОТЕЛЬНОЙ</p>
    </div>

    <p>Муниципалитет: {{ $municipality }}</p>
    <p>Название котельной: {{ $title }}</p>
    <p>Название организации собственника: {{ $name_of_the_owner }}</p>
    <p>Название эксплуатирующей организации: {{ $operating_organization }}</p>
    <p>Адрес: {{ $address }}</p>
</body>
</html>
