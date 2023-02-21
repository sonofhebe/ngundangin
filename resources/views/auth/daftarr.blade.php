<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Admin/assets/img/favicon.png')}}">>

    <title>Cassie Responsive Bootstrap 4 Dashboard and Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('Admin/lib/@fortawesome/fontawesome-free/css/all.min.css')}}"> rel="stylesheet">
    <link href="{{asset('Admin/lib/ionicons/css/ionicons.min.css')}}"> rel="stylesheet">
    <link href="{{asset('Admin/lib/prismjs/themes/prism-tomorrow.css')}}"> rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{asset('Admin/assets/css/cassie.css')}}">>

  </head>
  <body data-spy="scroll" data-target="#navSection" data-offset="100">

    <div class="content">
      <div class="header">
        <div class="header-left">
          <a href="" class="burger-menu"><i data-feather="menu"></i></a>

          <div class="header-search">
            <i data-feather="search"></i>
            <input type="search" class="form-control" placeholder="What are you looking for?">
          </div><!-- header-search -->
        </div><!-- header-left -->

        <div class="header-right">
          <a href="" class="header-help-link"><i data-feather="help-circle"></i></a>
          <div class="dropdown dropdown-notification">
            <a href="" class="dropdown-link new" data-toggle="dropdown"><i data-feather="bell"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <h6>Notifications</h6>
                <a href=""><i data-feather="more-vertical"></i></a>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-menu-body">
                <a href="" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle text-primary bg-primary-light">s</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Socrates Itumay</strong> marked the task as completed.</p>
                    <span>5 hours ago</span>
                  </div>
                </a>
                <a href="" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-pink bg-pink-light">r</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Reynante Labares</strong> marked the task as incomplete.</p>
                    <span>8 hours ago</span>
                  </div>
                </a>
                <a href="" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-success bg-success-light">d</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Dyanne Aceron</strong> responded to your comment on this <strong>post</strong>.</p>
                    <span>a day ago</span>
                  </div>
                </a>
                <a href="" class="dropdown-item">
                  <div class="avatar"><span class="avatar-initial rounded-circle tx-indigo bg-indigo-light">k</span></div>
                  <div class="dropdown-item-body">
                    <p><strong>Kirby Avendula</strong> marked the task as incomplete.</p>
                    <span>2 days ago</span>
                  </div>
                </a>
              </div><!-- dropdown-menu-body -->
              <div class="dropdown-menu-footer">
                <a href="">View All Notifications</a>
              </div>
            </div><!-- dropdown-menu -->
          </div>
          <div class="dropdown dropdown-loggeduser">
            <a href="" class="dropdown-link" data-toggle="dropdown">
              <div class="avatar avatar-sm">
                <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
              </div><!-- avatar -->
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <div class="media align-items-center">
                  <div class="avatar">
                    <img src="https://via.placeholder.com/500/637382/fff" class="rounded-circle" alt="">
                  </div><!-- avatar -->
                  <div class="media-body mg-l-10">
                    <h6>Louise Kate Lumaad</h6>
                    <span>Administrator</span>
                  </div>
                </div><!-- media -->
              </div>
              <div class="dropdown-menu-body">
                <a href="" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <a href="" class="dropdown-item"><i data-feather="edit-2"></i> Edit Profile</a>
                <a href="" class="dropdown-item"><i data-feather="briefcase"></i> Account Settings</a>
                <a href="" class="dropdown-item"><i data-feather="shield"></i> Privacy Settings</a>
                <a href="" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
              </div>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- header-right -->
      </div><!-- header -->
      <div class="content-header">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">UI Library</a></li>
              <li class="breadcrumb-item"><a href="#">Forms</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
            </ol>
          </nav>
          <h4 class="content-title">Form Wizard</h4>
        </div>
      </div><!-- content-header -->
      <div class="content-right content-right-components">
        <label>On This Page</label>
        <nav id="navSection" class="nav flex-column">
          <a href="#section1" class="nav-link">Basic Wizard</a>
          <a href="#section2" class="nav-link">With Validation</a>
          <a href="#section3" class="nav-link">Vertical Orientation</a>
          <a href="#section4" class="nav-link">Tab Variation</a>
        </nav>
      </div><!-- content-right -->
      <div class="content-body content-body-components">
        <h5 class="content-lead">jQuery Steps, an all-in-one wizard plugin that is extremely flexible, compact and feature-rich. Read the <a href="https://github.com/rstaib/jquery-steps/wiki" target="_blank">Official jQuery Steps Documentation</a> for a full list of instructions and other options.</h5>

        <div class="component-section no-code">
          <h5 id="section1" class="tx-semibold">Basic Example</h5>
          <p class="mg-b-25">Below is an example of a basic horizontal form wizard.</p>

          <div id="wizard1">
            <h3>Personal Information</h3>
            <section>
              <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
              <div class="row row-sm">
                <div class="form-group col-sm-6">
                  <label>Fullname</label>
                  <input type="text" class="form-control" placeholder="Firstname">
                </div><!-- col -->
                <div class="form-group col-sm-6 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div><!-- col -->
                <div class="col-sm-4 col-md-5">
                  <label>Birthday</label>
                  <select class="custom-select" required>
                    <option value="" disabled selected="">Select Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                  </select>
                </div>
                <div class="col-sm-4 col-md-3 mg-t-10 mg-sm-t-0 d-flex align-items-end">
                  <select class="custom-select" required>
                    <option value="" disabled selected="">Select Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                <div class="col-sm-4 mg-t-10 mg-sm-t-0 d-flex align-items-end">
                  <select class="custom-select" required>
                    <option value="" disabled selected="">Select Year</option>
                    <option value="1">2019</option>
                    <option value="2">2018</option>
                    <option value="3">2017</option>
                  </select>
                </div>
              </div><!-- form-row -->
            </section>
            <h3>Billing Information</h3>
            <section>
              <p class="mg-b-20">Wonderful transition effects.</p>
              <div class="row row-sm">
                <div class="form-group col-sm-6">
                  <label>Client Name</label>
                  <input type="text" class="form-control" placeholder="Firstname">
                </div><!-- col -->
                <div class="form-group col-sm-6 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div><!-- col -->
                <div class="col-12">
                  <label>Notes</label>
                  <textarea class="form-control" rows="1" placeholder="Enter some notes"></textarea>
                </div><!-- col -->
              </div><!-- row -->
            </section>
            <h3>Payment Details</h3>
            <section>
              <p class="mg-b-20">The next and previous buttons help you to navigate through your content.</p>
              <div class="row row-sm">
                <div class="form-group col-12">
                  <input type="text" class="form-control" placeholder="Credit card number">
                </div><!-- col -->
                <div class="col-sm-6">
                  <input type="text" class="form-control" placeholder="Name on card">
                </div><!-- col -->
                <div class="col-7 col-sm-3 mg-t-20 mg-sm-t-0 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="Exp. date">
                </div><!-- col -->
                <div class="col-5 col-sm-3 mg-t-20 mg-sm-t-0 d-flex align-items-end">
                  <input type="text" class="form-control" placeholder="CVC/CVV">
                </div><!-- col -->
              </div><!-- row -->
            </section>
          </div>
        </div><!-- component-section -->

        <div class="component-section no-code">
          <h5 id="section2" class="tx-semibold">With Validation</h5>
          <p class="mg-b-25">A basic form wizard with form validation using Parsley js form validation plugin.</p>

          <div id="wizard2">
            <h3>Personal Information</h3>
            <section>
              <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>

              <div class="row row-sm">
                <div class="col-md-6">
                  <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                  <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
                </div><!-- col -->
                <div class="col-md-6 mg-t-20 mg-md-t-0">
                  <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                  <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
                </div><!-- col -->
              </div><!-- row -->
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="form-group">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
              </div><!-- form-group -->
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- component-section -->

        <div class="component-section no-code">
          <h5 id="section3" class="tx-semibold">Vertical Orientation</h5>
          <p class="mg-b-25">A basic content wizard with vertical orientation.</p>

          <div id="wizard3">
            <h3>Personal Information</h3>
            <section>
              <p class="mg-b-0">Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p class="mg-b-0">Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p class="mg-b-0">The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- component-section -->

        <div class="component-section no-code">
          <h5 id="section4" class="tx-semibold">Tab Variation</h5>
          <p class="mg-b-25">A basic content wizard with custom style variation of the steps.</p>

          <div id="wizard4" class="wizard-tab">
            <h3>Personal Information</h3>
            <section>
              <p class="mg-b-0">Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p class="mg-b-0">Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p class="mg-b-0">The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- component-section -->




      </div><!-- content-body -->

      <div class="content-footer">
        &copy; 2019. All Rights Reserved. Created by <a href="http://themepixels.me" target="_blank">ThemePixels</a>
      </div><!-- content-footer -->
    </div><!-- content -->



    <script src="{{asset('Admin/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Admin/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('Admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('Admin/lib/prismjs/prism.js')}}"></script>
    <script src="{{asset('Admin/lib/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{asset('Admin/lib/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('Admin/lib/js-cookie/js.cookie.js')}}"></script>

    <script src="{{asset('Admin/assets/js/cassie.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();

                if(fname.isValid() && lname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });

        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

      });
    </script>
  </body>
</html>
