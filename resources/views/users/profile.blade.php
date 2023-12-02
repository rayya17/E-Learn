@extends('layouts.layoutUser')

@section('content')
    <!-- Courses -->
    <form>
        <div class="container">
            <form style="margin-top: 50px;" class="detail">
            <div style="width: 100%;

            background-color: #4FA987;
            border: 1px solid #4FA987;
            padding: 20px;
            border-radius: 10px;
            margin-top: 10px;
            height: 50px;">
                <fieldset disabled>
                    <div style="margin-top: -8px;">
                        <h5 style="color: #ffff; padding-bottom: 50px">Profile User</h5>
                        {{-- <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" width="200px"> --}}
                    </div>
                </fieldset>
            </div>
        </form>
    <!--/ End Courses -->
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    @endsection
