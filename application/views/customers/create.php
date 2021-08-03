<?php echo validation_errors(); ?>

<?php echo form_open('customers/create'); ?>
<div class="container">

    <div class="row">
        <div class="col">
            <label for="name">Имя</label>
            <input type="text"
                   name="name"
                   id="name"
                   class="form-control"
                   placeholder="Имя"
                   value="<?php echo set_value('name'); ?>"
            />
        </div>

        <div class="col">
            <label for="surname">Фамилия</label>
            <input type="text"
                   name="surname"
                   id="surname"
                   class="form-control"
                   placeholder="Фамилия"
                   value="<?php echo set_value('surname'); ?>"
            />
        </div>

        <div class="col">
            <label for="middle_name">Отчество</label>
            <input type="text"
                   name="middle_name"
                   id="middle_name"
                   class="form-control"
                   placeholder="Отчество"
                   value="<?php echo set_value('middle_name'); ?>"
            />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="street">Улица</label><br />
            <input type="text" name="street" id="street" value="<?php echo set_value('street'); ?>"/>
        </div>

        <div class="col">
            <label for="building">Дом</label><br />
            <input type="text" name="building" id="building" value="<?php echo set_value('building'); ?>"/>
        </div>

        <div class="col">
            <label for="apartment">Квартира</label><br />
            <input type="text" name="apartment" id="apartment"  value="<?php echo set_value('apartment'); ?>"/>
        </div>

    </div>


	<label for="broom_counter">Количесво заказанных веников</label><br />
	<input type="number" name="broom_counter" id="broom_counter" value="<?php echo set_value('broom_counter'); ?>"/><br />

	<input type="submit" name="submit" value="Create customer" />
</div>


</form>
