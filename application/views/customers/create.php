<?php echo validation_errors(); ?>

<?php echo form_open('customers/create'); ?>
<div class="container col-md-8">

    <h1><?php echo $title ?></h1>

    <div class="row ">
        <div class="col">
            <label for="name">Имя</label>
            <input type="text"
                   name="name"
                   id="name"
                   placeholder="Имя"
                   class="form-group"
                   value="<?php echo set_value('name'); ?>"
            />
        </div>

        <div class="col">
            <label for="surname">Фамилия</label>
            <input type="text"
                   name="surname"
                   id="surname"
                   placeholder="Фамилия"
                   class="form-group"
                   value="<?php echo set_value('surname'); ?>"
            />
        </div>

        <div class="col">
            <label for="middle_name">Отчество</label>
            <input type="text"
                   name="middle_name"
                   id="middle_name"
                   placeholder="Отчество"
                   class="form-group"
            value="<?php echo set_value('middle_name'); ?>"
            />
        </div>
    </div>

	<div class="row">
		<div class="col">
			<label for="birth_date">Дата роджения</label><br/>
			<input type="date"
				   name="birth_date"
				   id="birth_date"
				   class="form-group"
				   value="<?php echo set_value('birth_date'); ?>"
			/>
		</div>
	</div>

	<div class="row ">
        <div class="col">
            <label for="street">Улица</label>
            <input type="text"
                   name="street"
                   id="street"
                   placeholder="Улица"
                   class="form-group"
                   value="<?php echo set_value('street'); ?>"
            />
        </div>

        <div class="col">
            <label for="building">Дом</label>
            <input type="text"
                   name="building"
                   id="building"
                   placeholder="Дом"
                   class="form-group"
                   value="<?php echo set_value('building'); ?>"
            />
        </div>

        <div class="col">
            <label for="apartment">Квартира</label>
            <input type="text"
                   name="apartment"
                   id="apartment"
                   placeholder="Квартира"
                   class="form-group"
                   value="<?php echo set_value('apartment'); ?>"
            />
        </div>
    </div>


    <div class="row">
        <div class="col">
            <label for="broom_counter">Количесво заказанных веников</label><br/>
            <input type="number"
                   min="1"
                   name="broom_counter"
                   id="broom_counter"
                   class="form-group"
                   value="<?php echo set_value('broom_counter'); ?>"
            />
        </div>
    </div>


    <div class="row">
        <div class="col">
            <input type="submit"
                   name="submit"
                   class="btn btn-success"
                   value="Добавить"
            />
        </div>
    </div>
</div>


</form>
