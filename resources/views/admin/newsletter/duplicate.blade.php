@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/home' }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ '/admin/newsletter' }}">Newletter</a></li>
                <li class="breadcrumb-item">Duplication newsletter</li>
            </ol>
        </nav>
    </div>
    <form method="post" action="{{ route('admin.newsletter.store') }}">
        @csrf
        <div class="row justify-content-center">
            <div class=" col-md-12 ">
                <div>
                    <h1>{{__('Newsletter page title')}}</h1>
                    <h2>{{__('Update newsletter')  }}</h2>
                </div>

                @include('admin.newsletter.wysiwyg')

                <div class="row justify-content-around">
                    <input type="submit" class="btn-sm btn-primary m-2" value="Enregistrer">
                    <a class="btn-sm btn-danger m-2" href="{{route('admin.newsletter.index')}}">Annuler</a>
                </div>
            </div>
        </div>
    </form>
@endsection