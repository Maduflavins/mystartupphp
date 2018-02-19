<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">MyStartUp</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark {{Request::is('/')? 'btn btn-outline-primary': ''}}" href="/">Home</a>
      <a class="p-2 text-dark {{Request::is('about')? 'btn btn-outline-primary': ''}}" href="/about">About</a>
      <a class="p-2 text-dark {{Request::is('contact')? 'btn btn-outline-primary': ''}}" href="/contact">Contact</a>
      <a class="p-2 text-dark {{Request::is('pricing')? 'btn btn-outline-primary': ''}}" href="#">Pricing</a>
    </nav>
    <a class="{{Request::is('/signup')? 'btn btn-outline-primary': ''}}" href="#">Sign up</a>
  </div>
