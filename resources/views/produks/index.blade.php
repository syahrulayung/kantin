@extends('layouts.app', ['title' => __('Produk')])

@section('content')
    @include('layouts.headers.cards')
 
  <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Produk') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="/create" class="btn btn-sm btn-primary">{{ __('Add') }}</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Produsen</th>
                                    <th scope="col">Nama Makanan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $key => $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->namaprodusen}}</td>
                                        <td>{{ $p->namamakanan }}</td>
                                        <td>{{ $p->hargamakanan }}</td>
                                        <td>{{ $p->stok }}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item" href="/edit">{{ __('Edit') }}</a>
                                                            <a class="dropdown-item" href="/produks/hapus/{{ $p->id }}">{{ __('Delete') }}</a>
                                                        
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
        @include('layouts.footers.auth')
    </div>
</body>
@endsection