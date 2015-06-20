<?php

require('fpdf/fpdf.php');
require('conexion.php');
class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}


function Header()
{
  
	$this->SetFont('Arial','B',19);
	$this->Text(20,14,'REPORTE DE DETALLE DE ',0,'C', 0);
	$this->Image('img/12.jpg',110,4,65);
	$this->Ln(20);
     $this->Image('img/13.jpg',90,35,110);

}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','B',8);
	$this->Cell(100,10,'LIBRERIA Y VARIEDADES GESTETNER',0,0,'L');

}

}

	$paciente= $_GET['id'];
	$con = new DB;
	$pacientes = $con->conectar();	
	
	$strConsulta = "SELECT * from usuario where id =  '$paciente'";
	
	$pacientes = mysql_query($strConsulta);
	
	$fila = mysql_fetch_array($pacientes);

	$pdf=new PDF('L','mm','Letter');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(10);

    $pdf->SetFont('Arial','i',12);
    $pdf->SetTextColor(46);
    $pdf->Cell(0,6,'Carnet: '.$fila['carnet'],0,1);
	$pdf->Cell(0,6,'Nombre: '.$fila['nombre'].' '.$fila['apellido'],0,1); 
	$pdf->Cell(0,6,'Domicilio: '.$fila['direccion'],0,1);
	$pdf->Cell(0,6,'Telefono: '.$fila['telefono'],0,1);
	
	$pdf->Ln(10);//margennn
	//aquii jugada coumn
	$pdf->SetWidths(array(34, 34, 34, 34, 30, 25, 26));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(10,84,155);//color cabecera
    $pdf->SetTextColor(255);

		for($i=0;$i<1;$i++)
			{
				$pdf->Row(array('Numero de Factura', 'Nombre del Producto', 'Precio del Producto', 'Cantidad del Producto', 'Descuento de Venta', 'Total de Venta', 'Fecha de Venta'));
			}
	
	$historial = $con->conectar();	
	$strConsulta = "SELECT detallefacturaventa.numerofactura as Numerofactura,facturaventa.fechaventa as num,producto.nombre as Nombre,producto.precioventa as precio, detallefacturaventa.cantidad as cantidad
	              ,detallefacturaventa.descuento as descuento,detallefacturaventa.importe as importe  
               FROM detallefacturaventa  
               INNER JOIN producto  ON producto.codigo=detallefacturaventa.codigoproducto
               INNER JOIN facturaventa  ON facturaventa.numerofactura = detallefacturaventa.numerofactura
	          WHERE facturaventa.idusuario = '$paciente' order by facturaventa.fechaventa";
	
	$historial = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($historial);
	
	for ($i=0; $i<$numfilas; $i++)
		{
			$fila = mysql_fetch_array($historial);
			$pdf->SetFont('Arial','',10);
			
			if($i%2 == 1)
			{//coor aquiiiiiiiiii
				$pdf->SetFillColor(10,145,615);
    			$pdf->SetTextColor(0);
				$pdf->Row(array($fila['Numerofactura'], $fila['Nombre'], $fila['precio'], $fila['cantidad'], $fila['descuento'], $fila['importe'], $fila['num']));
			}
			else
			{
				$pdf->SetFillColor(10,195,615);
    			$pdf->SetTextColor(0);
				$pdf->Row(array($fila['Numerofactura'],  $fila['Nombre'], $fila['precio'], $fila['cantidad'], $fila['descuento'], $fila['importe'], $fila['num']));
			}
		}

$pdf->Output('Reporte de Ventas (GESTETNER).pdf', 'I');
?>

