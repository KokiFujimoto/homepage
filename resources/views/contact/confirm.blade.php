@extends('layouts.app')

@section('title', 'ホーム｜HAIR SALON ◯◯◯◯')

@section('content')

<main>
    <div class="form-group-confirm">
        <form action="{{ route('send') }}" method="post">
            @csrf
            <div class="form-input">
                <input type="text" class="name-confirm" name="name" value="{{ $inputs['name'] }}">
                <input type="email" class="email-confirm" name="email" value="{{ $inputs['email'] }}">
                <input type="text" class="subject-confirm" name="title" value="{{ $inputs['title'] }}">
                <textarea name="body" class="body-confirm" cols="30" rows="10">{{ $inputs['body'] }}</textarea>
            </div>
            <button type="submit" class="send-confirm">確認</button>
        </form>
    </div>
</main>


@endsection