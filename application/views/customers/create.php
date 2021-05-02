<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('customers/create'); ?>
<label for="title">Title</label>


<input type="text" name="title" /><br />

    <div class="form-group">
        <label for="name">Имя</label>
        <textarea class="form-control" id="name" name="name" rows="1"></textarea>
    </div>
<label for="surname">Фамилия</label>
<input type="text" name="surname" /><br />
<label for="middle_name"">Отчество</label>
<input type="text" name="middle_name" /><br />
<label for="city">Город</label>
<input type="text" name="city" /><br />
<label for="street">Улица</label>
<input type="text" name="street" /><br />
<label for="building">Дом</label>
<input type="text" name="building" /><br />
<label for="apartment">Квартира</label>
<input type="text" name="apartment" /><br />
<label for="broom_counter">Количесво заказанных веников</label>
<input type="number" name="broom_counter" /><br />

<input type="submit" name="submit" value="Create customer" />

</form>
