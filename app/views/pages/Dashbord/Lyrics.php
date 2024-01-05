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

    <!-- <div class="button-add-student float-end me-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Add Lyrics</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Lyrics</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="./traitement/addcategory.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Lyrics" class="col-form-label">Lyrics:</label>
                                <input type="text" class="form-control" name="Lyrics">
                            </div>
                            <div class="mb-3">
                                <label for="imgLyrics" class="col-form-label">Image:</label>
                                <input type="file" class="form-control" name="imgLyrics">
                            </div>
                            <div class="mb-3">
                                <label for="dateLyrics" class="col-form-label">Image:</label>
                                <input type="date" class="form-control" name="dateLyrics">
                            </div>
                            <div class="mb-3">
                                <label for="StatusLyrics" class="col-form-label">Status:</label>
                                <input type="text" class="form-control" name="StatusLyrics">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Add Lyrics</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ================ Order Details List ================= -->
    <div class="lyrics">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Lyrics</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Parole</td>
                        <td>Date</td>
                        <td>Nom_Client</td>
                        <td>Email</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($data['Lyrics'] as $lyrics){?>
                    <tr>
                        <td><?= $lyrics->getIdLyrics()?></td>
                        <td><?= $lyrics->getName_lyrics()?></td>
                        <td><?= $lyrics->getDate()?></td>
                        <td><?= $lyrics->getClient()->getUsername()?></td>
                        <td><?= $lyrics->getClient()->getEmail()?></td>
                        <td><span class="status inProgress">
                                <?= $lyrics->getStatus() ?>
                            </span></td>
                        <td> <a class="approve_btn btn btn-primary" type="button"
                                value="<?= $lyrics->getClient()->getEmail()?>" data-key="<?= $lyrics->getIdLyrics()?>"
                                data-another-value="<?= $lyrics->getName_lyrics()?>" data-bs-toggle="modal"
                                data-bs-target="#updateGenreModal" data-bs-whatever="@mdo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                                </svg>
                            </a>

                            <a class=" btn btn-danger"
                                href="<?php echo URLROOT?>/DashbordControler/DeletLyrics?id=<?= $lyrics->getIdLyrics()?>"><i
                                    class="
                                far fa-trash"></i></a>

                        </td>
                    </tr>
                    <?php   } ?>







                </tbody>
            </table>
        </div>


    </div>
</div>
</div>
<div class="button-add-student float-end me-4">


    <div class="modal fade" id="updateGenreModal" tabindex="-1" aria-labelledby="updateGenreModalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateGenreModalModalLabel">Approve Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo URLROOT ?>/DashbordControler/sendEmail"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="lyrics" class="col-form-label">Email:</label>
                            <input id="idlyrics" type="hidden" class="form-control" name="id">
                            <input id="email" type="text" class="form-control" name="Email">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="col-form-label">Parol:</label>
                            <input id="msg" type="text" class="form-control" name="MSG">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="updategenre" class="btn btn-primary">Approve Parol</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>