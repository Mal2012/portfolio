-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2015 at 03:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `path` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `x` int(50) NOT NULL,
  `y` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `title`, `x`, `y`) VALUES
(4, 'index', 'http://placehold.it/550x531', 'Index Image', 7000, 450),
(11, 'slide3', '/bin/img/server/php/files/slide1.jpg', ' ', 1900, 1080),
(12, 'slide3', '/bin/img/server/php/files/slide3.jpg', ' ', 1900, 1080),
(13, 'slide3', '/bin/img/server/php/files/slide2.jpg', ' ', 1900, 1080),
(14, 'slide3', '/bin/img/server/php/files/slide4.jpg', ' ', 1900, 1080),
(16, 'slide3', '/bin/img/server/php/files/slide5.jpg', ' ', 1900, 1080),
(17, 'slide3', '/bin/img/server/php/files/slide6.jpg', ' ', 1900, 1080),
(18, 'leistungen', 'http://placehold.it/550x531', 'Leistungen', 550, 530);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

CREATE TABLE IF NOT EXISTS `portfolio_images` (
`id` int(50) NOT NULL,
  `project` int(50) NOT NULL,
  `path` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `project`, `path`) VALUES
(29, 23, '/bin/img/server/php/files/wy_IMG_9818_bea300.jpg'),
(30, 23, '/bin/img/server/php/files/wy_IMG_9792_bea300.jpg'),
(31, 23, '/bin/img/server/php/files/wy_IMG_9766_bea300.jpg'),
(32, 23, '/bin/img/server/php/files/wy_IMG_9757_bea300.jpg'),
(33, 23, '/bin/img/server/php/files/wy_IMG_9739_bea300.jpg'),
(34, 23, '/bin/img/server/php/files/wy_IMG_9736_bea300.jpg'),
(35, 23, '/bin/img/server/php/files/wy_IMG_9730_bea300.jpg'),
(36, 23, '/bin/img/server/php/files/wy_IMG_9719_bea300.jpg'),
(37, 23, '/bin/img/server/php/files/wy_IMG_9715_bea300.jpg'),
(38, 23, '/bin/img/server/php/files/wy_IMG_9708_bea300.jpg'),
(39, 22, '/bin/img/server/php/files/weis2.jpg'),
(40, 22, '/bin/img/server/php/files/weis1.jpg'),
(44, 22, '/bin/img/server/php/files/weis6.jpg'),
(45, 22, '/bin/img/server/php/files/weis5.jpg'),
(46, 22, '/bin/img/server/php/files/weis3.jpg'),
(49, 15, '/bin/img/server/php/files/weih1.jpg'),
(50, 15, '/bin/img/server/php/files/weih2.jpg'),
(51, 15, '/bin/img/server/php/files/weih3.jpg'),
(52, 15, '/bin/img/server/php/files/weih4.jpg'),
(53, 20, '/bin/img/server/php/files/Kelleranlage-Unterhaid_09.jpg'),
(54, 20, '/bin/img/server/php/files/Kelleranlage-Unterhaid_11.jpg'),
(55, 20, '/bin/img/server/php/files/Kelleranlage-Unterhaid_12.jpg'),
(56, 26, '/bin/img/server/php/files/beat1.jpg'),
(57, 26, '/bin/img/server/php/files/beat2.jpg'),
(58, 26, '/bin/img/server/php/files/beat3.jpg'),
(59, 26, '/bin/img/server/php/files/beat4.jpg'),
(60, 26, '/bin/img/server/php/files/beat5.jpg'),
(61, 10, '/bin/img/server/php/files/bgs1.jpg'),
(62, 10, '/bin/img/server/php/files/bgs2.jpg'),
(63, 10, '/bin/img/server/php/files/bgs3.jpg'),
(64, 10, '/bin/img/server/php/files/bgs4.jpg'),
(65, 10, '/bin/img/server/php/files/bgs5.jpg'),
(66, 10, '/bin/img/server/php/files/bgs6.jpg'),
(67, 10, '/bin/img/server/php/files/bgs7.jpg'),
(68, 10, '/bin/img/server/php/files/bgs8.jpg'),
(69, 10, '/bin/img/server/php/files/bgs9.jpg'),
(70, 10, '/bin/img/server/php/files/bgs10.jpg'),
(71, 16, '/bin/img/server/php/files/murmel1.jpg'),
(72, 16, '/bin/img/server/php/files/murmel2.jpg'),
(74, 33, '/bin/img/server/php/files/ngothik2.jpg'),
(75, 33, '/bin/img/server/php/files/ngothik3.jpg'),
(77, 33, '/bin/img/server/php/files/ngothik4.jpg'),
(79, 21, '/bin/img/server/php/files/sinn1.jpg'),
(80, 21, '/bin/img/server/php/files/sinn2.jpg'),
(81, 21, '/bin/img/server/php/files/sinn3.jpg'),
(82, 21, '/bin/img/server/php/files/sinn4.jpg'),
(83, 21, '/bin/img/server/php/files/sinn5.jpg'),
(85, 19, '/bin/img/server/php/files/wuerfel1.jpg'),
(86, 19, '/bin/img/server/php/files/wuerfel2.jpg'),
(87, 19, '/bin/img/server/php/files/wuerfel3.jpg'),
(88, 19, '/bin/img/server/php/files/wuerfel4.jpg'),
(89, 18, '/bin/img/server/php/files/oertel1.jpg'),
(91, 18, '/bin/img/server/php/files/oertel2.jpg'),
(92, 18, '/bin/img/server/php/files/oertel3.jpg'),
(93, 11, '/bin/img/server/php/files/bueh1.jpg'),
(94, 11, '/bin/img/server/php/files/bueh2.jpg'),
(95, 11, '/bin/img/server/php/files/bueh3.jpg'),
(96, 11, '/bin/img/server/php/files/bueh5.jpg'),
(97, 11, '/bin/img/server/php/files/bueh4.jpg'),
(98, 33, '/bin/img/server/php/files/ngothik1.jpg'),
(105, 14, '/bin/img/server/php/files/gram1.jpg'),
(106, 14, '/bin/img/server/php/files/gram2.jpg'),
(107, 14, '/bin/img/server/php/files/gram3.jpg'),
(108, 14, '/bin/img/server/php/files/gram4.jpg'),
(109, 14, '/bin/img/server/php/files/gram5.jpg'),
(110, 14, '/bin/img/server/php/files/gram6.jpg'),
(111, 14, '/bin/img/server/php/files/gram7.jpg'),
(112, 30, '/bin/img/server/php/files/inhalte7.jpg'),
(113, 30, '/bin/img/server/php/files/inhalte6.jpg'),
(114, 30, '/bin/img/server/php/files/inhalte3.jpg'),
(115, 30, '/bin/img/server/php/files/inhalte4.jpg'),
(116, 30, '/bin/img/server/php/files/inhalte5.jpg'),
(117, 30, '/bin/img/server/php/files/inhalte2.jpg'),
(118, 17, '/bin/img/server/php/files/dars1.jpg'),
(119, 17, '/bin/img/server/php/files/dars2.jpg'),
(120, 17, '/bin/img/server/php/files/dars3.jpg'),
(121, 17, '/bin/img/server/php/files/dars4.jpg'),
(122, 17, '/bin/img/server/php/files/dars5.jpg'),
(123, 17, '/bin/img/server/php/files/dars6.jpg'),
(124, 17, '/bin/img/server/php/files/dars7.jpg'),
(125, 29, '/bin/img/server/php/files/foto1.jpg'),
(126, 29, '/bin/img/server/php/files/foto2.jpg'),
(127, 29, '/bin/img/server/php/files/foto3.jpg'),
(128, 29, '/bin/img/server/php/files/foto4.jpg'),
(129, 29, '/bin/img/server/php/files/foto5.jpg'),
(130, 29, '/bin/img/server/php/files/foto6.jpg'),
(131, 29, '/bin/img/server/php/files/foto7.jpg'),
(132, 29, '/bin/img/server/php/files/foto8.jpg'),
(133, 29, '/bin/img/server/php/files/foto9.jpg'),
(134, 29, '/bin/img/server/php/files/foto10.jpg'),
(135, 16, '/bin/img/server/php/files/murmel3.jpg'),
(136, 16, '/bin/img/server/php/files/murmel4.jpg'),
(137, 16, '/bin/img/server/php/files/murmel5.jpg'),
(138, 17, '/bin/img/server/php/files/dars8.jpg'),
(139, 17, '/bin/img/server/php/files/dars9.jpg'),
(140, 17, '/bin/img/server/php/files/dars10.jpg'),
(141, 17, '/bin/img/server/php/files/dars11.jpg'),
(142, 17, '/bin/img/server/php/files/dars12.jpg'),
(143, 32, '/bin/img/server/php/files/poing1.jpg'),
(144, 32, '/bin/img/server/php/files/poing2.jpg'),
(145, 32, '/bin/img/server/php/files/poing3.jpg'),
(146, 32, '/bin/img/server/php/files/poing4.jpg'),
(147, 32, '/bin/img/server/php/files/poing5.jpg'),
(148, 32, '/bin/img/server/php/files/poing6.jpg'),
(149, 32, '/bin/img/server/php/files/poing7.jpg'),
(150, 32, '/bin/img/server/php/files/poing8.jpg'),
(151, 32, '/bin/img/server/php/files/poing9.jpg'),
(152, 32, '/bin/img/server/php/files/poing10.jpg'),
(153, 33, '/bin/img/server/php/files/ngothik6.jpg'),
(155, 29, '/bin/img/server/php/files/foto11.jpg'),
(156, 33, '/bin/img/server/php/files/neugothiksketch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_text`
--

CREATE TABLE IF NOT EXISTS `portfolio_text` (
`id` int(11) NOT NULL,
  `titel` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `heading` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `besch` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `button` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `short` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `shead` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `path` varchar(150) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `portfolio_text`
--

INSERT INTO `portfolio_text` (`id`, `titel`, `heading`, `besch`, `button`, `short`, `shead`, `path`) VALUES
(10, 'BeatBox', 'Details', 'Die Aufgabe hierbei bestand darin ein Möbel zu entwerfen,\r\nwelches eine technische Komponente enthält und bestenfalls\r\nzu einem Stück aus der Kollektion von Nils Holger Moormann\r\npasst. Ich ließ mich von dem Regal Zoll D inspirieren\r\nund entwarf einen passenden Couchtisch, an den Devices\r\nzur Musikwiedergabe angeschlossen werden können.', 'Weiter...', 'BeatBox ist ein Möbelentwurf für einen Couchtisch mit integrierten Boxen', 'BeatBox', '/bin/img/server/php/files/beatbox.jpg'),
(11, 'Bühnenbild', 'Details', 'Im Bühnenbildprojekt entwickelten wir ein Bühnenbild vom\r\nEntwurf bis hin zur Präsentation des fertigen Planes mit Modell\r\nund Lichtkonzept vor dem Regisseur. Behandelt wurde\r\ndas Stück ‚Der Reigen‘ von Arthur Schnitzler. Zunächst beschäftigten\r\nwir uns mit der Geschichte des Bühnenbildes\r\nund Bühnentechnik, danach arbeiteten wir mit dem Bühnenbildner\r\ndes Landestheaters Coburg, dem Regisseur\r\ndes Stückes und dem Dramaturgen zusammen, um das\r\nBühnenbildkonzept zu Vollenden.', 'Weiter...', 'Bühnenbildkonzept für das Stück "Der Reigen" von Arthur Schnitzler', 'Bühnenbild', '/bin/img/server/php/files/Buehnenbild.jpg'),
(14, 'Gramschatz', 'Details', 'Zum fünfjährigen Jubiläum des Walderlebniszentrums\r\nGramschatz beleuchteten wir einen 400m langen Waldlehrpfad.\r\nDa das Event im Herbst stattfand und durch Blätter\r\nnur wenig Abstrahlfläche geboten wurde, nutzten wir Eventmaterial\r\num Abstrahlfläche zu generieren und interessante,\r\nungewöhnliche Situationen im Wald zu schaffen. Bei diesem\r\nEvent standen Kontraste und abwechslungsreiche Stimmungen\r\nneben der Inszenierung der Natur im Vordergrund.', 'Weiter...', 'Illuminierung eines Waldlehrpfades im Walderlebniszentrum Gramschatz', 'Gramschatz', '/bin/img/server/php/files/gramschatz.jpg'),
(15, 'Designweihnacht', 'Details', 'Im ersten Semester haben sämtliche Studienanfänger gemeinsam\r\ndie Weihnachtsfeier für die gesamte Designfakultät\r\ngeplant und ausgerichtet. Hierzu teilten wir uns je nach\r\nInteresse in Gruppen auf. Am Gesamtkonzept arbeiteten\r\nzunächst alle zusammen, danach weiter in den kleinen\r\nGruppen. Ich war hier an den Projektgruppen Wände, Sitzgelegenheiten\r\nund Beleuchtung beteiligt.', 'Weiter...', 'Weihnachtsfeier für die Fakultät Design der Hochschule Coburg 2011', 'Designweihnacht', '/bin/img/server/php/files/weihnachtsfeier.jpg'),
(16, 'Murmelbahn', 'Details', 'Für die Designtage 2012 entwickelte unsere Projektgruppe\r\nein Ausstellungskonzept für Murmelbahnmodelle und eine\r\ngroße Murmelbahn, an der die Besucher spielen konnten.\r\nDa für die Murmelbahnmodelle ausschließlich Papier, Pappe\r\nund Holz verwendet werden durfte, hielten wir uns auch\r\nbei Ausstellung und großer Murmelbahn an diese Vorgabe.\r\nSowohl Murmelbahn, als auch Ausstellung sollten an einer\r\ngebogenen Akustikwand untergebracht werden, die nicht\r\nbeschädigt werden durfte, also konstruierten wir eine hängende\r\nDachlattenkonstruktion, an der auf der einen Seite\r\nder Wand die Ausstellung, auf der anderen Seite die große\r\nMurmelbahn angebracht wurde.', 'Weiter...', 'Designtage Projekt 2012', 'Murmelbahn', '/bin/img/server/php/files/murmelbahn.jpg'),
(17, 'Visualisierung', 'Details', '<h4>Darstellungstechniken mit der Hand:</h4>\r\n\r\n<h4>Skizzieren und Zeichnen</h4><ul>\r\n<li>Pespektivisches Zeichnen</li>\r\n<li>Anlegen von Zeichnungen mit Marker</li>\r\n<li>Technisches Zeichnen</li>\r\n<li>Colorieren von technischen Plänen und Grundrissen</li></ul>\r\n\r\n\r\n<h4>Computergestützte Darstellung:</h4><ul>\r\n<li>Renderings mit Cinema 4D und ArchiCAD</li>\r\n<li>Darstellen von Licht mit Photoshop, Cinema 4D und Relux</li>\r\n<li>Anlegen und colorieren von Perspektiven in Photoshop</li>\r\n<li>Collagieren von Zeichnungen mit Möbeln</li></ul>\r\n\r\n\r\n<h4>Moodboards</h4>\r\n\r\n\r\n<h4>Modellbau</h4>\r\n\r\n\r\n<h4>Lichtsimulation</h4>', 'Weiter...', 'Überblick über Darstellungstechniken und Visualiesierungen', 'Visualisierung', '/bin/img/server/php/files/Darstellunglang.jpg'),
(18, 'Wein Örtel', 'Details', 'Die Lichtplanung für die denkmalgeschützte Weinhandlung\r\nWein Örtel in Coburg war ein Studienprojekt, indem es darum\r\nging, die nahezu nicht vorhandene Beleuchtung des\r\nGeschäftes rundum zu erneuern, den Bau und die Waren\r\nzu betonen, ohne die Bausubstanz angreifen zu müssen.\r\nIch entschied mich für hauptsächlich indirekte Beleuchtung\r\ndurch Akzentuierung der Kreuzgewölbe und Laibungen\r\nund zusätzliche Beleuchtung der Ware durch in die Möbel\r\nintegrierte LED Lichtlinien.Tresen und Weinprobe bekommen\r\neine wohnlichere Atmosphäre durch schlichte, moderne\r\nPendelleuchten.', 'Weiter...', 'Beleuchtungskonzept für die Weinhandlung "Wein Örtel" in Coburg', 'Wein Örtel', '/bin/img/server/php/files/oertel.jpg'),
(19, 'Projection Mapping', 'Details', '<p>Als Projektausarbeitung im Bereich Lichtgestaltung beschäftigte\r\nich mich mit Projection Mapping. Ich fertigte nach\r\nausführlicher Recherche und Übung ein Mapping zum Lied\r\n„Firestarter“ von the Prodigy auf einen Kapalinewürfel an.\r\nDas Video dazu ist unter folgendem Link zu finden:</p>\r\n<a href="https://www.youtube.com/watch?v=8oEfWJuEU6o" target="_blank">Auf YouTube ansehen</a>', 'Weiter...', 'In einer Projektausaarbeitung beschäftigte ich mich mit Projection Mapping', 'Projection Mapping', '/bin/img/server/php/files/mapping.jpg'),
(20, 'Unterhaid', 'Details', 'Im praktischen Lichtprojekt ‚Kelleranlagen Unterhaid‘ beleuchteten\r\nwir ein Waldstück in Unterhaid bei Bamberg, in\r\ndem sich an einem Weg einige Bierkeller befinden, zur Neueröffnung\r\nder Bierkeller nach einer Sanierung. Wir beleuchteten\r\nein größeres Sandsteingebäude, die Tonnengewölbe\r\nund die Umgebung mit einigen Bäumen und Büschen.\r\nInsgesamt wurden bei diesem Lichtprojekt ca. 250 Lichtpunkte\r\ngesetzt und somit eine abwechslungsreiche und\r\nspannende Atmosphäre in dem Waldstück geschaffen, das\r\nfür eine Woche zahlreiche Besucher anlockte.', 'Weiter...', 'Im Projekt Kelleranlagen Unterhaid wurden historische Keller und ein Waldstück inszeniert', 'Unterhaid', '/bin/img/server/php/files/unterhaid.jpg'),
(21, 'Raum der Sinne', 'Details', 'Bei dem Designcampus Open Projekt sollte ein Raum entstehen,\r\nbei dem sich die Besucher mit dem Thema Sinne\r\nauseinandersetzen können. Der Raum wurde in zwei abschnitte\r\ngegliedert: Die vier grundlegenden Sinne und die\r\nsieben weiteren. Das Raumkozept führt den Besucher in\r\neine andere Welt in der er sich voll und ganz auf seine Sinne\r\nverlassen, diese ausprobieren und erfahren kann.', 'Weiter...', 'Raum der Sinne war eine Ausstellung zu den Designcampus Open Tagen 2013 in Coburg', 'Raum der Sinne', '/bin/img/server/php/files/sinne.jpg'),
(22, 'Weismain leuchtet', 'Details', 'Weismain feiert 2013 ein doppeltes Jubiläumsjahr und ließ\r\ndie Altstadt zu dessen Auftakt von uns beleuchten. Bei dem\r\nzu beleuchtenden Gebiet handelte es sich um die gotische\r\nStadtkirche und ein dahinter liegendes Gemeindehaus. Darüber\r\nhinaus beleuchteten wir das Rathaus und begonnen\r\nmit einem Stadttor, den zur Kirche führenden Straßenzug\r\nund einen kleinen Platz in einer Seitengasse.', 'Weiter...', 'Zu einem Jubiläum 2013 wurden die Straßen Weismains in Szene gesetzt', 'Weismain leuchtet', '/bin/img/server/php/files/weismain.jpg'),
(23, 'Weyermann', 'Details', 'Auf dem weitläufigen Fabrikgelände der Malzfabrik Weyermann\r\nin Bamberg sollte eine ‚Bavarian Party‘ mit vielen internationalen\r\nGästen, Kunden und Geschäftspartnern stattfinden.\r\nHierfür und für den zwei Wochen später stattfindenden\r\nBockbieranstich, beleuchteten wir das gesamte Fabrikgelände,\r\nauf dem sich hauptsächlich historische Backsteingebäude\r\nund sichtbare Bestandteile der Produktionsanlagen\r\n(z.B. Wassertanks, Kühlzyklonen etc.) sowie Vegetation\r\nbefinden.', 'Weiter...', 'Illumination der Firmengeländes von Weyermann Bamberg', 'Weyermann', '/bin/img/server/php/files/wyermann.jpg'),
(26, 'Raum x Music', 'Details', 'Bei dem Projekt Raum x Musik ging es darum einen flexiblen\r\nVeranstaltungsraum (Lounge- und Barbereich) mit Augenmerk\r\nauf gute Raumakustik in einem leerstehenden Saal\r\neines ehemaligen BGS Gebäudes zu planen. Das Konzept\r\nsollte modern und extravagant sein. Akustikelemente, die\r\ngleichzeitig als Kabelkanäle und zur Beleuchtung genutzt\r\nwerden, ziehen sich als verbindendes Element durch die\r\nRaumabschnitte. Vielseitig einsetzbare und mobile Möbelelemente\r\ngeben dem Raum einen Loungecharakter. Durch\r\ndie stimmungsvolle und variable Beleuchtung kann in diesen\r\nRäumlichkeiten von der Vereinsversammlung bis hin zum\r\nPoetry-Slam Alles stattfinden.', 'Weiter...', 'Raumkonzept für einen Veranstaltungsraum im ehemaligen BGS Gelände Coburg', 'Raum x Music', '/bin/img/server/php/files/raumxMusic.jpg'),
(29, 'Photographie', 'Details', 'Photographie ist eine meiner größten Interessen und mein ständiger Begleiter im Studium und privat. Hier zeige ich eine Auswahl an verschiedenen Aufnahmen, die größten Teils privat entstanden sind.', 'Weiter...', 'Eine Auswahl an Photographien', 'Photographie', '/bin/img/server/php/files/fotolang.jpg'),
(30, 'Studieninhalte', 'Details', '<h4>Planung</h4><p>\r\nIm Verlauf des Studiums habe ich - sowohl im Team, als\r\nauch in Einzelarbeit, einige Konzepte entwickelt und Pläne\r\nerstellt. So z.B. ein Konzept für optimiertes Wohnen in fünf\r\nContainern für drei Personen, Küchen- und Badplanungen,\r\nWerkpläne für Häuser und Einbaumöbel, sowie Umplanungen\r\nund Sanierung für Wohnungen und Shops.\r\nDarüber hinaus war ich in meinem fünfmonatigen Praxissemester\r\nim Lichtplanungsbüro Artelumen mit einigen Planungen\r\nbetraut.</p>\r\n\r\n<h4>Lichtplanung</h4><p>\r\nIm 3. und 4. Semester erstellten wir ein Gestaltungskonzept\r\nin Abhängigkeit von Licht für ein Foyer im Hofbrauhaus\r\nCoburg. Die Vorgegebenen Raumfunktionen waren Ausstellung,\r\nVerkehrsfläche, Catering und Sitzplätze zum gemütlichen\r\nVerweilen. Wir analysierten Beluchtungsvarianten\r\nfür die jeweiligen Funktionen und entwickelten in Zweierteams\r\neine Lichtplanung für dieses Foyer. Diese Aufgabe\r\nschloss die analyse und Anwendung von Lichtart/ Lichtfarbe/\r\nLichtstärke und Lichtrichtung, die Auseinandersetzung\r\nmit Lichttechnik und Leuchtenherstellern, Grundrissplanung\r\nin Abhängigkeit von Licht, Lichtberechnung, Renderings,\r\nLeuchtenpositionspläne und Lichtsimulation am Modell, sowie\r\nKostenberechnung ein.</p>\r\n\r\n<h4>Werkstattkurse</h4><p>\r\nIm ersten Semester wurden Werkstattkurse angeboten, in\r\ndenen ich einen Hocker baute und dabei Polstern und die\r\nVerarbeitung von Holz, Kunststoff und Metall lernte. zudem\r\ngab es einen Elektrokurs, in dem ich Stecker und Schalter\r\nfertigte und LEDs mit Widerständen, Kabeln und Netzteilen\r\nauf Platinen lötete.</p>\r\n', 'Weiter...', 'Übersicht über im Studium vermittelte Inhalte und Projekte', 'Studieninhalte', '/bin/img/server/php/files/studium.jpg'),
(32, 'Luxhaus Poing', 'Details', 'Die Lichtplanung für das Musterhaus Poing war eines meiner Projekte während meines fünfmonatigen Praxissemesters im Lichtplanungsbüro Artelumen. Der gesamte Neubau musste entworfen und bis hin zur Ausführung durchgeplant\r\nwerden. Das moderne Wohnkonzept sollte durch effiiente und designorientierte Funktions- und Akzentbeleuchung unterstrichen und aufgewertet werden.', 'Weiter...', 'Lichtplanung für das Musterhaus Poing der Firma Luxhaus während meines Praxissemesters', 'Luxhaus Poing', '/bin/img/server/php/files/poingkachel.jpg'),
(33, 'Neugotik', 'Details', 'In dem Projekt entwickelte ich mit einer Komillitonin ein Ausstellungskonzept für Präsentationscharts zum Thema Neugotik in Coburg, welches wir auch umsetzten. Die Ausstellung befand sich in einem Denkmalgeschützten Gewölbe, welches nicht verändert werden durfte. Wir bauten Bilderrahmen und hängten die Charts an Schnüre, die sich durch die Rahmen zogen. Damit nahmen wir die "Wäscheleinenelemente" auf, die sich im Gesamtkonzept im Gebäude wieder fanden.', 'Weiter....', 'Ausstellung für die Designcampus Open Tage in Coburg 2014', 'Neugotik', '/bin/img/server/php/files/neugotik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE IF NOT EXISTS `text` (
`id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `title`, `text`) VALUES
(2, 'Willkommen', 'Startseite Text'),
(3, 'Jennifer Bühling', 'Jennifer Bühling'),
(4, '', 'E-Mail Addresse'),
(5, '', 'Neue Nachricht über das Kontaktformular des Portfolio'),
(6, '', 'Inhalt der Nachricht: '),
(7, '', 'E-Mail Headers'),
(8, '', 'Straße Hausnummer'),
(9, '', 'PLZ Stadt'),
(10, '', 'Telefon-Nummer'),
(11, 'username', '5f4dcc3b5aa765d61d8327deb882cf99'),
(12, '', 'Umsatzsteuer-Nummer'),
(13, '', 'Wirtschafts-Id'),
(14, 'skey', '6Ld7EAITAAAAAAjJAyFHk8lsYNOTb-5SmXwf7pwl'),
(15, 'ssecret', '6Ld7EAITAAAAAP53fmHlmq3SohexCeJSKT_u_uVt'),
(16, 'true', 'Leistungen Text');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_text`
--
ALTER TABLE `portfolio_text`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT for table `portfolio_text`
--
ALTER TABLE `portfolio_text`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
