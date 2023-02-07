@extends("baseAdmin")
@section('title', 'Commande En Cours')
@section("content")
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<div class="sb2-2">
       <!--== breadcrumbs ==-->
       <div class="sb2-2-2">
        <ul>
            <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
            <!-- <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Retour</a>
            </li> -->
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>Marque</h5>
                        <h4>948</h4>
                        <a href="{{route('createMarque')}}">Voir...</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5 >Voitures</h5>
                        <h4>672</h4>
                        <a href="{{route('createVoiture')}}">Voir...</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Stock</h5>
                        <h4>689</h4>
                        <a href="#">Voir...</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Commande</h4>
                            <button id="button"  data-toggle="modal" data-target="#articleModal"> <ion-icon name="add-sharp" style="font-size: 1.5rem; background-color:#f6d601;"></ion-icon></button>


                        {{-- modal --}}
                        <div class="modal" id="articleModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une Commande</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="POST" action="{{route('storeCommande')}}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="voitures_id" class="form-label">Voiture</label>
                                                <select  style="margin-top: 1px;" id="voitures_id" name="voitures_id"  class="form-select">
                                                   <option value= "..." >Voiture</option>
                                                   @foreach($voitures as $model)
                                                       @foreach($model->models as $m)
                                                       <option value="{{ $model->id }}">{{$m->nom_model}}</option>
                                                       @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="user_id" class="form-label">Utillisateur</label>
                                                <select  style="margin-top: 1px;" id="user_id" name="user_id"  class="form-select">
                                                   <option value= "..." >Utilisateur</option>
                                                   @foreach($users as $user)
                                                       <option value="{{ $user->id }}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}



                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        {{-- <th>Image</th> --}}
                                        <th>Identifiant</th>
                                        <th>Voiture</th>
                                        <th>Client</th>
                                        <th>Publier le</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($commandes as $commande)
                                        <tr>
                                            {{-- <td><button  data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name">{{$marque->nom_marque}}</button>
                                            </td> --}}
                                            <td>
                                                <span class="list-enq-name">
                                               {{$commande->id}}</span>
                                            </td>
                                           
                                            <td>
                                                @foreach ($models as $model)
                                                @if ($commande->voitures_id==$model->voitures_id)
                                                <span class="list-enq-name">
                                                    {{$model->nom_model}}</span>
                                                @endif
                                                @endforeach
                                            </td>
                                            
                                          
                                                <td>
                                                    @foreach ($users as $user)
                                                    @if ($user->id==$commande->user_id)
                                                    <span class="list-enq-name">
                                                   {{$user->name}}</span>
                                                   @endif
                                                   @endforeach
                                                </td>
                                              
                                            <td>
                                                <span class="list-enq-name">
                                               {{$commande->created_at->format('d/m/y')}}</span>
                                            </td>
                                            <td>
                                                @if ($commande->statut==1)
                                                <form action="{{route('setStatutCommande', $commande->id)}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button  style="border: none;" type="submit">
                                                    <span class="label label-success">valider</span></button>
                                                </form>
                                                @endif

                                            </td>
                                        @if ($commande)
                                            <td style="display: inline-block;">
                                                <h5 style="float: left; margin-right: 10px;">
                                                    <button id="button"  data-toggle="modal" data-target="#modifierVoiture" style="color:#131105; background-color:white; text-decoration: none; border: none; "><ion-icon name="pencil-outline"></ion-icon></button>
                                                </h5>

                                                <h5 style="float: right; margin-left: 10px;">
                                                    <form action="{{route('destroyCommande', $commande->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="color: red; border: none; background: white;">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </button>
                                                    </form>
                                                </h5>
                                                </td>
                                                {{-- modal pour modifer une marque --}}
                                                <div class="modal" id="modifierVoiture">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Modifier une commande</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                            <div class="modal-body">
                                                <form method="POST" action="{{route('updateCommande', $commande->id)}}">
                                                    @csrf
                                                    @method('PATCH')

                                                        <div class="form-group">
                                                            <select id="voitures_id" name="voitures_id"  class="form-select">
                                                                <option value= "..." >Voiture</option>
                                                                    @foreach ($models as $model)
                                                                    @if ($model->voitures_id==$commande->voitures_id)
                                                                        <option value="{{ $commande->voitures_id }}" selected>{{ $model->nom_model}}</option>
                                                                    @endif
                                                                    <option value="{{ $model->id }}">{{ $model->nom_model}}</option>
                                                                    @endforeach
                                                            </select>
                                                        </div>

                                                            <div class="form-group">
                                                                <select id="user_id" name="user_id"  class="form-select">
                                                                    <option value= "..." >Utilisateur</option>
                                                                        @foreach ($users as $user)
                                                                        @if ($user->id==$commande->user_id)
                                                                        <option value="{{ $commande->user_id }}" selected>{{ $user->name}}</option>
                                                                        @endif
                                                                        <option value="{{ $user->id }}">{{ $user->name}}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end modal pour modifier une commande --}}
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    </body>
</html>
@endsection
