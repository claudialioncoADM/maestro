@foreach ($listaProdutos as $item)
    {{ $item->titulo . "|" . $item->preco . "\n" }} ;
@endforeach
