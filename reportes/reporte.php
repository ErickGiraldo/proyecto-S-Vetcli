<?php 
session_start(); 
if ($_SESSION['sesion']==0){
header('location:escritorioVeterinario.php');
}
 ?>
<?php
  
  require_once('../pdf/mpdf.php');

  $conn=new mysqli('localhost', 'root','','veterinaria');
  $query="SELECT * FROM reportes";
  $prepare=$conn->prepare($query);
  $prepare->execute();
  $resultSet=$prepare->get_result();
  while ($reportes[]=$resultSet->fetch_array());
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
        <div>Nombre Compañia</div>
       
        <div> Tel. 7848380-4665420</div>  
        <div>ajrodriguez660@misena.edu.co</div>
      </div>
      <div id="project">
        <div><span>Proyecto</span> SVET-CLI</div>
        <div><span>Cliente</span> Segundo Aguilar</div>
        <div><span>Direccion</span> calle 57sur#87d-27 Bosa villa Nora</div>
        <div><span>Correo</span> ajrodriguez660@misena.edu.co</div>
        
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Fecha</th>
            <th class="desc">Nombre Propietario</th>
            <th>Documento Propietario</th>
            <th>Nombre Mascota</th>
            <th>Sexo</th>
          </tr>
        </thead>
        <tbody>';
        foreach ($reportes as $reportes) {
        	$html.='<tr>
            <td class="service">'.$reportes['fecha'].'</td>
            <td class="desc">'.$reportes['propietario'].'</td>
            <td class="unit">'.$reportes['numDocumento'].'</td>
            <td class="qty">'.$reportes['Mascota'].'</td>
            <td class="total">'.$reportes['sexo'].'</td>
          </tr>';
        }

         $html.='
          
          
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Derechos de autor de SVET-CLI</div>
      </div>
    </main>';

  $mpdf= new mPDF('c', 'A4');
  $css=file_get_contents('../css/style.css');
  $mpdf->writeHTML($css, 1);
  $mpdf->writeHTML($html);
  $mpdf->Output('resporte.pdf','I');

 ?>