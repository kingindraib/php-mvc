@extends('home.master')
@section('title','ticket page')
@section('body')
<div class="container-md">
    <div class="row mt-4">
        <div class="col-md-8 m-auto">
           <div class="card">
            <h1 class="text-center my-2">Payment Success</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="payment_detail">
                            <h3>Payment Type :</h3>
                            <p>Esewa</p>
                            <h3>Movie Name :</h3>
                            <p>Jaari</p>
                            <h3>Ticket Number :</h3>
                            <p>00fff</p>
                            <h3>Reference Code :</h3>
                            <p>xxpp2223</p>
                            <h3>Audtrium:</h3>
                            <p>Aud 3</p>
                            <h3>Seat:</h3>
                            <p>A2,A4</p>
                            <h3>Date :</h3>
                            <p>2022-2-2</p>
                            <h3>Time :</h3>
                            <p>8:30</p>
                            <h3>Ticket Verification :</h3>
                            <p>True</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8 my-2">
                                <?php 
                                $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                                echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);
                                ?>
                                {{-- <img src="images/qr.png" alt="" class="img-fluid"> --}}
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-12 mt-4">
                        <p class="text-center ib-font-style">Note : you must download your ticket.</p>
                        <p class="text-center ib-font-style">If there is any issue regarding ticket contact our customer support</p>
                        <p class="text-center ib-font-style ib-font-size-mid">Majjako TV PVT.LTD</p>
                        <p class="text-center ib-font-style">Kathmandu Nepal</p>
                        <p class="text-center ib-font-style">contact number : 980000000</p>
                        <p class="text-center ib-font-style">Email : basnetindra342@gmail.com</p>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="barcode">
                            <?php 
                            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                            echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);
                            ?>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <a href="" class="btn btn-info">download Ticket <i class="fa fa-download"></i></a>
                    </div>
                    <div class="col-md-6">
                        <a href="javascript:;" class="btn btn-danger mt-3" onclick="window.print()">Print Ticket <i class="fa fa-print"></i></a>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
@push('home_script')
@endpush