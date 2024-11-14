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
                        <form action="{{ route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">DESC_1</label>
                                <textarea type="text" class="form-control @error('desc_1') is-invalid @enderror" name="desc_1" value="{{ old('desc_1') }}" placeholder="Masukkan desc_1"></textarea>
                            
                                <!-- error message untuk title -->
                                @error('desc_1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">DESC_2</label>
                                <textarea type="text" class="form-control @error('desc_2') is-invalid @enderror" name="desc_2" value="{{ old('desc_2') }}" placeholder="Masukkan desc_2"></textarea>
                            
                                <!-- error message untuk title -->
                                @error('desc_2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">VISION</label>
                                <input type="text" class="form-control @error('vision') is-invalid @enderror" name="vision" value="{{ old('vision') }}" placeholder="Masukkan vision">
                            
                                <!-- error message untuk title -->
                                @error('vision')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MISI</label>
                                <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" rows="5" placeholder="Masukkan misi">{{ old('misi') }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('misi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">COUNT_TARGET</label>
                                <input type="text" class="form-control @error('count_target') is-invalid @enderror" name="count_target" value="{{ old('count_target') }}" placeholder="Masukkan count_target">
                            
                                <!-- error message untuk title -->
                                @error('count_target')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">count_Digital_Campaign</label>
                                <input type="text" class="form-control @error('count_Digital_Campaign') is-invalid @enderror" name="count_Digital_Campaign" value="{{ old('count_Digital_Campaign') }}" placeholder="Masukkan count_Digital_Campaign">
                            
                                <!-- error message untuk title -->
                                @error('count_Digital_Campaign')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">COUNT_TARGET_ICOME</label>
                                <input type="text" class="form-control @error('count_target_income') is-invalid @enderror" name="count_target_income" value="{{ old('count_target_income') }}" placeholder="Masukkan count_target_income">
                            
                                <!-- error message untuk title -->
                                @error('count_target_income')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">COUNT_INCOME</label>
                                <input type="text" class="form-control @error('count_income') is-invalid @enderror" name="count_income" value="{{ old('count_income') }}" placeholder="Masukkan count_income">
                            
                                <!-- error message untuk title -->
                                @error('count_income')
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