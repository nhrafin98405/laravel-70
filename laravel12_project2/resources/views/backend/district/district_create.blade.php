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
              <span class="page-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Inputs</p>
                <h1 class="h3 mb-1">Forms</h1>
                <p class="text-muted mb-0">Reusable form controls, validation states, and field layouts.</p>
              </div>
            </div>
            
          </div>

          <section class="row g-3">
            <div class="col-12 col-xl-12">

                @if ($errors->any())

                    <div class="alert alert-danger"> 
                        <h3>ERROR</h3>
                        <ul> 
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                
                @endif
              <form class="panel needs-validation" method="post" action="{{route('district.store')}}"  novalidate>

                @csrf

                <div class="panel-header">
                    <div><h2 class="h5 mb-1 section-title"><i class="bi bi-bank" aria-hidden="true"></i><span>District Form</span></h2>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6"><label class="form-label" for="formName">District name</label><input class="form-control" id="formName" type="text" name="name" value="{{old('name')}}" required>
                        <div class="invalid-feedback">Full name is required.</div>
                    </div>
                
                
                
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-send" aria-hidden="true"></i> Submit Form</button>
                    </div>
                </div>
              </form>
            </div>

          </section>
        </div>
      </main>


@endpush

@push('scripts')

  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}assets/js/main.js"></script>
    
@endpush