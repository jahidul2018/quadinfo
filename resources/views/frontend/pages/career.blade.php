@extends('frontend.layouts.master')
@section('content')


<section class="ls s-py-50 c-gutter-60">
  <div class="container">
    <div class="row">
      <div class="divider-70 d-none d-lg-block"></div>


      <div class="col-12">
        <h2> </h2>
        <hr>
        <h4>WE ARE HIRING</h4>
        <div id="accordion01" role="tablist">
          <div class="card">
            <div class="card-header" role="tab" id="collapse01_header">
              <h5>
                <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                  Laravel Developer (2)
                </a>
              </h5>
            </div>

            <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
              <div class="card-body">
                Each and every one of our employees represent the spirit of our company: driven, committed, and acutely aware of how limitless our potential is to grow. We go to great lengths to identify self-starters
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="collapse02_header">
              <h5>
                <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                  Frontend & System Designer   
                </a>
              </h5>
            </div>
            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
              <div class="card-body">
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
              </div>
            </div>
          </div>

        </div>
        {{--     <div class="divider-40 d-none d-xl-block"></div> --}}


      </div>
    </div>
    <div class="divider-60 d-none d-xl-block"></div>
    <div class="row">
      <div class="col-lg-12 ">
        <form class="contact-form" method="post" action="http://webdesign-finder.com/">

          <div class="row c-gutter-20">

            <div class="col-12 col-md-6">
              <div class="form-group has-placeholder">
                <label for="name">Full Name
                  <span class="required">*</span>
                </label>
                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-left" placeholder="Full Name" required >
              </div>
              <div class="form-group has-placeholder ">
                <label for="email">Email address
                  <span class="required">*</span>
                </label>
                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control text-left" placeholder="Email Address" required >
              </div>
              <div class="form-group has-placeholder">
                <label for="subject">Subject
                  <span class="required">*</span>
                </label>
                <select class=" custom-select custom-select-lg mb-3"  required >
                  <option >Select position</option>
                  <option value="LaravelDeveloper">Laravel Developer</option>
                  <option value="Frontend & System Designer">Frontend & System Designer</option>
                </select>
              </div>
              <div class="form-group has-placeholder ">
                <label for="email"> Upload CV
                  <span class="required">*</span>
                </label>
                <input type="file" aria-required="true" size="30" value="" name="file" id="file" class="form-control text-left" placeholder="Upload Your CV (pdf/docx)" required >
              </div>
            </div>
            <div class="col-12 col-md-6">

              <div class="form-group has-placeholder">
                <label for="message">Message</label>
                <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-left" placeholder="Your Message" required ></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group text-center">
                <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Submit </button>
              </div>
            </div>

          </div>
        </form>

      </div>
      <!--.col-* -->

      <div class="divider-80 d-none d-xl-block"></div>

    </div>
  </div>
</div>

</section>

<section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
  <div class="divider-15 d-none d-xl-block"></div>
  <div class="container">


  </section>
  @endsection