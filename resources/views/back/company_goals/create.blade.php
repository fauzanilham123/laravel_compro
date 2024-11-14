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
                        <form action="{{ route('company_goals.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">ICON</label>
                                <input type="file" class="form-control @error('icon') is-invalid @enderror" name="icon">
                            
                                <!-- error message untuk title -->
                                @error('icon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            
                            <div class="form-group">
                                <label class="font-weight-bold">TARGET</label>
                                <input type="text" class="form-control @error('target') is-invalid @enderror" name="target" value="{{ old('target') }}" placeholder="insert target">
                            
                                <!-- error message untuk title -->
                                @error('target')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">DESC_ICON</label>
                                <textarea class="form-control @error('desc_icon') is-invalid @enderror" name="desc_icon" rows="5" placeholder="insert desc_icon">{{ old('desc_icon') }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('desc_icon')
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
    CKEDITOR.replace( 'desc_icon' );
</script>
@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    
 
</script>
@endpush
@endsection