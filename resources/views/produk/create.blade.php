@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Produk</h1>
    </div>



    <div class="col-lg-8">

        <form method="post" action="/dashboard/produk" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error('produk') is-invalid @enderror" id="produk" name="produk" autofocus value="{{ old('produk') }}">
                @error('produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control  @error('harga') is-invalid @enderror" id="harga" name="harga" autofocus value="{{ old('harga') }}">

                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Tambah Stok</label>
                <input type="password]" class="form-control  @error('stok') is-invalid @enderror" id="stok" name="stok" autofocus value="{{ old('stok') }}">

                @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>  
                @enderror
            </div>
            
                <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>

        
    </div>

@endsection