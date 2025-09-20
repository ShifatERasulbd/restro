@extends('backend.master')
@section('main')
 
    <section class="section">
            <div class="section-body">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Food </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Category</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($food as $key=>$food)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $food->name }}</td>
                                    <td><img src="{{ asset($food->image) }}" alt="" width="60px"></td>
                                    <td>{{ $food->price }}</td>
                                    <td>{{ $food->category->name }}</td>
                                   
                                    <td>
                                    <a href="{{ route('food.edit',$food->id) }}" class="btn btn-sm btn-warning"> <i class="fas fa-edit"></i></a>
                                    <form action="{{ route('food.delete',$food->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this Food Category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                </td>
                                </tr>
                                @endforeach
                           
                            </tbody>
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