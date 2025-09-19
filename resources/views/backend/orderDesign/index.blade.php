@extends('backend.master')
@section('main')
 
    <section class="section">
            <div class="section-body">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Offers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="mainTable" class="table table-striped">
                            <thead>
                            <tr>
                                
                                <th>SL</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Image</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($orderDesign as $offer)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $offer->title }}</td>
                                        <td>{{ $offer->subtitle }}</td>
                                        <td><img src="{{ asset($offer->image) }}" width="60" height="60"></td>
                                        <td> 
                                          <a href="{{ route('orderDesing.edit',$offer->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                              <!-- Delete Icon -->
                                        <form action="{{ route('orderDesign.delete',$offer->id) }}" method="POST" 
                                            onsubmit="return confirm('Are you sure you want to delete this Offer?');">
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