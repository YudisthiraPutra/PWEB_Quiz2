<header>
  <div
    style="
      display: flex;
      justify-content: space-between;
      background-color: #776b5d;
    "
  >
    <div>
      <h1 style="color: white; margin: 10px 20px">Livin' Coffee</h1>
    </div>
    <div style="width: 35%; margin: auto 0">
      <ul
        style="
          display: flex;
          justify-content: space-between;
          width: 100%;
          margin: auto 15px auto 0;
          list-style: none;
        "
      >
        <li class="nav-item">
          <a
            class="nav-link"
            aria-current="page"
            href="{{ url('') }}"
            style="list-style: none; color: white"
            >Our Store</a
          >
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="dropdownMakanan"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            style="list-style: none; color: white"
            >Food</a
          >
          <ul class="dropdown-menu" aria-labelledby="dropdownMakanan">
            @foreach ($foodCategories as $foodCategory)
            <li>
              <a
                class="dropdown-item"
                href="{{ url('food/'.$foodCategory->id) }}"
                >{{ $foodCategory->name }}</a
              >
            </li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="dropdownMinuman"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            style="list-style: none; color: white"
            >Beverages</a
          >
          <ul class="dropdown-menu" aria-labelledby="dropdownMinuman">
            @foreach ($drinkCategories as $drinkCategory)
            <li>
              <a
                class="dropdown-item"
                href="{{ url('drink/'.$drinkCategory->id) }}"
                >{{ $drinkCategory->name }}</a
              >
            </li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          @if ( session()->has('email'))
          <a
            class="nav-link"
            aria-current="page"
            href="{{ url('profile') }}"
            style="list-style: none; color: white"
            >Profile</a
          >
          @else
          <a
            class="nav-link"
            aria-current="page"
            href="{{ url('login') }}"
            style="list-style: none; color: white"
            >Log In/Register</a
          >
          @endif
        </li>
      </ul>
    </div>
  </div>
</header>
