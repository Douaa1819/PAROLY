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
            data-bs-whatever="@mdo">Add Playliste</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Playliste</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= URLROOT ?>/DashbordControler/addPlayliste"
                            enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="Playliste" class="col-form-label">Playliste:</label>
                                <input type="text" class="form-control" name="Playliste">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                       


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="playliste" class="btn btn-primary">Add Playliste</button>
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
                <h2>Playlist</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>User</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    <?php   foreach($data['Playliste'] as $Playliste){ ?>
                    <tr>
                        <td><?= $Playliste->getPlayliste_id()?></td>
                        <td><?= $Playliste->getUsername()?></td>
                        <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode( $Playliste->getImage()); ?>"
                                style="width: 50px; border-radius: 10px;" />

                        </td>
                        <td><?= $Playliste->getUser_name()?></td>
                        <td>
                            <a
                                href="<?= URLROOT ?>/DashbordControler/DelletPlayliste?id=<?= $Playliste->getPlayliste_id()?>"><i
                                    class="btn btn-danger far fa-trash"></i></a>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Playlist </h2>
            </div>

            <table>
                <?php   foreach($data['Playliste'] as $Playliste){ ?>
                <tr>
                    <td width="60px">

                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode( $Playliste->getImage()); ?>"
                            style="width: 30px; border-radius: 5px;" />

                    </td>
                    <td>
                        <h4>
                            <?= $Playliste->getUsername()?><br />
                            <span><?= $Playliste->getUser_name()?></span>
                        </h4>
                    </td>
                </tr>
                <?php } ?>


            </table>
        </div>
        <!-- Modal playListe -->

        <!--=================New modal================-->

    </div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>