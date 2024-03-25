<?php
include_once("/Xampp/htdocs/lms/include/header.php");
include_once("/Xampp/htdocs/lms/include/topbar.php");
include_once("/Xampp/htdocs/lms/include/sidebar.php");
?>


<!--Main content start-->

<main class="mt-1 pt-3">
    <div class="container-fluid">
        <!-- cards start-->
        <div class="row dashbord-counts">
            <div class="col-md-12">
                <h4 class="fw-bold text-uppercase">MANAGE BOOKS</h4>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Books
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Publisher Name</th>
                                    <th scope="col">Author Name</th>
                                    <th scope="col">ISBN No</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tech C++</td>
                                    <td>JNK Publisher</td>
                                    <td>Scham's </td>
                                    <td>23434</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            Delete
                                        </a>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Schaum's Outline Computer Graphics </td>
                                    <td>JNK Publisher</td>
                                    <td>Scham's </td>
                                    <td>23434</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            Delete
                                        </a>
                                </tr>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <!-- <td colspan="2">Fahad</td> -->

                                    <td>Business statistics</td>
                                    <td>JNK Publisher</td>
                                    <td>Scham's </td>
                                    <td>23434</td>
                                    <td><a href="#" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            Delete
                                        </a>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--Main content End-->

<?php include_once("/Xampp/htdocs/lms/include/footer.php");
?>