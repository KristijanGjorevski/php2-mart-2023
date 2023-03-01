<style>
	g {color: darkolivegreen} 
	r {color: firebrick} 
	y {color: orange} 
</style>

#### pred samiot pocetok:

- mora da se ima SOAP extensija na xampp (config php.ini)


# Web servisi


1. Sto e web servis? (ne e API, toa prvo)

	- <b>Glavnata cel zosto tie postojat?</b>:
		* Web servis e <b>zbir od instrukcii i protokoli</b> koi ovozmožuvaat <b>kompatibilnost</b> pri komunikacijata pomegju različni aplikacii i sistemi (komponenti) preku upotreba na standardizirani protokoli i formati.

2. Glavni podtocki za web servisite:
	- Ovozmozeno preku internet network
	- Najcestiot protokol koristen za web servisi e HTTP (ima i drugi / podole)
	- Standardiziran XML sistem za komunikacija izmegju dvete aplikacii
	- Nezavisen od eden operativen sistem ili eden programski jazik


Podatocite što se razmenuvaat pomeǵu aplikaciite što koristat web servisi može da imaat mnogu različni formi, vklučuvajḱi tekst, sliki, videa i drugi vidovi mediumi.

Web Servisite, isto taka, možat da obezbedat različni vidovi funkcionalnosti, kako što se avtentikacija, bezbednost i pristap do bazata na podatoci.
Postojat mnogu različni tipovi na web servisi, sekoj so svoj set na silni i slabi strani.

3. Moze da se deli na tipovi na servisi vo zavisnost od protokolot koj se koristi za komunikacija:

		* (SMTP - Simple Mail Transfer Protocol)
			Ovoj protokol se koristi za ispraḱanje i primanje e-poraki. Može da se koristi za implementacija na web servisi za obrabotka i upravuvanje/menadziranje so e-mail.
			
		* (FTP - File Transfer Protocol) 
			Ovoj protokol se koristi za prenos na fajlovi pomeǵu serveri i klienti.

		* (RPC - Remote Procedure Call)
			Ovoj protokol se koristi za povikuvanje funkcii na oddalečeni serveri. Može da se koristi za implementacija na veb-uslugi za distribuirani kompjuteri i integracija na aplikacii.

		* (SOAP - Simple Object Access Protocol)
		* (REST - Representational State Transfer)

	- <y>XML-RPC web servisi:</y>
		- XML-RPC (Remote Procedure Call) e protokol koj koristi XML za kodiranje povici od dalečinski metod i HTTP kako transporten mehanizam. Veb-uslugite na XML-RPC se lesni za implementacija i poddržuvaat širok opseg na programski jazici.
		
	- <y>WebSockets:</y>
		- WebSockets e protokol koj ovozmožuva dvonasočna komunikacija pomeǵu klientot i serverot preku edna TCP konekcija. WebSockets najčesto se koristat vo aplikacii vo realno vreme, kako što se onlajn igri, aplikacii za razgovor i sistemi za finansiski transakcii.

# SOAP (Simple Object Access Protocol)
	SOAP (Simple Object Access Protocol) e protokol za poraki što se koristi za razmena na strukturirani podatoci pomeǵu aplikacii preku Internet. Uslugata SOAP e veb-usluga koja koristi SOAP kako svoj protokol za poraki.

<b>Klucna rabota kaj SOAP servisite e</b> toa sto podrzuvaat WS-Security so SSL support. Toa dozvoluva razni opcii za avtentifikacija i doverlivost vo prenesuvanjeto na datata, sto znaci se koristi najcesto pri finansiski transakcii online ili pri primo-predavanje na senzitivni informacii.

<b>Servisot SOAP obično se sostoi od dve glavni komponenti:</b>

	- serverska i klientska komponenta.

<y>Komponentata na serverot</y> izložuva zbir na metodi ili operacii što može da gi povikaat klientite koristejḱi SOAP poraki. Sekoj metod ima ime, zbir na vlezni parametri i zbir na izlezni parametri. Serverskata komponenta gi obrabotuva porakite na SOAP i vraḱa poraka za odgovor na SOAP na klientot.

<y>Klientskata komponenta</y> generira SOAP poraki koi gi inkapsuliraat vleznite parametri za sakaniot metod i gi ispraḱa porakite do serverot koristejḱi HTTP ili drugi transportni protokoli. Klientot potoa ja prima i obrabotuva porakata za odgovor SOAP vratena od serverot.

### Objasnuvanje \ Specifikacii za sekoj SOAP servis:

