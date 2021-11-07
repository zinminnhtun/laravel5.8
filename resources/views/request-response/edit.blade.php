<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3> Update Item Info </h3>
                    <hr>
                    @if(session('status'))
                        <p class="alert alert-success"> {!! session('status') !!}</p>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger pb-0">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <form action="{{ route('form.update',$currentItem->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="@error('name') text-danger font-weight-bold @enderror">Item Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $currentItem->name }}">
                            @error('name') <small class="text-danger font-weight-bold">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="@error('price') text-danger font-weight-bold @enderror">Price</label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $currentItem->price }}">
                                    @error('price') <small class="text-danger font-weight-bold">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="@error('stock') text-danger font-weight-bold @enderror">Stock (piece)</label>
                                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ $currentItem->stock }}">
                                    @error('stock') <small class="text-danger font-weight-bold">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Update Item</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body">
                    @include('request-response.list')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



