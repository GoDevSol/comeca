
<?php
/*
require('./fpdf.php');

class PDF extends FPDF
{


    function ChapterTitle($label)
{
     
    $this->SetFont('Arial','B',12);
    $this->SetFillColor(200,220,255);
    $this->Cell(0,6,$label,0,1,'C',true);        
}

function FancyTable($header, $data,$w)
{
    
    $this->SetFillColor(200,220,255);
    $this->SetTextColor(0);
    $this->SetDrawColor(200,220,255);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    $this->SetFontSize(10);
    
    for($i=0;$i<count($header);$i++)
    $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    
    $fill = false;
    if (count($w) == 6){
    foreach($data as $row)
    {
        $this->SetFont('','B');
        $this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
        $this->SetFont('');
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,($row[2]),'LR',0,'C',$fill);
        $this->Cell($w[3],6,($row[3]),'LR',0,'C',$fill);
        $this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
        $this->Cell($w[5],6,($row[5]),'LR',0,'L',$fill);        
        $this->Ln();
        $fill = !$fill;
    }

    }

    if (count($w) == 8){
        foreach($data as $row)
        {
            $this->SetFont('','B');
            $this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
            $this->SetFont('');
            $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
            $this->Cell($w[2],6,($row[2]),'LR',0,'C',$fill);
            $this->Cell($w[3],6,($row[3]),'LR',0,'C',$fill);
            $this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
            $this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);
            $this->Cell($w[6],6,$row[6],'LR',0,'C',$fill);
            $this->Cell($w[7],6,($row[7]),'LR',0,'L',$fill);        
            $this->Ln();
            $fill = !$fill;
        }
    
        }
    
    $this->Cell(array_sum($w),0,'','T');
}



function Header()
{

    $this->Image('logo.jpeg',10,8,30);
    $this->SetFont('Arial','B',15);
    $this->Cell(80);
    $this->Cell(30,5,'Group Global Trading And Services, S.A.',0,0,'C');
    $this->Ln(6);
    $this->Cell(80);    
    $this->SetFont('Arial','',10);
    $this->Cell(30,5,'3ra. Avenida 9-50 zona 11, Guatemala, Guatemala',0,0,'C');
    $this->Ln(5);
    $this->Cell(80);    
    $this->Cell(30,5,'(502) 2292-3610',0,0,'C');
}


function Footer()
{

    $this->SetY(-15);

    $this->SetFont('Arial','B',8);

    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',12);
$pdf->Ln(12);
$pdf->ChapterTitle("INFORMACION GENERAL");


$pdf->SetFont('Arial','B',10);
$pdf->Text(10, 42,'Nombre del Cliente:');
$pdf->Text(10, 46,'Tecnico Lider:');
$pdf->Text(10, 50,'Tecnico Auxiliar:');
$pdf->Text(10, 54,'Hora Entrada:');
$pdf->Text(10, 58,'Hora Salida:');

$pdf->SetFont('Arial','',10);
$pdf->Text(50, 42,'');
$pdf->Text(50, 46,'');
$pdf->Text(50, 50,'');
$pdf->Text(50, 54,'');
$pdf->Text(50, 58,'');

$pdf->SetFont('Arial','B',10);
$pdf->Text(100, 42,'No. Reporte:');
$pdf->Text(100, 46,'Fecha:');
$pdf->Text(100, 50,'Responsable:');
$pdf->Text(100, 54,'Ubicacion:');
$pdf->Text(100, 58,'Tipo de Trabajo:');

$pdf->SetFont('Arial','',10);
$pdf->Text(140, 42,'');
$pdf->Text(140, 46,'');
$pdf->Text(140, 50,'');
$pdf->Text(140, 54,''); 
$pdf->Text(140, 58,'');


$pdf->Ln(20);
$pdf->ChapterTitle("DATOS DEL EQUIPO");





$pdf->SetFont('Arial','B',10);
$pdf->Text(10, 69,'Modelo Motor:');
$pdf->Text(10, 73,'Modelo Generador:');
$pdf->Text(10, 77,'Modelo del Control:');
$pdf->Text(10, 81,'Horometro:');

$pdf->SetFont('Arial','',10);
$pdf->Text(50, 69,'');
$pdf->Text(50, 73,'');
$pdf->Text(50, 77,'');
$pdf->Text(50, 81,'');


$pdf->SetFont('Arial','B',10);
$pdf->Text(83, 69,'Serie Motor:');
$pdf->Text(83, 73,'Serie Generador:');
$pdf->Text(83, 77,'Spec:');
$pdf->Text(83, 81,'No. de Arranques:');


$pdf->SetFont('Arial','',10);
$pdf->Text(120, 69,'');
$pdf->Text(120, 73,'');
$pdf->Text(120, 77,'');
$pdf->Text(120, 81,'');

$pdf->SetFont('Arial','B',10);
$pdf->Text(155, 69,'CPL:');
$pdf->Text(155, 73,'KWL');


$pdf->SetFont('Arial','B',10);
$pdf->Text(168, 69,'');
$pdf->Text(168, 73,'');

$pdf->Ln(18);
$pdf->ChapterTitle("INSPECCION A REALIZAR");
$pdf->Ln(2);

$w = array(9, 95, 12, 11,9, 54);
$header = array('Item', 'Descripcion', 'Bueno', 'Malo', 'N/A', 'Observaciones');
$data = array(
    array("1","Arranque de comprobacion del Generador","","","X",""),
    array("2","Revision de revoluciones RPM y Frecuencia Hz","","","X",""),
    array("3","Mediciones de Voltaje AC (Ajuste si aplica)","","","X",""),
    array("4","Comprobacion de sensor de bajo nivel de refrigerante","","","X",""),
    array("5","Comprobacion de sensor o Switch nivel de refrigerante","","","X",""),
    array("6","Arranque de comprobacion del Generador","","","X",""),
    array("7","Revision de revoluciones RPM y Frecuencia Hz","","","X",""),
    array("8","Mediciones de Voltaje AC (Ajuste si aplica)","","","X",""),
    array("9","Comprobacion de sensor de bajo nivel de refrigerante","","","X",""),
    array("10","Comprobacion de sensor o Switch nivel de refrigerante","","","X",""),
    array("11","Arranque de comprobacion del Generador","","","X",""),
    array("12","Revision de revoluciones RPM y Frecuencia Hz","","","X",""),
    array("13","Mediciones de Voltaje AC (Ajuste si aplica)","","","X",""),
    array("14","Comprobacion de sensor de bajo nivel de refrigerante","","","X",""),
    array("15","Comprobacion de sensor o Switch nivel de refrigerante","","","X",""),
    array("16","Arranque de comprobacion del Generador","","","X",""),
    array("17","Revision de revoluciones RPM y Frecuencia Hz","","","X",""),
    array("18","Mediciones de Voltaje AC (Ajuste si aplica)","","","X",""),
    array("19","Comprobacion de sensor de bajo nivel de refrigerante","","","X",""),
    array("20","Comprobacion de sensor o Switch nivel de refrigerante","","","X",""),
    array("21","Arranque de comprobacion del Generador","","","X",""),
    array("22","Revision de revoluciones RPM y Frecuencia Hz","","","X",""),
    array("23","Mediciones de Voltaje AC (Ajuste si aplica)","","","X",""),
    array("24","Comprobacion de sensor de bajo nivel de refrigerante","","","X",""),
    array("25","Comprobacion de sensor o Switch nivel de refrigerante","","","X",""),
    array("26","Mediciones de Voltaje AC (Ajuste si aplica)","","","X",""),
    array("27","Comprobacion de sensor de bajo nivel de refrigerante","","","X",""),
    array("28","Comprobacion de sensor o Switch nivel de refrigerante","","","X","")
);
$pdf->FancyTable($header,$data,$w);
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->Ln(12);
$pdf->ChapterTitle("REPARACION EFECTUADA");

$pdf->SetFont('Arial','B',11);
$pdf->Text(10, 44,'Queja:');
$pdf->Text(10, 50,'Causa:');
$pdf->Text(10, 56,'Correccion (Procedimiento):');


$pdf->SetFont('Arial','',11);
$pdf->Text(23, 44,'TEXTO DE PRUEBA');
$pdf->Text(24, 50,'TEXTO DE PRUEBA');
$pdf->Text(63, 56,'TEXTO DE PRUEBA');

$pdf->Ln(20);
$pdf->ChapterTitle("CONDICIONES FINALES DE ENTREGA");
$pdf->Ln(2);


$we = array(9, 90, 12, 11,9,11,9, 34);
$header = array('Item', 'Descripcion', 'Bueno', 'Malo', 'N/A', '', '', 'Observaciones');
$data = array(
    array("1","Temperatura de Refrigerante","","","X","15",utf8_decode('°F'),""),
    array("2","Temperatura de Aceite","","","X","",utf8_decode('°F'),""),
    array("3","Temperatura de Gases de Escape","","","X","",utf8_decode('°C'),""),
    array("4","Temperatura de multiple de admision","","","X","",utf8_decode('°C'),""),
    array("5",utf8_decode('Presión de Aceite'),"","","X","",utf8_decode('PSI'),""),
    array("6","Voltaje de Alternador","","","X","",utf8_decode('V'),""),
    array("7",utf8_decode('Caída de Voltaje en Arranque'),"","","X","",utf8_decode('V'),""),
    array("8","Instrumentos de Tablero","","","X","","",""),
    array("9",utf8_decode('Oscilación de Gobernador'),"","","X","","",""),
    array("10",utf8_decode('Ruidos Extraños'),"","","X","","","")
);
$pdf->FancyTable($header,$data,$we);


$pdf->Ln(2);
$pdf->ChapterTitle("GENERADOR");
$pdf->Ln(2);

$we = array(9, 90, 12, 11,9,11,9, 34);
$header = array('Item', 'Descripcion', 'Bueno', 'Malo', 'N/A', '', '', 'Observaciones');
$data = array(
    array("1","Arranque de comprobacion del Generador","","","X","15",utf8_decode('°F'),""),
    array("2","Revision de revoluciones RPM y Frecuencia Hz","","","X","",utf8_decode('°F'),""),
    array("3","Mediciones de Voltaje AC (Ajuste si aplica)","","","X","",utf8_decode('°C'),""),
    array("4","Comprobacion de sensor de bajo nivel de refrigerante","","","X","",utf8_decode('°C'),""),
    array("5","Comprobacion de sensor o Switch nivel de refrigerante","","","X","",utf8_decode('PSI'),""),
    array("6","Arranque de comprobacion del Generador","","","X","",utf8_decode('V'),""),
    array("7","Revision de revoluciones RPM y Frecuencia Hz","","","X","",utf8_decode('V'),"")    
);
$pdf->FancyTable($header,$data,$we);

$pdf->Ln(2);
$pdf->ChapterTitle("CONCLUSIONES Y RECOMENDACIONES");
$pdf->Ln(2);
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,5,utf8_decode('Se encontró fuga de refrigerante por la parte de refrigerante por la partede refrigerante por la parte de refrigerante por la parte de refrigerante por la parte Se encontró fuga de refrigerante por la parte de refrigerante por la partede refrigerante por la parte de refrigerante por la parte de refrigerante por la parte'));

$pdf->Ln();
$pdf->Cell(50,0,"asdasd");
$pdf->Cell(30,0,"asdasd");





$pdf->Output();


*/



require('../fpdf.php');

class PDF extends FPDF
{
// Cabecera de p�gina
function Header()
{
	// Logo
	$this->Image('logo.png',10,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	$this->Cell(80);
	// T�tulo
	$this->Cell(30,10,'Title',1,0,'C');
	// Salto de l�nea
	$this->Ln(20);
}

// Pie de p�gina
function Footer()
{
	// Posici�n: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// N�mero de p�gina
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creaci�n del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
	$pdf->Cell(0,10,'Imprimiendo l�nea n�mero '.$i,0,1);
$pdf->Output();


?> 