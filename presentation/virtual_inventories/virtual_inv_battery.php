<?php
session_start();
require_once('../includes/header.php');

// Check User Login  
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../index.php');
}
?>

<style>
    .pageNameIcon {
        font-size: 25px;
        margin-right: 05px;
    }

    .pageName {
        font-size: 20px;
        margin-top: 5px;
        font-weight: bold;
    }

    .virtualInvSec {
        display: flex;
        align-items: center;
        justify-content: center;

    }


    .cardContainer {
        width: 99%;
        background-color: #ffffff;
        padding: 10px 5px;
    }


    .pageNavigation a {
        color: #168EB4;
        font-weight: 600;
    }

    .createListingHeading {
        font-weight: 600;
        font-size: 15px;
    }

    .sectionUnderline {
        border-top: 2px solid #DBDBDB;
        margin-top: 0px;
    }

    /* Rack eke Styles */

    .rackSturcture {
        display: flex;
        flex-direction: column;
        height: 150px;
        width: 250px;
    }



    .rackLayer {
        display: flex;
        height: 25%;
        border-left: 1px solid #dee2e6;
        border-right: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
    }


    .box {
        position: relative;
        padding: 5px;
        height: 100%;
        width: 100%;
    }



    .box button {
        width: 100%;
        height: 100%;
    }


    /* ///// */

    /* patte lable section eka */

    .lableLeftSec {
        display: flex;
        flex-direction: column;
        height: 200px;
        width: 15px;
        font-weight: 600;
    }

    .lableLayer {
        font-size: 10px;
        display: flex;
        height: 18%;
        align-items: center;
    }

    /* Yata Lable Sec Eke  */

    .lableBoxLayer {
        display: flex;
        width: 100%;
    }

    .colNu {
        width: 25%;
        text-align: center;
        font-size: 10px;

    }

    .rack {
        display: flex;
        justify-content: center;
    }

    /* Box button eke styles */

    .btnBox {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff !important;
    }

    .btnBox:hover+.hide {
        /* background-color: #dee2e6; */
        display: block;
    }

    /* hover Btn Sec */
    .hide {
        display: none;
        position: absolute;
        /* width: 300px; */
        padding: 5px 10px;
        height: 100px;
        top: -105px;
        left: 20px;
    }

    /*  */

    .insideDetails {
        background-color: black;
        opacity: 0.5;
        color: #ffffff;
        border-radius: 10px;
    }

    .tableModel {
        width: 100%;

    }

    /* Rack Name */
    .rackLbl {
        display: flex;
        width: 93%;
        justify-content: space-between;
        font-weight: 600;
        margin-left: 10px;

    }
</style>

<div class="row pageNavigation pt-2 pl-2">
    <a href="./inventory_team_leader_dashboard"><i class="fa-solid fa-backward"></i>&nbsp; &nbsp;Back to
        Dashboard</a>
</div>


<div class="row mb-4 ml-1 pt-2">
    <!-- <i class=" fa-solid fa-store"></i> -->
    <i class="pageNameIcon fa-sharp fa-solid fa-layer-plus"></i>
    <h6 class="pageName pt-1">Battery Virtual Inventory</h6>
</div>

