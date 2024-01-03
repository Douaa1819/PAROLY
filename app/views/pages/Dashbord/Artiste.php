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


    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Artiste</h2>
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

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                        <td>Due</td>
                        <!-- <td><span class="status inProgress">In Progress</span></td> -->
                        <td> <a href=""><i class=" btn btn-primary far fa-pen"></i></a>
                            <a href=" "><i class="btn btn-danger far fa-trash"></i></a>

                        </td>
                    </tr>

                    <tr>
                        <td>Star Refrigerator</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <!-- <td><span class="status delivered">Delivered</span></td> -->
                        <td> <a href=""><i class=" btn btn-primary far fa-pen"></i></a>
                            <a href=" "><i class="btn btn-danger far fa-trash"></i></a>

                        </td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <!-- <td><span class="status pending">Pending</span></td> -->
                        <td> <a href=""><i class=" btn btn-primary far fa-pen"></i></a>
                            <a href=" "><i class="btn btn-danger far fa-trash"></i></a>

                        </td>
                    </tr>


                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Artiste </h2>
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
                            Artiste<br />
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
                            Artiste<br />
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
                            Artiste<br />
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
                            Artiste<br />
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
                            Artiste<br />
                            <span>Italy</span>
                        </h4>
                    </td>
                </tr>



            </table>
        </div>
    </div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>