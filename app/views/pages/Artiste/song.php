<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/SideBarArtist.php'; ?>

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
                        <form method="POST" action="<?= URLROOT ?>/Artist/AddMusic" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="Songname" class="col-form-label">Song:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="Song" class="col-form-label">Your Music</label>
                                <input type="file" class="form-control" name="music">
                            </div> -->
                            <div class="mb-3">
                                <label for="AlbumSong" class="col-form-label">Album:</label>
                                <select name="album" id="">
                                <option selected disabled> choose your Album</option>
                                <?php 
                                foreach($data['Album'] as $album){
                                    ?>
                                    <option value="<?php echo $album->getId();?>"><?php echo $album->getName();?></option>    
                                    <?php
                                    }
                                    ?> 
                            </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary text-black" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="AddMusic" class="btn btn-primary text-black"value="Add Song">
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
                                <input type="text" class="form-control" name="name">
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
    <div class="details ">
        <div class="recentOrders max-h-80 overflow-y-auto">
            <div class="cardHeader">
                <h2>Song</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr class="flex justify-between">
                        <td>Name</td>
                        <td>Album</td>
                        <td>Music</td>
                    </tr>
                </thead>

                <tbody >
                        <?php      
                        foreach($data['song'] as $song){                  
                        ?>
                    <tr class="flex justify-between">
                    
                        <td><p><?php echo $song->getNameSong(); ?></p></td>                       
                    <td><img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($song->getAlbum_image() ); ?>"
                                style=" width: 120px; border-radius: 10px;" /></td>                      
                      <td>dd</td>
                    </tr>
                        <?php
                        }
                        ?>
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

<?php include './assets/include/footer.php' ?>