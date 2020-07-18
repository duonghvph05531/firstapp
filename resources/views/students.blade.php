
<table class="table table-hover" border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>University</th>
        </tr>
    </thead>
    <tbody>
        @for($i=0; $i< count($students) ;$i++)
        <tr>
            <td>{{$students[$i]->id}}</td>
            <td>{{$students[$i]->name}}</td>
            <td>{{$students[$i]->address}}</td>
            <td>{{$students[$i]->university}}</td>
        </tr>
        @endfor
    </tbody>
</table>
