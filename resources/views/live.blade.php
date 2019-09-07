@extends('layout.main')
@section('title', 'Index')


@section('sidebar')
    @parent
@endsection

@section('active', 'active')

@section('content')
<div class="container">
    <!-- <table class="table">
    <thead>
        <tr class="head">
            <th>First</th>
            <th>Last</th>
            <th>Handle</th>
        </tr>
    </thead>
    </table> -->
    <table class="table table-sm table-bordered" id="tb2">
        <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td>Larry</td>
            <td>the Bird</td>   
            <td>@twitter</td>
        </tr>
    </table>
</div>
@endsection
