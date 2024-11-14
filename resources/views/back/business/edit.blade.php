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
                        <form action="{{ route('admin.business.update', $business->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                 <!-- Menampilkan logo sebelumnya jika ada -->
                                 <div>
                                 <label class="font-weight-bold">Logo</label>
                                 </div>
                                 @error('logo')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                    </div>
                                    @enderror
                                    @if ($business->logo)
                                        <img src="{{ asset(Storage::url('posts/' . $business->logo)) }}" alt="Image" style="width: 150px">
                                    @endif
                                 <input type="file"  accept="image/*" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo', $business->logo) }}">
                            </div>

                            <div class="form-group">
                            <label class="font-weight-bold">Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" name="title" rows="5" placeholder="Masukkan title" value="{{ old('title', $business->title) }}"></input>
                        
                            <!-- error message untuk title -->
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                        <label class="font-weight-bold">Desc</label>
                        <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="5" placeholder="Masukkan desc">{{ old('desc', $business->desc) }}</textarea>
                    
                        <!-- error message untuk desc -->
                        @error('desc')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                        <div class="form-group">
                        <label class="font-weight-bold">Link</label>
                        <textarea class="form-control @error('link') is-invalid @enderror" name="link" rows="5" placeholder="Masukkan link">{{ old('link', $business->link) }}</textarea>
                    
                        <!-- error message untuk link -->
                        @error('link')
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
</script>
@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    
 
</script>
@endpush
@endsection