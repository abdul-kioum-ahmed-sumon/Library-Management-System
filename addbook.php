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
                <h4 class="fw-bold text-uppercase">Add Book</h4>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Fill the form
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Publisher Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Author Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Edition</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Book Price</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Shelf No</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Category / Course</label>
                                        <select class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="reset" class="btn btn-dark">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--Main content End-->

<?php include_once("/Xampp/htdocs/lms/include/footer.php");
?>