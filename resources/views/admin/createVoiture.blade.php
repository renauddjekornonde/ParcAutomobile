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
                        <h4>Voitures</h4>
                            <button id="button"  data-toggle="modal" data-target="#articleModal"> <ion-icon name="add-sharp" style="font-size: 1.5rem; background-color:#f6d601;"></ion-icon></button>


                        {{-- modal --}}
                        <div class="modal" id="articleModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Publier une Voiture</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="POST" action="{{route('storeVoiture')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="marque">Marque</label>
                                                <input type="text" name="marque" class="form-control" id="marque" placeholder="Entrez la marque de la voiture" >
                                            </div>

                                            <div class="form-group">
                                                <label for="model">Model</label>
                                                <input type="text" name="model" class="form-control" id="titre" placeholder="Entrez le model de la voiture" required>
                                                @error('model')
                                                <p class="text text-danger">{{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="model">Prix</label>
                                                <input type="number" name="prix" class="form-control" id="prix" placeholder="Entrez le prix de la voiture" required>
                                                @error('prix')
                                                <p class="text text-danger">{{$message}}</p>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="marque">Couleur</label>
                                                <input type="text" name="couleur" class="form-control" id="couleur" placeholder="Entrez la couleur de la voiture" >
                                            </div>


                                            <hr>

                                            <td >Ajouter des photos<button style="float: right;" type="button" name="add" id="add-btn" class="btn btn-success"><ion-icon name="duplicate-sharp"></ion-icon></button></td>

                                            <table class="table-responsive" id="dynamicAddRemove">
                                                <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" id="image" name="image[]">
                                                    </div>
                                                </td>
                                               </tr>

                                               </table><br>

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
                                        <th>Marque</th>
                                        <th>Model</th>
                                        <th>Couleur</th>
                                        <th>Publier le</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($voitures as $voiture)
                                        <tr>
                                        @foreach ($marques as $marque)
                                            <td><button type="button" data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name">{{$marque->voitureMarque->nom_marque}}</button>
                                            </td>
                                        @endforeach

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
                                                    @foreach ($cars as $voiture)

                                                    <div class="row">
                                                     @foreach($voiture->voiturePhotos as $car)
                                                        <div class="col-md-3">

                                                            <img src="{{Storage::url($car->description)}}" class="img-thumbnail" >
                                                            <br>
                                                        </div>
                                                            @endforeach
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

                                            @foreach($models as $model)
                                            <td><a href="#"><span class="list-enq-name">
                                                @foreach($model->models as $m)
                                                    {{$m->nom_model}}
                                                @endforeach
                                                </td>


                                            <td><span class="list-enq-name">
                                                @foreach($model->models as $m)
                                                    {{$m->couleur}}
                                                @endforeach

                                            </span>
                                            </td>
                                            @endforeach

                                            <td>
                                                <span class="list-enq-name">
                                               {{$voiture->created_at->format('d/m/y')}}</span>
                                            </td>
                                            <td>
                                                @if ($voiture->statut==0)
                                                <form action="{{route('setStatutVoiture', $voiture->id)}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button  style="border: none;" type="submit">
                                                    <span class="label label-success">Stock</span></button>
                                                </form>
                                                @else
                                                <span class="label label-danger">Hors Stock</span>
                                                @endif

                                            </td>
                                        @if ($voiture)
                                            <td style="display: inline-block;">
                                                {{-- <h5 style="float: left; margin-right: 10px;">
                                                    <button id="button"  data-toggle="modal" data-target="#modifierVoiture" style="color:#131105; background-color:white; text-decoration: none; border: none; "><ion-icon name="pencil-outline"></ion-icon></button>
                                                </h5> --}}

                                                <h5 style="float: right; margin-left: 10px;">
                                                    <form action="{{route('destroyVoiture', $voiture->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="color: red; border: none; background: white;">
                                                            <ion-icon name="trash-outline"></ion-icon>
                                                        </button>
                                                    </form>
                                                </h5>
                                            </td>
                                        {{-- modal pour modifer une voiture --}}
                                        <div class="modal" id="modifierVoiture">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier une Voiture</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('updateVoiture', $voiture->id)}}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="form-group">
                                                                <label for="model">Model</label>
                                                                <input type="text" name="model" class="form-control" id="titre" placeholder="Entrez le model de la voiture" required value="{{$voiture->model}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="marque">Marque</label>
                                                                <input type="text" name="marque" class="form-control" id="marque" placeholder="Entrez la marque de voiture" value="{{$voiture->marque}}">
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


<script type="text/javascript">
    var i = 0;
    $("#add-btn").click(function(){
    ++i;
    $("#dynamicAddRemove").append('<tr><td><label for="image">Image</label><input type="file" id="image" name="image[]"/></td><td><button style="margin-top: 30px;" type="button" class="btn btn-danger remove-tr"><ion-icon name="close-circle-sharp"></ion-icon></button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){
    $(this).parents('tr').remove();
    });
    </script>
    </body>
</html>
@endsection