<div class="row virtualInvSec">
    <div class="cardContainer">
        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    <p>Search</p>
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Search Sec -->
        <div class="SearchSec mb-4">
            <div class="row text-center">
                <!-- <div class="col-2"></div> -->

                <div class="col-2">Type</div>
                <div class="col-2">Status</div>
                <div class="col-2">Model</div>
            </div>
            <div class="row">
                <!-- <div class="col-2">Search</div> -->

                <div class="col-2">
                    <select name="" id="" class="select2 w-100">
                        <option value="">OEM China</option>
                        <option value="">Original</option>
                    </select>
                </div>
                <div class="col-2">
                    <select name="" id="" class="select2 w-100">
                        <option value="">Tested</option>
                        <option value="">Untest</option>
                        <option value="">Damage-No-Use</option>
                    </select>
                </div>
                <div class="col-3">
                    <input class="w-100" type="text">
                </div>
                <div class="col-1">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </div>
        </div>

        <!-- end Search -->

        <div class="ml-2">
            <div class="createListingHeading">
                <span>
                    <p>Rack</p>
                </span>
            </div>
        </div>
        <hr class="sectionUnderline">

        <!-- Rack Design Sec -->

        <div class="row w-100">

            <!-- ============================================================== -->
            <!-- Front  -->
            <!-- ============================================================== -->
            <div class="rackSec w-100 m-3 text-center">
                <p style="font-size: 15px; font-weight: 600;">Front-Side</p>
                <br>
                <!-- Rack Eke Lable  -->
                <div class="d-flex justify-content-center">
                    <div class="rackLbl">
                        <div class="w-100">A</div>
                        <div class="w-100">B</div>
                        <div class="w-100">C</div>
                        <div class="w-100">D</div>
                    </div>
                </div>

                <div class="rack">
                    <!-- Patte Lable tika -->
                    <div class="lableLeftSec">
                        <div class="lableLayer">
                            T
                        </div>
                        <div class="lableLayer">
                            3
                        </div>
                        <div class="lableLayer">
                            2
                        </div>
                        <div class="lableLayer">
                            1
                        </div>
                    </div>



                    <!-- Rck eke Sturucter eka -->
                    <div class=" rackSturcture">
                        <!-- <div class="rackfull"> -->
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">

                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-3</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-2</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->

                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                    </div>
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">
                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">

                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">
                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                </div>
            </div>

            <!-- /// -->

            <!-- ============================================================== -->
            <!-- Back  -->
            <!-- ============================================================== -->
            <div class="rackSec w-100 m-3 text-center">
                <p style="font-size: 15px; font-weight: 600;">Back-Side</p>
                <br>
                <!-- Rack Eke Lable  -->
                <div class="d-flex justify-content-center">
                    <div class="rackLbl">
                        <div class="w-100">A</div>
                        <div class="w-100">B</div>
                        <div class="w-100">C</div>
                        <div class="w-100">D</div>
                    </div>
                </div>

                <div class="rack">
                    <!-- Patte Lable tika -->
                    <div class="lableLeftSec">
                        <div class="lableLayer">
                            T
                        </div>
                        <div class="lableLayer">
                            6
                        </div>
                        <div class="lableLayer">
                            5
                        </div>
                        <div class="lableLayer">
                            4
                        </div>
                    </div>

                    <!-- Rck eke Sturucter eka -->


                    <div class=" rackSturcture">

                        <!-- <div class="rackfull"> -->
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">

                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->

                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- </div> -->

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">
                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">

                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                    <div class=" rackSturcture">
                        <!-- Rack Layers T -->
                        <div class="rackLayer ">
                        </div>
                        <!-- Rack Layer C -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer B -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->
                        </div>
                        <!-- Rack Layer A -->
                        <div class="rackLayer ">
                            <!-- Box sec 1 -->
                            <div class="box border">
                                <!-- Box BTn  -->
                                <a href="./virtual_inv_add_remove">
                                    <div class="btnTB btnBox">
                                        <span>A-1</span>
                                    </div>
                                    <!-- hover details  Sec eka -->
                                    <div class="hide insideDetails">
                                        <div class="tableModel">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <div style="width:100px;">
                                                            Models
                                                        </div>
                                                    </th>
                                                    <th>Qty</th>
                                                </tr>
                                                <tr>
                                                    <td>Latitude e2450</td>
                                                    <td>10</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- iwrai hover eka -->
                                </a>
                            </div>
                            <!-- /// -->


                        </div>

                        <!-- Yata Lable Tika -->
                        <!-- <div class="lableBoxLayer">
                            <div class="colNu">
                                1
                            </div>
                            <div class="colNu">
                                2
                            </div>
                            <div class="colNu">
                                3
                            </div>
                            <div class="colNu">
                                4
                            </div>
                        </div> -->

                        <!-- //////// -->
                    </div>
                </div>
            </div>

            <!-- /// -->


        </div>





    </div>
</div>



<?php require_once('../includes/footer.php'); ?>