@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">Product Information</div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row align-items-start">
                    <div class="col-md-8">
                        <div class="row mb-2">
                            <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->code }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->name }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->quantity }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->price }}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                            <div class="col-md-8" style="line-height:35px;">
                                {{ $product->description }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        @if($product->imgurl)
                            <img src="{{ Storage::url($product->imgurl) }}" alt="{{ $product->name }}" class="img-fluid rounded border" style="max-width: 100%;">
                        @else
                            <p class="text-muted">No image uploaded.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection