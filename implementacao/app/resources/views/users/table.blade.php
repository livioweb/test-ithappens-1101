

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
    @foreach($users as $user)

        <tr class="odd gradeX">
            <td width="1%" class="f-s-600 text-inverse">{{$user->id}}</td>
            <td width="1%" class="with-img">{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->cel_phone}}</td>
            <td>{{$user->date_born}}</td>
            <td>
                <a href="{{ route('users.show',$user->id)}}" class="btn btn-primary"><i class="fas fa-eye fa-2x"></i></a>
                <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-primary"><i class="fas fa-edit fa-2x"></i></a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>

{{ $users->links() }}




