<form action="{{ route('sum') }}" method="POST">
    {{csrf_field()}}
    Số a: <input type="number" placeholder="số 1" name="n_1">
    Số b: <input type="number" placeholder="số 2" name="n_2">
    Số c: <input type="number" placeholder="số 3" name="n_3">

    <button type="submit">Kết quả</button>

</form>