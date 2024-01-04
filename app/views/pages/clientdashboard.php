<?php
require_once '../app/bootstrap.php';
$init = new Core;
?>

<?php require APPROOT . '/views/inc/Clientheader.php'; ?>
<?php require APPROOT . '/views/inc/ClientSideBar.php'; ?>

<!--=========================Main====================-->
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>


        </div>

        <!-- <div class="search">
            <label>
                <input type="text" placeholder="Search here" />
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div> -->

        <button class="text-white fs-2 btn">
            <ion-icon name="notifications-outline"></ion-icon>
            <!-- <img src="assets/imgs/customer01.jpg" alt="" /> -->
        </button>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">1,504</div>
                <div class="cardName">Listens</div>
            </div>

            <div class="iconBx">
                <!-- <ion-icon name="notifications-outline"></ion-icon> -->

                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">80</div>
                <div class="cardName">Tracks</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Lyrics</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">$7,842</div>
                <div class="cardName">Balance</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Top songs</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Album</td>
                        
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Star Refrigerator</td>
                        <td><img src="./assets/imgs/album1.jpg" class="w-32 h-32"> </td>
                        
                        <td><span class="status delivered">public</span></td>
                    </tr>

                   

                    <tr>
                        <td>Apple Watch</td>
                        <td><img src="./assets/imgs/album1.jpg" class="w-32 h-32"> </td>
                       
                        <td><span class="status return">private</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                        
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>

                    <tr>
                        <td>Star Refrigerator</td>
                        <td><img src="./assets/imgs/album1.jpg" class="w-32 h-32"> </td>
                        
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>$110</td>
                        
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Apple Watch</td>
                        <td><img src="./assets/imgs/album1.jpg" class="w-32 h-32"> </td>
                      
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                       
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
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
        </div>
    </div>
</div>
</div>

<?php include './assets/include/footer.php' ?>