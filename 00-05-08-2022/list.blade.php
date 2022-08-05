<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de produtos</title>
</head>
<body>

<a href=" {{ route('registrar_produto') }} ">Novo Produto</a><br><br>

<h1>Listagem dos Produtos</h1>

<form action="{{ route('listar_produto') }}" method="get">
	<input type="text" name="search" placeholder="Pesquisar">
	<button>Pesquisar</button>
</form>

<ul>
	@foreach($produtos as $produto)
		<li>
			{{ $produto->nome }}
			{{ $produto->preco }}
			| <a href="{{ route('produtos.show', $produto->id) }}">Detalhes</a>
			| <a href="{{ route('excluir_produto', $produto->id) }}">Excluir</a>
			| <a href="{{ route('alterar_produto', $produto->id) }}">Editar</a>
		</li>
	@endforeach
</ul>	

</body>
</html>