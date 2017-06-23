<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioVeterinario.php');
}
 ?>
<?php
  
  require_once('../pdf/mpdf.php');

  $conn=new mysqli('localhost', 'root','','veterinaria');
  $query="SELECT * FROM ReporteUsuarios";
  $prepare=$conn->prepare($query);
  $prepare->execute();
  $resultSet=$prepare->get_result();
  while ($ReporteUsuarios[]=$resultSet->fetch_array());
  $resultSet->close();
  $prepare->close();
  $conn->close();



  //print_r($productos);
  //die();

   $html = '<header class="clearfix">
      <div id="logo">
        <img src="../imagenes/svet-cli.png" style="width:30% ; height="500px;" ">
      </div>
      <h1>Clinica Mascotas Veterinaria</h1>
      <div id="company" class="clearfix">
        <div>ASMAXI.S.A</div>
       
        <div> Tel. 7848380-4665420</div>  
        <div>ASMAXI@gmail.com</div>
      </div>
      <div id="project">
        <div><span>Proyecto</span> Svet-cli</div>
        <div><span>Cliente</span> Clinica Mascotas Veterinaria - Segundo Aguilar</div>
        <div><span>Direccion</span> calle 57sur#87d-27 Bosa villa Nora</div>
        <div><span>Correo</span> clinicaMascotas@gmail.co</div>
        
      </div>
    </header>
    <main>
   <h1><font size="7" color="#000000" face="Cooper Black"><center>Usuarios en el Sistema</center></font></h1>
      <table>
        <thead>

          <tr>
            <th class="service">Nombre</th>
            <th class="desc">Celular</th>
            <th class="desc">Correo</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($ReporteUsuarios as $ReporteUsuarios) {
          $html.='<tr>
            <td class="desc">'.$ReporteUsuarios['nombreUsu'].'</td>
            <td class="unit">'.$ReporteUsuarios['celular'].'</td>
            <td class="service">'.$ReporteUsuarios['correo'].'</td>

          </tr>'; 

          
        }

         $html.='
          
          
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Derechos recerbados ASMAXI.S.A</div>
      </div>
    </main>';

  $mpdf= new mPDF('c', 'A4');
  $css=file_get_contents('../css/style.css');
  $mpdf->writeHTML($css, 1);
  $mpdf->writeHTML($html);
  $mpdf->Output('resportePropietario.pdf','I');

 ?>