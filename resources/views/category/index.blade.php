@extends('layout.main')

@section('title','category')

@section('contact')

    <h1>category</h1>
    <div class="card mt-3 col-10">
        <div class="card-header p-3 bg-dark">
            <div class="row">
                <div class="col">
                    <h3 class="card-title text-white fw-light">Category</h3>
                </div>

                <div class="col">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <input name="category" class="from-control" type="text" placeholder="category">
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
                    <th>category id</th>
                    <th>category name</th>
                    <th>action</th>
                </tr>
                </thead>
            </table>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                        @foreach( $category as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->category}}</td>
                                <td>
                                    <a class="btn btn-warning"></a>
                                    <a class="btn btn-danger"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </tbody>
        </div>
        </div>

@endsection