* provajderot ima objasnuvanje kako da se koristi so pomos na UDDI standardizacija (Universal Description, Discovery, and Integration).

	-- UDDI (Universal Description, Discovery, and Integration) e standard za objavuvanje, otkrivanje i integriranje na web servisot koj go nudi provajderot.
	(* directory kade se cuvaat wsdlite i ima dokumentacija za niv)

	-- XML e format za razmenata na podatoci što se koristi za da ja reprezantira datata odnosno podatocite i da obezbedi metapodatoci okolu nego, SOAP go se za prenos na podatocite, WSDL se koristi za opišuvanje na dostapnite uslugi i UDDI naveduva koi uslugi se dostapni.
	
	-- WSDL - web service description language
		* e vsusnost dokumentot na web servisot koj se povikuva i gi opišuva dostapnite metodi i tipovite na podatoci što gi koristat toj servis vo standardizirana XML forma

	-- SSL, ili Secure Socket Layer, e tehnologija koja im ovozmožuva na klientot na web servisite i na dalečinskiot server za web servisite da komuniciraat preku obezbedena vrska. Podatocite se šifriraat pred da se prenesat i se dešifriraat koga podatocite se primaat pred obrabotkata.
	

## Sto mora da se ima za eden SOAP servis
## ova moze da se navrakja kako se odi ponataka so kodot

	* Datata t.e formatot da e vo XML.

	* WSDL dokument što gi opišuva dostapnite funkcii SOAP, nivnite vlezni i izlezni parametri i tipovite na podatoci što se koristat vo porakite na SOAP

	*  SOAP kako protokol za razmena na podatoci pomeǵu aplikaciite

	* WSDL UDDI spagjaat vo specifikaciite koisto se koristat pri SOAP servis.

	* Error Handler: uslugata SOAP mora da koristi poraki za defekti na SOAP za da prijavi greški ili isklučoci što se pojavuvaat pri obrabotkata na baranjata za toj servis.

	* W3C (World Wide Web Consortium) gi pravi standardite i specifikaciite za pravilno konstruiranje i koristenje na SOAP servis.



## SSL, ili Secure Socket Layer
 * e tehnologija koja im ovozmožuva na klientot na web servisite i na serverot da komuniciraat preku obezbedena (secure) vrska. Podatocite se enkriptuvaat pred da se prenesat i se dekriptuvaat koga podatocite se primaat pred da se izvrsi obrabotkata.

# REST

REST (Representational State Transfer) e arhitektonski stil za gradenje web servisi i gi sledi principite na REST arhitekturata.

REST servisot obezbeduva ednostavna, lesna i skalabilna arhitektura za gradenje web servisi. Široko se koristi za gradenje API (interfejsi za programiranje na aplikacii) koi možat da gi koristat različni klienti, vklučuvajḱi web browseri, mobilni uredi i drugi aplikacii.

- REST service kostistat HTTP protokol za transport na data.


Vo REST, resursite se identifikuvaat so endpoint, odnosno URI-to, a akciite na ovie resursi se pretstaveni so koristenje na mal broj standardni operacii, obično globalni variabli vo jazikot kako što se GET, POST, PUT i DELETE. 

REST obično se sostoi od serverska komponenta i komponenta klient.

	Serverskata komponenta izložuva zbir na resursi i operacii do koi može da pristapat klientite koristejḱi HTTP baranja. Sekoj resurs ima URI, i sekoja operacija odgovara na glagol HTTP i množestvo vlezni i izlezni parametri. Serverskata komponenta gi obrabotuva baranjata i vraḱa HTTP odgovor na klientot.

	Klientskata komponenta generira koi gi inkapsuliraat vleznite parametri za sakanata operacija i gi ispraḱa baranjata do serverot koristejḱi HTTP. Klientot potoa go prima i go obrabotuva HTTP odgovorot vraten od serverot.


REST /xml ili json - e 

	- REST web servisi / po nekogas gi narekuvaat APIs:
		-e arhitektonski stil koj se koristi za gradenje na veb-uslugi koi se lesni, skalabilni i lesni za održuvanje. RESTful veb-uslugi koristat standardni HTTP metodi kako što se GET, POST, PUT i DELETE za pristap i manipuliranje so resursite.

-- stateless protocol and standard operations

-- A Web API is a development in web services where emphasis has been moving to simpler representational state transfer (REST) based communications. Restful APIs do not require XML-based web service protocols (SOAP and WSDL) to support their interfaces.

-- HTTP methods GET, POST, PUT, DELETE and so on.