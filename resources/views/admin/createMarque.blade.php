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
                                        <h5 class="modal-title">Ajouter une Marque</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="POST" action="{{route('storeMarque')}}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="marque">Nom</label>
                                                <input type="text" name="marque" class="form-control" id="marque" placeholder="Entrez la marque de la voiture" >
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
                                        <th>Nom</th>
                                        <th>Publier le</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($marques as $marque)
                                        <tr>
                                            {{-- <td><button  data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name">{{$marque->nom_marque}}</button> 
                                            </td> --}}

                                            <td>
                                                <span class="list-enq-name">
                                               {{$marque->id}}</span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">
                                               {{$marque->nom_marque}}</span>
                                            </td>
                                            <td>
                                                <span class="list-enq-name">
                                               {{$marque->created_at->format('d/m/y')}}</span>
                                            </td>
                                            <td>
                                                @if ($marque->statut==0)
                                                <form action="{{route('setStatut', $marque->id)}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button  style="border: none;" type="submit">
                                                    <span class="label label-success">Stock</span></button>
                                                </form>
                                                @else
                                                <span class="label label-danger">Hors Stock</span>
                                                @endif

                                            </td>
                                        @if ($marque)
                                            <td style="display: inline-block;">
                                                <h5 style="float: left; margin-right: 10px;">
                                                    <button id="button"  data-toggle="modal" data-target="#modifierVoiture" style="color:#131105; background-color:white; text-decoration: none; border: none; "><ion-icon name="pencil-outline"></ion-icon></button>
                                                </h5>

                                                <h5 style="float: right; margin-left: 10px;">
                                                    <form action="{{route('destroyMarque', $marque->id)}}" method="POST">
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
                                                        <h5 class="modal-title">Modifier une Marque</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('updateMarque', $marque->id)}}">
                                                            @csrf
                                                            @method('PATCH')

                                                            <div class="form-group">
                                                                <label for="marque">Nom</label>
                                                                <input type="text" name="marque" class="form-control" id="marque" placeholder="Entrez la marque de la voiture" value="{{$marque->nom_marque}}">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end modal pour modifier une voiture --}}
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
