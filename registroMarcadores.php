<?php
include('php/conexion.php');

$ncarton = intval($_POST["marcador-carton"]);
$cedula = intval($_POST["marcador-cedula"]);
$fase = intval($_POST["marcador-fase"]);
$grupo = strval($_POST["grupo-a"]);
$perfil = intval($_POST["marcador-perfil"]);
$equipoUno = strval($_POST["equipoUno"]);
$marcadorUno = intval($_POST["marcadorUno"]);
$equipoDos = strval($_POST["equipoDos"]);
$marcadorDos = intval($_POST["marcadorDos"]);
$equipoTres = strval($_POST["equipoTres"]);
$marcadorTres = intval($_POST["marcadorTres"]);
$equipoCuatro = strval($_POST["equipoCuatro"]);
$marcadorCuatro = intval($_POST["marcadorCuatro"]);
$equipoCinco = strval($_POST["equipoCinco"]);
$marcadorCinco = intval($_POST["marcadorCinco"]);
$equipoSeis = strval($_POST["equipoSeis"]);
$marcadorSeis = intval($_POST["marcadorSeis"]);
$equipoSiete = strval($_POST["equipoSiete"]);
$marcadorSiete = intval($_POST["marcadorSiete"]);
$equipoOcho = strval($_POST["equipoOcho"]);
$marcadorOcho = intval($_POST["marcadorOcho"]);
$equipoNueve = strval($_POST["equipoNueve"]);
$marcadorNueve = intval($_POST["marcadorNueve"]);
$equipoDiez = strval($_POST["equipoDiez"]);
$marcadorDiez = intval($_POST["marcadorDiez"]);
$equipoOnce = strval($_POST["equipoOnce"]);
$marcadorOnce = intval($_POST["marcadorOnce"]);
$equipoDoce = strval($_POST["equipoDoce"]);
$marcadorDoce = intval($_POST["marcadorDoce"]);
$equipo13 = strval($_POST["equipo13"]);
$marcador13 = intval($_POST["marcador13"]);
$equipo14 = strval($_POST["equipo14"]);
$marcador14 = intval($_POST["marcador14"]);
$equipo15 = strval($_POST["equipo15"]);
$marcador15 = intval($_POST["marcador15"]);
$equipo16 = strval($_POST["equipo16"]);
$marcador16 = intval($_POST["marcador16"]);
$equipo17 = strval($_POST["equipo17"]);
$marcador17 = intval($_POST["marcador17"]);
$equipo18 = strval($_POST["equipo18"]);
$marcador18 = intval($_POST["marcador18"]);
$equipo19 = strval($_POST["equipo19"]);
$marcador19 = intval($_POST["marcador19"]);
$equipo20 = strval($_POST["equipo20"]);
$marcador20 = intval($_POST["marcador20"]);
$equipo21 = strval($_POST["equipo21"]);
$marcador21 = intval($_POST["marcador21"]);
$equipo22 = strval($_POST["equipo22"]);
$marcador22 = intval($_POST["marcador22"]);
$equipo23 = strval($_POST["equipo23"]);
$marcador23 = intval($_POST["marcador23"]);
$equipo24 = strval($_POST["equipo24"]);
$marcador24 = intval($_POST["marcador24"]);
$equipo25 = strval($_POST["equipo25"]);
$marcador25 = intval($_POST["marcador25"]);
$equipo26 = strval($_POST["equipo26"]);
$marcador26 = intval($_POST["marcador26"]);
$equipo27 = strval($_POST["equipo27"]);
$marcador27 = intval($_POST["marcador27"]);
$equipo28 = strval($_POST["equipo28"]);
$marcador28 = intval($_POST["marcador28"]);
$equipo29 = strval($_POST["equipo29"]);
$marcador29 = intval($_POST["marcador29"]);
$equipo30 = strval($_POST["equipo30"]);
$marcador30 = intval($_POST["marcador30"]);
$equipo31 = strval($_POST["equipo31"]);
$marcador31 = intval($_POST["marcador31"]);
$equipo32 = strval($_POST["equipo32"]);
$marcador32 = intval($_POST["marcador32"]);
$equipo33 = strval($_POST["equipo33"]);
$marcador33 = intval($_POST["marcador33"]);
$equipo34 = strval($_POST["equipo34"]);
$marcador34 = intval($_POST["marcador34"]);
$equipo35 = strval($_POST["equipo35"]);
$marcador35 = intval($_POST["marcador35"]);
$equipo36 = strval($_POST["equipo36"]);
$marcador36 = intval($_POST["marcador36"]);
$equipo37 = strval($_POST["equipo37"]);
$marcador37 = intval($_POST["marcador37"]);
$equipo38 = strval($_POST["equipo38"]);
$marcador38 = intval($_POST["marcador38"]);
$equipo39 = strval($_POST["equipo39"]);
$marcador39 = intval($_POST["marcador39"]);
$equipo40 = strval($_POST["equipo40"]);
$marcador40 = intval($_POST["marcador40"]);
$equipo41 = strval($_POST["equipo41"]);
$marcador41 = intval($_POST["marcador41"]);
$equipo42 = strval($_POST["equipo42"]);
$marcador42 = intval($_POST["marcador42"]);
$equipo43 = strval($_POST["equipo43"]);
$marcador43 = intval($_POST["marcador43"]);
$equipo44 = strval($_POST["equipo44"]);
$marcador44 = intval($_POST["marcador44"]);
$equipo45 = strval($_POST["equipo45"]);
$marcador45 = intval($_POST["marcador45"]);
$equipo46 = strval($_POST["equipo46"]);
$marcador46 = intval($_POST["marcador46"]);
$equipo47 = strval($_POST["equipo47"]);
$marcador47 = intval($_POST["marcador47"]);
$equipo48 = strval($_POST["equipo48"]);
$marcador48 = intval($_POST["marcador48"]);
$equipo49 = strval($_POST["equipo49"]);
$marcador49 = intval($_POST["marcador49"]);
$equipo50 = strval($_POST["equipo50"]);
$marcador50 = intval($_POST["marcador50"]);
$equipo51 = strval($_POST["equipo51"]);
$marcador51 = intval($_POST["marcador51"]);
$equipo52 = strval($_POST["equipo52"]);
$marcador52 = intval($_POST["marcador52"]);
$equipo53 = strval($_POST["equipo53"]);
$marcador53 = intval($_POST["marcador53"]);
$equipo54 = strval($_POST["equipo54"]);
$marcador54 = intval($_POST["marcador54"]);
$equipo55 = strval($_POST["equipo55"]);
$marcador55 = intval($_POST["marcador55"]);
$equipo56 = strval($_POST["equipo56"]);
$marcador56 = intval($_POST["marcador56"]);
$equipo57 = strval($_POST["equipo57"]);
$marcador57 = intval($_POST["marcador57"]);
$equipo58 = strval($_POST["equipo58"]);
$marcador58 = intval($_POST["marcador58"]);
$equipo59 = strval($_POST["equipo59"]);
$marcador59 = intval($_POST["marcador59"]);
$equipo60 = strval($_POST["equipo60"]);
$marcador60 = intval($_POST["marcador60"]);
$fecha = strval($_POST["marcador-fecha"]);
$equipo61 = strval($_POST["equipo61"]);
$marcador61 = intval($_POST["marcador61"]);
$equipo62 = strval($_POST["equipo62"]);
$marcador62 = intval($_POST["marcador62"]);
$equipo63 = strval($_POST["equipo63"]);
$marcador63 = intval($_POST["marcador63"]);
$equipo64 = strval($_POST["equipo64"]);
$marcador64 = intval($_POST["marcador64"]);
$equipo65 = strval($_POST["equipo65"]);
$marcador65 = intval($_POST["marcador65"]);
$equipo66 = strval($_POST["equipo66"]);
$marcador66 = intval($_POST["marcador66"]);
$equipo67 = strval($_POST["equipo67"]);
$marcador67 = intval($_POST["marcador67"]);
$equipo68 = strval($_POST["equipo68"]);
$marcador68 = intval($_POST["marcador68"]);
$equipo69 = strval($_POST["equipo69"]);
$marcador69 = intval($_POST["marcador69"]);
$equipo70 = strval($_POST["equipo70"]);
$marcador70 = intval($_POST["marcador70"]);
$equipo71 = strval($_POST["equipo71"]);
$marcador71 = intval($_POST["marcador71"]);
$equipo72 = strval($_POST["equipo72"]);
$marcador72 = intval($_POST["marcador72"]);
$equipo73 = strval($_POST["equipo73"]);
$marcador73 = intval($_POST["marcador73"]);
$equipo74 = strval($_POST["equipo74"]);
$marcador74 = intval($_POST["marcador74"]);
$equipo75 = strval($_POST["equipo75"]);
$marcador75 = intval($_POST["marcador75"]);
$equipo76 = strval($_POST["equipo76"]);
$marcador76 = intval($_POST["marcador76"]);
$equipo77 = strval($_POST["equipo77"]);
$marcador77 = intval($_POST["marcador77"]);
$equipo78 = strval($_POST["equipo78"]);
$marcador78 = intval($_POST["marcador78"]);
$equipo79 = strval($_POST["equipo79"]);
$marcador79 = intval($_POST["marcador79"]);
$equipo80 = strval($_POST["equipo80"]);
$marcador80 = intval($_POST["marcador80"]);
$equipo81 = strval($_POST["equipo81"]);
$marcador81 = intval($_POST["marcador81"]);
$equipo82 = strval($_POST["equipo82"]);
$marcador82 = intval($_POST["marcador82"]);
$equipo83 = strval($_POST["equipo83"]);
$marcador83 = intval($_POST["marcador83"]);
$equipo84 = strval($_POST["equipo84"]);
$marcador84 = intval($_POST["marcador84"]);
$equipo85 = strval($_POST["equipo85"]);
$marcador85 = intval($_POST["marcador85"]);
$equipo86 = strval($_POST["equipo86"]);
$marcador86 = intval($_POST["marcador86"]);
$equipo87 = strval($_POST["equipo87"]);
$marcador87 = intval($_POST["marcador87"]);
$equipo88 = strval($_POST["equipo88"]);
$marcador88 = intval($_POST["marcador88"]);
$equipo89 = strval($_POST["equipo89"]);
$marcador89 = intval($_POST["marcador89"]);
$equipo90 = strval($_POST["equipo90"]);
$marcador90 = intval($_POST["marcador90"]);
$equipo91 = strval($_POST["equipo91"]);
$marcador91 = intval($_POST["marcador91"]);
$equipo92 = strval($_POST["equipo92"]);
$marcador92 = intval($_POST["marcador92"]);
$equipo93 = strval($_POST["equipo93"]);
$marcador93 = intval($_POST["marcador93"]);
$equipo94 = strval($_POST["equipo94"]);
$marcador94 = intval($_POST["marcador94"]);
$equipo95 = strval($_POST["equipo95"]);
$marcador95 = intval($_POST["marcador95"]);
$equipo96 = strval($_POST["equipo96"]);
$marcador96 = intval($_POST["marcador96"]);
$fecha = strval($_POST["marcador-fecha"]);
  
