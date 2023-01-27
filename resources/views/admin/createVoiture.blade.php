@extends("baseAdmin")
@section("content")
<style>
    form {
  width: 500px;
  margin: 0 auto;
  background-color: whitesmoke;
}

label {
  display: block;
  margin-bottom: 10px;
  font-size: 18px;
}

input[type="text"], select {
  width: 100%;
  padding: 12px 20px;
  margin-bottom: 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 18px;
}

button[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin-top: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 18px;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

</style>
<form method="POST" action="{{route('storeVoiture')}}">
    @csrf
    <div>
        @if (session('success'))
        <div class="text text-success">{{session('success')}}</div>
        @endif
      <label for="marque">Marque</label>
      <input type="text" id="make" name="marque">
    </div>
    <div>
      <label for="model">Modèle</label>
      <input type="text" id="model" name="model">
    </div>
    <button type="submit">Enregistrer</button>
  </form>

@endsection
