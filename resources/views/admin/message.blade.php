@extends('baseAdmin')
@section('title', 'Message')
@section('content')
<div class="sb2-2">
<h2 class="text-center">Informations saisies:</h2>
    @foreach ($messages as $message )
    <div class="display-group">
        <button type="button" data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name"><p>Email: {{$message->email}}</p></button>
        <hr id="hr">
      </div>
    @endforeach
</div>
    <!-- Modal pour afficher les photos -->
<div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Liste de photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <!-- Boucle pour afficher chaque photo dans la liste -->
         @foreach ($messages as $message)
        <div class="row">
            <div class="col-md-4">
                {{-- <img src="{{asset('storage/images/'. $photo->description)}}" class="img-thumbnail" > --}}
            <form action="{{route('messageById', $message->id)}}">
                <p>Message: {{$message->contenu}}</p>
                <p>Nom: {{$message->nom}}</p>
                <p>Prénom: {{$message->prenom}}</p>
                <p>Email: {{$message->email}}</p>
            </form>
            </div>
        @endforeach
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
    </div>
    </div>
</div>
<!-- Fin Modal pour afficher les photos -->
@endsection
