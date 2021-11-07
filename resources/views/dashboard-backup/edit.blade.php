@extends('dashboard-backup.layout')

@section('title') edit @endsection

@section('content')

    <h1 class="text-dark edit">This is edit</h1>
@endsection

@section('foot')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        console.log("hello edit script")
        let edit = $('.edit').html("this is adsfadfadf added edit");
    </script>
@endsection
