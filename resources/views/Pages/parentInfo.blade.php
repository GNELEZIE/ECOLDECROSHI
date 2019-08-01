@extends('layouts.app',['title'=>'Infos Parent'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="images/ad.png" alt="pardon">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    La liste de vos enfants
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
