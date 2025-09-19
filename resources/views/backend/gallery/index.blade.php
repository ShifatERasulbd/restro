@extends('backend.master')
@section('main')
 
    <section class="section">
            <div class="section-body">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Gallery</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                
                                <th>SL</th>
                                <th>Image</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($gallery as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td><img src="{{ asset($gallery->image) }}"></td>
                                     <td>
                                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('gallery.delete', $gallery->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this review?');">
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