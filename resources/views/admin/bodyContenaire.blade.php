   <!--== BODY CONTNAINER ==-->
   <div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">

            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">

                    <li><a href="{{route('indexAdmin')}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                    </li>

                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Utilisateur</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="admin-event-all.html">Liste</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{route('createMarque')}}" class="collapsible-header"><i class="fa fa-maxcdn" aria-hidden="true"></i> Marque</a>
                        <div class="collapsible-body left-sub-menu">
                            {{-- <ul>
                                <li><a href="admin-event-all.html">Toutes les Categories</a>
                                </li>
                                <li><a href="admin-event-add.html">Nouvelle Categorie</a>
                                </li>
                            </ul> --}}
                        </div>
                    </li>
                    <li><a href="{{route('createVoiture')}}" class="collapsible-header"><i class="fa fa-car" aria-hidden="true"></i> Voitures</a>
                        <div class="collapsible-body left-sub-menu">
                            {{-- <ul>
                                <li><a href="admin-seminar-all.html">Registre Voitures</a>
                                </li>
                                <li><a href="admin-seminar-add.html">Nouvelle Voiture</a>
                                </li>
                            </ul> --}}
                        </div>
                    </li>

                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Commandes</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="admin-user-all.html">Valide</a>
                                </li>
                                <li><a href="admin-user-add.html">En cours</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                     <li><a href="{{route('afficheMessage')}}" class="collapsible-header"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
                        <div class="collapsible-body left-sub-menu">
                            {{-- <ul>
                                <li><a href="admin-seminar-all.html">Registre Voitures</a>
                                </li>
                                <li><a href="admin-seminar-add.html">Nouvelle Voiture</a>
                                </li>
                            </ul> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
