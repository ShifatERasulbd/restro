@extends('backend.master')
@section('main')
 
    <section class="section">
            <div class="section-body">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Sliders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slider as $slider)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img src="{{asset($slider->image)}}" height="60" width="60"></td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->subTitle}}</td>
                                  
                                      <td>
                                            <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('sliders.delete',$slider->id)}}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this review?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
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