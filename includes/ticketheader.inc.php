<?php
    $pdf->setXY(2,1.5);
    $pdf->MultiCell(73, 4.2, $empresa, 0,'C',0 ,1);

    $pdf->setXY(2,10);
    $pdf->SetFont('Arial', '', 6.9);
    $pdf->MultiCell(73, 4.2, 'Barrio: '.$direccion, 0,'C',0 ,1);

    $pdf->setXY(2,13);
    $pdf->SetFont('Arial', '', 6.9);
    $pdf->MultiCell(73, 4.2, 'Timbrado: '.$numero_resolucion, 0,'C',0 ,1);

    $get_YD = $pdf->GetY();

    $pdf->setXY(2,6);
    $pdf->SetFont('Arial', '', 8);
    $pdf->MultiCell(73, 4.2, 'R.U.C.:5231545', 0,'C',0 ,1);


    //$pdf->setXY(2,$get_YD);
   // $pdf->MultiCell(73, 4.2, '954775902', 0,'C',0 ,1);

    /*INGRESAR EN ESTA LINEA EL TELEFONO DEL TICKET*/

    $pdf->setXY(2,$get_YD);
    $pdf->MultiCell(73, 4.2, '', 0,'C',0 ,1);


   /* $pdf->setXY(2,$get_YD + 8);
    $pdf->MultiCell(73, 4.2, 'Horario de Atencion:', 0,'C',0 ,1);
    
    $pdf->setXY(2,$get_YD + 12);
    $pdf->MultiCell(73,4.2, 'Lun - Sab 7:00 - 17:20', 0,'C',0 ,1);
    
    $pdf->setXY(2,$get_YD + 16);
    $pdf->MultiCell(73,4.2, 'Domingo de 7:00 - 12:00', 0,'C',0 ,1);
 
    //$pdf->setXY(2,$get_YD + 12);
    //$pdf->MultiCell(73, 4.2, 'Fecha Resolucion : '.$fecha_resolucion, 0,'C',0 ,1);

    $pdf->setXY(2,$get_YD + 21);
    $pdf->MultiCell(73, 4.2, 'No se aceptan devoluciones', 0,'C',0 ,1);
*/

    $get_YH = $pdf->GetY();
