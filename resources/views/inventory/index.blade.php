@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            side bar here
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inventory Listing</div>

                <div class="card-body">
                    <table>
                        <thead>
                        <tr>
                            <th>Col 1</th>
                            <th>Col 1</th>
                            <th>Col 1</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>col 1 value</td>
                                <td>col 1 value</td>
                                <td>col 1 value</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
