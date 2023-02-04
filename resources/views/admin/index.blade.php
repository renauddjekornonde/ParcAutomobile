@extends("baseAdmin")
@section("content")
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


    <!--== Marque Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Marque</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th>Image</th> -->
                                        <th>Identifiant</th>
                                        <th>Nom</th>
                                        <th>Disponible le</th>
                                        <th>Status</th>
                                        {{-- <th>View</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marques as $marque)
                                    <tr>
                                        <!-- <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                        </td>-->
                                          <td><button type="button" data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name">
                                          {{$marque->id}}</button>
                                          </td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#photoModal" style="border:0px;" class="list-enq-name">
                                            {{$marque->nom_marque}}
                                            </button>
                                        </td>

                                        <td>
                                        <span class="list-enq-name">
                                           {{$marque->created_at->format('d/m/y')}}</span>
                                        </td>

                                        <td>
                                            @if ($marque->statut==0)
                                            <form action="{{route('setStatutMarque', $marque->id)}}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button  style="border: none;" type="submit">
                                                <span class="label label-success">Stock</span></button>
                                            </form>
                                            @else
                                            <span class="label label-danger">Hors Stock</span>
                                            @endif

                                        </td>
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
    <!--== User Details ==-->

    <!--== Voiture Details ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Voitures</h4>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Model</th>
                                        <th>Publier le</th>
                                        <th>Status</th>
                                        {{-- <th>View</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($voitures as $voiture)
                                    <tr>
                                    @foreach ($cars as $voiture)
                                        <td><span class="list-img">
                                        @foreach($voiture->voiturePhotos as $car)
                                        <img src="{{Storage::url($car->description)}}" alt="">
                                        @endforeach
                                        </span>
                                        </td>
                                    @endforeach


                                         @foreach($models as $model)
                                         <td>
                                            <a href="#"><span class="list-enq-name">
                                            @foreach($model->models as $m)
                                                {{$m->nom_model}}
                                            @endforeach
                                        </td>
                                        @endforeach

                                        <td>
                                            <span class="list-enq-name">
                                           {{$voiture->created_at->format('d/m/y')}}</span>
                                        </td>
                                        <!--<td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>-->
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
@endsection
