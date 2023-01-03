@extends('Template-Admin.main')
@section('title', 'PB. Mandiri Palembang || Detail Atlet')
@section('content')
    @livewire('components.cardsatlet', ['atlet' => $atlet])
@endsection
