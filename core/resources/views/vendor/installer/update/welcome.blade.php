@extends('vendor.installer.layouts.master-update')

@section('title', @lang('installer_messages.updater.welcome.title'))
@section('container')
    <p class="paragraph text-center">
    	@lang('installer_messages.updater.welcome.message')
    </p>
    <div class="buttons">
        <a href="{{ route('LaravelUpdater::overview') }}" class="button">@lang('installer_messages.next')</a>
    </div>
@stop
