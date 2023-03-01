<?php 

// SOAP - Simple Object Access Protocol

 // -- URI - https://www.nbrm.mk/klservice/kurs.asmx?wsdl 

 // dd.MM.YYYY

$endpoint = 'https://www.nbrm.mk/klservice/kurs.asmx?wsdl';

$data = [
    'StartDate' => '26.01.2023',
    'EndDate' => '26.01.2023'
];

$soap_servis = new SoapClient($endpoint);

$vozvraten_podatok = $soap_servis->GetExchangeRate($data);
$konvertiran_response = simplexml_load_string($vozvraten_podatok->GetExchangeRateResult);

// (
//     [RBr] => 37
//     [Datum] => 2023-02-26T00:00:00+01:00
//     [Valuta] => 978
//     [Oznaka] => EUR
//     [Drzava] => ЕМУ
//     [Nomin] => 1
//     [Sreden] => 61.695
//     [DrzavaAng] => EMU
//     [DrzavaAl] => UEM
//     [NazivMak] => евро
//     [NazivAng] => Euro
//     [ValutaNaziv_AL] => Euro
//     [Datum_f] => 2023-02-24T00:00:00+01:00
// )

// echo '<pre>';
// print_r($konvertiran_response);
// echo '</pre>';

// Oznaka, Sreden, Valuta, NazivMak

?>

        <div>
            <table>
                <thead>
                    <th>NazivMak</th>
                    <th>Valuta</th>
                    <th>Sreden</th>
                    <th>Oznaka</th>
                    <th>Datum</th>
                </thead>
                <tbody>
                <?php foreach($konvertiran_response as $rekord): ?>
                    <tr>
                        <td><?= $rekord->NazivMak  ?></td>
                        <td><?= $rekord->Valuta  ?></td>
                        <td><?= $rekord->Sreden  ?></td>
                        <td><?= $rekord->Oznaka ?></td>
                        <td><?= $rekord->Datum ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>






