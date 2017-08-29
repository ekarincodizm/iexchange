<?php $this->view('layout/head'); ?>
<?php $this->view('layout/top'); ?>
<?php $this->view('layout/left'); ?>



<!-- Page Heading -->
<div class="row" style="height: 700px">
    <div class="col-lg-12">
        <h1 class="page-header">
            ซื้อเข้า
        </h1>
        <div class="panel panel-default panel-body">
            <form>
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" name="cusname" id="cusname" class="form-control" required>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Passport ID/Citizen ID</label>
                            <input type="text" name="passport" id="passport" class="form-control">

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Country </label>
                            <input type="text" name="id_country[]" id="id_country" class="form-control" value="[]">
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Monetory Rate </label>
                            <input type="text" name="id_rate[]" id="id_rate" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group ">
                            <label>Amount </label>
                            <input type="text" name="id_country" id="id_country" class="form-control text-right">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" name="id_country" id="id_country" class="form-control text-right" readonly>
                        </div>
                    </div>



                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <button type="submit" id="s1" name="s1" value="plus" class="btn btn-success"><i class="fa fa-plus"> เพิ่ม</i></button>
                            <button type="submit" id="s2" name="s2" value="print_sm" class="btn btn-default"><i class="fa fa-print"> พิมพ์ใบเสร็จย่อ</i></button>
                            <button type="submit" id="s2" name="s2" value="print_full" class="btn btn-default"><i class="fa fa-print"> พิมพ์ใบเสร็จเต็ม</i></button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<?php $this->view('layout/foot'); ?>

<script type="text/javascript">


    $(function () {

        $('#id_country').magicSuggest({
            data: '<?= base_url('country/get_country') ?>',
            valueField: 'id',
            displayField: 'name',
            mode: 'remote',
            placeholder: 'Select Country...',
            allowFreeEntries: false,
            selectionPosition: 'inner',
            selectionStacked: true,
            allowDuplicates: false,
            maxSelection: 1,
            useCommaKey: false

        });
    });
</script>