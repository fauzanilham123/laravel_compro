@extends('back.layouts.app')
@section('content')
@push('styles-plugins')

@endpush

@push('styles')
<style>

</style>
@endpush
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center">Home</h3>
                        <form action="{{ route('admin.homes.update', $homes->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <textarea type="text" class="form-control @error('desc_section_1') is-invalid @enderror" name="desc_section_1" value="" placeholder="Insert Description Section 1">{{ old('desc_section_1',$homes->desc_section_1) }}</textarea>
                            
                                <!-- error message untuk desc_section_1 -->
                                @error('desc_section_1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Tambahkan field count_bussines -->
                        <div class="form-group">
                            <label class="font-weight-bold">Count Bussines</label>
                            <input type="text" class="form-control @error('count_bussines') is-invalid @enderror" name="count_bussines" value="{{ old('count_bussines', $homes->count_bussines) }}">
                        
                            <!-- error message untuk count_bussines -->
                            @error('count_bussines')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        
                        <!-- Tambahkan field count_member -->
                        <div class="form-group">
                            <label class="font-weight-bold">Count Member</label>
                            <input type="text" class="form-control @error('count_member') is-invalid @enderror" name="count_member" value="{{ old('count_member', $homes->count_member) }}" placeholder="Masukkan count_member">
                            
                            <!-- error message untuk count_member -->
                            @error('count_member')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <!-- Tambahkan field count_client -->
                        <div class="form-group">
                            <label class="font-weight-bold">Count Client</label>
                            <input type="text" class="form-control @error('count_client') is-invalid @enderror" name="count_client" value="{{ old('count_client', $homes->count_client) }}" placeholder="Insert count_client">
                            
                            <!-- error message untuk count_client -->
                            @error('count_client')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        
                        <!-- Tambahkan field count_project -->
                        <div class="form-group">
                            <label class="font-weight-bold">Count Project</label>
                            <input type="text" class="form-control @error('count_project') is-invalid @enderror" name="count_project" value="{{ old('count_project', $homes->count_project) }}" placeholder="Insert count_project">
                            
                            <!-- error message untuk count_project -->
                            @error('count_project')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                            <button type="submit" class="btn btn-md btn-primary">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'position' );
</script>
@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    
 @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
</script>
@endpush
@endsection