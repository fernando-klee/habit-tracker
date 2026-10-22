<div>
    Welcome to the Home Page
</div>
<p>
    Olá, {{ $name }}
</p>

<p>
    Seus hábitos são:
</p>

<ul>
    @foreach ($habits as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

@auth
    <p>
        Você está logado!
    </p>
@endauth

@guest
    <p>
        Você está não logado!
    </p>
@endguest
