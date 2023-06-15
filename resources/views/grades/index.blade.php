@extends('common.layout')

@section('body')
<head>
    <title>Dashboard</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/dashboard.css">
</head>
<body>
<div class="containerdashboard">
    <div class="backgroundfade"></div>
    <div class="addNewGrade">
        <a href="{{route('grades.create')}}">Add a new Grade</a>
    </div>
    <div class="dashboardtable">
        <table>
            <thead class="tablehead">
            <tr>
                <th>Course Name</th>
                <th>EXAM Type</th>
                <th>Credits</th>
                <th>Grade</th>
                <th>Edit the Grade</th>
            </tr>
            </thead>
            <tbody>
            @foreach($grades as $grade)
                <tr>
                    <td>{{ $grade->name }}</td>
                    <td>{{ $grade->exam }}</td>
                    <td>{{ $grade->credits }}</td>
                    <td>{{ $grade->best_grade }}</td>
                    <td>
                        <div class="field has-addons">
                            <p class="control">
                                <a href="{{route('grades.edit', $grade->id)}}" class="button is-small is-link">
                                    <span class="icon is-small">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </span>
                                </a>
                            </p>
                            <p class="control">
                                <form method="POST" action="{{ route('grades.destroy', $grade->id) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="button is-small is-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </p>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </thead>
        </table>
    </div>
    <div class="infotable">
        <img src="img/hzbestone1.png" class="hzlogodash" alt="">
        <p>This table shows which courses and exams I have taken during the first year in the HZ university.</p>
    </div>
    <div class="updated">
        <h5>Updated on: 13.02.2022 14:44</h5>
    </div>
    <div id="chartinfo">
        <img src="img/hzbestone1.png" class="hzlogodash" alt="">
        <p>The line chart on the right displays the relationship between Credits and the NBSA Boundary. The minimum of credits for continuing to the second year of education in the ICT programme is 45, otherwise the <span>NBSA</span> zone begins.</p>
    </div>
    <div id="curvechart"></div>
</div>

</body>
@endsection
