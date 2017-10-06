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
            <form id="form1" name="form1">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>ชื่อลูกค้า</label>
                            <input type="text" name="cusname" id="cusname" class="form-control" required>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>พาสปอร์ต/เลขบัตร</label>
                            <input type="text" name="passport" id="passport" class="form-control">

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>ประเทศ</label>
                            <input type="text" name="id_country[]" id="id_country" class="form-control" value="[]">
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>สกุลเงิน/อัตราแลกเปลี่ยน</label>
                            <input type="text" name="id_rate[]" id="id_rate" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group ">
                            <label>จำนวน </label>
                            <input type="text" name="id_country" id="id_country" class="form-control text-right">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label>ยอดรวม</label>
                            <input type="text" name="id_country" id="id_country" class="form-control text-right" readonly>
                        </div>
                    </div>



                </div>
                <div class="col-lg-12">
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <button type="submit" id="s1" name="submit" value="plus" class="btn btn-success"><i class="fa fa-plus"> เพิ่ม</i></button>
                            <button type="submit" id="s2" name="submit" value="print_sm" class="btn btn-default"><i class="fa fa-print"> พิมพ์ใบเสร็จย่อ</i></button>
                            <button type="submit" id="s2" name="submit" value="print_full" class="btn btn-default"><i class="fa fa-print"> พิมพ์ใบเสร็จเต็ม</i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <table class="table table-responsive table-striped table-bordered" id="tb">
                        <thead>

                        <th class="text-center">สกุลเงิน</th>
                        <th class="text-center">อัตรแลกเปลี่ยน</th>
                        <th class="text-center">จำนวน</th>
                        <th class="text-center">ยอดรวม</th>
                        <th class="text-center">ลบ</th>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $this->view('layout/foot'); ?>

<script type="text/javascript">
    function removeLine(lineItem) {
        var row = lineItem.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
    $(function () {



        $('#form1').submit(function () {
           
            var tableRef = document.getElementById('tb').getElementsByTagName('tbody')[0];
// Insert a row in the table at the last row
            var newRow = tableRef.insertRow(tableRef.rows.length);
            var newCell;
            var newText
// Insert a cell in the row at index 0
            for (i = 0; i < 4; i++)
            {
                newCell = newRow.insertCell(i);
                newCell.style.textAlign = "right";
                newText = document.createTextNode('New row '+i);
                newCell.appendChild(newText);
            }

            newCell = newRow.insertCell(4);
            newCell.style.textAlign = "center";
            //newText = document.createhtml("<input type=\"button\" id =\"deleteDep\" value=\"Delete\">");
            newCell.innerHTML = "<input class=\"btn btn-danger btn-sm\" type=\"button\" id =\"deleteDep\" value=\"Delete\" onclick=\"removeLine(this);\">";
            return false;
// Append a text node to the cell
            //var newText = document.createTextNode('New row');
            // var btndel = '<input type="button" id ="deleteDep" value="Delete" onclick = "deleteRow(this)">'';
            //

        });



      var ms =  $('#id_country').magicSuggest({
            data: '<?= base_url('country/get_country') ?>',
            valueField: 'id',
            displayField: 'name',
            mode: 'remote',
            placeholder: 'เลือกประเทศของลูกค้า...',
            allowFreeEntries: false,
            selectionPosition: 'inner',
            selectionStacked: true,
            allowDuplicates: false,
            maxSelection: 1,
            useCommaKey: false

        });
        
       
    });


</script>