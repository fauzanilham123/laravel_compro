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
                        <form action="{{ route('admin.careers.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            <div class="form-group">
                            <label class="font-weight-bold">ID_CATEGORY</label>
                            <select class="form-control @error('id_category') is-invalid @enderror" name="id_category">
                                <option value="">Pilih ID Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            <!-- error message untuk id_category -->
                            @error('id_category')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>  

                            <div class="form-group">
                                <label class="font-weight-bold">POSITION</label>
                                <textarea class="form-control @error('position') is-invalid @enderror" name="position" rows="5" placeholder="Masukkan Position">{{ old('position') }}</textarea>
                            
                                <!-- error message untuk positiont -->
                                @error('position')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">LOCATION</label>
                                <textarea class="form-control @error('location') is-invalid @enderror" name="location" rows="5" placeholder="Masukkan Location">{{ old('location') }}</textarea>
                            
                                <!-- error message untuk locationt -->
                                @error('location')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">DESCRIPTION</label>
                                <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="5" placeholder="Masukkan Description">{{ old('desc') }}</textarea>
                            
                                <!-- error message untuk desct -->
                                @error('desc')
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
</body>
</html>
@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    
 
</script>
@endpush
@endsection