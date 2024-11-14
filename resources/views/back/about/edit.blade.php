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
                    <h3 class="text-center">About</h3>

                    <form action="{{ route('admin.abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Tambahkan field desc -->
                        <div class="form-group">
                            <label class="font-weight-bold">Desc</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="5" placeholder="Masukkan desc">{{ old('desc', $about->desc) }}</textarea>

                            <!-- error message untuk desc -->
                            @error('desc')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Tambahkan field desc_about -->
                        <div class="form-group">
                            <label class="font-weight-bold">Desc about</label>
                            <textarea class="form-control @error('desc_about') is-invalid @enderror" name="desc_about" rows="5" placeholder="Masukkan desc_about">{{ old('desc_about', $about->desc_about) }}</textarea>

                            <!-- error message untuk desc_about -->
                            @error('desc_about')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <!-- Menampilkan logo sebelumnya jika ada -->
                            <div>
                                <label class="font-weight-bold">image</label>
                            </div>
                            @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            @if ($about->image)
                            <img src="storage/posts/{{ $about->image}}" alt="Image" style="width: 150px">
                            @endif
                            <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image', $about->image) }}">
                        </div>

                        <!-- Tambahkan field vision -->
                        <div class="form-group">
                            <label class="font-weight-bold">vision</label>
                            <textarea class="form-control @error('vision') is-invalid @enderror" name="vision" rows="5" placeholder="Masukkan vision">{{ old('vision', $about->vision) }}</textarea>

                            <!-- error message untuk vision -->
                            @error('vision')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Tambahkan field misi -->
                        <div class="form-group">
                            <label class="font-weight-bold">misi</label>
                            <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" rows="5" placeholder="Masukkan misi">{{ old('misi', $about->misi) }}</textarea>

                            <!-- error message untuk misi -->
                            @error('misi')
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