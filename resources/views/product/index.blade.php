@extends('layout.main')

@section('title','product')

@section('contact')

    <h1>product</h1>
    <div class="card mt-3 col-10">
        <div class="card-header p-3 bg-dark">
            <div class="row">
                <div class="col">
                    <h3 class="card-title text-white fw-light">product</h3>
                </div>

                <div class="col">
                    <form action="#">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <input class="form-control" type="text" placeholder="product">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-danger">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>product id</th>
                    <th>product name</th>
                    <th>action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection
