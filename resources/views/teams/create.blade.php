@extends('layouts.layoutMaster')
@php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['name' => 'Create Tenant']];
@endphp
@section('title', 'Create Tenant')

@section('content')
  @livewire('teams.create-team-form')
@endsection
