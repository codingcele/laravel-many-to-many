<li>
    {{ $product -> code }} - {{ $product -> name }} <br>
    {{ $product -> typology -> name }} <br>
    DIGITAL: {{ $product -> typology -> digital ? "Yes" : "No" }} <br>
    <a href="{{ route('product.edit', $product) }}">EDIT</a> - <a href="{{ route('product.delete', $product) }}">DELETE</a>
</li>