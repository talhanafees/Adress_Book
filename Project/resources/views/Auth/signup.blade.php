@extends('Layouts.frontend');

@section('front')

<section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Sign Up
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="off-set row">
        <div class=" col-md-6 col-lg-5 px-0">
          <form action="#">
            <div>
              <input type="text" class="form-control" placeholder="Name" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" />
            </div>
            <div>
              <select name="status" class="form-control" >

                <option value="1">Active</option>
                <option value="0">Unactive</option>
              </select>
            </div>
            <br>
            <div>
                <input type="file" class="form-control" name="img">
              </div>
            <div>
              <input type="text" class="message-box" placeholder="Address" />
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



@endsection

