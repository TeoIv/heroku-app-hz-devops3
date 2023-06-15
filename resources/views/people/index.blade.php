@extends('common.layout')

@section('body')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/people.css">
    </head>
    <div class="backgroundfade"></div>
    <div class="containerPeople">
        <div class="newPerson">
            <a class=is-primary" href="{{ route('people.create') }}">Add a New Person</a>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Occupation</th>
                        <th>Skill Level</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($people as $person)
                    <tr>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->occupation }}</td>
                        <td>{{ $person->skill }}</td>
                        <td>
                            <div class="field has-addons">
                                <p class="control">
                                    <a href="{{route('people.edit', $person)}}" class="button is-primary">
                                    <span class="icon is-small">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </span>
                                    </a>
                                </p>
                                <p class="control">
                                <form method="POST" action="{{ route('people.destroy', $person) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="button is-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                                </p>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
