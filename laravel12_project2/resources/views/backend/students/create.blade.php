


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
              <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Management</p>
                <h1 class="h3 mb-1">Add Student</h1>
                <p class="text-muted mb-0">Create a new Student account with role and team assignments.</p>
              </div>
            </div>
            <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{url('/students')}}"><i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
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

              <form method="POST" action="{{route('student.store')}}" class="panel needs-validation" novalidate>

                @csrf

                <div class="panel-header"><div><h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus" aria-hidden="true"></i><span>Student Information</span></h2><p class="text-muted mb-0">Create a Student account with validated fields.</p></div></div>
                <div class="row g-3">


                  <div class="col-md-6">
                    <label class="form-label" for="firstName" >First name</label>
                    <input class="form-control" id="firstName" name="fullname" type="text" value="{{old('fullname')}}" required>
                    <div class="invalid-feedback">First name is required.</div>
                  </div>


                <div class="col-md-6">
                    <label class="form-label d-block">Gender</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{old('gender')=='male'?'checked':''}} required>
                        <label class="form-check-label" for="male"  >Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{old('gender')=='female'?'checked':''}}>
                        <label class="form-check-label" for="female">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{old('gender')=='others'?'checked':''}}>
                        <label class="form-check-label" for="other">Other</label>
                    </div>

                    <div class="invalid-feedback">
                        Please select your gender.
                    </div>
                </div>


                  <div class="col-md-6"><label class="form-label" for="email">Email</label><input class="form-control" value="{{old('email')}}" name="email" type="email" required><div class="invalid-feedback">Enter a valid email.</div></div>


                  <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input class="form-control" value="{{old('phone')}}" name="phone" type="tel" required><div class="invalid-feedback">Phone number is required.</div></div>


                  <div class="col-md-6"><label class="form-label" for="role">District</label>
                    <select class="form-select" id="role" name="district" required>
                      <option value="">Choose district</option>
                      <option value="dhaka"{{old('district')=='dhaka'?'selected':''}}>Dhaka</option>
                      <option value="khulna"{{old('district')=='khulna'?'selected':''}}>khulna</option>
                      <option value="mymensingh"{{old('district')=='mymensingh'?'selected':''}}>Mymensingh</option>
                      <option value="haluaghat"{{old('district')=='haluaghat'?'selected':''}}>Haluaghat</option>
                    </select>
                    
                  </div>


                <div class="col-md-6">
                    <label class="form-label d-block">Subjects</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="php" name="subjects[]" value="html" {{old('subjects')=='html'?'checked':''}}>
                        <label class="form-check-label" for="cse">HTML</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="javascript"{{old('subjects')=='JavaScript'?'checked':''}} name="subjects[]" value="JavaScript">
                        <label class="form-check-label" for="javascript">JavaScript</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="laravel"{{old('subjects')=='laravel'?'checked':''}} name="subjects[]" value="Laravel">
                        <label class="form-check-label" for="laravel">Laravel</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="react"{{old('subjects')=='react'?'checked':''}} name="subjects[]" value="React">
                        <label class="form-check-label" for="react">React</label>
                    </div>

                    <div class="invalid-feedback form-check-inline">
                        Please select at least one subject.
                    </div>
                </div>





                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary" href="users.html">Cancel</a><button class="btn btn-primary" type="submit"><i class="bi bi-person-check" aria-hidden="true"></i> Create User</button></div>
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