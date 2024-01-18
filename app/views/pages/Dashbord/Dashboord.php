<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/SideBar.php'; ?>

<!--=========================Main====================-->
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>


        </div>




        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Reclamation & Parol</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <!-- <?php foreach ($data['reclame'] as $value) { ?>
                <p>
                    <?= $value->getId(); ?>
                </p>
                <?php } ?> -->

            </div>
        </div>
        <button class="text-white fs-2 btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight">
            <ion-icon name="notifications-outline"></ion-icon>
            <!-- <img src="assets/imgs/customer01.jpg" alt="" /> -->
        </button>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">
                    <?=   $data['playliste'] ?>

                </div>
                <div class="cardName">playliste</div>
            </div>

            <div class="iconBx">
                <!-- <ion-icon name="notifications-outline"></ion-icon> -->

                <ion-icon name="newspaper-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"><?= $data['Song'] ?></div>
                <div class="cardName">Song</div>
            </div>

            <div class="iconBx">
                <ion-icon name="happy-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                    <?= $data['genre']; ?></div>
                <div class="cardName">genre</div>
            </div>

            <div class="iconBx">
                <ion-icon name="logo-ionic"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"><?= $data['lyrics']; ?></div>
                <div class="cardName">Lyrics</div>
            </div>

            <div class="iconBx">
                <ion-icon name="people-circle-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="lyrics">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>CLient</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Email</td>

                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data['client'] as  $value) {
                     
                ?>
                    <tr>
                        <td>
                            <!-- $user->setUser_id($row->user_id);
                            $user->setUsername($row->username);
                            $user->setEmail($row->email); -->
                            <?= $value->getUser_id()  ?>
                        </td>
                        <td> <?= $value->getUsername()   ?></td>
                        <td> <?=  $value->getEmail()  ?></td>

                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <!-- <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Customers</h2>
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
                            David <br />
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
                            Amit <br />
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
                            David <br />
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
                            Amit <br />
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
                            David <br />
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
                            Amit <br />
                            <span>India</span>
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
                            David <br />
                            <span>Italy</span>
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
                            Amit <br />
                            <span>India</span>
                        </h4>
                    </td>
                </tr>
            </table>
        </div> -->
    </div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>