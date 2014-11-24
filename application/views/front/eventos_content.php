<?=heading($title, 2);?>
<?php // Change the css classes to suit your needs   

$attributes = array('class' => '', 'id' => '');
echo form_open('eventos/ingresar', $attributes); ?>

      
        <fieldset><legend><b>Ingreso de Datos</b></legend>
            <p>
            <label for="nombre">Nombre:<span class="required">*</span></label>
            </br><?php echo form_error('nombre'); ?>
            <input type="text" size="100" name="nombre" id="nombre" value="<?php echo set_value('nombre') ?>" placeholder="Nombre"/>
            </p>
            <p>
            <label for="fecha_ini">Fecha de Inicio:<span class="required">*</span></label>
            </br><?php echo form_error('fech_ini'); ?>
            <input type="date" size="30" name="fecha_ini" value="<?php echo set_value('fecha_ini') ?>" placeholder="Fecha de inicio">
            </p>
            <p>
            <label for="fecha_fin">Fecha de Término:<span class="required">*</span></label>
            </br><?php echo form_error('fecha_fin'); ?>
            <input type="date" size="30" name="fecha_fin" value="<?php echo set_value('fecha_fin') ?>" placeholder="Fecha de fin">
            </p>
            <p>
            <p>
            <label for="lugar">Lugar:<span class="required">*</span></label>
            </br><?php echo form_error('lugar'); ?>
            <input type="text" size="100" name="lugar" id="lugar" value="<?php echo set_value('lugar') ?>" placeholder="Lugar"/>
            </p>
            <p>
            <label for="hora">Hora:<span class="required">*</span></label>
            </br><?php echo form_error('hora'); ?>
            <input type="time" name="hora" value="<?php echo set_value('hora') ?>" placeholder="Hora">
            </p>
            <p>
            <label for="precio">Precio <span class="required">*</span></label>
            <?php echo form_error('precio'); ?>
            <br /><input id="precio" type="text" name="precio" value="<?php echo set_value('precio'); ?>"  />
            </p>
            <p>
            <label for="Filialid">Filial:<span class="required">*</span></label>
            <?php echo form_error('Filialid'); ?>

            <br /><?php echo form_dropdown('Filialid', $arrFiliales, set_value('Filialid'))?>
            </p>
	</fieldset>

<p>
        <?php echo form_submit( 'submit', 'Guardar'); ?>
</p>

<?php echo form_close(); ?>

