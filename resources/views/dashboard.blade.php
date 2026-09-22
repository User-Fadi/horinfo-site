@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bienvenue, {{ Auth::user()->name }} 👋</h5>
                <p class="card-text">Le back-office est prêt. Les modules (blog, messages...) arriveront ici prochainement.</p>
            </div>
        </div>
    </div>
</div>
@endsection
