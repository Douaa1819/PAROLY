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

    <div class="button-add-student float-end me-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Add Genre</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Genre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= URLROOT ?>/DashbordControler/AddGenre"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Genre" class="col-form-label">Genre:</label>
                                <input type="text" class="form-control" name="Genre" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Genre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Order Details List ================= -->
    <div class="lyrics">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Genre</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Genre</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    // var_dump($data['Genre']);
                    // die();
                     foreach($data['Genre'] as $genre){ ?>

                    <tr>
                        <td><?= $genre->getId()?></td>
                        <td><?= $genre->getNom()?></td>
                        <td>
                            <a class="update-btn" type="button" value="<?= $genre->getNom()?>"
                                data-key="<?= $genre->getId()?>" data-bs-toggle="modal"
                                data-bs-target="#updateGenreModal" data-bs-whatever="@mdo">
                                <i class="btn btn-primary far fa-pen"></i>
                            </a>

                            <a href="<?= URLROOT ?>/DashbordControler/DelletGenre?id=<?= $genre->getId()?>"><i
                                    class="btn btn-danger far fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php } ?>


                </tbody>
            </table>
        </div>

        <!-- ================= New modal  ================ -->
        <div class="button-add-student float-end me-4">


            <div class="modal fade" id="updateGenreModal" tabindex="-1" aria-labelledby="updateGenreModalModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateGenreModalModalLabel">Upadte Genre</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?= URLROOT ?>/DashbordControler/UpdateGenre"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="genre" class="col-form-label">Genre:</label>
                                    <input id="id" type="hidden" class="form-control" name="id">
                                    <input id="genre" type="text" class="form-control" name="genre">
                                </div>



                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="updategenre" class="btn btn-primary">Update
                                        Genre</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>