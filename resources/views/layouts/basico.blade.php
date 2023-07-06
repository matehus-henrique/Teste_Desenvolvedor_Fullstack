<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
         <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
         <link rel="stylesheet" href={{ asset('css/styles.css') }}>
         <script src="script.js"></script>
    </head>

    <body>
    <div class="topo">
        <div class="logo">
            <img src="">
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('products.create') }}">Create Product</a></li>
                <li><a href="{{ route('products.index') }}">Home</a></li>
            </ul>
        </div>
    </div>

        <div class="conteudo">
  @yield('conteudo')
</div>
<footer>
  <p>&copy; 2023 Meu Tetse. Todos os direitos reservados.</p>
</footer>
<script src="{{ asset('js/java.js') }}"></script>
    </body>
</html>