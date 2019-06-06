

<table id="data-table-default" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="text-nowrap">#</th>
        <th class="text-nowrap">Nome</th>
        <th class="text-nowrap">Codigo de Barras</th>
        <td></td>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)

        <tr class="odd gradeX">
            <td width="1%" class="f-s-600 text-inverse">{{$product->id}}</td>
            <td width="1%" class="with-img">{{$product->name}}</td>
            <td width="1%" class="with-img">{{$product->bar_code}}</td>

            <td>
                <a href="{{ route('products.show',$product->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-2x"></i></a>
                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit fa-2x"></i></a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>

{{ $products->links() }}




