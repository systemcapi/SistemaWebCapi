<?=heading($title, 2);?>
<?php // Change the css classes to suit your needs   

$attributes = array('class' => '', 'id' => '');
echo form_open('filiales/ingresar', $attributes); ?>

      
        <fieldset><legend><b>Ingreso de Datos</b></legend>
            <p>
            <label for="nombre">Nombre:<span class="required">*</span></label>
            </br><?php echo form_error('nombre'); ?>
            <input type="text" size="30" name="nombre" id="nombre" value="<?php echo set_value('nombre') ?>" placeholder="Nombre"/>
            </p>
            <p>
            <label for="ciudad">Ciudad:<span class="required">*</span></label>
            <?php echo form_error('ciudad'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Cajamarca'         => 'Cajamarca',
                                                      'Huanuco'           => 'Huanuco',
                                                      'Piura'             => 'Piura'
                                                    ); ?>

            <?php echo form_dropdown('ciudad', $options, set_value('ciudad'))?>
            </p>
            <p>
            <label for="provincia">Provincia:<span class="required">*</span></label>
            <?php echo form_error('provincia'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Cajamarca'         => 'Cajamarca',
                                                      'Huanuco'           => 'Huanuco',
                                                      'Piura'             => 'Piura'
                                                    ); ?>

            <?php echo form_dropdown('provincia', $options, set_value('provincia'))?>
            </p>
            <p>
            <label for="departamento">departamento:<span class="required">*</span></label>
            <?php echo form_error('departamento'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Cajamarca'         => 'Cajamarca',
                                                      'Huanuco'           => 'Huanuco',
                                                      'Piura'             => 'Piura'
                                                    ); ?>

            <?php echo form_dropdown('departamento', $options, set_value('departamento'))?>
            </p>
            <p>
            <label for="direccion">Dirección: <span class="required">*</span></label>
            <?php echo form_error('direccion'); ?>
            <br />
            <?php echo form_textarea( array( 'name' => 'direccion', 'rows' => '5', 'cols' => '40', 'value' => set_value('direccion') ) )?>
            </p>
            </p>
            <label for="telefono">Telefono:<span class="required">*</span></label>
            </br><?php echo form_error('telefono'); ?>
            <input type="text" size="30" name="telefono" id="telefono" value="<?php echo set_value('telefono') ?>" placeholder="Teléfono"/>
            </p>
	</fieldset>

<p>
        <?php echo form_submit( 'submit', 'Guardar'); ?>
</p>

<?php echo form_close(); ?>

