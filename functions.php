<?php
use App\DB;

function loadCursFromCBR($date)
{
	$url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req='.date_create($date)->format('d/m/Y');
	$xml = simplexml_load_file($url);

    $dataDate = $xml['Date'];
    if(date_create($dataDate)->format('Y-m-d')!=$date)
    {
		return false;
    }

	$res = $xml->xpath("//Valute[@ID='R01235']/Value");
	$res = str_replace(',', '.', strval($res[0]));
	DB::saveCursInDB($res, $date);
	
	return $res;
}

function printCurs($curs)
{
	return $curs ? "Курс за ".htmlspecialchars($_GET['date']).": $curs" : "Курс за данный день не найден";
}

function getCurs()
{
	if($curs = DB::getCursFromDB($_GET['date']))
	{

	}else
	{
		$curs = loadCursFromCBR(($_GET['date']));
	}

	return printCurs($curs);
}