<div class="menuEstudio">
    <img  class="logo" src="{{asset('img/Logo.png')}}" alt="">
    <div class="menuIconos">
        <img src="{{asset('img/iconos/usuario.png')}}" alt="">
        @auth
            <p>{{Auth::user()->name}}</p>    
        @endauth
        <img src="{{asset('img/banderas/reino-unido.png')}}" alt="">
    </div>
</div>