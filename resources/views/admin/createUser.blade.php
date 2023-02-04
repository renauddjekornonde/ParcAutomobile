@extends("baseAdmin")
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
                        <h5>Categories</h5>
                        <h4>948</h4>
                        <a href="#">Voir...</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5 >Voitures</h5>
                        <h4>672</h4>
                        <a href="#">Voir...</a>
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
                        <h4>Marque</h4>
                            <button id="button"  data-toggle="modal" data-target="#articleModal"> <ion-icon name="add-sharp" style="font-size: 1.5rem; background-color:#f6d601;"></ion-icon></button>


                        {{-- modal --}}
                        <div class="modal" id="articleModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter un utilisateur</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="POST" action="{{route('storeUser')}}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="nom">Nom complet</label>
                                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez le nom" >
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez Adresse Email" >
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" >
                                            </div>
                                            <div class="form-group">
                                                <select id="statut" name="statut" class="form-select">
                                                <option>Admin</option>
                                                <option>Simple User</option>
                                                <option>Client</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Ajouter le</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            {{-- <td><button  data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name">{{$marque->nom_marque}}</button>
                                            </td> --}}

                                            <td>
                                                <span class="list-enq-name">
                                               {{$user->name}}</span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">
                                               {{$user->email}}</span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">
                                               {{$user->created_at->format('d/m/y')}}</span>
                                            </td>
                                            <td>
                                                @if ($user->statut==0)
                                                <form action="{{route('setStatutUser', $user->id)}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button  style="border: none;" type="submit">
                                                    <span class="label label-success">Simple User</span></button>
                                                </form>
                                                @elseif($user->statut==1)
                                                <span class="label label-primary">Admin</span>
                                                @else
                                                <span class="label label-success">Client</span>
                                                @endif

                                            </td>
                                        @if ($user)
                                            <td style="display: inline-block;">
                                                <h5 style="float: left; margin-right: 10px;">
                                                    <button id="button"  data-toggle="modal" data-target="#modifierVoiture" style="color:#131105; background-color:white; text-decoration: none; border: none; "><ion-icon name="pencil-outline"></ion-icon></button>
                                                </h5>

                                                <h5 style="float: right; margin-left: 10px;">
                                                    <form action="{{route('destroyUser', $user->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="color: red; border: none; background: white;">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </button>
                                                    </form>
                                                </h5>
                                            </td>
                                        {{-- modal pour modifer une utilisateur --}}
                                        <div class="modal" id="modifierVoiture">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier un utilisateur</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('updateUser', $user->id)}}">
                                                            @csrf
                                                            @method('PATCH')

                                                            <div class="form-group">
                                                                <label for="nom">Nom</label>
                                                                <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez le nom" value="{{$user->name}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez Adresse Email" value="{{$user->email}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input type="password" name="password" class="form-control" id="password" placeholder="Entrez Mot de Passe" value="{{$user->password}}">
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <select id="statut" name="statut"  class="form-select">
                                                                    <option value= "..." >Statut</option>

                                                                    <option value="1">Admin</option>
                                                                    <option value="0" selected>Simple User</option>
                                                                    <option value="3" selected>Client</option>

                                                                </select>
                                                            </div> --}}

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end modal pour modifier un utilisateur --}}
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
