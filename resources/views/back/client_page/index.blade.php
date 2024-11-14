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
                    <h3 class="text-center my-4">DATA CLIENT_PAGE</h3>
                    <h5 class="text-center"><a href="https://santrikoding.com"></a></h5>         
                    <hr>

                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('admin.clients_page.create') }}" class="btn btn-md btn-success mb-3">ADD CLIENT PAGE</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">TITLE</th>
                                <th scope="col">DESC</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($clients_pages as $post)
                                <tr>
                                    
                                    <td>{{ $post->title }}</td>
                                    <td>{!! $post->desc !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.clients_page.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('admin.clients_page.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                          {{ $clients_pages->links() }}
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
