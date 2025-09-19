@extends('backend.master')
@section('main')
 
    <section class="section">
            <div class="section-body">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Sauces</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Price</th>
                              
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sauces as $key=>$sauce)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$sauce->name}}</td>
                                <td>{{$sauce->price}}</td>
                                <td>
                                <a href="{{route('sauces.edit',$sauce->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('sauces.delete',$sauce->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tfoot>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

@endsection