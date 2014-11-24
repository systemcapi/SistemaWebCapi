<?=heading($title, 2);?>
<?php
$attributes = array('class' => '', 'id' => '');
echo form_open('empleados', $attributes); ?>
        
        <fieldset><legend><b>Ingreso de Datos</b></legend>
        <p>
        <label for="nombres">Nombre:<span class="required">*</span></label>
        </br><?php echo form_error('nombres'); ?>
        <input type="text" size="30" name="nombres" id="nombres" value="<?php echo set_value('nombres') ?>" placeholder="Nombre"/>
        </p>
        <p>
        <label for="apellidos">Nombre:<span class="required">*</span></label>
        </br><?php echo form_error('apellidos'); ?>
        <input type="text" size="30" name="apellidos" id="apellidos" value="<?php echo set_value('apellidos') ?>" placeholder="Apellidos"/>
        </p>
        <p>
        <label for="email">E_mail:<span class="required">*</span></label>
        </br><?php echo form_error('email'); ?>
        <input type="text" size="30" name="email" id="apellidos" value="<?php echo set_value('email') ?>" placeholder="E_mail"/>
        </p>
        <label for="direccion">Dirección: <span class="required">*</span></label>
        <?php echo form_error('direccion'); ?>
        <br />
        <?php echo form_textarea( array( 'name' => 'direccion', 'rows' => '5', 'cols' => '40', 'value' => set_value('direccion') ) )?>
        </p>
        <p>
        <label for="telefono">Telefono:<span class="required">*</span></label>
        </br><?php echo form_error('telefono'); ?>
        <input type="text" size="30" name="telefono" id="telefono" value="<?php echo set_value('telefono') ?>" placeholder="Teléfono"/>
        </p>
        <p>
        <p>
            <label for="Filialid">Filial:<span class="required">*</span></label>
            <?php echo form_error('Filialid'); ?>

            <br /><?php echo form_dropdown('Filialid', $arrFiliales, set_value('Filialid'))?>
        </p>
        <p>
        <label for="tipo_de_empleado">Tipo:<span class="required">*</span></label>
            <?php echo form_error('tipo_de_empleado'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Administrativo'   => 'Administrativo',
                                                      'Usuario'           => 'Usuario',
                                                      
                                                    ); ?>

            <?php echo form_dropdown('tipo_de_empleado', $options, set_value('tipo_de_empleado'))?>
        </p>
        <p>
        <label for="estado">Estado:<span class="required">*</span></label>
            <?php echo form_error('estado'); ?>

            <?php // Change the values in this array to populate your dropdown as required ?>

            </br>
            <?php $options = array(
                                                      ''                  => '- Seleccione una opcion -',
                                                      'Activo'            => 'Activo',
                                                      'No activo'         => 'No activo',
                                                      
                                                    ); ?>

            <?php echo form_dropdown('estado', $options, set_value('estado'))?>
        </p>
        </fieldset>

<p>
        <?php echo form_submit( 'submit', 'Guardar'); ?>
</p>

<?php echo form_close(); ?>