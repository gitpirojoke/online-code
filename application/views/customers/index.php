
<h1><?php echo $title ?></h1>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <p><a class="btn btn-success" href="<?php echo base_url('customers/create') ?>"> Добавить клиента</a></p>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th width="150px"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $customers_item): ?>
        <tr>
            <td><?php echo $customers_item['name']; ?></td>
            <td><?php echo $customers_item['surname']; ?></td>
            <td class="text-center">
				<a class="btn btn-info" href="<?php echo base_url('customers/view/'.$customers_item['id']); ?>"><i class="fa fa-eye fa-fw"></i></a>
				<a class="btn btn-primary" href="<?php echo base_url('customers/edit/'.$customers_item['id']); ?>"><i class="fa fa-pencil-square-o fa-fw"></i></a>
				<a class="btn btn-danger" href="<?php echo base_url('customers/delete/'.$customers_item['id']); ?>"><i class="fa fa-trash-o fa-fw"></i></a>
			</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
