<nav class="home_categories">
    <ul>
      <li><a href="/home">Home</a></li>
      @php
        $category = \App\Category::all();
      @endphp
      @foreach ($category as $value)
        <li><a href="category/{{$value->name}}">{{$value->name}}</a></li>
      @endforeach
    </ul>
</nav>
