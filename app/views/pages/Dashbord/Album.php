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
            data-bs-whatever="@mdo">Add Album</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="./traitement/addcategory.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Album:</label>
                                <input type="text" class="form-control" name="cat">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Image:</label>
                                <input type="file" class="form-control" name="imageAlbum">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Genre:</label>

                                <select name="genre" class="form-select" aria-label="Default select example">
                                    <option disabled selected>Open this select Genre</option>
                                    <?php foreach($data['Genre'] as $genre) { ?>
                                    <option value="<?= $genre->getId() ?>">
                                        <?= $genre->getNom() ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>


                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Album</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Album</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Genre</td>

                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($data['Album'] as $album) {?>
                    <tr>
                        <td><?=$album->getId()?></td>
                        <td><?=$album->getName()?></td>
                        <td><?=$album->getImage()?></td>
                        <td><?=$album->getGenre_name()?></td>
                        <td> <a href=""><i class=" btn btn-primary far fa-pen"></i></a>
                            <a href=" "><i class="btn btn-danger far fa-trash"></i></a>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Album </h2>
            </div>

            <table>
                <?php foreach($data['Album'] as $album) {?>
                <tr>
                    <td width="60px">
                        <div class="imgBx">
                            <img src="<?=$album->getImage()?>" alt="" />
                        </div>
                    </td>
                    <td>
                        <h4>
                            Album<br />
                            <span><?=$album->getName()?></span>
                        </h4>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>