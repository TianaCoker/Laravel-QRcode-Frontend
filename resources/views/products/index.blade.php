@extends('layout.app')
@section('content')

        @foreach($qrcodes['data'] as $qrcode)

            <a href="#" class="btn btn-lg btn-info ">{{$qrcode['company_name']}}  </a><br/>

            

        @endforeach
@endsection