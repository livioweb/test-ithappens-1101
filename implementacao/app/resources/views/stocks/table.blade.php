

<table id="data-table-default" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="text-nowrap">#</th>
        <th class="text-nowrap">Nome</th>
        <th class="text-nowrap">Valor</th>
        <th class="text-nowrap">Valor Unitario</th>
        <th class="text-nowrap">Valor de Pagamento</th>
        <th class="text-nowrap">Produto</th>
        <th class="text-nowrap">Categoria</th>
        <th class="text-nowrap">Filial</th>
        <th class="text-nowrap"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($stocks as $stock)

        <tr class="odd gradeX">
            <td width="1%" class="f-s-600 text-inverse">{{$stock->id}}</td>
            <td width="1%" class="with-img">{{$stock->name}}</td>
            <td width="1%" class="with-img">{{$stock->amount}}</td>
            <td width="1%" class="with-img">{{$stock->unit_amount}}</td>
            <td width="1%" class="with-img">{{$stock->payment_amount}}</td>
            <td width="1%" class="with-img">{{$stock->product_id}}</td>
            <td width="1%" class="with-img">{{$stock->categorie_id}}</td>
            <td width="1%" class="with-img">{{$stock->store_id}}</td>

            <td>
                <a href="{{ route('stocks.show',$stock->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-2x"></i></a>
                <a href="{{ url('admin/stocks/'.$stock->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit fa-2x"></i></a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>

{{ $stocks->links() }}




