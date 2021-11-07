<div class="d-flex justify-content-between align-items-center">
    <h3>Item Lists</h3>
    <a href="{{ route('form.create') }}" class="btn btn-primary btn-sm">Add</a>
</div>
@if(session('deleteStatus'))
    <p class="alert alert-danger"> {!! session('deleteStatus') !!}</p>
@elseif(session('updateStatus'))
    <p class="alert alert-success"> {!! session('updateStatus') !!}</p>
@endif
<table class="table table-hover mb-0">
    <thead>
    <tr>
        <th>#</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Date & Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Item::all() as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->price }}</td>
            <td>{{ $i->stock }}</td>
            <td>
                <a href="{{ route('form.destroy',$i->id) }}" class="btn btn-danger btn-sm">Delete</a>
                <a href="{{ route('form.edit',$i->id) }}" class="btn btn-info btn-sm">Edit</a>
            </td>
            <td>{{ $i->created_at->diffForHumans() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
