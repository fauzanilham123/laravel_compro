@extends('back.layouts.app')
@section('content')
@push('styles-plugins')

@endpush

@push('styles')
<style>

</style>
@endpush

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">DATA ABOUT</h3>
                    <h5 class="text-center"><a href="https://santrikoding.com"></a></h5>         
                    <hr>

                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.abouts.create') }}" class="btn btn-md btn-success mb-3">ADD ABOUT</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th scope="col">Image</th>
                                <th scope="col">Desc 1</th>
                                <th scope="col">Desc 2</th>
                                <th scope="col">Vision</th>
                                <th scope="col">Misi</th>
                                <th scope="col">Count Target</th>
                                <th scope="col">Count Digital Campaign</th>
                                <th scope="col">Count Target Income</th>
                                <th scope="col">Count Income</th>
                                <th scope="col">aksi</th>

                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($abouts as $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{!! $post->desc_1 !!}</td>
                                    <td>{!! $post->desc_2 !!}</td>
                                    <td>{!! $post->vision !!}</td>
                                    <td>{!! $post->misi !!}</td>
                                    <td>{!! $post->count_target !!}</td>
                                    <td>{!! $post->count_Digital_Campaign !!}</td>
                                    <td>{!! $post->count_target_income !!}</td>
                                    <td>{!! $post->count_income !!}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.client.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('admin.abouts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $abouts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

@push('scripts-plugins')

@endpush

@push('scripts')
<script>
    
 
</script>
@endpush
@endsection
