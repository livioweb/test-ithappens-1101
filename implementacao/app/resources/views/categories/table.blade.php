

<table id="data-table-default" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="text-nowrap">#</th>
        <th class="text-nowrap">Nome</th>
        <th class="text-nowrap"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $categorie)

        <tr class="odd gradeX">
            <td width="1%" class="f-s-600 text-inverse">{{$categorie->id}}</td>
            <td width="1%" class="with-img">{{$categorie->name}}</td>

            <td>
                <a href="{{ route('categories.show',$categorie->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-2x"></i></a>
                <a href="{{ url('admin/categories/'.$categorie->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit fa-2x"></i></a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>

{{ $categories->links() }}




