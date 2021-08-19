
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/css/theme.bootstrap_4.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>
<script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.widgets.min.js"></script>

<h1><?php echo $title ?></h1>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <p><a class="btn btn-success" href="<?php echo base_url('customers/create') ?>"> Добавить клиента</a></p>
        </div>
    </div>
</div>

<table id="filter-table" class="table table-bordered">
    <thead>
    <tr>
        <th class="col-5">Имя</th>
        <th class="col-5">Фамилия</th>
        <th width="150px" class="sorter-false filter-false"></th>
    </tr>
    </thead>
    <tr class="col-filter">
        <th><input type="text"/></th>
        <th><input type="text"/></th>
    </tr>
    <tbody>

    <?php foreach ($customers as $customers_item): ?>
        <tr class='table-data'>
            <td><?php echo $customers_item['name']; ?></td>
            <td><?php echo $customers_item['surname']; ?></td>
            <td class="text-center">
                <a class="btn btn-info" href="<?php echo base_url('customers/view/' . $customers_item['id']); ?>"><i
                            class="fa fa-eye fa-fw"></i></a>
                <a class="btn btn-primary"
                   href="<?php echo base_url('customers/edit/' . $customers_item['id']); ?>"><i
                            class="fa fa-pencil-square-o fa-fw"></i></a>
                <a class="btn btn-danger"
                   href="<?php echo base_url('customers/delete/' . $customers_item['id']); ?>"><i
                            class="fa fa-trash-o fa-fw"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>




<script type="text/javascript">
    $(document).ready(function() {
        $("#filter-table").tablesorter({ theme: "bootstrap", widgets: ['filter']});
    });
</script>

<script>
    $('.col-filter input').on('input', function () {
        filterTable($(this).parents('table'));
    });

    function filterTable($table) {
        var $filters = $table.find('.col-filter th');
        var $rows = $table.find('.table-data');
        $rows.each(function (rowIndex) {
            var valid = true;
            $(this).find('td').each(function (colIndex) {
                if ($filters.eq(colIndex).find('input').val()) {
                    if ($(this).html().toLowerCase().indexOf(
                        $filters.eq(colIndex).find('input').val().toLowerCase()) === -1) {
                        valid = valid && false;
                    }
                }
            });
            if (valid === true) {
                $(this).css('display', '');
            } else {
                $(this).css('display', 'none');
            }
        });
    }
</script>
