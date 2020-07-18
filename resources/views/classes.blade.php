
<table class="table table-hover" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Teacher Name</th>
            <th>Major</th>
            <th>Max Student</th>
        </tr>
    </thead>
    <tbody>
        @foreach($classes as $value)
        <tr style="background:{{$value->id % 2 ? 'green' : 'yellow'}}">
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->teacher_name}}</td>
            <td>{{$value->major}}</td>
            <td>{{$value->max_student}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
