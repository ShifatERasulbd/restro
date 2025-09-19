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
                                <th>Location Title</th>
                                <th>Location</th>
                                <th>Contact Number Title</th>
                                <th>Contact Number</th>
                                <th>Opening Hour Title</th>
                                <th>Opening Hour</th>
                                <th>Order Title</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($aboutUs as $aboutUs)
                                    <tr>
                                         <td>{{$loop->iteration}}</td>
                                        <td>{{ $aboutUs->locationTitle }}</td>
                                        <td>{{ $aboutUs->location }}</td>
                                        <td>{{ $aboutUs->contactNumberTitle }}</td>
                                        <td>{{ $aboutUs->contactNumber }}</td>
                                        <td>{{ $aboutUs->openingHoursTitle }}</td>
                                        <td>{{ $aboutUs->openingHours }}</td>
                                        <td>{{ $aboutUs->orderTitle }}</td>
                                        <td> 
                                          <a href="{{ route('aboutUs.edit',$aboutUs->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                             
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