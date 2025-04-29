@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Informações do Site</h1>

    <form action="{{ route('admin.settings.update', $settings) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="email" class="block font-medium">Email:</label>
            @php
                $email = old('email', $settings->email ?? '');
            @endphp
            <input type="text" name="email" id="email" class="w-full border rounded px-3 py-2" value="{{ $email }}">
        </div>

        <div>
            <label for="address" class="block font-medium">Endereço:</label>
            @php
                $address = old('address', $settings->address ?? '');
            @endphp
            <input type="text" name="address" id="address" class="w-full border rounded px-3 py-2" value="{{ $address }}">
        </div>

        <div>
            <label for="facebook_url" class="block font-medium">Facebook URL:</label>
            @php
                $facebook_url = old('facebook_url', $settings->facebook_url ?? '');
            @endphp
            <input type="url" name="facebook_url" id="facebook_url" class="w-full border rounded px-3 py-2" value="{{ $facebook_url }}">
        </div>

        <div>
            <label for="instagram_url" class="block font-medium">Instagram URL:</label>
            @php
                $instagram_url = old('instagram_url', $settings->instagram_url ?? '');
            @endphp
            <input type="url" name="instagram_url" id="instagram_url" class="w-full border rounded px-3 py-2" value="{{ $instagram_url }}">
        </div>

        <div>
            <label for="linkedin_url" class="block font-medium">LinkedIn URL:</label>
            @php
                $linkedin_url = old('linkedin_url', $settings->linkedin_url ?? '');
            @endphp
            <input type="url" name="linkedin_url" id="linkedin_url" class="w-full border rounded px-3 py-2" value="{{ $linkedin_url }}">
        </div>

        <div>
            <label for="youtube_url" class="block font-medium">YouTube URL:</label>
            @php
                $youtube_url = old('youtube_url', $settings->youtube_url ?? '');
            @endphp
            <input type="url" name="youtube_url" id="youtube_url" class="w-full border rounded px-3 py-2" value="{{ $youtube_url }}">
        </div>

        <div>
            <label for="pinterest_url" class="block font-medium">Pinterest URL:</label>
            @php
                $pinterest_url = old('pinterest_url', $settings->pinterest_url ?? '');
            @endphp
            <input type="url" name="pinterest_url" id="pinterest_url" class="w-full border rounded px-3 py-2" value="{{ $pinterest_url }}">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Atualizar</button>
    </form>
@endsection
