@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            side bar here
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Items</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('inventories.store')}}">
                        <div class="form-group">
                            <label for="#name">Item Name:</label>
                            <input type="text" name='name' id='name'>
                        </div>
                        <div class="form-group">
                            <label for="#name">Quantity:</label>
                            <input type="text" name='quantity' id='quantity'>
                        </div>
                         <div class="form-group">
                            <label for="#name">Date Updated:</label>
                            <input type="text" name='date updated' id='date updated'>
                        </div>
                        <button type="submit">Add Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
