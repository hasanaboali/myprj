@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>the list</h2>
            </div>
            @auth
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
            @endauth
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                   @auth
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @endauth
                    @csrf
                    @method('DELETE')
                    @auth
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endauth
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
@auth
<div>
        
    <form wire:submit.prevent="logout">
        <button type="submit">Logout</button>
    </form>
</div>  
@endauth
     @guest
     <div>
        
        <a class="btn btn-primary" href="{{ route('loginn') }}"> Back for guest</a>
    </div> 
     @endguest
@endsection