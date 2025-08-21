@extends('front.layout.master')

@section('title', $blog->trans_title . ' | ' . env('APP_NAME'))

@section('content')

    <style>
        .single-blog {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .single-blog img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .single-blog h1 {
            font-size: 26px;
            color: #27ae60;
            margin-bottom: 12px;
        }

        .single-blog .date {
            font-size: 13px;
            color: #999;
            margin-bottom: 18px;
        }

        .single-blog p {
            font-size: 15px;
            line-height: 1.7;
            color: #555;
        }

        .single-blog a {
            display: inline-block;
            margin-top: 18px;
            padding: 9px 16px;
            background-color: #27ae60;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .single-blog a:hover {
            background-color: #1e8449;
        }
    </style>

    <section class="single-blog">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->trans_title }}">
        <h1>{{ $blog->trans_title }}</h1>
        <div class="date">{{ $blog->created_at->format('M d, Y') }}</div>
        <p>{!! $blog->trans_description !!}</p>
    </section>

@endsection
