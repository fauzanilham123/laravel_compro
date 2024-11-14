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
                        <form action="{{ route('admin.evolutions.update', $evolutions->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                        

                            <div class="form-group">
                                <label class="font-weight-bold">Years Record</label>
                                <input type="text" class="form-control @error('years_record') is-invalid @enderror" name="years_record" value="{{ old('years_record', $evolutions->years_record) }}" placeholder="insert years record">
                            
                                <!-- error message untuk title -->
                                @error('years_record')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Desc</label>
                                <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" rows="5" placeholder="insert desc">{{ old('desc', $evolutions->desc) }}</textarea>
                            
                                <!-- error message untuk content -->
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
    CKEDITOR.replace( 'desc' );
</script>
@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    
 
</script>
@endpush
@endsection