

<table id="data-table-default" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="text-nowrap">#</th>
        <th class="text-nowrap">Nome</th>
        <th class="text-nowrap">Site</th>
        <th class="text-nowrap"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($stores as $store)

        <tr class="odd gradeX">
            <td width="1%" class="f-s-600 text-inverse">{{$store->id}}</td>
            <td width="1%" class="with-img">{{$store->name}}</td>
            <td width="1%" class="with-img">{{$store->site}}</td>

            <td>
                <a href="{{ route('stores.show',$store->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-2x"></i></a>
                <a href="{{ url('admin/stores/'.$store->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit fa-2x"></i></a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>

{{ $stores->links() }}




