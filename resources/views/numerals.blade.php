@extends('layouts.app')
@section('title', 'Тренировка числительных')

@section('content')
    <p>This is my body contentggggg.</p>
    <button type="button" id = "start_btn" class="btn btn-primary">Старт</button>
@endsection


@section('js_load')
    @vite(['resources/js/numerals.js'])
@endsection