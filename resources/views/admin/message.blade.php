@extends('baseAdmin')
@section('title', 'Message')
@section('content')
<div class="sb2-2">
<h2 class="text-center">Messages Reçus</h2>
@foreach ($messages as $message )
    <div class="display-group">

        {{-- <form action="{{route('messageById', $message->id)}}"> --}}
        <button type="button" data-toggle="modal" data-target="#{{$message->id}}" style="border:0px;" class="list-enq-name"><p>{{$message->email}}</p></button>
        {{-- </form> --}}
        <hr>
        {{-- @endforeach --}}
      </div>

    {{-- <div class="row">
    @foreach($messages as $image)
        <div class="col-sm-4">
            <a href="#" data-toggle="modal" data-target="#imageModal-{{$image->id}}">
                <p>{{($image->nom)}}</p> <br>
            </a>
        </div> --}}
        <!-- Modal -->
        {{-- <div class="modal fade" id="imageModal-{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>{{($image->contenu)}} </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}

{{-- @foreach ($messages as $message) --}}
 <!-- Modal pour afficher les photos -->
 <div class="modal fade" id="{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <!-- Boucle pour afficher chaque photo dans la liste -->

        <div class="row">
            <div class="col-md-4">
                {{-- <img src="{{asset('storage/images/'. $photo->description)}}" class="img-thumbnail" > --}}

                <p>Message: {{$message->contenu}}</p>
                <p>Nom: {{$message->nom}}</p>
                <p>Prénom: {{$message->prenom}}</p>
                <p>Email: {{$message->email}}</p>

            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
    </div>
    </div>
    {{-- @endforeach --}}
</div>
@endforeach
</div>

<!-- Fin Modal pour afficher les photos -->



  {{-- @include('admin.readMessage') --}}
@endsection
