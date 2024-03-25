<?php


include_once("/Xampp/htdocs/lms/config/config.php");
include_once(DIR_URL . "include/header.php");
include_once(DIR_URL . "include/topbar.php");
include_once(DIR_URL . "include/sidebar.php");

?>


<!--Main content start-->

<main class="mt-1 pt-3">
    <div class="container-fluid">
        <!-- cards start-->
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold text-uppercase">Dashboard</h2>
                <p>Statistics of the system!</p>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-muted">
                            Total books
                        </h6>
                        <p class="card-text"></p>
                        <h1>130</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-muted">
                            Total Students
                        </h6>
                        <p class="card-text"></p>
                        <h1>83</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-muted">
                            Total Revenue
                        </h6>
                        <p class="card-text"></p>
                        <h1>
                            <i class="fa-solid fa-bangladeshi-taka-sign me-2"></i>84,678
                        </h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h6 class="card-title text-uppercase text-muted">
                            Total books Loan
                        </h6>
                        <p class="card-text"></p>
                        <h1>32</h1>
                        <a href="#" class="card-link link-underline-light">View more</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards ends-->

        <!-- Tabs start-->
        <div class="row mt-5">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase active" id="recent-students" data-bs-toggle="tab" data-bs-target="#recent-students-pane" type="button" role="tab" aria-controls="recent-students-pane" aria-selected="true">
                            New Students
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase" id="recent-loans" data-bs-toggle="tab" data-bs-target="#recent-loans-pane" type="button" role="tab" aria-controls="recent-loans-pane" aria-selected="false">
                            Recent Loans
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase" id="recent-subs" data-bs-toggle="tab" data-bs-target="#recent-subs-pane" type="button" role="tab" aria-controls="recent-subs-pane" aria-selected="false">
                            Recent Subscripton
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="recent-students-pane" role="tabpanel" aria-labelledby="recent-students" tabindex="0">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Registered On</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Abdullah</td>
                                    <td>CSE</td>
                                    <td>19-03-2024, 12:46 PM </td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Labib</td>
                                    <td>CSE</td>
                                    <td>19-03-2024, 01:46 PM</td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <!-- <td colspan="2">Fahad</td> -->

                                    <td>Fahad</td>
                                    <td>BBA</td>
                                    <td>19-03-2024, 02:16 PM</td>
                                    <td><span class="badge text-bg-danger">Inactive</span></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="recent-loans-pane" role="tabpanel" aria-labelledby="recent-loans" tabindex="0">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Student</th>
                                    <th scope="col">Return Date</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tech C++</td>
                                    <td>Abdullah</td>
                                    <td>19-03-2024, 12:46 PM </td>
                                    <td>19-03-2024, 12:46 PM </td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Schaum's Outline Computer Graphics </td>
                                    <td>Labib</td>
                                    <td>19-03-2024, 01:46 PM</td>
                                    <td>19-03-2024, 01:46 PM</td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <!-- <td colspan="2">Fahad</td> -->

                                    <td>Business statistics</td>
                                    <td>Fahad</td>
                                    <td>19-03-2024, 02:16 PM</td>
                                    <td>19-03-2024, 02:16 PM</td>
                                    <td><span class="badge text-bg-primary">Returned</span></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="recent-subs-pane" role="tabpanel" aria-labelledby="recent-subs" tabindex="0">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Registered On</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Abdullah</td>
                                    <td>CSE</td>
                                    <td>19-03-2024, 12:46 PM </td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Labib</td>
                                    <td>CSE</td>
                                    <td>19-03-2024, 01:46 PM</td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <!-- <td colspan="2">Fahad</td> -->

                                    <td>Fahad</td>
                                    <td>BBA</td>
                                    <td>19-03-2024, 02:16 PM</td>
                                    <td><span class="badge text-bg-danger">Inactive</span></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tabs end-->
        </div>
    </div>
</main>

<!--Main content End-->

<?php include_once(DIR_URL . "include/footer.php");
?>