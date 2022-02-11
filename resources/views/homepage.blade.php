<h1>SONO LA HOME PAGE</h1>

<h1>Lista film</h1>
@foreach ($movies as $movie)

<h2>Titolo:</h2>
<h2 class="beautify">{{ $movie['title'] }}</h2>
<h3>Titolo originale</h3>
<h3 class="beautify"> {{ $movie['original_title'] }}</h3>
<h3>Nazionalità</h3>
<h3 class="beautify">{{ $movie['nationality'] }}</h3>
<h3>Data uscita</h3>
<h3 class="beautify">{{ $movie['date'] }}</h3>
<h3>Voto</h3>
<h3 class="beautify">{{ $movie['vote'] }}</h3> 

@endforeach
