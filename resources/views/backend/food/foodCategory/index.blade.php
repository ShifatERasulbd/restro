@extends('backend.master')
@section('main')
 
    <section class="section">
            <div class="section-body">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Food Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($foodCategory as $foodCategory)    
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $foodCategory ->name}}</td>
                                <td><img src="{{ asset($foodCategory->image) }}" width="60" height="60"></td>
                                <td>
                                    <a href="{{ route('foodCategory.edit',$foodCategory->id) }}" class="btn btn-sm btn-warning"> <i class="fas fa-edit"></i></a>
                                    <form action="{{ route('foodCategory.delete', $foodCategory->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this Food Category?');">
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