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
                        <h3 class="text-center">Setting</h3>
                        <form action="{{ route('admin.settings.update', $settings->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                 <!-- Menampilkan logo sebelumnya jika ada -->
                                 <div>
                                 <label class="font-weight-bold">Logo</label>
                                 </div>
                                 <!-- error message untuk title -->
                                 @error('logo')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                    </div>
                                    @enderror
                                    @if ($settings->logo)
                                        <img src="storage/posts/{{ $settings->logo}}" alt="Logo" style="width: 150px">
                                    @endif
                                 <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo', $settings->logo) }}" accept="image/*">
                                 
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No telephone</label>
                                <input type="text" class="form-control @error('no_telephone') is-invalid @enderror" name="no_telephone" value="{{ old('no_telephone', $settings->no_telephone) }}" placeholder="Masukkan No">
                            
                                <!-- error message untuk title -->
                                @error('no_telephone')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $settings->email) }}" placeholder="Masukkan Email">
                            
                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $settings->address) }}" placeholder="Masukkan Adress">
                            
                                <!-- error message untuk title -->
                                @error('address')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Working hours</label>
                                <input type="text" class="form-control @error('working_hours') is-invalid @enderror" name="working_hours" value="{{ old('working_hours', $settings->working_hours) }}" placeholder="Insert WORKING HOURS">
                            
                                <!-- error message untuk title -->
                                @error('working_hours')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Maps</label>
                                <textarea class="form-control @error('maps') is-invalid @enderror" name="maps" rows="5" placeholder="insert map">{{ old('maps', $settings->maps) }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('maps')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">No whatsapp</label>
                                <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" value="{{ old('no_wa', $settings->no_wa) }}" placeholder="insert Nomor">
                            
                                <!-- error message untuk title -->
                                @error('no_wa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Link Facebook</label>
                                <input required type="text" class="form-control @error('link_fb') is-invalid @enderror" name="link_fb" value="{{ old('link_fb', $settings->link_fb) }}" placeholder="insert link facebook">
                            
                                <!-- error message untuk title -->
                                @error('link_fb')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Link Instagram</label>
                                <input type="text" class="form-control @error('link_ig') is-invalid @enderror" name="link_ig" value="{{ old('link_ig', $settings->link_ig) }}" placeholder="insert link instagram">
                            
                                <!-- error message untuk title -->
                                @error('link_ig')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Link Twitter</label>
                                <input type="text" class="form-control @error('link_twitter') is-invalid @enderror" name="link_twitter" value="{{ old('link_twitter', $settings->link_twitter) }}" placeholder="insert link twitter">
                            
                                <!-- error message untuk title -->
                                @error('link_twitter')
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