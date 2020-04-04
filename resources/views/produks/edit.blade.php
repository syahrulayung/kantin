@extends('layouts.app', ['title' => __('Produk')])

@section('content')
    @include('users.partials.header', ['title' => __('Edit')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Produk') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('/produks') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('produk.update', $produk->id) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Nama Produsen') }}</label>
                                    <input type="text" name="namaprodusen" class="form-control" placeholder="Nama Produsen">
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Nama Makanan') }}</label>
                                    <input type="text" name="namamakanan" class="form-control" placeholder="Nama Makanan">
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label">{{ __('Harga') }}</label>
                                    <input type="text" name="hargamakanan" class="form-control" placeholder="Harga">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">{{ __('Stok') }}</label>
                                    <input type="text" name="stok" class="form-control" placeholder="Stok">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

