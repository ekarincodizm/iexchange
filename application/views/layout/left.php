
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">

        <li>
            <a href="index.html"><i class="fa fa-fw fa-home"></i> หน้าหลัก</a>
        </li>
        <li>
            <a href="<?= base_url('transection/buy')?>"><i class="fa fa-fw fa-money"></i> ซื้อเข้า</a>
        </li>
        <li>
            <a href="index.html"><i class="fa fa-fw fa-money"></i> ขายออก</a>
        </li>

        <li>
            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> ยกเลิก/พิมพ์ซ้ำ ใบเสร็จ</a>
        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#report"><i class="fa fa-fw fa-book"></i> รายงานการขาย <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="report" >
                <li>
                    <a href="#">รายงาน การขายประจำวัน</a>
                </li>
                <li>
                    <a href="#">รายงาน การขายเลือกช่วงเวลา</a>
                </li>
                <li>
                    <a href="#">รายงาน การยกเลิกใบเสร็จ</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>
        <li>
            <a href="<?= base_url()?>login/logout"><i class="fa fa-fw fa-key"></i> ออกจากระบบ</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>


<div id="page-wrapper">

<div class="container-fluid">