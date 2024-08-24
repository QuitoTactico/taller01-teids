@extends('layouts.app') 
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"]) 
@section('content') 
<div class="card mb-3"> 
    <div class="row g-0"> 
        <div class="col-md-4"> 
        <img src="https://i.pinimg.com/736x/16/86/d4/1686d42168dce2aa1c9957cbfd39a45f.jpg" class="img-fluid rounded-start"> 
        </div> 
        <div class="col-md-8"> 
        <div class="card-body"> 
            <h5 class="card-title"> 
            {{ $viewData["review"]["user"] }} 
            </h5> 
            <p class="card-text"><small class="text-muted">{{ $viewData["review"]["game"] }}</small></p>
            <p class="card-text">{{ $viewData["review"]["comment"] }}<small class="text-muted">({{ $viewData["review"]["rating"] }} stars)</small></p>
            <p class="card-text"><small class="text-muted">{{ $viewData["review"]["date"] }}</small></p>
        </div> 
        </div> 
    </div> 
</div> 
@endsection