@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
   
  <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    
                                    <th scope="col">Nama Produsen</th>
                                    <th scope="col">Nama Makanan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($home as $key => $p)
                                    <tr>
                                        
                                        <td>{{ $p->namaprodusen}}</td>
                                        <td>{{ $p->namamakanan }}</td>
                                        <td>{{ $p->hargamakanan }}</td>
                                        <td>{{ $p->stok }}</td>
                                        
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
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush