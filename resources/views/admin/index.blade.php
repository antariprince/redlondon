@extends('layouts.app')

@section('content')

<br>
    <div class="panel panel-default">
        <div class="panel-heading text-center">Registered Users</div>
        <div class="panel-body">

    <table class="table table-hover">
        <thead>
            <th>
                Image
            </th>

            <th>
                Name
            </th>

            <th>
                Email
            </th>
        </thead>
        <tbody>
            @if($users->count() > 0)
            @foreach($users as $p)
                <tr>
                    <td>
                        <img src="{{ $p->avatar }}" alt="{{ $p->name }}" width="90px">
                    </td>
                    <td>
                        {{ $p->name }}
                    </td>

                    <td>
                        {{ $p->email }}
                    </td>
                    
                </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">No registered users yet</td>
            </tr>
            @endif
        </tbody>
    </table>
    </div>
    </div>
@stop