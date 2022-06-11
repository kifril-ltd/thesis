<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
<div class="text-center">
    <p class="section">2. Тепловой баланс котельной</p>
</div>

<table class="tg">
    <thead>
    <tr>
        <th></th>
        <th class="tg-center">Количество подключенных потребителей<br></th>
        <th class="tg-center">Суммарная нагрузка <br>на отопление, Гкал/час</th>
        <th class="tg-center">Суммарная нагрузка на ГВС, Гкал/час</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="tg-center">Жилые дома</td>
        <td class="tg-center"> {{ $connected_homes }} </td>
        <td class="tg-center"> {{ $summ_heating_supply_for_homes }} </td>
        <td class="tg-center"> {{ $summ_hot_water_supply_for_homes }} </td>
    </tr>
    <tr>
        <td class="tg-center">Объекты соц. сферы</td>
        <td class="tg-center"> {{ $connected_budgets }} </td>
        <td class="tg-center"> {{ $summ_heating_supply_for_social }} </td>
        <td class="tg-center"> {{ $summ_hot_water_supply_for_social }} </td>
    </tr>
    <tr>
        <td class="tg-center">Прочие</td>
        <td class="tg-center"> {{ $connected_others }} </td>
        <td class="tg-center"> {{ $summ_heating_supply_others }} </td>
        <td class="tg-center"> {{ $summ_hot_water_supply_others }} </td>
    </tr>
    <tr>
        <td class="tg-center">Всего по котельной</td>
        <td class="tg-center"> {{ $connected_homes + $connected_budgets + $connected_others }} </td>
        <td class="tg-center"> {{ $summ_heating_supply_for_homes + $summ_heating_supply_for_social + $summ_heating_supply_others }} </td>
        <td class="tg-center"> {{ $summ_hot_water_supply_for_homes + $summ_hot_water_supply_for_social + $summ_hot_water_supply_others }} </td>
    </tr>
    </tbody>
</table>
</body>
</html>
