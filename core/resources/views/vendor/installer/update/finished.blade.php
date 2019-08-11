@extends('vendor.installer.layouts.master-update')

@section('title', @lang('installer_messages.updater.final.title'))
@section('container')
    <p class="paragraph text-center">{{ session('message')['message'] }}</p>
    <div class="buttons">
        <a href="{{ url('/') }}" class="button">@lang('installer_messages.updater.final.exit')</a>
    </div>
@stop
