
<?php //foreach ($customers as $customers_item): ?>
<!---->
<!--	<div class="main">-->
<!--		--><?php //echo
//            $customers_item['name'] . ' ' .
//            $customers_item['surname'] . ' ' .
//            $customers_item['middle_name']
//        ; ?>
<!--	</div>-->
<!---->
<?php //endforeach; ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th width="220px"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $customers_item): ?>
        <tr>
            <td><?php echo $customers_item['name']; ?></td>
            <td><?php echo $customers_item['surname']; ?></td>
            <td>
                <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$customers_item['id']);?>">
                    <a class="btn btn-info" href="<?php echo base_url('customers/view/'.$customers_item['id']) ?>"> show</a>
                    <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$customers_item['id']) ?>"> Edit</a>
                    <button type="submit" class="btn btn-danger"> Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>