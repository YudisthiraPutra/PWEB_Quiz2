<footer style="background-color: #776b5d">
  <div class="d-flex flex-wrap">
    <div class="col-lg-3 col-12 text-white p-3">
      <h3>Foods</h3>
      <hr />
      <ul>
        @foreach ($foodCategories as $foodCategory)
        <li>
          <a
            href="{{ url('food/'.$foodCategory->id) }}"
            class="text-decoration-none text-white"
            >{{ $foodCategory->name }}</a
          >
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-lg-3 col-12 text-white p-3">
      <h3>Beverages</h3>
      <hr />
      <ul>
        @foreach ($drinkCategories as $drinkCategory)
        <li>
          <a
            href="{{ url('drink/'.$drinkCategory->id) }}"
            class="text-decoration-none text-white"
            >{{ $drinkCategory->name }}</a
          >
        </li>
        @endforeach
      </ul>
    </div>
    <div class="col-lg-3 col-12 text-white p-3">
      <h3>Made By</h3>
      <hr />
      <p>Abdullah Nasih Jasir (5025211111)</p>
      <p>Rayhan Almer Kusumah (5025211115)</p>
      <p>Al-Ferro Yudisthira Putra (5025211176)</p>
    </div>
  </div>
</footer>
