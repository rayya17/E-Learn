<center>
    <p>Ini Guru Ya </p>
</center>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Logout</button>
</form>
