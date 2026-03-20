<a href="{{route('show', ['id' => $movie['id']])}}">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$movie['title']}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['original_title']}}</h6>
    <p class="card-text">{{$movie['date']}}</p>
  </div>
</div>
</a>
