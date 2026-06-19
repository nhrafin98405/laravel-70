@extends('backend.master')


@push('styles')

  <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('')}}assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
    
@endpush

    
@push('content')

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-bank" aria-hidden="true"></i></span>
              <div>
                
                <h1 class="h3 mb-1">Districts</h1>
                <p class="text-muted mb-0">Review Districts, Name's.</p>
              </div>
            </div>
            <div class="heading-actions">
                <a class="btn btn-primary btn-sm" href="{{url('/district/create')}}"><i class="bi bi-person-plus" aria-hidden="true"></i> Add Districts</a>
            </div>
          </div>





          <section class="panel mt-3">

            @session('success')
                
           

            <div class="alert alert-success" role="alert">
              {{$value}}
            </div>
              
             @endsession

            <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Districts List</span></h2>
                <p class="text-muted mb-0">Search, review, and manage Districts.</p>
              </div>

            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                <thead><tr>
                    <th scope="col">Id</th>
                    <th scope="col">Districts Name</th>
                    <th scope="col" class="text-end">Action</th>
                </tr></thead>
                <tbody>
                        @foreach($districts as $district)

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <p class="fw-semibold mb-0">{{$district->id}}</p>
                                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-1.jpg" alt="Sarah Ahmed">
                                        <div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$district->name}}</td>
                                
                                <td class="text-end">
                                    <form action="{{route('district.destroy',$district->id)}}" method="POST">
                    @csrf
                            
                            <a class="btn btn-outline-info btn-sm" href="{{route('district.show',$district->id)}}"><i class="bi bi-eye"></i></a>
                            <button onclick="return confirm('Are you sure to delet this district?')" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                            <a class="btn btn-outline-info btn-sm" href="{{route('district.edit',$district->id)}}"><i class="bi bi-pencil"></i></a>
                            
                  </form>
                                </td>
                            </tr>
                                
                        @endforeach
                        
                </tbody>
              </table>
            </div>
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
              <p class="text-muted small mb-0">Showing 1 to 5 of 124 users</p>
              <nav aria-label="Users pagination"><ul class="pagination pagination-sm mb-0"><li class="page-item disabled"><a class="page-link" href="#">Previous</a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">Next</a></li></ul></nav>
            </div>
          </section>
        </div>
      </main>



@endpush

@push('scripts')

  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}assets/js/main.js"></script>
    
@endpush