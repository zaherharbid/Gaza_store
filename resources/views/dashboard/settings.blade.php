@extends('dashboard.layout.app')
@section('title', 'Dashboard | ' . env('APP_NAME'))
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Website Settings</h1>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') ?? 'success' }}  alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <x-input name='site_name' label='Site Name' placeholder='Site Name'
                    value="{{ $settings['site_name'] ?? '' }}" />
                <x-input type='file' name='logo' label='Logo' value="{{ $settings['logo'] ?? '' }}" />
                <x-input name='fb' label='Facebook' placeholder='Facebook URL' value="{{ $settings['fb'] ?? '' }}" />
                <x-input name='tw' label='Twitter' placeholder='Twitter URL' value="{{ $settings['tw'] ?? '' }}" />
                <x-input name='ig' label='Instagram' placeholder='Instagram URL' value="{{ $settings['ig'] ?? '' }}" />
                <x-input name='li' label='LinkedIn' placeholder='LinkedIn URL' value="{{ $settings['li'] ?? '' }}" />

                <button class="btn btn-dark px-4"><i class="fas fa-save"></i> Save</button>

            </form>
        </div>
    </div>

@endsection
