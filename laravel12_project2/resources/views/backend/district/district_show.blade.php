@extends('backend.master')


@push('styles')

  <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('')}}assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
    
@endpush

    
@push('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <section class="panel mt-3">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Header --}}
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">
                    District Details
                </h5>

                <a href="{{ route('district.index') }}"
                   class="btn btn-primary btn-sm">
                    ← Back
                </a>
            </div>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-bordered align-middle mb-0">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>District Name</th>
                            <th class="text-end">Image</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            {{-- ID --}}
                            <td>
                                {{ $district->id }}
                            </td>

                            {{-- Name --}}
                            <td>
                                {{ $district->name }}
                            </td>

                            {{-- Image --}}
                            <td class="text-end">
                                <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                     width="40"
                                     height="40"
                                     class="rounded-circle"
                                     alt="avatar">
                            </td>

                        </tr>
                    </tbody>

                </table>
            </div>

        </section>
    </div>
</main>



@endpush

@push('scripts')

  <script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('')}}assets/js/main.js"></script>
    
@endpush