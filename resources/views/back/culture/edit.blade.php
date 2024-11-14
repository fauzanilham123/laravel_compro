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
                    <form action="{{ route('admin.cultures.update', $cultures->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <!-- Menampilkan image sebelumnya jika ada -->
                            <div>
                                <label class="font-weight-bold">image</label>
                            </div>
                            @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            @if ($cultures->image)
                            <img src="storage/posts/{{ $cultures->image}}" alt="Image" style="width: 150px">
                            @endif
                            <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $cultures->image) }}">
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