<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" media="dompdf"
          href="{{ resource_path('css/reports/passport/passport.css') }}">
</head>
<body>
<p class="text-center section">1. Технические характеристики котельной</p>
<table class="tg">
    <thead>
    <tr>
        <th class="tg-center" rowspan="2">№<br></th>
        <th class="tg-center" rowspan="2">Название котельной</th>
        <th class="tg-center" rowspan="2">Год</th>
        @if($types['energy'])
            <th class="tg-center" colspan="3">Затраты на покупку энергоресурсов, тыс.руб</th>
        @endif
        @if($types['salary'])
            <th class="tg-center" colspan="3">Затраты на персонал, тыс.руб</th>
        @endif
        @if($types['operational'])
            <th class="tg-center" colspan="3">Затраты на обслуживание, тыс.руб</th>
        @endif
    </tr>
    <tr>
        @if($types['energy'])
            <th class="tg-center">Газ</th>
            <th class="tg-center">Эл-во</th>
            <th class="tg-center">Хол. вода</th>
        @endif
        @if($types['salary'])
            <th class="tg-center">Экспл-ый</th>
            <th class="tg-center">Ремонтный</th>
            <th class="tg-center">ИТР</th>
        @endif
        @if($types['operational'])
            <th class="tg-center">Тех. обслуж.</th>
            <th class="tg-center">Ремонт</th>
            <th class="tg-center">Оборудование</th>
        @endif
    </tr>
    </thead>
    <tbody>
    @php
        $currentBoilerRoom = ''
    @endphp

    @foreach($expenditures as $expenditure)
        @if (($loop->index > 0 && $currentBoilerRoom != $expenditure->boiler_room_id))
            <tr class="sub-totals">
                <td class="tg-center" colspan="3">Всего по котельной</td>
                @if($types['energy'])
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('purchase_of_gas') }}</td>
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('purchase_of_electricity') }}</td>
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('purchase_of_cold_water') }}</td>
                @endif
                @if($types['salary'])
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('operational_staff_salary') }}</td>
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('repair_staff_salary') }}</td>
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('engineering_staff_salary') }}</td>
                @endif
                @if($types['operational'])
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('maintenance_cost') }}</td>
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('repair_cost') }}</td>
                    <td class="tg-center">{{ $expenditures->where('boiler_room_id', $currentBoilerRoom)->sum('equipment_operating_cost') }}</td>
                @endif
            </tr>
        @endif
        <tr>
            @if ($currentBoilerRoom != $expenditure->boiler_room_id)
                @php ($currentBoilerRoom = $expenditure->boiler_room_id)
            @endif
            <td class="tg-center">{{ $loop->index + 1 }}</td>
            <td class="tg-center">{{ $expenditure->boiler_room_title }}</td>
            <td class="tg-center">{{ $expenditure->expenditure_year }}</td>
            @if($types['energy'])
                <td class="tg-center">{{ $expenditure->purchase_of_gas }}</td>
                <td class="tg-center">{{ $expenditure->purchase_of_electricity }}</td>
                <td class="tg-center">{{ $expenditure->purchase_of_cold_water }}</td>
            @endif
            @if($types['salary'])
                <td class="tg-center">{{ $expenditure->operational_staff_salary }}</td>
                <td class="tg-center">{{ $expenditure->repair_staff_salary }}</td>
                <td class="tg-center">{{ $expenditure->engineering_staff_salary }}</td>
            @endif
            @if($types['operational'])
                <td class="tg-center">{{ $expenditure->maintenance_cost }}</td>
                <td class="tg-center">{{ $expenditure->repair_cost }}</td>
                <td class="tg-center">{{ $expenditure->equipment_operating_cost }}</td>
            @endif
        </tr>
        @if($loop->last)
            <tr class="totals">
                <td class="tg-center" colspan="3">Всего</td>
                @if($types['energy'])
                    <td class="tg-center">{{ $expenditures->sum('purchase_of_gas') }}</td>
                    <td class="tg-center">{{ $expenditures->sum('purchase_of_electricity') }}</td>
                    <td class="tg-center">{{ $expenditures->sum('purchase_of_cold_water') }}</td>
                @endif
                @if($types['salary'])
                    <td class="tg-center">{{ $expenditures->sum('operational_staff_salary') }}</td>
                    <td class="tg-center">{{ $expenditures->sum('repair_staff_salary') }}</td>
                    <td class="tg-center">{{ $expenditures->sum('engineering_staff_salary') }}</td>
                @endif
                @if($types['operational'])
                    <td class="tg-center">{{ $expenditures->sum('maintenance_cost') }}</td>
                    <td class="tg-center">{{ $expenditures->sum('repair_cost') }}</td>
                    <td class="tg-center">{{ $expenditures->sum('equipment_operating_cost') }}</td>
                @endif
            </tr>
        @endif
    @endforeach
    </tbody>
</table>
</body>
</html>
