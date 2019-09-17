<link rel="stylesheet" type="text/css" href= "{{ asset('css/estilos-menu.css') }}">
<header>
    <div class="MenuTop">
        <section class="MenuIzquierda">
            <ul class="AreaTitulo">
                <li class="Logo"><a class="scroll" href="{{ url('home') }}">MR</a></li>
                <li class="Nombre">Marco Reinoso</li>
            </ul>
        </section>
        <section class="MenuDerecha">
            <ul class="AreaMenu">
                <li><a class="scroll" href="{{ url('work') }}">Work</a></li>
                <li><a class="scroll" href="{{ url('biography') }}">biography</a></li>
                <li><a class="scroll" href="{{ url('about') }}">About</a></li>
                <li><a class="scroll" href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </section>
    </div>
</header>
