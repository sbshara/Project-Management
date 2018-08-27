<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>{{ config('app.name', 'SHIBLIE PM') }}</title>
  @include('layouts.adminLTE.css')
  @yield('additionalCSS')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">