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

    <div class="button-add-student float-end me-4">
        <button id="popup-btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Add Album</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= URLROOT ?>/Artist/AddAlbum" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="col-form-label">Album:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Image:</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="mb-3">
                                <label for="img" class="col-form-label">Genre:</label>
                                <select name="Genre_name" id="">
                                <option selected disabled> choose Genre of your Album</option>
                                <?php 
                                foreach($data['Genre'] as $genre){
                                    ?>
                                    <option value="<?php echo $genre->getId();?>"><?php echo $genre->getNom();?></option>    
                                    <?php
                                    }
                                    ?> 
                            </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="AddAlbum" class="btn btn-primary text-black" value="Add Album">
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
                        <td>Name</td>
                        <td>Image</td>
                        <td>Genre</td>

                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>

                    
                        <?php 
                        foreach($data['Album'] as $album){ ?>
                       <tr> <td><?php echo $album->getName();?></td>
                       <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode( $album->getImage()); ?>"
                                style="width: 80px; border-radius: 10px;" />

                        </td>
                       
                        <td><?php echo $album->getGenre_name();?></td>
                       
                     
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
                <h2>Album </h2>
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
