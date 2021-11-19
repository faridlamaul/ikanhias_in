@extends('layouts.template')

<title>Ikanhias.in | Keranjang</title>

<link href="{{ asset('css/keranjang.css') }}" rel="stylesheet">
<script src="{{ asset('js/controlItem.js') }}"></script>
@section('content')
    <div class="container mt-4 keranjang-group">
        <h2 class="title" style="font-weight: 800;">Keranjang Belanja</h2>
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
                        <div class="btn btn-cekout" title="Checkout">
                            <img class="icons mx-auto my-auto" src="{{ asset('img/cekout.png') }}">
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
                        <div class="btn btn-cekout" title="Checkout">
                            <img class="icons mx-auto my-auto" src="{{ asset('img/cekout.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
