@extends('back/layouts.app')
@extends('layouts.app')
@push('styles-plugins')

@endpush

@push('styles')
<style>

    </style>
@endpush


@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Evolution</h3>
                    <h5 class="text-center"><a href="https://santrikoding.com"></a></h5>         
                    <hr>

                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.clients.create') }}" class="btn btn-md btn-success mb-3">ADD Evolution</a>
                                        {{ $dataTable->table() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

            @elseif(session()->has('error'))
            
            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
            @endif
            </script>
            <script>
    function deleteRecord(url) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            window.location.href = url;
        }
    }
</script>


@push('scripts-plugins')

@endpush

@push('scripts')

{{ $dataTable->scripts() }} 

@endpush

@endsection
