@extends('layouts.app')

@section('title', 'ホーム｜HAIR SALON ◯◯◯◯')

@section('content')

<main>
    <form action="{{ route('send') }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ $inputs['name'] }}">
        <input type="email" name="email" value="{{ $inputs['email'] }}">
        <input type="text" name="title" value="{{ $inputs['title'] }}">
        <textarea name="body" cols="30" rows="10">{{ $inputs['body'] }}</textarea>
        <button type="submit">送信</button>
    </form>
</main>


@endsection