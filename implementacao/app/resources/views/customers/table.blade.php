

<table id="data-table-default" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="text-nowrap">#</th>
        <th class="text-nowrap">Nome</th>
        <th class="text-nowrap">Email</th>
        <th class="text-nowrap">Mobile</th>
        <th class="text-nowrap">Data nascimento</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)

        <tr class="odd gradeX">
            <td width="1%" class="f-s-600 text-inverse">{{$customer->id}}</td>
            <td width="1%" class="with-img">{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->cel_phone}}</td>
            <td>{{$customer->date_born}}</td>
            <td>
                <a href="{{ route('customers.show',$customer->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-2x"></i></a>
                <a href="{{ url('admin/customers/'.$customer->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit fa-2x"></i></a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>

{{ $customers->links() }}




