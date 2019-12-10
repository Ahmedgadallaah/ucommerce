@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>

                <div class="panel-body">
                   <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$product->name}}">
                      </div>

                      <div class="form-group">
                        <label for="name">Price</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                      </div>

                      <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="name">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"> {{ $product->description }}</textarea>
                      </div>
                      
                      <div class="form-group">
                        
                        <button class="form-control btn btn-success"> Save Product</button>
                      </div>

                     
                   </form>
                  

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
