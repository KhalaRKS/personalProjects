<?php
    
    #$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
    echo '<pre>'; print_r(ControladorFormularios::ctrSeleccionarRegistros()); echo '</pre>';


?>   
        
         <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td>Albano Lucas Kainer</td>
          <td>albanokainer@hotmail.com</td>
          <td>23/10/2020</td>
          <td>
              <div class="btn-group">
                  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                  <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </div>
          </td>
          </tr>
        </tbody>
      </table>
    