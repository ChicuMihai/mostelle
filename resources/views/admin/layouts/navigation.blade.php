<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Admin</strong>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Servicii</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height:0px;">
                        <li><a href="{{route('product.index')}}">Editare Servicii</a></li>
                        <li><a href="{{route('product.create')}}">Adaugare Serviciu Nou</a></li>
                        <li><a href="{{route('service.create')}}">Adaugare o Categorie de Servicii Noua</a></li>
                        <li><a href="{{route('service.index')}}">Editare  Categorii de Servicii</a></li>
                        
                        
                    </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Oferte</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height:0px;">
                    <li><a href="{{route('product.index')}}">Adauga oferte noi</a></li>
                    <li><a href="{{route('product.create')}}">Editare oferte existente</a></li>
                    
                    
                </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height:0px;">
                <li><a href="{{route('blog.create')}}">Adauga postari noi</a></li>
                <li><a href="{{route('blog.index')}}">Editare postari</a></li>
                
                
            </ul>
    </li>

           
            
            <li>
                    <a href="{{ route('contact_edit') }}"><i class="fa fa-address-card-o"></i> <span class="nav-label">Informatii de contact</span></a>
                </li>
            
        </ul>

    </div>
</nav>
