@extends('Layouts.frontend')

@section('front')

<section >
    <div class="container">
      <div class="heading_container ">
        <h2 class="">
           Log in
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="password" placeholder="Password" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>



@endsection


