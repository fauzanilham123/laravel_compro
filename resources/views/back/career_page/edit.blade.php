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
                    <h3 class="text-center">Career page</h3>

                    <form action="{{ route('admin.career_pages.update', $career_pages->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Tambahkan field title -->
                        <div class="form-group">
                            <label class="font-weight-bold">Title</label>
                            <textarea class="form-control @error('title') is-invalid @enderror" name="title" rows="5" placeholder="Masukkan title">{{ old('title', $career_pages->title) }}</textarea>

                            <!-- error message untuk title -->
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Tambahkan field desc -->
                        <div class="form-group">
                            <label class="font-weight-bold">Desc</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="5" placeholder="Masukkan desc">{{ old('desc', $career_pages->desc) }}</textarea>

                            <!-- error message untuk desc -->
                            @error('desc')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

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
                            @if ($career_pages->image)
                            <img src="storage/posts/{{ $career_pages->image}}" alt="Image" style="width: 150px">
                            @endif
                            <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $career_pages->image) }}">
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
    CKEDITOR.replace('position');
</script>
@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    //message with toastr
    @if(session() -> has('success'))

    toastr.success('{{ session('
        success ') }}', 'BERHASIL!');

    @elseif(session() -> has('error'))

    toastr.error('{{ session('
        error ') }}', 'GAGAL!');

    @endif
</script>
@endpush
@endsection