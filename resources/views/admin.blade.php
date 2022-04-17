@extends('layout/2')
@section('isi')
    <div class="page-header">
        <h3>
            <i class="fas fa-cogs"></i> Dashboard
        </h3>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-inverse-danger">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- DASHBOARD -->
    <!-- /////////////////////////////////// -->
    <div class="card card-statistics">
        <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fa fa-user mr-2"></i>
                        New users
                    </p>
                    <h2>54000</h2>
                    <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                        Avg Time
                    </p>
                    <h2>123.50</h2>
                    <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                        Downloads
                    </p>
                    <h2>3500</h2>
                    <label class="badge badge-outline-success badge-pill">12% increase</label>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                        Update
                    </p>
                    <h2>7500</h2>
                    <label class="badge badge-outline-success badge-pill">57% increase</label>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                        Sales
                    </p>
                    <h2>9000</h2>
                    <label class="badge badge-outline-success badge-pill">10% increase</label>
                </div>
                <div class="statistics-item">
                    <p>
                        <i class="icon-sm fas fa-circle-notch mr-2"></i>
                        Pending
                    </p>
                    <h2>7500</h2>
                    <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                </div>
            </div>
        </div>
    </div><br>


    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>News</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-7 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Latest Posts</h4>
                <div class="card-header-action">
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Introduction Laravel 5
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip"
                                        title=""
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laravel 5 Tutorial - Installation
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-2" data-toggle="tooltip"
                                        title=""
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laravel 5 Tutorial - MVC
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-3" data-toggle="tooltip"
                                        title=""
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laravel 5 Tutorial - Migration
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-4" data-toggle="tooltip"
                                        title=""
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laravel 5 Tutorial - Deploy
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-5" data-toggle="tooltip"
                                        title=""
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Laravel 5 Tutorial - Closing
                                    <div class="table-links">
                                        in <a href="#">Web Development</a>
                                        <div class="bullet"></div>
                                        <a href="#">View</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="font-weight-600"><img src="assets/img/avatar/avatar-1.png"
                                            alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title=""
                                        data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-action trigger--fire-modal-6" data-toggle="tooltip"
                                        title=""
                                        data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Recent Activities</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-1.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right text-primary">Now</div>
                            <div class="media-title">Farhan A Mujib</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-2.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">12m</div>
                            <div class="media-title">Ujang Maman</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-3.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">17m</div>
                            <div class="media-title">Rizal Fakhri</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded-circle" width="50" src="assets/img/avatar/avatar-4.png" alt="avatar">
                        <div class="media-body">
                            <div class="float-right">21m</div>
                            <div class="media-title">Alfa Zulkarnain</div>
                            <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                metus scelerisque ante sollicitudin.</span>
                        </div>
                    </li>
                </ul>
                <div class="text-center pt-1 pb-1">
                    <a href="#" class="btn btn-primary btn-lg btn-round">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="fas fa-rocket"></i>
                    Projects
                </h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Assigned to
                                </th>
                                <th>
                                    Project name
                                </th>
                                <th>
                                    Priority
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">
                                    <img src="images/faces/face1.jpg" alt="profile" class="img-sm rounded-circle">
                                </td>
                                <td>
                                    South Shyanne
                                </td>
                                <td>
                                    <label class="badge badge-warning badge-pill">Medium</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="images/faces/face2.jpg" alt="profile" class="img-sm rounded-circle">
                                </td>
                                <td>
                                    New Trystan
                                </td>
                                <td>
                                    <label class="badge badge-danger badge-pill">High</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="images/faces/face3.jpg" alt="profile" class="img-sm rounded-circle">
                                </td>
                                <td>
                                    East Helga
                                </td>
                                <td>
                                    <label class="badge badge-success badge-pill">Low</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img src="images/faces/face4.jpg" alt="profile" class="img-sm rounded-circle">
                                </td>
                                <td>
                                    Omerbury
                                </td>
                                <td>
                                    <label class="badge badge-warning badge-pill">Medium</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{ $datareg }}
@endsection
