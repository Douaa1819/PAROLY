<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/SideBar.php'; ?>

<!--=========================Main====================-->
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <button class="text-white fs-2 btn">
            <ion-icon name="notifications-outline"></ion-icon>
            <!-- <img src="assets/imgs/customer01.jpg" alt="" /> -->
        </button>

    </div>

    <!--=========================Modal====================-->
    <!-- ADD SONG  -->
    <div class="button-add-student float-end me-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Add Song</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Song</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="./traitement/addcategory.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Songname" class="col-form-label">Song:</label>
                                <input type="text" class="form-control" name="Songname">
                            </div>
                            <div class="mb-3">
                                <label for="AlbumSong" class="col-form-label">Album:</label>
                                <select name="AlbumSong" id="">
                                    <option value=""></option>
                                </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Song</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN Add SONG  -->
    <!-- Add lyrics Song  -->
    <div class="button-add-student float-end me-4">


        <div class="modal fade" id="lyricsSongModal" tabindex="-1" aria-labelledby="lyricsSongModalModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lyricsSongModalModalLabel">Add Song</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="./traitement/addcategory.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Songname" class="col-form-label">Song:</label>
                                <input type="text" class="form-control" name="Songname">
                            </div>
                            <div class="mb-3">
                                <label for="AlbumSong" class="col-form-label">lyrics:</label>
                                <select name="AlbumSong" id="">
                                    <option value=""></option>
                                </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Song</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin lyrics Song -->
    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Song</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Album</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>Due</td>
                        <!-- <td><span class="status inProgress">In Progress</span></td> -->

                        <td> <a type="button"><i class=" btn btn-primary far fa-pen"></i></a>

                            <a type="button"><i class="btn btn-danger far fa-trash"></i></a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#lyricsSongModal"
                                data-bs-whatever="@mdo">
                                <ion-icon class="btn btn-primary" name="add-circle-outline"></ion-icon>
                            </a>

                        </td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>Due</td>
                        <!-- <td><span class="status pending">Pending</span></td> -->
                        <td> <a href=""><i class=" btn btn-primary far fa-pen"></i></a>
                            <a href=" "><i class="btn btn-danger far fa-trash"></i></a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#lyricsSongModal"
                                data-bs-whatever="@mdo">
                                <ion-icon class="btn btn-primary" name="add-circle-outline"></ion-icon>
                            </a>

                        </td>
                    </tr>


                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Song </h2>
            </div>

            <table>
                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/customer02.jpg" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album<br />
                            <span>Italy</span>
                        </h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/customer01.jpg" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album <br />
                            <span>India</span>
                        </h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/customer02.jpg" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album <br />
                            <span>Italy</span>
                        </h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/customer01.jpg" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album <br />
                            <span>India</span>
                        </h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/customer02.jpg" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album <br />
                            <span>Italy</span>
                        </h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="assets/imgs/customer01.jpg" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album <br />
                            <span>India</span>
                        </h4>
                    </td>
                </tr>

            </table>
        </div>
    </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>