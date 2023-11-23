<header class="w-100">
  <div class="p-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="w-100">
        <div style="display: flexbox; justify-content: space-between">
          <div>
            <h1>Abdul Coffee</h1>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav justify-content-around d-flex w-100">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('') }}"
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
                  >Test</a
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
                  >Drinks</a
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
                  >Profile</a
                >
                @else
                <a
                  class="nav-link"
                  aria-current="page"
                  href="{{ url('login') }}"
                  >Log In/Register</a
                >
                @endif
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
