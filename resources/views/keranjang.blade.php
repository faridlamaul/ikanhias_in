@extends('layouts.template')

<title>Ikanhias.in | Keranjang</title>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<link href="{{ asset('css/keranjang.css') }}" rel="stylesheet">
<script src="{{ asset('js/controlItem.js') }}"></script>
@section('content')
    <div class="container mt-4 keranjang-group">
        <h2 class="title">Keranjang Belanja</h2>
        <div class="card-deck">
            <div class="card">
                <div class="card-horizontal">
                    <img src="{{ asset('img/halfmoon-orange.jpg') }}" class="card-img" alt="ikan">
                    <div class="card-body">
                        <h5 class="card-title"><b>Cupang Halfmoon-Orange</b></h5>
                        <p class="card-text">Harga : Rp<span>53,000</span></p>
                        <p class="card-text"><small class="text-muted">Tersisa <span>5</span> Produk</small></p>
                    </div>
                    <div class="card-body align-self-center">
                        <div class="btn btn-jumlah d-inline">
                            <form>
                                <p class="m-0 "><small>Jumlah Item Checkout</small></p>
                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-
                                </div>
                                <input type="number" id="number" value="0" />
                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+
                                </div>
                            </form>
                        </div>
                        <div class="btn btn-delete" title="Hapus">
                            <img class="icons mx-auto my-auto" src="{{ asset('img/trash.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-horizontal">
                    <img src="{{ asset('img/ki-utsuri.jpg') }}" class="card-img" alt="ikan">
                    <div class="card-body">
                        <h5 class="card-title"><b>Koi Ki Utsuri</b></h5>
                        <p class="card-text">Harga : Rp<span>850,000</span></p>
                        <p class="card-text"><small class="text-muted">Tersisa <span>3</span> Produk</small>
                        </p>
                    </div>
                    <div class="card-body align-self-center">
                        <div class="btn btn-jumlah d-inline">
                            <form>
                                <p class="m-0 "><small>Jumlah Item Checkout</small></p>
                                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-
                                </div>
                                <input type="number" id="number" value="0" />
                                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+
                                </div>
                            </form>
                        </div>
                        <div class="btn btn-delete" title="Hapus">
                            <img class="icons mx-auto my-auto" src="{{ asset('img/trash.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-cekout m-3 text-center" href="{{ url('/checkout')}}" title="Checkout">
            <img class="icons d-inline mx-auto my-auto" src="{{ asset('img/cekout.png') }}">
            <p class="d-inline">Checkout</p>
        </a>
    </div>
@endsection
