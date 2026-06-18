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
              <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Tables</h1>
                <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p>
              </div>
            </div>
            
          </div>

          <section class="panel">

            @session('success')
                
           

            <div class="alert alert-success" role="alert">
              {{$value}}
            </div>
              
             @endsession

            <div class="d-flex justify-content-end mb-3"><a href="{{url('/students/create')}}" class="btn btn-success">New Student</a></div>
            
            <div class="panel-header"><div><h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Advanced Table</span></h2><p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p></div><input class="form-control form-control-sm table-search" type="search" placeholder="Search orders" data-table-search="ordersTable" aria-label="Search orders"></div>
            <div class="table-responsive"><table class="table align-middle mb-0" id="ordersTable" data-searchable-table><thead><tr><th>Id</th><th>Name</th><th>Number</th><th>Subject</th><th>Email</th><th>District</th><th class="text-end">Action</th></tr></thead><tbody>


                @foreach ($students as $student )
                    
                
              <tr>
                

                <td><div class="table-media"><img class="product-thumb" src="../assets/images/ecommerce/product-1.jpg" alt="Wireless Headset"><span>{{$student->name}}</span></div></td>

                <td class="fw-semibold">{{$student->gender}}</td>

                <td>{{$student->phone}}</td>

                <td><span class="badge text-bg-success">{{$student->subject}}</span></td>
                <td>{{$student->email}}</td>

                <td>{{$student->district}}</td>

                <td class="text-end">
                
                  <form action="{{route('student.destroy',$student->id)}}" method="POST">
                    @csrf
                            
                            <a class="btn btn-outline-info btn-sm" href="{{route('student.show',$student->id)}}"><i class="bi bi-eye"></i></a>
                            <button onclick="return confirm('Are you sure to delet this student?')" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                            <a class="btn btn-outline-info btn-sm" href="{{route('student.edit',$student->id)}}"><i class="bi bi-pencil"></i></a>
                            
                  </form>

                </td>
            </tr>


              @endforeach
              
            </tbody></table></div>
          </section>
        </div>
</main>


@endpush

@push('scripts')

  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}assets/js/main.js"></script>
    
@endpush