<!--Off canvas  start-->
<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">Core</div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <i class="fa-solid fa-gauge-high me-2" style="color: #ffd43b"></i>Dashbord
                </a>
            </li>

            <li class="nav-item my-0">
                <hr />
            </li>

            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">
                    Inventory
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksmgmt" role="button" aria-expanded="false" aria-controls="booksmgmt">
                    <i class="fa-solid fa-book fa-fade me-2"></i>Books Management
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="booksmgmt">
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="<?php echo BASE_URL ?>books/add.php" class="nav-link"><i class="fa-regular fa-square-plus me-2"></i>Add New</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL ?>./books/" class="nav-link"><i class="fa-solid fa-list-ol me-2"></i>Manage All</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#studentMgmt" role="button" aria-expanded="false" aria-controls="studentMgmt">
                    <i class="fa-solid fa-users fa-fade me-2"></i>Students Management
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="studentMgmt">
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link"><i class="fa-regular fa-square-plus me-2"></i>Add New</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i class="fa-solid fa-list-ol me-2"></i>Manage All</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item my-0">
                <hr />
            </li>

            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">
                    Business
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#bookloanmgmt" role="button" aria-expanded="false" aria-controls="bookloanmgmt">
                    <i class="fa-solid fa-lines-leaning fa-beat-fade me-2"></i>Books
                    Loan
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="bookloanmgmt">
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link"><i class="fa-regular fa-square-plus me-2"></i>Add New</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i class="fa-solid fa-list-ol me-2"></i>Manage All</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#SubscriptonMgmt" role="button" aria-expanded="false" aria-controls="SubscriptonMgmt">
                    <i class="fa-solid fa-bangladeshi-taka-sign fa-fade me-2"></i>Subscripton
                    <span class="right-icon float-end"><i class="fa-solid fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="SubscriptonMgmt">
                    <ul class="navbar-nav ps-3">
                        <li>
                            <a href="#" class="nav-link"><i class="fa-regular fa-square-plus me-2"></i>Plan</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link"><i class="fa-solid fa-list-ol me-2"></i>parchech</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item my-0">
                <hr />
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Log Out
                </a>
            </li>
        </ul>
    </div>
</div>

<!--Off canvas  End-->