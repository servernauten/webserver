<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>servernauten.de - Webinterface</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/dore.light.bluenavy.css" />
</head>


<body id="app-container" class="menu-default show-spinner">
  <nav class="navbar fixed-top">
      <div class="d-flex align-items-center navbar-left">
          <a href="#" class="menu-button d-none d-md-block">
              <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                  <rect x="0.48" y="0.5" width="7" height="1" />
                  <rect x="0.48" y="7.5" width="7" height="1" />
                  <rect x="0.48" y="15.5" width="7" height="1" />
              </svg>
              <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                  <rect x="1.56" y="0.5" width="16" height="1" />
                  <rect x="1.56" y="7.5" width="16" height="1" />
                  <rect x="1.56" y="15.5" width="16" height="1" />
              </svg>
          </a>

          <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                  <rect x="0.5" y="0.5" width="25" height="1" />
                  <rect x="0.5" y="7.5" width="25" height="1" />
                  <rect x="0.5" y="15.5" width="25" height="1" />
              </svg>
          </a>
      </div>

      <div class="navbar-right">
          <div class="header-icons d-inline-block align-middle">

              <div class="position-relative d-none d-sm-inline-block">
                  <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="simple-icon-grid"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                      <a href="#" class="icon-menu-item">
                          <i class="iconsminds-equalizer d-block"></i>
                          <span>Settings</span>
                      </a>

                      <a href="#" class="icon-menu-item">
                          <i class="iconsminds-male-female d-block"></i>
                          <span>Users</span>
                      </a>

                      <a href="#" class="icon-menu-item">
                          <i class="iconsminds-puzzle d-block"></i>
                          <span>Components</span>
                      </a>

                      <a href="#" class="icon-menu-item">
                          <i class="iconsminds-bar-chart-4 d-block"></i>
                          <span>Profits</span>
                      </a>

                      <a href="#" class="icon-menu-item">
                          <i class="iconsminds-file d-block"></i>
                          <span>Surveys</span>
                      </a>

                      <a href="#" class="icon-menu-item">
                          <i class="iconsminds-suitcase d-block"></i>
                          <span>Tasks</span>
                      </a>

                  </div>
              </div>

              <div class="position-relative d-inline-block">
                  <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="simple-icon-bell"></i>
                      <span class="count">3</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                      <div class="scroll">
                          <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                                  <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                      class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                              </a>
                              <div class="pl-3">
                                  <a href="#">
                                      <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                      <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                  </a>
                              </div>
                          </div>
                          <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                                  <img src="img/notifications/1.jpg" alt="Notification Image"
                                      class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                              </a>
                              <div class="pl-3">
                                  <a href="#">
                                      <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                      <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                  </a>
                              </div>
                          </div>
                          <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                                  <img src="img/notifications/2.jpg" alt="Notification Image"
                                      class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                              </a>
                              <div class="pl-3">
                                  <a href="#">
                                      <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                      <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                  </a>
                              </div>
                          </div>
                          <div class="d-flex flex-row mb-3 pb-3 ">
                              <a href="#">
                                  <img src="img/notifications/3.jpg" alt="Notification Image"
                                      class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                              </a>
                              <div class="pl-3">
                                  <a href="#">
                                      <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                      </p>
                                      <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                  <i class="simple-icon-size-fullscreen"></i>
                  <i class="simple-icon-size-actual"></i>
              </button>

          </div>

          <div class="user d-inline-block">
              <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <span class="name"><?php echo ''.$adminFirstname.'&nbsp;'.$adminSurname.''; ?></span>
              </button>

              <div class="dropdown-menu dropdown-menu-right mt-3">
                  <a class="dropdown-item" href="#">Account</a>
                  <a class="dropdown-item" href="#">Features</a>
                  <a class="dropdown-item" href="#">History</a>
                  <a class="dropdown-item" href="#">Support</a>
                  <a class="dropdown-item" href="#">Sign out</a>
              </div>
          </div>
      </div>
  </nav>
    <?php include('tpl/sidebar.tpl.php'); ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Create Customer</h1>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                   <!-- Start Company / Address -->
                    <div class="card mb-4">
                      <div class="card-body">
                          <h5 class="mb-4">Company / Address</h5>
                          <!-- Start Customer Type -->
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Customer Type</label>
                              </div>
                              <select class="custom-select" id="inputGroupSelect01">
                                <option value="0" selected>Choose...</option>
                                  <option value="1">Firmenkunde</option>
                                  <option value="2">Privatkunde</option>
                              </select>
                          </div>
                          <!-- End Customer Type -->
                          <!-- Start Company -->
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">Company</span>
                              </div>
                              <input type="text" class="form-control"
                                  aria-describedby="basic-addon1">
                          </div>
                          <!-- End Company -->
                          <!-- Start Address -->
                          <div class="input-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                          </div>
                          <!-- End Address -->
                          <!-- End Zip / Location -->
                          <div class="input-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Zip / Location</span>
                                </div>
                                <input type="text" class="form-control">
                                <input type="text" class="form-control">
                            </div>
                          </div>
                          <!-- End Zip / Location -->
                          <!-- Start Country Type -->
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Country</label>
                              </div>
                              <select class="custom-select" id="inputGroupSelect01">
                                <option value="0" selected>Choose...</option>
                                  <option value="DE">Deutschland</option>
                                  <option value="US">USA</option>
                              </select>
                          </div>
                          <!-- End Country Type -->
                      </div>
                    </div>
                    <!-- End Company / Address -->

                    <!-- Start Contact Person -->
                     <div class="card mb-4">
                       <div class="card-body">
                           <h5 class="mb-4">Contact Person</h5>
                           <!-- Start Salutation -->
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <label class="input-group-text" for="inputGroupSelect01">Salutation</label>
                               </div>
                               <select class="custom-select" id="inputGroupSelect01">
                                 <option value="0" selected>Choose...</option>
                                   <option value="1">Herr</option>
                                   <option value="2">Frau</option>
                               </select>
                           </div>
                           <!-- End Salutation -->
                           <!-- Start Firstname -->
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon1">Firstname</span>
                               </div>
                               <input type="text" class="form-control"
                                   aria-describedby="basic-addon1">
                           </div>
                           <!-- End Firstname -->
                           <!-- Start Surname -->
                           <div class="input-group mb-3">
                               <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon1">Surname</span>
                               </div>
                               <input type="text" class="form-control"
                                   aria-describedby="basic-addon1">
                           </div>
                           <!-- End Surname -->
                       </div>
                     </div>
                     <!-- End Contact Person -->

                     <!-- Start Contact Details -->
                      <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Contact Details</h5>
                            <!-- Start Mobile -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Mobile</span>
                                </div>
                                <input type="text" class="form-control"
                                    aria-describedby="basic-addon1">
                            </div>
                            <!-- End Mobile -->
                            <!-- Start Phone -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Phone</span>
                                </div>
                                <input type="text" class="form-control"
                                    aria-describedby="basic-addon1">
                            </div>
                            <!-- End Phone -->
                            <!-- Start Fax -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fax</span>
                                </div>
                                <input type="text" class="form-control"
                                    aria-describedby="basic-addon1">
                            </div>
                            <!-- End Fax -->
                            <!-- Start Mail -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Mail</span>
                                </div>
                                <input type="text" class="form-control"
                                    aria-describedby="basic-addon1">
                            </div>
                            <!-- End Mail -->
                            <!-- Start Homepage -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Homepage</span>
                                </div>
                                <input type="text" class="form-control"
                                    aria-describedby="basic-addon1">
                            </div>
                            <!-- End Homepage -->

                        </div>
                      </div>
                      <!-- End Contact Details -->

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Sizing</h5>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Small"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>

                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Large"
                                    aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Checkboxes and radios</h5>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" aria-label="Radio button for following text input">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button">
                            </div>
                        </div>
                    </div>






                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Multiple Inputs</h5>


                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First and last name</span>
                                </div>
                                <input type="text" class="form-control">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Multiple Addons</h5>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Button Addons</h5>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label=""
                                    aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>


                        </div>
                    </div>





                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Buttons with Dropdowns</h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Dropdown</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Segmented Buttons</h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control"
                                    aria-label="Text input with segmented dropdown button">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control"
                                    aria-label="Text input with segmented dropdown button">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Custom Select</h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                                <select class="custom-select" id="inputGroupSelect03">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Custom File Input</h5>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile03">
                                    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">servernauten.de</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/Sortable.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.single.theme.js"></script>
</body>

</html>
