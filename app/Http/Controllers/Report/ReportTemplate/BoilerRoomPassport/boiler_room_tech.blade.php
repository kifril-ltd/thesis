<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
<div class="text-center">
    <p class="section">ПАСПОРТ КОТЕЛЬНОЙ</p>
</div>

<p>Принадлежность: {{ $boilerRoom[0]->municipality }}</p>
<p>Установленная мощность: {{ $boilerRoom[0]->installed_capacity }}</p>
<p>Год ввода в эксплуатацию: {{ $boilerRoom[0]->operation_year }}</p>


<p class="text-center section">1. Технические характеристики котельной</p>
<table class="tg">
    <thead>
    <tr>
        <th class="tg-center" rowspan="2">Показатель<br></th>
        <th class="tg-center" colspan="{{ count($boilers) }}">Номер котла</th>
        <th class="tg-center" rowspan="2">Всего по<br>котельной<br></th>
    </tr>
    <tr>
        @foreach($boilers as $boiler)
            <th class="tg-center">{{ $loop->index + 1 }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-left">1. Утсановленная мощность,<br>Гкал/час</td>
        @foreach($boilers as $boiler)
            <td class="tg-center"> {{ $boiler->boiler_installed_capacity }}</td>
        @endforeach
        <td class="tg-center"> {{ round($boilerRoom[0]->total_capacity, 4) }}</td>
    </tr>
    <tr>
        <td class="tg-left">2. Год ввода в эксплуатацию</td>
        @foreach($boilers as $boiler)
            <td class="tg-center"> {{ $boiler->boiler_operation_year }}</td>
        @endforeach
        <td class="tg-center"> - </td>
    </tr>
    <tr>
        <td class="tg-left">3. Срок службы</td>
        @foreach($boilers as $boiler)
            <td class="tg-center"> {{ $boiler->life_time }}</td>
        @endforeach
        <td class="tg-center"> - </td>
    </tr>
    <tr>
        <td class="tg-left">4. Год последнего <br>капитального ремонта</td>
        @foreach($boilers as $boiler)
            <td class="tg-center"> {{ $boiler->boiler_building_renovation_year ?? '-' }}</td>
        @endforeach
        <td class="tg-center"> - </td>
    </tr>
    <tr>
        <td class="tg-left">5. Используемое топливо (основное)</td>
        @foreach($boilers as $boiler)
            <td class="tg-center"> {{ $boiler->type_of_main_fuel ?? '-' }}</td>
        @endforeach
        <td class="tg-center"> - </td>
    </tr>
    <tr>
        <td class="tg-left">6. Используемое топливо (резервное)</td>
        @foreach($boilers as $boiler)
            <td class="tg-center"> {{ $boiler->type_of_backup_fuel ?? '-' }}</td>
        @endforeach
        <td class="tg-center"> - </td>
    </tr>
    </tbody>
</table>
</body>
</html>
