<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
<div class="text-center">
    <p class="section">3. Характеристика тепловых сетей</p>
</div>

<table class="tg">
    <thead>
    <tr>
        <th class="tg-center">Год ввода<br></th>
        <th class="tg-center">Диаметр трубопровода, мм</th>
        <th class="tg-center">Протяженность трубопровода, м</th>
        <th class="tg-center">Количество трубопроводов</th>
        <th class="tg-center">Способ прокладки</th>
    </tr>
    </thead>
    <tbody>
    @foreach($heating_networks as $heating_network)
        <tr>
            <td class="tg-center">{{ $heating_network->operation_year ?? '-' }}</td>
            <td class="tg-center">{{ $heating_network->pipeline_diameter ?? '-' }}</td>
            <td class="tg-center">{{ $heating_network->length_of_heating_main ?? '-' }}</td>
            <td class="tg-center">{{ $heating_network->number_of_pipelines ?? '-' }}</td>
            <td class="tg-center">{{ $heating_network->type_of_gasket ?? '-' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