try {
    $pdo = $conexion->prepare("INSERT INTO marcadores(carton, cedula, fase, grupo, perfil, equipo_uno, marcador_uno, equipo_dos, marcador_dos, fecha) VALUES
    ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipoUno',$marcadorUno,'$equipoDos',$marcadorDos,'$fecha'),  ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipoTres',$marcadorTres,'$equipoCuatro',$marcadorCuatro,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipoCinco',$marcadorCinco,'$equipoSeis',$marcadorSeis,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipoSiete',$marcadorSiete,'$equipoOcho',$marcadorOcho,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipoNueve',$marcadorNueve,'$equipoDiez',$marcadorDiez,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipoOnce',$marcadorOnce,'$equipoDoce',$marcadorDoce,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo13',$marcador13,'$equipo14',$marcador14,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo15',$marcador15,'$equipo16',$marcador16,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo17',$marcador17,'$equipo18',$marcador18,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo19',$marcador19,'$equipo20',$marcador20,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo21',$marcador21,'$equipo22',$marcador22,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo23',$marcador23,'$equipo24',$marcador24,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo25',$marcador25,'$equipo26',$marcador26,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo27',$marcador27,'$equipo28',$marcador28,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo29',$marcador29,'$equipo30',$marcador30,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo31',$marcador31,'$equipo32',$marcador32,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo33',$marcador33,'$equipo34',$marcador34,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo35',$marcador35,'$equipo36',$marcador36,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo37',$marcador37,'$equipo38',$marcador38,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo39',$marcador39,'$equipo40',$marcador40,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo41',$marcador41,'$equipo42',$marcador42,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo43',$marcador43,'$equipo44',$marcador44,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo45',$marcador45,'$equipo46',$marcador46,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo47',$marcador47,'$equipo48',$marcador48,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo49',$marcador49,'$equipo50',$marcador50,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo51',$marcador51,'$equipo52',$marcador52,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo53',$marcador53,'$equipo54',$marcador54,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo55',$marcador55,'$equipo56',$marcador56,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo57',$marcador57,'$equipo58',$marcador58,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo59',$marcador59,'$equipo60',$marcador60,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo61',$marcador61,'$equipo62',$marcador62,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo63',$marcador63,'$equipo64',$marcador64,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo65',$marcador65,'$equipo66',$marcador66,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo67',$marcador67,'$equipo68',$marcador68,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo69',$marcador69,'$equipo70',$marcador70,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo71',$marcador71,'$equipo72',$marcador72,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo73',$marcador73,'$equipo74',$marcador74,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo75',$marcador75,'$equipo76',$marcador76,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo77',$marcador77,'$equipo78',$marcador78,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo79',$marcador79,'$equipo80',$marcador80,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo81',$marcador81,'$equipo82',$marcador82,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo83',$marcador83,'$equipo84',$marcador84,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo85',$marcador85,'$equipo86',$marcador86,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo87',$marcador87,'$equipo88',$marcador88,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo89',$marcador89,'$equipo90',$marcador90,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo91',$marcador91,'$equipo92',$marcador92,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo93',$marcador93,'$equipo94',$marcador94,'$fecha'), ($ncarton,$cedula,$fase,'$grupo',$perfil,'$equipo95',$marcador95,'$equipo96',$marcador96,'$fecha')");
  
    $pdo->execute();
    print($pdo->errorInfo());
  
    echo json_encode('true');
} catch (PDOException $error) {
    echo json_encode($error->getMessage());
    die();
}