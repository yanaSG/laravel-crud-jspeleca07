@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body d-flex flex-row justify-content-between">
                <div class="w-75">
                    <div class="row align-items-center">
                        <label for="code" class="col-md-4 col-formlabel text-md-end text-start"><strong>Code:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->code }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <label for="name" class="col-md-4 col-formlabel text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->name }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <label for="quantity" class="col-md-4 colform-label text-md-end text-start"><strong>Quantity:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->quantity }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <label for="price" class="col-md-4 col-formlabel text-md-end text-start"><strong>Price:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <label for="description" class="col-md-4 colform-label text-md-end textstart"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height:35px;">
                            {{ $product->description }}
                        </div>
                    </div>
                </div>
                <div class="row w-50 align-items-center">
                    <label for="description" class="col-md-4 colform-label text-md-end textstart mb-3"><strong>Image:</strong></label>
                    @if($product->imgurl)
                    <div>
                        <img src="{{ asset($product->imgurl )}}" alt="{{ $product->name }}" class="h-75 w-75">
                    </div>
                    @else
                    <h6>No Image Uploaded.</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection