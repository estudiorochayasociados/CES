-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-02-2019 a las 09:14:58
-- Versión del servidor: 5.6.41-log
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c1460270_sitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'facundo@estudiorochayasoc.com.ar', 'faAr2010');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `cod`, `titulo`, `area`) VALUES
(2, '4414cd68f7', 'Economicas', 'novedades'),
(117, '6645f8ac71', 'Ópticas', 'rubros'),
(118, '9f11f7aa2b', 'Zapaterías', 'rubros'),
(119, '19c3cf2751', 'Vidrierías', 'rubros'),
(120, 'ca2a5a284f', 'Video Club', 'rubros'),
(121, '8ce4de8466', 'Veterinarias', 'rubros'),
(122, '09dea0569f', 'Ventilación', 'rubros'),
(123, '990d9e268a', 'Venta y Reparación de Máquinas', 'rubros'),
(124, 'a96a57a01f', 'Venta y Reparación', 'rubros'),
(125, '4f8e136f14', 'Venta de Artículos', 'rubros'),
(126, '3a0204c115', 'Varios', 'rubros'),
(127, '074666b2a9', 'Transporte de Pasajeros', 'rubros'),
(128, '5e6ffd916a', 'Transporte de Carga', 'rubros'),
(129, '792fe53d3f', 'Tornerías', 'rubros'),
(130, 'e62295f7b9', 'Tiendas', 'rubros'),
(131, 'b6a9a4cf91', 'Textil', 'rubros'),
(132, '3b49925d26', 'Tarjetas de Crédito', 'rubros'),
(133, '429977c2ac', 'Taller Mecánico', 'rubros'),
(134, '4d2656faaf', 'Supermercados', 'rubros'),
(135, '606af67ffb', 'Spa', 'rubros'),
(136, '92bfa5e793', 'Servicios', 'rubros'),
(137, '8e370dd7de', 'Seguros', 'rubros'),
(138, '7b2d3e6010', 'Seguridad Industrial', 'rubros'),
(139, 'f53507e504', 'Sanitarios', 'rubros'),
(140, '81b4b6b20e', 'Sanatorios', 'rubros'),
(141, '29ac73d767', 'Salas Velatorias', 'rubros'),
(142, '5894e6aefa', 'Rural', 'rubros'),
(143, 'fb91da7b1d', 'Rotomoldeo', 'rubros'),
(144, 'f03828665d', 'Rotiserías', 'rubros'),
(145, '8e98e17dd3', 'Restaurantes', 'rubros'),
(146, '7ef74120e2', 'Repuestos', 'rubros'),
(147, '17d8956bb9', 'Repostería', 'rubros'),
(148, 'd5cd90a10c', 'Reparación de Artículos', 'rubros'),
(149, 'b179c67251', 'Remises y Taxis', 'rubros'),
(150, '61c112920f', 'Refrigeración', 'rubros'),
(151, '1812115e55', 'Provedurías', 'rubros'),
(152, '98d8329572', 'Promoción Web', 'rubros'),
(153, '8efe3088d4', 'Productos de Venta Directa', 'rubros'),
(154, '4eb009bd80', 'Productos de Pollo', 'rubros'),
(155, 'faef206d43', 'Pizzerías', 'rubros'),
(156, 'aa1809fbe2', 'Pinturerías', 'rubros'),
(157, '118bc1ae99', 'Perfumerías', 'rubros'),
(158, '831d21e21e', 'Peluquerías', 'rubros'),
(159, '40140507f8', 'Parrilladas', 'rubros'),
(160, '5a2f6f9c04', 'Panaderías', 'rubros'),
(161, '314751ff56', 'Otros', 'rubros'),
(162, '84c41b5fd8', 'Organización de Eventos', 'rubros'),
(163, '27529e619c', 'Náutica', 'rubros'),
(164, '77d0ff0396', 'Música', 'rubros'),
(165, '70598bbd25', 'Mutuales', 'rubros'),
(166, 'd62bee4309', 'Mueblerías', 'rubros'),
(167, 'a0e16f667f', 'Motores Eléctricos', 'rubros'),
(168, 'fd978aef4d', 'Metalúrgica', 'rubros'),
(169, '88775702fe', 'Metalmecánica', 'rubros'),
(170, 'a5351e4ad9', 'Medios de Prensa', 'rubros'),
(171, '49748bd153', 'Marroquinería', 'rubros'),
(172, '92ef09b645', 'Maquinarias y Herramientas', 'rubros'),
(173, 'c80927c771', 'Lubricantes', 'rubros'),
(174, 'ed96412490', 'Locutorios', 'rubros'),
(175, 'f8647ab9d3', 'Limpieza e Higiene', 'rubros'),
(176, '2b4b10f4d5', 'Librerías y Jugueterías', 'rubros'),
(177, '30de89d470', 'Laneria', 'rubros'),
(178, 'abfe06dffc', 'Laboratorios', 'rubros'),
(179, '3660b341e2', 'Joyerías', 'rubros'),
(180, 'f50330a77c', 'Imprentas', 'rubros'),
(181, '17d7895eab', 'Hoteles', 'rubros'),
(182, '561a7479b9', 'Higiene, Seguridad y Salud', 'rubros'),
(183, 'fd251a523a', 'Heladerías', 'rubros'),
(184, 'bc46e255e0', 'Gráfica y Publicidad', 'rubros'),
(185, 'b7ca7e1195', 'Gomerías', 'rubros'),
(186, '6a5c9e5ef1', 'Golosinas', 'rubros'),
(187, '95b2640c02', 'Gas Envasado Licuado', 'rubros'),
(188, 'acf75393c4', 'Fábricas de Pastas', 'rubros'),
(189, 'c13e929e05', 'Fundiciones', 'rubros'),
(190, '296809ab8b', 'Frigoríficos', 'rubros'),
(191, '78f334a0bf', 'Fotografía y Filmación', 'rubros'),
(192, '1fbe682003', 'Florerías', 'rubros'),
(193, '4cdbcd0ae8', 'Ferreterías', 'rubros'),
(194, 'b3d850aaf5', 'Farmacias', 'rubros'),
(195, '1832fa7cce', 'Fabricantes Varios', 'rubros'),
(196, '7ad256392d', 'Estudios de Arquitecturas', 'rubros'),
(197, '88e7f74885', 'Estudios Contables', 'rubros'),
(198, '168ce296bc', 'Estudio Jurídico', 'rubros'),
(199, 'b68e7b9791', 'Estaciones de Servicios', 'rubros'),
(200, '2b5ba7f4fc', 'Escribanía', 'rubros'),
(201, '28fccad100', 'Equipos e Insumos', 'rubros'),
(202, 'a49e506160', 'Empresas y Materiales', 'rubros'),
(203, 'ce6da44aae', 'Electricidad', 'rubros'),
(204, '1ba3eea25b', 'Despensas', 'rubros'),
(205, '15abde683b', 'Desarrollo Web', 'rubros'),
(206, '5d493061bb', 'Desarrollo de Sistemas', 'rubros'),
(207, 'e7815ac651', 'Deporte y Fitness', 'rubros'),
(208, 'efce3dd7be', 'Corralón', 'rubros'),
(209, '7d60b61292', 'Copas y Trofeos', 'rubros'),
(210, '7d7f033a0a', 'Consultoría', 'rubros'),
(211, 'b9bf040a4b', 'Construcción', 'rubros'),
(212, '525dd2aa12', 'Confiterías Bailables', 'rubros'),
(213, '70cbed04dd', 'Confiterías', 'rubros'),
(214, '794b584677', 'Concesonarios Oficiales', 'rubros'),
(215, '563468ab3b', 'Cines y Teatros', 'rubros'),
(216, 'b86f5bdf7d', 'Cibers', 'rubros'),
(217, '10aee00812', 'Cerrajerías', 'rubros'),
(218, 'e010651583', 'Carpinterías', 'rubros'),
(219, '858d47e36b', 'Camping', 'rubros'),
(220, '7dd3bc5637', 'Bares', 'rubros'),
(221, '55eebf4e75', 'Bancos', 'rubros'),
(222, '508a232e28', 'Aserraderos', 'rubros'),
(223, 'b1754bf788', 'Artículos y Repuestos', 'rubros'),
(224, 'ddc68112e5', 'Amoblamientos', 'rubros'),
(225, 'caa3169c7a', 'Alimenticias', 'rubros'),
(226, '471a1f200e', 'Alarmas', 'rubros'),
(227, '775cec8d1d', 'Agrícolas', 'rubros'),
(228, '23d7d85235', 'Agencias de Viajes', 'rubros'),
(229, 'dd5901168a', 'Agencias de Lotería', 'rubros'),
(230, 'b7d19f5284', 'Aberturas', 'rubros'),
(231, 'be48d223aa', 'INDUMENTARIA', 'rubros'),
(232, '5b71a8299d', 'General', 'novedades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(11) NOT NULL,
  `contenido` longtext,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `contenido`, `cod`) VALUES
(4, '<div class=\"btgrid\">\r\n<div class=\"row row-1\">\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<p style=\"text-align:center\"><img alt=\"ENVIO\" src=\"http://delagro.com.ar/archivos/image/52d220e.png\" style=\"width:20%\" /></p>\r\n\r\n<h3 style=\"text-align:center\">ENV&Iacute;O A CONVENIR CON EL CLIENTE<br />\r\n<strong>ENVIAMOS A TODA LA ARGENTINA</strong></h3>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<h3 style=\"text-align:center\"><img alt=\"PAGOS\" src=\"http://delagro.com.ar/archivos/image/74f54eb.png\" style=\"width:20%\" /></h3>\r\n\r\n<h3 style=\"text-align:center\">SEGUINOS EN LAS REDES<br />\r\n<strong>INGRES&Aacute; A NUESTRO FACEBOOK</strong></h3>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col col-md-4\">\r\n<div class=\"content\">\r\n<h3 style=\"text-align:center\"><img alt=\"WHATSAPP\" src=\"http://delagro.com.ar/archivos/image/6665be8.png\" style=\"width:20%\" /></h3>\r\n\r\n<h3 style=\"text-align:center\">CONTACTANOS V&Iacute;A WHATSAPP<br />\r\n<strong>A NUESTROS CELULARES</strong></h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'FOOTER BOX'),
(5, '<h3>&iquest;Quer&eacute;s Recibir tu cup&oacute;n de descuento?</h3>\r\n\r\n<p>&iexcl;Si quer&eacute;s recibir tu cup&oacute;n envianos en el cuerpo del mensaje CUP&Oacute;N DE DESCUENTO y cantidad de metros a comprar, luego te enviaremos el CUP&Oacute;N!</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'OFERTAS ESPECIALES CONTACTO'),
(6, '<p>&iexcl;Muchas gracias!</p>\r\n\r\n<p><strong>Centro Empresarial y de Servicios</strong><br />\r\nBelgrano 1585 - San Francisco<br />\r\nTel.: (03564) 420108<br />\r\nEmail: ces@ces-sanfco.com.ar</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'PIE CORREOS'),
(7, '<h2 style=\"text-align:center\"><span style=\"color:#27ae60; font-family:Tahoma,Geneva,sans-serif\"><span style=\"font-size:36px\"><strong>PAGANOS EN<br />\r\n12 CUOTAS</strong></span><br />\r\n<span style=\"font-size:22px\"><strong>CON MERCADOPAGO</strong></span></span></h2>\r\n', 'alerta sesion'),
(10, '<p><br />\r\nEl 31 de octubre de 1928 en una reuni&oacute;n realizada en la confiter&iacute;a &ldquo;Las Colonias&rdquo;, (m&aacute;s conocida como &quot;<em><strong>Confiter&iacute;a Ferrazzi</strong></em>&rdquo;, ubicada en la esquina de Bv. 25 de Mayo y Avda. del Libertador (n), fue fundado el <strong>Centro Comercial e Industrial</strong> de San Francisco.</p>\r\n\r\n<p>El primer presidente electo fue el <em>Sr. Carlos Bertello</em>, integrante de la firma propietaria de un negocio de ramos generales que ocupaba gran parte de la manzana enmarcada por el Bv. 25 de Mayo y la calle Moreno y su primer asesor letrado y redactor de sus estatutos fue el<em> Dr. Joaqu&iacute;n Gregorio Mart&iacute;nez.</em></p>\r\n\r\n<p>El 20 de mayo de 1931 qued&oacute; constituida una asociaci&oacute;n denominada <strong>Centro Defensa de la Propiedad</strong> y fue su primer presidente el <em>Sr. Luis Lamberghini</em>.</p>\r\n\r\n<p>Agrupaba, conforme a lo consignado en los estatutos a los propietarios de bienes ra&iacute;ces (<em>propiedades inmuebles</em>).</p>\r\n\r\n<p>El 30 de agosto de 1936 esta entidad se fusiona con el <strong>Centro Comercial e Industrial</strong> dando origen al <strong>Centro Comercial, Industrial y de la Propiedad</strong>, con la orientaci&oacute;n profesional del asesor letrado de ambas instituciones, <em>Dr. Joaqu&iacute;n G. Mart&iacute;nez</em>, quien realiza las correspondientes adecuaciones estatutarias.</p>\r\n\r\n<p>A partir de entonces se inicia una prolongada trayectoria de actividades y de realizaciones, no s&oacute;lo en la promoci&oacute;n y defensa gremial empresaria sino con una activa participaci&oacute;n en los principales proyectos de obras de beneficio p&uacute;blico que contribuyeron al desarrollo de la ciudad y de su zona de influencia.</p>\r\n\r\n<p>En el a&ntilde;o 2003, y como consecuencia de la convocatoria a una <strong><em>Asamblea General Extraordinaria de Socios</em></strong> se modifican parte de los Estatutos Sociales pasando a denominarse <strong>CENTRO EMPRESARIAL y de SERVICIOS</strong> de SAN FRANCISCO.</p>\r\n', 'Historia'),
(17, '<p>Belgrano 1585 - San Francisco<br />\r\nTel.: (03564) 420108<br />\r\nEmail: ces@ces-sanfco.com.ar</p>\r\n', 'CONTACTO'),
(18, '<p>Sus objetivos no se limitaron solamente a la acci&oacute;n gremial empresaria, es decir a ejercer la&nbsp; representatividad del sector empresarial frente a los poderes p&uacute;blicos y las entidades intermedias.</p>\r\n\r\n<p>Tradicionalmente el&nbsp;<strong>Centro Empresarial y de Servicios</strong>&nbsp;se constituy&oacute; como verdadera caja de resonancia de las m&aacute;s diversas inquietudes para la promoci&oacute;n del desarrollo local y regional.</p>\r\n\r\n<p>Los hombres que integraron e integran sus comisiones directivas, por ser ciudadanos cabalmente comprometidos con las inquietudes de progreso comunitario propiciaron y elaboraron numerosas iniciativas de inter&eacute;s general, no s&oacute;lo vinculadas al fomento de sus actividades espec&iacute;ficas sino tambi&eacute;n inherentes a la implementaci&oacute;n de una estructura de servicios indispensable para el crecimiento de la ciudad, tales como:</p>\r\n\r\n<ul>\r\n	<li>En la d&eacute;cada del 30 el pedido de pavimentaci&oacute;n de la ruta nacional n&ordm; 19.</li>\r\n	<li>En la d&eacute;cada del 40 la solicitud de oficializaci&oacute;n del&nbsp;<em><strong>Colegio San Mart&iacute;n&nbsp;</strong></em>Incorporado, que dio origen al&nbsp;<em><strong>Colegio Nacional San Mart&iacute;n</strong></em>&nbsp;y el pedido de construcci&oacute;n del primer acueducto&nbsp;<em>Villa Mar&iacute;a &ndash; San Francisco</em>.</li>\r\n	<li>En la d&eacute;cada del 50 la solicitud para el traslado de las v&iacute;as ferroviarias del centro de la ciudad y el apoyo a la fabricaci&oacute;n de rejas de arado en la&nbsp;<em><strong>F&aacute;brica Militar de San Francisco.</strong></em></li>\r\n	<li>En la d&eacute;cada del 60, integrando la&nbsp;<strong>C.O.D.A.P</strong>. (<em>Comisi&oacute;n para Agua Potable</em>), la tramitaci&oacute;n para la construcci&oacute;n del segundo acueducto&nbsp;<em>Villa Mar&iacute;a &ndash; San Francisco</em>.</li>\r\n	<li>En la d&eacute;cada del 70 el pedido al&nbsp;<strong>I.N.T.I.</strong>&nbsp;(<em>Instituto de Tecnolog&iacute;a Industrial de la Naci&oacute;n</em>), para que se realizara un estudio de factibilidad para la creaci&oacute;n del&nbsp;<em><strong>Parque Industrial en San Francisco</strong></em>. Adem&aacute;s la&nbsp;<u>construcci&oacute;n de la sede propia de la entidad, en Belgrano esquina Iturraspe</u>.</li>\r\n	<li>En la d&eacute;cada del 80 la creaci&oacute;n e implementaci&oacute;n del&nbsp;<strong>Instituto de Informes Comerciales</strong>&nbsp;y en la d&eacute;cada actual el apoyo a las gestiones concertadas para la concreci&oacute;n de la red interprovincial de autopistas.</li>\r\n</ul>\r\n\r\n<p>Pero aparte de las obras mencionadas, hubo un constante seguimiento y apoyo a todo tipo de inquietudes para el desarrollo local y de la regi&oacute;n, en el &aacute;mbito social, en el &aacute;mbito cultural y educativo y en los procesos de capacitaci&oacute;n laboral, empresarial y comunitario.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'OBJETIVOS'),
(19, '<h1>Comisi&oacute;n Directiva</h1>\r\n\r\n<h2>Per&iacute;odo 10/2018 - 10/2019</h2>\r\n\r\n<table class=\"table\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>CARGO</strong></td>\r\n			<td><strong>APELLIDO Y NOMBRE</strong></td>\r\n			<td><strong>ACTIVIDAD/RUBRO</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PRESIDENTE</strong></td>\r\n			<td>TAMAGNINI Dar&iacute;o Marcelo</td>\r\n			<td>Conces.Autos - Tractores.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>VICE-PRESIDENTE 1&deg;</strong></td>\r\n			<td>NEIFERT Cristian Andr&eacute;s.</td>\r\n			<td>Conces.Autos - Repuestos</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>VICE-PRESIDENTE 2&deg;</strong></td>\r\n			<td>CAFFARATTA Leonardo C.&nbsp;</td>\r\n			<td>Pinturer&iacute;a.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>SECRETARIO</strong></td>\r\n			<td>BADINO Carlos Luis.</td>\r\n			<td>Alimenticio - Carnicer&iacute;a.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>TESORERO</strong></td>\r\n			<td>VIDAL Oscare Anibal.</td>\r\n			<td>Ferreter&iacute;a Mayorista.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>VOCALES TITULARES</strong></td>\r\n			<td>VENIER Elvio Mario.</td>\r\n			<td>Alarmas - Seguridad.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>ARMANDO Ernesto Mateo</td>\r\n			<td>Repuesto Automotor.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>GIANOTTI Jorge.</td>\r\n			<td>Indumentaria.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>BOSSA C&eacute;sar Ra&uacute;l.</td>\r\n			<td>Computaci&oacute;n - Insumos.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>SUPINO Gustavo Rafael.</td>\r\n			<td>Venta de Motos. Service.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>VOCALES SUPLENTES</strong></td>\r\n			<td>TROSSERO Ezequiel.</td>\r\n			<td>Perfumer&iacute;a.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>CAPELLINI N&eacute;stor Eladio</td>\r\n			<td>Zapater&iacute;a - Calzados.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>GUDI&Ntilde;O Luis Alberto.</td>\r\n			<td>Construcci&oacute;n - Hierros.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>CALLONI Enzo Oldemio.</td>\r\n			<td>Repuesto Automotor.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>TESIO Juan Carlos.</td>\r\n			<td>Repuesto Automotor.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>REV. CUENTAS TITULAR</strong></td>\r\n			<td>QUAGLIA Adalberto Jos&eacute;</td>\r\n			<td>Concesionaria de Autos.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>MASSONI Anibal Horacio.</td>\r\n			<td>Herborister&iacute;a.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>REV. CUENTAS SUPLENTE</strong></td>\r\n			<td>GIORDANO Evaristo Angel</td>\r\n			<td>Financiera.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>GERENTE</strong></td>\r\n			<td>UVIZ Jorge Marcelo.</td>\r\n			<td>Gerencia - Administraci&oacute;n.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table class=\"table\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>PERSONAL ADMINISTRATIVO C.E.S.:</strong></td>\r\n			<td>MART&Iacute;NEZ Mar&iacute;a Eugenia</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>FRANCO Gisela Vanesa.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PERSONAL&nbsp; ADMINISTRATIVO M.A.C.E.S:</strong></td>\r\n			<td>AZ&Uacute;N Sonia Dominga.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PERSONAL P.P.P.</strong></td>\r\n			<td>TUBERO Mat&iacute;as Nicol&aacute;s</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 'COMISION DIRECTIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`, `usuario`) VALUES
(3, '56f698a4b7', 'Perfil empresa', 'FACUNDO ROCHA', '', '', '', '0000-00-00', '1e4b022c01'),
(4, 'be92f0a4bd', 'Perfil empresa', 'Mana', '', '', '', '0000-00-00', 'da9d9c4398'),
(5, '2f701a483d', 'Perfil empresa', 'Mana', '', '', '', '0000-00-00', 'da9d9c4398'),
(6, '72dca2c4c7', 'Perfil empresa', 'Asus', '', '', '', '0000-00-00', '1e4b022c01'),
(7, 'd2e432b052', 'Perfil empresa', 'Asus', '', '', '', '0000-00-00', '1e4b022c01'),
(8, '4ef99bd546', 'Perfil empresa', 'Vea', '', '', '', '0000-00-00', '0941491a99'),
(9, '80200544a7', 'Perfil empresa', 'Kevingston', '', '', '', '0000-00-00', '9554bd55de'),
(10, 'd429c2c3af', 'Perfil empresa', 'Vea 2', '', '', '', '0000-00-00', '0941491a99'),
(11, '9e784dfe88', 'Perfil empresa', 'Jorojos', '', '', '', '0000-00-00', '2b402b0238'),
(12, '097275fc9b', 'Perfil empresa', 'ESTUDIO ROCHA', '', '', '', '0000-00-00', 'f77fc40101'),
(13, 'dd9332b274', 'Perfil empresa', 'ZF Sachs Argentina S.A.', '', '', '', '0000-00-00', '8f22caba23'),
(14, '690474d2dc', 'Perfil empresa', 'ZF Sachs Argentina S.A.', '', '', '', '0000-00-00', '8f22caba23'),
(15, '8695ed9ba9', 'Perfil empresa', 'ZF Sachs Argentina S.A.', '', '', '', '0000-00-00', '8f22caba23'),
(16, '17b419e4ec', 'Perfil empresa', 'ZF Sachs Argentina S.A.', '', '', '', '0000-00-00', '8f22caba23'),
(17, '25bf1fc5fd', 'Perfil empresa', 'ZF Sachs Argentina S.A.', '', '', '', '0000-00-00', '8f22caba23'),
(18, '77236fd250', 'Perfil empresa', 'Acumuladores Cerani SRL Distribuidores', '', '', '', '0000-00-00', '052d3e2b7b'),
(19, 'dd74b29dc7', 'Perfil empresa', 'Acumuladores Cerani SRL Distribuidores', '', '', '', '0000-00-00', '052d3e2b7b'),
(20, '5c2e0cbfa1', 'Perfil empresa', 'Acumuladores Cerani SRL Distribuidores', '', '', '', '0000-00-00', '052d3e2b7b'),
(21, '4b937f7136', 'Perfil empresa', 'Las Tipas Cines', '', '', '', '0000-00-00', 'e1574c81b0'),
(22, '0c1f8b0f8d', 'Perfil empresa', 'Botolandia', '', '', '', '0000-00-00', '92291b2985'),
(23, '981fe5f4dc', 'Perfil empresa', 'Radiocanal', '', '', '', '0000-00-00', '49c54a5d67'),
(24, 'e49c3d2843', 'Perfil empresa', 'Cental Service', '', '', '', '0000-00-00', '44023fcbfd'),
(25, 'a72288c239', 'Perfil empresa', 'Karikal', '', '', '', '0000-00-00', '9a9ee9ef72'),
(26, '36d8f583d2', 'Perfil empresa', 'Karikal', '', '', '', '0000-00-00', '9a9ee9ef72'),
(27, '2c5bf823e7', 'Perfil empresa', 'ESTUDIO ROCHA', '', '', '', '0000-00-00', 'f77fc40101'),
(28, 'c8bacdbb35', 'Perfil empresa', 'Librería Collino', '', '', '', '0000-00-00', '4ea70813d6'),
(29, '411da225e1', 'Perfil empresa', 'Librería Collino', '', '', '', '0000-00-00', '4ea70813d6'),
(30, 'b1d64546ba', 'Perfil empresa', 'Coppetti Seguros', '', '', '', '0000-00-00', 'd165ee7ac5'),
(31, 'cc2bec8e25', 'Perfil empresa', 'Rossetti Deportes', '', '', '', '0000-00-00', 'dd9b24c174'),
(32, '926288282c', 'Perfil empresa', 'Boetto Pinturas', '', '', '', '0000-00-00', '817effd879'),
(33, '2ce64d8a46', 'Perfil empresa', 'ESTUDIO ROCHA', '', '', '', '0000-00-00', 'f77fc40101'),
(34, 'eeef6121ec', 'Perfil empresa', 'Jorojos', '', '', '', '0000-00-00', '2b402b0238'),
(35, 'c28fcd73e2', 'Perfil empresa', 'José y Mariela', '', '', '', '0000-00-00', 'ebc415f5a1'),
(36, '8f8fa71f49', 'Perfil empresa', 'Karikal', '', '', '', '0000-00-00', '9a9ee9ef72'),
(37, 'd8c1c21781', 'Perfil empresa', 'RodaCam', '', '', '', '0000-00-00', 'cb0dbf229a'),
(38, 'f5d8745606', 'Perfil empresa', 'RodaCam', '', '', '', '0000-00-00', 'cb0dbf229a'),
(39, 'b3b434afc4', 'Perfil empresa', 'RodaCam', '', '', '', '0000-00-00', 'cb0dbf229a'),
(40, 'c805ef0cd8', 'Perfil empresa', 'RodaCam', '', '', '', '0000-00-00', 'cb0dbf229a'),
(41, 'd1c01e37a4', 'Perfil empresa', 'FACUNDO ROCHA', '', '', '', '0000-00-00', 'f0d0289593'),
(42, '24fa74449f', 'Perfil empresa', 'Pintureria Colorshop', '', '', '', '0000-00-00', 'edc7ba2bc4'),
(43, '3e7bcbfdd5', 'Perfil empresa', 'Pintureria Colorshop', '', '', '', '0000-00-00', 'edc7ba2bc4'),
(44, '30d80264ee', 'Perfil empresa', 'Pintureria Colorshop', '', '', '', '0000-00-00', 'edc7ba2bc4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta`, `cod`) VALUES
(5, 'assets/archivos/recortadas/a_01ca36c058.jpg', '1e4b022c01'),
(15, 'assets/archivos/recortadas/a_6c2524a1bf.jpeg', '2f701a483d'),
(16, 'assets/archivos/recortadas/a_e0b530ad70.jpg', '2f701a483d'),
(17, 'assets/archivos/recortadas/a_ac2af96e7b.jpg', '2f701a483d'),
(23, 'assets/archivos/recortadas/a_5724f68398.jpg', 'fcd5b1b3ee8e'),
(26, 'assets/archivos/recortadas/a_af738ccaae.jpeg', '48830f092b71'),
(29, 'assets/archivos/recortadas/a_e73c06c32c.jpg', '72dca2c4c7'),
(30, 'assets/archivos/recortadas/a_44fe5c1c67.jpeg', 'd2e432b052'),
(31, 'assets/archivos/recortadas/a_e650016d70.jpg', 'd2e432b052'),
(32, 'assets/archivos/recortadas/a_570f07d6f0.jpg', 'd2e432b052'),
(33, 'assets/archivos/recortadas/a_1b5edb86f1.jpg', 'b46cb4206bf6'),
(36, 'assets/archivos/recortadas/a_509a4a8fcb.jpg', '098a6b8372'),
(39, 'assets/archivos/recortadas/a_b937293e88.jpg', '25a402091160'),
(41, 'assets/archivos/recortadas/a_98c9ce3758.jpg', '4ef99bd546'),
(42, 'assets/archivos/recortadas/a_526f5a707e.jpg', '75fff9ada8de'),
(44, 'assets/archivos/recortadas/a_e2fc211176.jpg', '80200544a7'),
(45, 'assets/archivos/recortadas/a_06953f874a.jpg', 'a607ece22ca0'),
(46, 'assets/archivos/recortadas/a_aca6f9fc46.jpg', 'd55d53463c'),
(47, 'assets/archivos/recortadas/a_48e02daf80.jpg', '7e2150385a89'),
(48, 'assets/archivos/recortadas/a_93db856826.jpg', '75fff9ada8de'),
(50, 'assets/archivos/recortadas/a_c572558c3a.png', '0941491a99'),
(69, 'assets/archivos/recortadas/a_aa7e1f585c.jpg', 'd429c2c3af'),
(70, 'assets/archivos/recortadas/a_7fcb280d96.jpg', 'd429c2c3af'),
(71, 'assets/archivos/recortadas/a_5228eb8e3d.jpg', 'e9d8703f8486'),
(74, 'assets/archivos/recortadas/a_42668df710.jpg', '5862fcc4fc'),
(75, 'assets/archivos/recortadas/a_3732de4eb9.jpg', 'c4ee748e4e'),
(76, 'assets/archivos/recortadas/a_f5681a0e60.jpg', '47d7b2ba5a'),
(77, 'assets/archivos/recortadas/a_bcb6cbecdc.jpg', '78e557b730'),
(78, 'assets/archivos/recortadas/a_96781e1577.jpg', 'b65d5be5c4'),
(79, 'assets/archivos/recortadas/a_131a091de1.jpg', '7980441265'),
(80, 'assets/archivos/recortadas/a_0df7834a30.jpg', 'ec5f4bc7af'),
(81, 'assets/archivos/recortadas/a_ec17e1b5c8.jpg', '423a47a114'),
(82, 'assets/archivos/recortadas/a_7b8d843159.jpg', 'ae1168a88e'),
(83, 'assets/archivos/recortadas/a_2b20a9dfd9.jpg', 'ef797d5e7a'),
(84, 'assets/archivos/recortadas/a_81582d4582.jpg', '88aeca0a2f'),
(85, 'assets/archivos/recortadas/a_7435ddf2d4.jpg', '8c86c1c09c'),
(86, 'assets/archivos/recortadas/a_42454ec255.jpg', '030ba55720'),
(87, 'assets/archivos/recortadas/a_5686c90a42.jpg', '3ade5a70f1'),
(88, 'assets/archivos/recortadas/a_f26f9b7ca2.jpg', '9888ee8f0a'),
(89, 'assets/archivos/recortadas/a_e2d357adbe.jpg', '57ab644664'),
(90, 'assets/archivos/recortadas/a_c77b360e40.jpg', 'aaba665a09'),
(91, 'assets/archivos/recortadas/a_19b5139801.jpg', '11e53180ea'),
(92, 'assets/archivos/recortadas/a_81a359f1ac.jpg', 'c6b5d8b048'),
(93, 'assets/archivos/recortadas/a_bb8d319f3f.jpg', 'bd24931a1c'),
(94, 'assets/archivos/recortadas/a_955ee866c5.jpg', '8783ac04d9'),
(95, 'assets/archivos/recortadas/a_ebb2bc2daa.jpg', 'dc32b477a8'),
(96, 'assets/archivos/recortadas/a_6d7db10363.jpg', '227ed8da74'),
(97, 'assets/archivos/recortadas/a_9fbe5a531c.jpg', 'e90c79e626'),
(98, 'assets/archivos/recortadas/a_23dc9186cd.jpg', 'aa303c610e'),
(99, 'assets/archivos/recortadas/a_e3407bd16f.jpg', '20c6dd1266'),
(100, 'assets/archivos/recortadas/a_683b71db97.jpg', 'f889b4da3c'),
(101, 'assets/archivos/recortadas/a_b5ee4a9b98.jpg', '807d6f1024'),
(102, 'assets/archivos/recortadas/a_7dcdd04f37.jpg', '8fba6760fb'),
(103, 'assets/archivos/recortadas/a_93f31af44a.jpg', '03c2708eb2'),
(104, 'assets/archivos/recortadas/a_374901253d.jpg', 'aced3c5d8c'),
(105, 'assets/archivos/recortadas/a_2af8563c43.jpg', '3687198270'),
(106, 'assets/archivos/recortadas/a_3bcdb6272a.jpg', '73ef45449e'),
(107, 'assets/archivos/recortadas/a_d692bf3a11.jpg', '13c7ac43e2'),
(108, 'assets/archivos/recortadas/a_6bd851c2e5.jpg', 'bdb2c051b3'),
(109, 'assets/archivos/recortadas/a_5fc2ad3d4f.jpg', 'cc90b20e4f'),
(110, 'assets/archivos/recortadas/a_bec4aef0c7.jpg', 'a99e8babf3'),
(111, 'assets/archivos/recortadas/a_fe9db77f80.jpg', '046e0e8fb0'),
(112, 'assets/archivos/recortadas/a_a4f67f70db.jpg', '995888b417'),
(113, 'assets/archivos/recortadas/a_6b48d58237.jpg', '4ca27f443a'),
(114, 'assets/archivos/recortadas/a_d3968027d0.jpg', '217e93eea4'),
(115, 'assets/archivos/recortadas/a_691d025235.jpg', '4a2910816f'),
(116, 'assets/archivos/recortadas/a_90ea76974a.jpg', '192656a1b4'),
(117, 'assets/archivos/recortadas/a_8e93078364.jpg', 'c9886e6eb5'),
(118, 'assets/archivos/recortadas/a_308bb30e6f.jpg', '555f502c26'),
(119, 'assets/archivos/recortadas/a_ba1d95badc.jpg', '4133eafda4'),
(120, 'assets/archivos/recortadas/a_008b5d7bc7.jpg', '282a06a9b6'),
(121, 'assets/archivos/recortadas/a_c411acc6e0.jpg', '0c463241f3'),
(122, 'assets/archivos/recortadas/a_50c89797d9.jpg', '57111d6e32'),
(123, 'assets/archivos/recortadas/a_264f4c272d.jpg', 'bc9ed5a54c'),
(124, 'assets/archivos/recortadas/a_98e756ac80.jpg', '2cab0ce242'),
(125, 'assets/archivos/recortadas/a_c18922e593.jpg', '09a75a3906'),
(126, 'assets/archivos/recortadas/a_ed499dc7b6.jpg', '048c38f664'),
(127, 'assets/archivos/recortadas/a_c9d14a1f9a.jpg', '0f7b15935e'),
(128, 'assets/archivos/recortadas/a_403db53faa.jpg', '3e2172d9bf'),
(129, 'assets/archivos/recortadas/a_359c04ea9c.jpg', '41de1adcbd'),
(130, 'assets/archivos/recortadas/a_a594c589c7.jpg', 'f22fc053c0'),
(131, 'assets/archivos/recortadas/a_a7101221db.jpg', '7a6ef5e544'),
(132, 'assets/archivos/recortadas/a_70eecf7319.jpg', 'ee5bf14983'),
(133, 'assets/archivos/recortadas/a_9228671267.jpg', 'b942f80d58'),
(134, 'assets/archivos/recortadas/a_e87e7a6a95.jpg', 'c7c62d037b'),
(136, 'assets/archivos/recortadas/a_90f7894c88.jpg', '40e48c3559'),
(137, 'assets/archivos/recortadas/a_f45bbabbaf.jpg', '1915e7d7bc'),
(138, 'assets/archivos/recortadas/a_2d463639c1.jpg', 'b53c5b7254'),
(139, 'assets/archivos/recortadas/a_179eadc4a7.png', '9554bd55de'),
(140, 'assets/archivos/recortadas/a_ed633affa2.jpg', '2b402b0238'),
(141, 'assets/archivos/recortadas/a_c90877ffb3.jpg', '9e784dfe88'),
(151, 'assets/archivos/recortadas/a_27a83de28e.jpg', '690474d2dc'),
(152, 'assets/archivos/recortadas/a_78de54ed44.jpg', '8695ed9ba9'),
(153, 'assets/archivos/recortadas/a_19d7bf7b7c.jpg', '17b419e4ec'),
(154, 'assets/archivos/recortadas/a_db163641c3.jpg', '17b419e4ec'),
(155, 'assets/archivos/recortadas/a_ddccf8ef3a.png', '25bf1fc5fd'),
(156, 'assets/archivos/recortadas/a_527f24f2fc.jpg', '25bf1fc5fd'),
(157, 'assets/archivos/recortadas/a_c840e64a70.jpg', '25bf1fc5fd'),
(158, 'assets/archivos/recortadas/a_206282baf1.png', '8f22caba23'),
(159, 'assets/archivos/recortadas/a_13fffdd420.jpg', '052d3e2b7b'),
(160, 'assets/archivos/recortadas/a_455fe9e42f.png', '77236fd250'),
(161, 'assets/archivos/recortadas/a_d5042afbf8.png', '5c2e0cbfa1'),
(163, 'assets/archivos/recortadas/a_5b5456db7c.jpg', '4b937f7136'),
(164, 'assets/archivos/recortadas/a_d87f29b854.jpg', '4b937f7136'),
(165, 'assets/archivos/recortadas/a_01432c629b.png', 'e1574c81b0'),
(166, 'assets/archivos/recortadas/a_2824142d01.png', 'add4f3c42a5e'),
(167, 'assets/archivos/recortadas/a_dad7a84793.png', '7c71cf33e3b3'),
(169, 'assets/archivos/recortadas/a_bda06f5bf4.jpg', '88473f90f8'),
(170, 'assets/archivos/recortadas/a_b0c9adb88f.jpg', '0c1f8b0f8d'),
(171, 'assets/archivos/recortadas/a_dbc7e55b6a.png', '92291b2985'),
(172, 'assets/archivos/recortadas/a_3b71eb8264.jpg', '49c54a5d67'),
(173, 'assets/archivos/recortadas/a_4be486156f.jpg', '981fe5f4dc'),
(174, 'assets/archivos/recortadas/a_98f63d2a8a.jpg', '5298989df8'),
(175, 'assets/archivos/recortadas/a_bbe2af3690.png', '44023fcbfd'),
(176, 'assets/archivos/recortadas/a_acbeb78f3c.png', 'e49c3d2843'),
(177, 'assets/archivos/recortadas/a_6b6216eef9.png', '9a9ee9ef72'),
(178, 'assets/archivos/recortadas/a_7e59c1fff0.png', 'a72288c239'),
(179, 'assets/archivos/recortadas/a_38db23e767.png', 'a72288c239'),
(182, 'assets/archivos/recortadas/a_7d10a17917.jpg', 'f77fc40101'),
(183, 'assets/archivos/recortadas/a_f8b0f57b1e.png', '2c5bf823e7'),
(184, 'assets/archivos/recortadas/a_3fc4350539.jpg', '4ea70813d6'),
(185, 'assets/archivos/recortadas/a_4b0715ebeb.jpg', 'c8bacdbb35'),
(186, 'assets/archivos/recortadas/a_0b73826fc6.jpg', '411da225e1'),
(187, 'assets/archivos/recortadas/a_7d5604a5e8.png', 'd165ee7ac5'),
(188, 'assets/archivos/recortadas/a_001eb9da26.jpg', 'b1d64546ba'),
(189, 'assets/archivos/recortadas/a_9b4d63ca50.jpg', 'dd9b24c174'),
(190, 'assets/archivos/recortadas/a_4d95ee15e3.jpg', 'cc2bec8e25'),
(191, 'assets/archivos/recortadas/a_c7534b3538.jpg', 'bc5799e40aa1'),
(192, 'assets/archivos/recortadas/a_2081f61c24.jpg', '817effd879'),
(193, 'assets/archivos/recortadas/a_7cd781d246.jpg', '926288282c'),
(194, 'assets/archivos/recortadas/a_879478e425.jpg', '2ce64d8a46'),
(195, 'assets/archivos/recortadas/a_4657b6bc5e.jpeg', 'eeef6121ec'),
(196, 'assets/archivos/recortadas/a_816d74096b.jpeg', 'eeef6121ec'),
(197, 'assets/archivos/recortadas/a_d0793cfff8.jpeg', 'eeef6121ec'),
(198, 'assets/archivos/recortadas/a_f54a32904c.jpeg', 'eeef6121ec'),
(199, 'assets/archivos/recortadas/a_ce601e83d2.jpeg', 'eeef6121ec'),
(200, 'assets/archivos/recortadas/a_8411f9d49e.jpg', 'ebc415f5a1'),
(201, 'assets/archivos/recortadas/a_a8d971a3ac.jpg', 'c28fcd73e2'),
(202, 'assets/archivos/recortadas/a_4ed41683d0.jpg', '69f11a8c3a91'),
(203, 'assets/archivos/recortadas/a_df18b9ebce.jpg', 'a75924b9b8b1'),
(204, 'assets/archivos/recortadas/a_3350476572.jpg', 'c66b227fb17d'),
(205, 'assets/archivos/recortadas/a_dfca1a1ccd.jpg', '44a420d74736'),
(206, 'assets/archivos/recortadas/a_26618ca8db.jpg', 'eccf52685195'),
(207, 'assets/archivos/recortadas/a_a90ec85d12.jpg', '8af85943d7f5'),
(208, 'assets/archivos/recortadas/a_aa35ef0201.jpg', '8e503dc09c96'),
(209, 'assets/archivos/recortadas/a_81f94cb374.jpg', '4d2334e2d49b'),
(210, 'assets/archivos/recortadas/a_bd80a366e3.jpg', '1da3503014d0'),
(211, 'assets/archivos/recortadas/a_86bdc025ed.jpg', 'df2184334ff3'),
(212, 'assets/archivos/recortadas/a_50d308e5fc.jpg', 'eded6e5afd41'),
(213, 'assets/archivos/recortadas/a_4505179fe5.jpg', '8f8fa71f49'),
(214, 'assets/archivos/recortadas/a_031e9602c5.jpg', '1344bd700c66'),
(215, 'assets/archivos/recortadas/a_ee34f42e0e.jpg', '43316aca10a2'),
(216, 'assets/archivos/recortadas/a_88e442909b.jpg', 'cded31c1f54e'),
(217, 'assets/archivos/recortadas/a_8584d8dba1.jpg', '3239623f53d5'),
(218, 'assets/archivos/recortadas/a_b777164fd0.png', '73fa8931e8fc'),
(219, 'assets/archivos/recortadas/a_041f84009c.png', '73fa8931e8fc'),
(220, 'assets/archivos/recortadas/a_a407e116a8.png', '73fa8931e8fc'),
(221, 'assets/archivos/recortadas/a_acabc94768.jpg', '665817974cad'),
(223, 'assets/archivos/recortadas/a_16dfa23259.jpg', 'd8c1c21781'),
(224, 'assets/archivos/recortadas/a_c226a427b7.png', 'cb0dbf229a'),
(226, 'assets/archivos/recortadas/a_aa274e2b12.jpg', 'b3b434afc4'),
(228, 'assets/archivos/recortadas/a_79478761d9.jpg', 'c805ef0cd8'),
(229, 'assets/archivos/recortadas/a_fa74b5c955.png', 'c805ef0cd8'),
(230, 'assets/archivos/recortadas/a_3d0ba27d1e.png', '893da373db5b'),
(231, 'assets/archivos/recortadas/a_3494b89eb5.png', 'f0d0289593'),
(232, 'assets/archivos/recortadas/a_82ee5f920e.jpg', 'd1c01e37a4'),
(233, 'assets/archivos/recortadas/a_917afeb190.png', 'd1c01e37a4'),
(234, 'assets/archivos/recortadas/a_7fa439e075.jpeg', 'd1c01e37a4'),
(235, 'assets/archivos/recortadas/a_e444e5934a.jpg', 'd1c01e37a4'),
(236, 'assets/archivos/recortadas/a_cbd861c8fd.jpg', 'd1c01e37a4'),
(237, 'assets/archivos/recortadas/a_2cead75cc7.jpg', 'edc7ba2bc4'),
(238, 'assets/archivos/recortadas/a_9654bc02e6.jpg', '24fa74449f'),
(239, 'assets/archivos/recortadas/a_4e04c9ff20.png', '24fa74449f'),
(240, 'assets/archivos/recortadas/a_f8dc404a4d.png', '24fa74449f'),
(242, 'assets/archivos/recortadas/a_395d6454d2.jpg', '30d80264ee'),
(243, 'assets/archivos/recortadas/a_a60ae327e0.png', '30d80264ee'),
(244, 'assets/archivos/recortadas/a_08bd5e460f.png', '30d80264ee'),
(245, 'assets/archivos/recortadas/a_38a8408c88.jpg', '30d80264ee'),
(249, 'assets/archivos/recortadas/a_bd2d3885cc.jpg', 'f6e9e5ac81'),
(250, 'assets/archivos/recortadas/a_ce066a4d24.jpg', 'ed079ec865c2'),
(251, 'assets/archivos/recortadas/a_c26e62c2f1.jpg', 'd8adc67a65'),
(253, 'assets/archivos/recortadas/a_454ef481ea.jpg', 'c3461e41a5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(9, '5862fcc4fc', 'Exical 2018. Nuevas Tendencias, Mejores Propuestas. Invitación.', '<p>&nbsp;</p>\r\n\r\n<p>4, 5 y 6 de febrero 2018 de 12:00 a 21:00 horas en&nbsp;<strong>FORJA Centro de Eventos.</strong></p>\r\n\r\n<p><u><strong>Consultas</strong></u>: 0351 2348249.</p>\r\n\r\n<p><u><strong>E - mai</strong></u>l:&nbsp;<a href=\"mailto:exicalcba@gmail.com\">exicalcba@gmail.com</a></p>\r\n\r\n<p><strong>FORJA CENTRO DE EVENTOS</strong><br />\r\nMauricio Yadarola 1699, C&oacute;rdoba.</p>\r\n\r\n<p><u><strong>INSCRIPCIONES</strong></u>:&nbsp;<a href=\"http://www.exical.com.ar/acreditacion.php?mkt_hm=0&amp;utm_source=email_marketing&amp;utm_admin=82795&amp;utm_medium=email&amp;utm_campaign=EXICAL_Nuevas_Tendencias_mejores_Propuestas\">click aqu&iacute;.-</a></p>\r\n', '5b71a8299d', '', '', '2018-01-04'),
(10, 'c4ee748e4e', 'Becas Corporativas IES', '<p>Recordamos a todos los socios de la instituci&oacute;n que se encuentra vigente un Convenio de Becas Coporativas firmado oportunamente con el&nbsp;<strong>Colegio Universitario IES Siglo 21,&nbsp;</strong>por medio del cual se podr&aacute; acceder a un descuento especial del 20% en los aranceles desde el primer semestre.</p>\r\n\r\n<p>El beneficio es valido para todas las carreras en las tres modalidades de estudio:</p>\r\n\r\n<p><strong>1&ordm;.- PRESENCIAL.</strong></p>\r\n\r\n<p><strong>2&ordm;.- SEMIPRESENCIAL.</strong></p>\r\n\r\n<p><strong>3&ordm;.- DISTANCIA.</strong></p>\r\n\r\n<p>Actualmente se encuentran abiertas las inscripciones para comenzar a cursar en el mes de marzxo del 2018.</p>\r\n\r\n<p>Adem&aacute;s de estos beneficios los familiares directos de empleados de empresas asociadas, (c&oacute;nyuge e hijos), podr&aacute;n obtener el 15% de descuento en los aranceles.</p>\r\n\r\n<p><u><strong>M&aacute;s info:</strong></u>&nbsp;<a href=\"http://www.ies21.edu.ar/carreras\">click aqu&iacute;.-</a></p>\r\n', '4414cd68f7', '', '', '2018-02-16'),
(11, '47d7b2ba5a', 'INGRESOS BRUTOS: NOVEDADES 2018', '<p>&nbsp;Compartimos informaci&oacute;n elaborada y proporcionada por la&nbsp;Federaci&oacute;n Comercial de la Provincia de C&oacute;rdoba, (FEDECOM), sobre aspectos m&aacute;s relevantes del Impuesto a los Ingresos Brutos para el a&ntilde;o 2018:</p>\r\n\r\n<p>1* Se adopta el&nbsp;NAES ( Nomenclador de Actividades Econ&oacute;micas del Sistema Federal de Recaudaci&oacute;n), para codificar todas las actividades, detalladas en el Anexo I de la ley Impositiva Anual con su respectivas al&iacute;cuotas (la general reducida e incrementada).-</p>\r\n\r\n<p>2* Al&iacute;cuota General: 4%</p>\r\n\r\n<p>3*Al&iacute;cuota Incrementada:&nbsp;Se eleva a $163.000.000 (antes 140.000.000) el monto de ingresos que debe superar para tributar la al&iacute;cuota agravada en las distintas actividades.-</p>\r\n\r\n<p>4*Al&iacute;cuota Reducida:&nbsp;Se establece que la al&iacute;cuota reducida (en un 30% de la general), se aplica para aquellos contribuyentes cuya sumatoria de la totalidad de bases imponibles para el ejercicio fiscal 2017, no supera la suma de $9.000.000.-</p>\r\n\r\n<p>5*Al&iacute;cuota 2.8%:&nbsp;La Ley Impositiva 2018 establece para aplicar la al&iacute;cuota del 2.8 % en ciertas actividades un l&iacute;mite superior de ingresos de $16.000.000 por la totalidad de actividades desarrolladas (en 2017 el l&iacute;mite era de $14.000.000).-</p>\r\n\r\n<p>6* Industrias:&nbsp;Exime a aquellas que para el ejercicio fiscal 2017, atribuibles a la totalidad de actividades desarrolladas no superen la suma de $100.000.000 (en 2017 80.000.000) en tanto el establecimiento se encuentre radicado en C&oacute;rdoba y este reconocida como industria es decir inscripta SIIC.-Las industrias con establecimiento en C&oacute;rdoba que no est&eacute;n exentas, pero sean PYME: estabilidad fiscal manteniendo al&iacute;cuotas del 2016 (ingresos hasta 760.000.000), al&iacute;cuota general 0.5%.-</p>\r\n\r\n<p>7* Impuesto M&iacute;nimo:&nbsp;Se incrementa el m&iacute;nimo general a $7200 anuales es decir $600 mensuales.-</p>\r\n\r\n<p>8*Monotributo Impuesto a los Ingresos Brutos:&nbsp;Se deroga el R&eacute;gimen Fijo y se incorpora el R&eacute;gimen Simplificado para peque&ntilde;os contribuyentes Impuesto Ingresos Brutos , el mismo se encuentra relacionado con el monotributo a nivel nacional, tomando el provincial la categor&iacute;a de monotributo establecido por AFIP.-</p>\r\n\r\n<p>Categor&iacute;a Monotributo:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Monto Mensual<br />\r\nA&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $200<br />\r\nB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $350<br />\r\nC&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$470<br />\r\nD&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $690<br />\r\nE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$940<br />\r\nF&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$1190<br />\r\nG&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $1450<br />\r\nH&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $1950<br />\r\nI&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $2370<br />\r\nJ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $2730<br />\r\nK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$3060<br />\r\n<br />\r\n9* Locaci&oacute;n de Inmuebles:&nbsp;actividad exenta cuando los ingresos por dicha actividad sean inferiores a $14.000 mensuales, $168.000 anuales.-</p>\r\n\r\n<p>10*FOFISE Y FFOI:&nbsp;cuadro de los % aplicar de acuerdo a los ingresos obtenidos en 2017:<br />\r\nSUMA DE BASES IMPONIBLES&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FOFISE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FFOI<br />\r\n-hasta $9.000.000&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0%&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0%<br />\r\n-M&aacute;s de $9.000.000 a $23.000.000&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5%&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 0%<br />\r\n-M&aacute;s de $ 23.000.000 a $163.000.000&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5%&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12.5%<br />\r\n-M&aacute;s $163.000.000 a&hellip;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;5%&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 15.25%</p>\r\n', '4414cd68f7', '', '', '2018-02-20'),
(12, '78e557b730', 'FEDECOM - Beneplacito por los cambios resueltos por el ERSEP.', '<p>La&nbsp;Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom)&nbsp;recibi&oacute; con benepl&aacute;cito la decisi&oacute;n tomada por el Ente Regulador de los Servicios P&uacute;blicos (Ersep) de obligar a las distribuidoras del servicio el&eacute;ctrico a realizar cambios en las facturas que env&iacute;an a los usuarios, con el objeto de implementar un modelo de costos transparentes.</p>\r\n\r\n<p>Como se conoci&oacute; ayer, el Ersep determin&oacute; que la facturaci&oacute;n realizada tanto por la Empresa Provincial de Energ&iacute;a de C&oacute;rdoba (EPEC), como por las cooperativas del interior de la provincia, no podr&aacute; incluir costos que no est&eacute;n relacionados directamente al consumo de energ&iacute;a.</p>\r\n\r\n<p>&ldquo;El modelo de factura que dar&aacute; las certezas se&ntilde;aladas, previo a su implementaci&oacute;n, deber&aacute; ser presentado por las prestatarias ante el Ersep para su aprobaci&oacute;n&rdquo;, indic&oacute; el ente en un comunicado.</p>\r\n\r\n<p>Entre los cambios resueltos por el Ente se destacan: a) la eliminaci&oacute;n de los impuestos municipales por el uso del espacio p&uacute;blico que se especific&oacute; que es gratuito; b) tanto Epec como de las cooperativas no ser&aacute;n m&aacute;s agentes de retenci&oacute;n de tasas municipales o comunales; y c) no podr&aacute;n facturar otros servicios en la misma boleta de energ&iacute;a.</p>\r\n\r\n<p>Pese a todo ello, en la Federaci&oacute;n a&uacute;n persiste la duda sobre la implicancia que esta medida tendr&aacute; sobre el &iacute;tem de &lsquo;costo operativo y mantenimiento&rsquo;.</p>\r\n\r\n<p>&ldquo;En el caso de los usuarios cuyos proveedores del servicio el&eacute;ctrico son cooperativas, como es el caso de muchas localidades del interior de la provincia, el &lsquo;costo operativo y de mantenimiento&rsquo; oscila entre un 10 y un 30% m&aacute;s del valor de la energ&iacute;a. Para saber si esto tambi&eacute;n ser&aacute; eliminado o no habr&aacute; que esperar a que las facturas se presenten ante el Ersep, para su validaci&oacute;n, para saber cu&aacute;l es la resoluci&oacute;n al respecto&rdquo;, expres&oacute; el secretario de Fedecom, Alberto Ca&ntilde;on.</p>\r\n', '4414cd68f7', '', '', '2018-03-08'),
(13, 'b65d5be5c4', '3er. Congreso Industria, Mueble y Electrodomésticos', '<p><strong>Acreditaci&oacute;n Electrodom 2018:&nbsp;<a href=\"https://docs.google.com/forms/d/e/1FAIpQLScft7BIKVa9jw-JE81PP3CAMMLGz_jyiEH99x5jr9CsPLJKUg/viewform?mkt_hm=4&amp;utm_admin=36182\">CLICK AQU&Iacute;.-</a></strong></p>\r\n\r\n<p><strong>Acreditaci&oacute;n FIMAR 2018:&nbsp;<a href=\"https://docs.google.com/forms/d/e/1FAIpQLSdoPRezwkkgGH9P6A1cDahqp2WxCoSsIHkPS7hYWEn692yhyw/viewform?mkt_hm=3&amp;utm_admin=36182\">CLICK AQU&Iacute;.-</a></strong></p>\r\n', '5b71a8299d', '', '', '2018-03-26'),
(14, '7980441265', 'Gestiones del CES ante la Secretaría de Desarrollo Económico de la Municipalidad', '<p>.</p>\r\n', '4414cd68f7', '', '', '2018-04-13'),
(15, 'ec5f4bc7af', 'Fedecom participo junto al G6 de importante reunion con el Ministro Fabian Lopez', '<p>Cristian Pastore, miembro del Consejo Directivo de la Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom), particip&oacute; en la ma&ntilde;ana de ayer (12/4), junto a representantes de las C&aacute;maras integrantes del Grupo de los Seis (G6) y otras entidades empresarias, de una reuni&oacute;n con el Ministro de Agua, Ambiente y Servicios P&uacute;blicos de la Provincia, Fabi&aacute;n L&oacute;pez, en la que present&oacute; el avance en el programa de Eficiencia Energ&eacute;tica que se est&aacute; llevando a cabo.</p>\r\n\r\n<p>En la oportunidad, el funcionario explic&oacute; que, como la Naci&oacute;n hizo las modificaciones que le correspond&iacute;a en cuanto a la unificaci&oacute;n del valor energ&eacute;tico (kW/hora) y de distribuci&oacute;n en todo el pa&iacute;s, la provincia avanza en el mismo sentido con el objeto de unificar el valor del transporte en toda la provincia. En ese marco, diferenci&oacute; los costos de distribuci&oacute;n, de aquellos que son los gastos de la Empresa Provincial de Energ&iacute;a de C&oacute;rdoba (EPEC), y asegur&oacute; que en van a llegar &ldquo;al fondo&rdquo; para lograr la transparencia de este &uacute;ltimo.</p>\r\n\r\n<p>En ese sentido, pidi&oacute; el apoyo del sector empresario e inform&oacute; que en la jornada de ayer se hizo la denuncia del convenio colectivo de trabajo de la EPEC ante el Ministerio de Trabajo de C&oacute;rdoba. Al respecto indic&oacute; que pretenden negociar y llegar a un convenio similar al que tiene la provincia de Santa Fe.</p>\r\n\r\n<p>L&oacute;pez explic&oacute; adem&aacute;s que en C&oacute;rdoba existen 206 empresas que distribuyen energ&iacute;a, algo que consider&oacute; desacertado. El Gobierno sostiene que no pueden coexistir tantas compa&ntilde;&iacute;as ya que el costo hace ineficiente el servicio. Ante ello, sugieren la fusi&oacute;n (no desaparici&oacute;n) entre algunas cooperativas de modo tal que puedan optimizar recursos y bajar los costos.<br />\r\n&ldquo;Es el momento para hacer todos estos cambios y ajustar el transporte provincial y los costos de la EPEC&rdquo;, indic&oacute; L&oacute;pez.</p>\r\n', '4414cd68f7', '', '', '2018-04-13'),
(16, '423a47a114', 'Fedecom fue parte de la organización del encuentro del B20', '<p>La Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom), como miembro integrante del G6, fue co-organizadora de las actividades del Business 20 (B20) que se desarrollaron en C&oacute;rdoba durante los pasados 5 y 6 de abril.</p>\r\n\r\n<p>Los encuentros de los grupos de trabajo sobre Desarrollo de Pymes (Task Force SMEs) y sobre Sistema Alimentario Sustentable (Task Force Sustainable Food System), fueron de mucha relevancia para la provincia. Eso qued&oacute; demostrado con la presencia de m&aacute;s de 600 empresarios locales e internacionales.<br />\r\n<br />\r\nEn ese marco, se desarroll&oacute; tambi&eacute;n el Foro de L&iacute;deres Empresarios, ciclo de encuentros organizado con el objetivo de difundir el proceso de trabajo del B20 en distintas regiones del pa&iacute;s.<br />\r\nDe esos encuentros particip&oacute; el presidente de Fedecom, Marcelo Stehli, la Comisi&oacute;n Directiva y dirigentes de los Centros Comerciales y c&aacute;maras empresariales asociadas.<br />\r\n<br />\r\nVale recordar que el B20 Argentina involucra a los l&iacute;deres empresariales m&aacute;s prominentes de las principales compa&ntilde;&iacute;as de todo el mundo. A trav&eacute;s de sus interacciones con los ministros y los l&iacute;deres del G20, mejoran la visibilidad de las propuestas y recomendaciones de pol&iacute;ticas del B20.</p>\r\n\r\n<p>El grupo aborda asuntos como el financiamiento del crecimiento y la infraestructura, el comercio y la inversi&oacute;n. Cuenta entre sus objetivos con el de enfocarse en los nuevos y pr&oacute;speros desaf&iacute;os del mundo de hoy. Estos son el acceso a los alimentos y la desnutrici&oacute;n para una poblaci&oacute;n cada vez mayor, y la nueva revoluci&oacute;n industrial que plantea oportunidades desafiantes para el futuro del trabajo.</p>\r\n\r\n<p><strong>Galer&iacute;a de Fotos:&nbsp;<a href=\"https://fedecom.us16.list-manage.com/track/click?u=ad75cb41552809d365d9bbc94&amp;id=6addf04d56&amp;e=e0b855999a\">click aqu&iacute;.-</a></strong></p>\r\n\r\n<p><strong>Informe Foro de L&iacute;deres C&oacute;rdoba:&nbsp;<a href=\"https://fedecom.us16.list-manage.com/track/click?u=ad75cb41552809d365d9bbc94&amp;id=ce2a7898f7&amp;e=e0b855999a\">click aqu&iacute;.-</a></strong></p>\r\n', '5b71a8299d', '', '', '2018-04-13'),
(17, 'ae1168a88e', 'Importante reunión en el CES con Empresarios', '<p>D&iacute;as atr&aacute;s se &nbsp;acercaron a nuestra instituci&oacute;n un grupo de comerciantes a los fines de plantear distintas inquietudes, problem&aacute;ticas y sugerencia de acciones y gestiones a llevar a cabo a trav&eacute;s de la instituci&oacute;n.</p>\r\n\r\n<p>Luego de una larga y productiva deliberaci&oacute;n se acord&oacute; continuar con este tipo de encuentros enriquecedores los cuales tienden a buscar soluciones a problemas comunes.&nbsp;</p>\r\n\r\n<p>Por lo pronto elevar&aacute;n a la entidad una serie de gestiones que se podr&iacute;an llevar a cabo &nbsp;de aqu&iacute; en m&aacute;s.</p>\r\n\r\n<p>En la medida que se vayan concretando se informar&aacute; a todos los socios de las mismas.</p>\r\n', '5b71a8299d', '', '', '2018-04-16'),
(18, 'ef797d5e7a', 'Invitación a chara: \"Herramientas para la Promoción Industrial\"', '<p>.</p>\r\n', '5b71a8299d', '', '', '2018-04-20'),
(19, '88aeca0a2f', 'Pedido de Eliminación del cobro de Estacionamiento los días sábados', '<p>D&iacute;as atr&aacute;s se elev&oacute; una nota al Sr. Intendente Municipal,&nbsp;<em>Lic. Ignacio Garc&iacute;a Aresca</em>con el objetivo de trasladarle una inquietud de varios comerciantes del centro de la ciudad relacionada al Estacionamiento Medido.</p>\r\n', '4414cd68f7', '', '', '2018-04-26'),
(20, '8c86c1c09c', 'Gestiones ante Municipio y HCD por eliminación del FOSP y reducción del OIM', '<p>Se elev&oacute; al Sr. Intendente Municipal, Lic. Garc&iacute;a Aresca una nota donde manifestamos nuestra postura institucional respecto a la necesidad de eliminar de&nbsp;<u><strong>TODOS</strong></u>&nbsp;los servicios municipales el FOSP (<strong>15%</strong>) y no s&oacute;lo de las boletas de EMUGAS.</p>\r\n\r\n<p>Asimismo solicitamos la reducci&oacute;n del porcentaje (<strong>15%</strong>) que se percibe en concepto de OIM en las boletas de la EPEC.</p>\r\n\r\n<p><strong>Texto de la nota elevada:&nbsp;<a href=\"https://drive.google.com/open?id=1dyLuKmWTmHy7M0B4imLvbTE2AorzSiIy\">click aqu&iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-04-26'),
(21, '030ba55720', 'Fedecom integra, por primera vez en 37 años, el Comité de Presidencia de CAME', '<p>La&nbsp;<strong>Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom)</strong>&nbsp;informa con orgullo el logro de la actual gesti&oacute;n: por primera vez en 37 a&ntilde;os, integra el Comit&eacute; de Presidencia de la&nbsp;<strong>Confederaci&oacute;n Argentina de la Mediana Empresa (CAME).</strong><br />\r\nAyer, en el marco de la Asamblea Anual General, el presidente Honorario y a la vez ex presidente de Fedecom, Rub&eacute;n Martos, fue elegido para ocupar el cargo de Secretario de Servicios de CAME por los pr&oacute;ximos dos a&ntilde;os.<br />\r\nJunto a &eacute;l, el misionero Gerardo D&iacute;az Beltr&aacute;n, titular de la Comisi&oacute;n de Fronteras, fue electo como el nuevo representante de las peque&ntilde;as y medianas empresas del pa&iacute;s.<br />\r\nA su vez, las tres vicepresidencias tambi&eacute;n quedaron para el interior: Tierra del Fuego, Santa Fe y Jujuy, y as&iacute;, por primera vez, la entidad consolida su perfil federal.<br />\r\n<strong>Por la competitividad</strong></p>\r\n\r\n<p>El nuevo presidente es un ferviente luchador ante la falta de competitividad frente a los pa&iacute;ses vecinos. Con el foco puesto en el federalismo, asegur&oacute; que buscar&aacute; fortalecer el interior profundo: &quot;Queremos un pa&iacute;s federal&quot;, dijo.<br />\r\nA su turno, el Secretario General reelecto, Jos&eacute; Bereciart&uacute;a, destac&oacute; la transici&oacute;n del presidente saliente, Fabi&aacute;n Tarr&iacute;o, por la apertura al di&aacute;logo y la mayor participaci&oacute;n que marc&oacute; en la entidad y resalt&oacute; como momento hist&oacute;rico que los titulares de los sectores sean elegidos por primera vez por el Consejo.<br />\r\nTarr&iacute;o, declin&oacute; la postulaci&oacute;n de su reelecci&oacute;n, pero por pedido de los consejeros, votaron su continuidad al frente del sector Comercio.<br />\r\n<strong>Consejo Directivo</strong></p>\r\n\r\n<p>La conducci&oacute;n de CAME fue elegida por el Consejo Directivo por voto electr&oacute;nico y secreto, fortaleciendo el car&aacute;cter democr&aacute;tico institucional.</p>\r\n\r\n<p>Las m&aacute;ximas autoridades sectoriales electas fueron:<br />\r\nVicepresidente 1&deg; Diego Navarro - C&aacute;mara de Comercio, Industria y Producci&oacute;n de R&iacute;o Grande (CCIPRG)<br />\r\nVicepresidente 2&deg; Ricardo Diab - Asociaci&oacute;n Empresaria de Rosario (AER)<br />\r\nVicepresidente 3&deg; Ignacio Sadir - Uni&oacute;n Empresaria de Jujuy (UEJ)<br />\r\nSecretario General: Jos&eacute; Alberto Bereciart&uacute;a - C&aacute;mara Empresaria de Vicente L&oacute;pez (CEVL)<br />\r\nSecretario de Organizaci&oacute;n: Alberto Kahale - Federaci&oacute;n Econ&oacute;mica de la Provincia de Buenos Aires (FEBA)<br />\r\nSecretario de Hacienda: Jos&eacute; Vald&eacute;s - Federaci&oacute;n de Entidades de Informes Comerciales de la Rep&uacute;blica Argentina (FEEICRA)<br />\r\nProsecretario de Hacienda: Carlos Venier - Uni&oacute;n Industrial de Quilmes (UIQ)<br />\r\nSecretario Gremial: Alfredo Gonz&aacute;lez - Federaci&oacute;n Econ&oacute;mica del Chaco (FECHACO)<br />\r\nSecretario del Interior: Roberto Torres - Uni&oacute;n Industrial de La Pampa (UNILPA)<br />\r\nSecretario de Prensa: Pedro Cascales - C&aacute;mara Argentina de la M&aacute;quina Herramienta (CARMAHE)<br />\r\nSecretario de Capacitaci&oacute;n: Mart&iacute;n Trubycz - C&aacute;mara Inmobiliaria Argentina (CIA)<br />\r\nSecretario de Relaciones Institucionales: Fabi&aacute;n Castillo - Federaci&oacute;n de Comercio e Industria de la Ciudad de Buenos Aires (FECOBA)<br />\r\nSecretario de Relaciones Internacionales: Guillermo Cabrera - Federaci&oacute;n Econ&oacute;mica de San Juan (FESJ)<br />\r\nSecretario de Turismo: Gregorio Werchow - Federaci&oacute;n Econ&oacute;mica de Tucum&aacute;n (FET)<br />\r\n<em><strong>Secretario de Servicios: Rub&eacute;n Martos - Federaci&oacute;n Comercial de la Provincia de C&oacute;rdoba (FEDECOM)</strong></em><br />\r\nVicepresidente del sector Turismo: Fabricio Di Giambattista - Federaci&oacute;n Argentina de Asociaciones de Empresas de Viajes y Turismo (FAEVYT)<br />\r\nVicepresidente del sector Industrial: Edgardo G&aacute;mbaro - Uni&oacute;n Industrial del Oeste (UIO)<br />\r\nVicepresidente del sector de Econom&iacute;as Regionales: Eduardo Rodr&iacute;guez - C&aacute;mara Regional de la Producci&oacute;n y la Agroindustria<br />\r\nVicepresidente del sector Comercial: Fabi&aacute;n Tarr&iacute;o - Federaci&oacute;n de Centros Comerciales a Cielo Abierto, Cascos Urbanos y Centros Hist&oacute;ricos (FCCA).&nbsp;</p>\r\n', '5b71a8299d', '', '', '2018-04-27'),
(22, '3ade5a70f1', 'DESMENTIMOS Dichos vertidos por La Voz de San Justo', '<p><strong>DESMENTIMOS.</strong></p>\r\n\r\n<p>Ante la propuesta elevada al Intendente Garc&iacute;a Aresca de eliminar el cobro por estacionamiento los d&iacute;as s&aacute;bados, el d&iacute;a lunes 30 de Abril del 2018, el diario &ldquo;LA VOZ DE SAN JUSTO&rdquo; publica una nota con el t&iacute;tulo &quot;<em>Municipio desestim&oacute; eliminar el estacionamiento medido los s&aacute;bados</em>&quot;.</p>\r\n\r\n<p>La misma incluye un p&aacute;rrafo que se titula &ldquo;<em>Acompa&ntilde;a pero no acuerda</em>&rdquo;, donde se afirma que el&nbsp;<strong>Centro Empresarial y de Servicios</strong>&nbsp;funciona como canal de comunicaci&oacute;n pero no estar&iacute;a de acuerdo con dicho reclamo. Por medio de la presente, queremos desmentir la afirmaci&oacute;n de LA&nbsp;VOZ DE SAN JUSTO, dejando en claro que nuestra instituci&oacute;n,&nbsp;<u><strong>ACOMPA&Ntilde;A</strong></u>,&nbsp;<u><strong>APOYA y EST&Aacute; TOTALMENTE DE ACUERDO CON EL RECLAMO.</strong></u></p>\r\n\r\n<p><strong>Invitamos a leer el texto de la nota elevada:&nbsp;<a href=\"http://ces-sanfco.com.ar/novedad/pedido-de-eliminacion-del-cobro-de-estacionamiento-los-dias-sabados\">click aqu&iacute;.-&nbsp;</a></strong></p>\r\n', '5b71a8299d', '', '', '2018-05-02'),
(23, '9888ee8f0a', 'Banco Nación. Línea 600 \"Creditos para MicroEmpresas\"', '<p>Desde el Banco Naci&oacute;n, sucursal San Francisco, nos hacen llegar la propuesta de<strong>Linea 600 &quot;Cr&eacute;ditos para Microempresas&quot;.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Con este Programa Naci&oacute;n Emprende simplifican requisitos y tr&aacute;mites para que los Emprendedores y las Microempresas puedan acceder a su cr&eacute;dito.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>El Banco busca incluir a sectores no asistidos por el sistema financiero tradicional, apoyar al Emprendedorismo y generar el crecimiento de las Microempresas.</p>\r\n\r\n<p><strong>CR&Eacute;DITOS para EMPRENDEDORES:&nbsp;<a href=\"https://drive.google.com/open?id=173PjVK7ca2ZdKVTmOyGVP_l8-zs9ls7X\">CLICK AQU&Iacute;.</a></strong></p>\r\n\r\n<p><strong>CR&Eacute;DITOS para MICROEMPRENDIMIENTOS:&nbsp;<a href=\"https://drive.google.com/open?id=1LI53b2yHp2Nx-EUA2LbMJl_J--9P5QE1\">CLICK AQU&Iacute;.-</a></strong></p>\r\n\r\n<p><strong>CR&Eacute;DITOS para MICROEMPRESAS:&nbsp;<a href=\"https://drive.google.com/open?id=1YZZaWK3xm_p56AHbZgu4Ha27Gv3raHYV\">CLICK AQU&Iacute;.-</a></strong></p>\r\n\r\n<p><strong>PROPUESTA para COMERCIOS:&nbsp;<a href=\"https://drive.google.com/open?id=1x4el4_QI5VgGcRx5lWzpQBPhLrXp4iBl\">CLICK AQU&Iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-05-14'),
(24, '57ab644664', 'Federación Comercial y el Centro Empresarial rechazan el Paro Nacional de 25 de junio próximo.', '<p><strong>La Federaci&oacute;n Comercial de la Provincia de C&oacute;rdoba y el Centro Empresarial de San Francisco rechazan el paro del pr&oacute;ximo lunes.</strong><br />\r\nLa Comisi&oacute;n Directiva de la<strong>&nbsp;Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom)</strong>&nbsp;y del&nbsp;<strong>Centro Empresarial y de Servicios</strong>&nbsp;manifiestan su preocupaci&oacute;n y rotundo rechazo al paro nacional convocado para el pr&oacute;ximo lunes 25 de junio por la&nbsp;<strong>Confederaci&oacute;n General del Trabajo (CGT).</strong></p>\r\n\r\n<p>Siempre respetuosos del derecho constitucional de manifestarse, ambas entidades entienden el reclamo pero consideran que el cese de actividades no es el camino que lleve al encuentro de las soluciones que el pa&iacute;s necesita.</p>\r\n\r\n<p>Por el contrario, interpretamos que el momento actual requiere de di&aacute;logo y consensos para que todos los involucrados en el comercio y los servicios, la industria, el turismo y las econom&iacute;as regionales, hallen la forma de aportar ideas y proyectos para que una Argentina que brinde opciones de progreso para todos sea posible.</p>\r\n\r\n<p>Desde la&nbsp;<strong>FEDECOM</strong>&nbsp;y el&nbsp;<strong>CES</strong>&nbsp;buscamos mejorar las condiciones de empleo, la inversi&oacute;n y la productividad, y un paro general provoca lo contrario. Necesitamos bajar el costo argentino para recuperar mercados y as&iacute; crear mayores fuentes de trabajo.&nbsp;</p>\r\n\r\n<p><em><strong>Federaci&oacute;n Comercial de la Provincia de C&oacute;rdoba.</strong></em></p>\r\n\r\n<p><em><strong>Centro Empresarial y de Servicios de San Francisco.</strong></em></p>\r\n', '5b71a8299d', '', '', '2018-06-21'),
(25, 'aaba665a09', 'CAME le solicitó al BCRA que interceda para que los bancos no cobren comisiones por depósitos a las Pymes', '<p>Oportunamente nuestra instituci&oacute;n elev&oacute; una nota a la&nbsp;<strong>Federaci&oacute;n Comercial de la Provincia de C&oacute;rdoba, (FEDECOM)</strong>&nbsp;similar a la remitida por todos los centros comerciales de la provincia de C&oacute;rdoba solicitando la gesti&oacute;n ante la&nbsp;<strong>CAME, (Confederaci&oacute;n Argentina de la Mediana Empresa</strong>) para que interceda ante los bancos para que no cobren comisiones por dep&oacute;sitos a las PyMES.</p>\r\n\r\n<p><strong>Adjuntamos la nota remitida a dicha entidad:&nbsp;<a href=\"http://km2.bariloche.cc/lt.php?c=17340&amp;m=10395&amp;nl=944&amp;s=12607f3abb2e2bd406eebd6740a326a5&amp;lid=83462&amp;l=-https--redca.me/2L6rAft\">click aqu&iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-07-19'),
(26, '11e53180ea', 'CAME - Propuestas al ministro Dante Sica para paliar los problemas de financiamiento de las Pymes', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) enviamos una misiva al ministro de Producci&oacute;n de la Naci&oacute;n, Dante Sica, para acercarle un conjunto de propuestas dise&ntilde;adas desde las necesidades y la visi&oacute;n de las Pymes que buscan resolver los serios problemas de financiamiento con los que actualmente lidia el sector.</p>\r\n\r\n<p>Las tasas de financiamiento de las peque&ntilde;as y medianas empresas crecieron sustancialmente en los &uacute;ltimos meses, alcanzando niveles incompatibles con la rentabilidad actual que est&aacute;n obteniendo sus proyectos. Adem&aacute;s, se suma que hay pocos cr&eacute;ditos accesibles en el mercado para financiar capital de trabajo, compras de maquinarias, insumos o nuevas inversiones que mejoren la competitividad de la empresa, la exportaci&oacute;n y el aprovechamiento de las nuevas condiciones que presenta el mercado.</p>\r\n\r\n<p>Por otra parte, la adversa coyuntura actual hace que las Pymes se encuentren con altos niveles de endeudamiento. Sus pasivos financieros ascienden a $490 mil millones, seg&uacute;n datos del Banco Central, teniendo en cuenta todo tipo de cr&eacute;ditos, con tasas que promedian el 50%-60% anual. Adem&aacute;s, se trata de dinero que no ingresa al sistema<br />\r\nproductivo, sino que es drenado en el canal especulativo.</p>\r\n\r\n<p>Las dificultades para pagar en tiempo y forma esas deudas generan una espiral creciente de pasivos que est&aacute;n asfixiando financieramente a la empresa y deteriorando las cadenas de pagos.</p>\r\n\r\n<p>Es por ello que creemos fundamental que se consideren estas propuestas como paliativos de la situaci&oacute;n planteada, buscando garantizar as&iacute; la supervivencia de las m&aacute;s de 800 mil Pymes nacionales, y proteger con ello la creaci&oacute;n de empresas, su consecuente generaci&oacute;n de empleo y el ingreso familiar.</p>\r\n\r\n<p><strong>Para acceder a la carta enviada,&nbsp;<a href=\"http://www.redcame.org.ar/archivos/CP%20Dante%20Sica.pdf\">haga clic aqu&iacute;.</a></strong></p>\r\n\r\n<p><em>Ciudad Aut&oacute;noma de Buenos Aires, 9 de agosto de 2018</em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '4414cd68f7', '', '', '2018-08-09'),
(27, 'c6b5d8b048', 'CONTRA LOS ALTOS ARANCELES DE SADAIC CAME SOLICITA LA EXTENSIÓN DE LA MEDIDA AL SECTOR COMERCIAL', '<p>En virtud de la medida tomada por la<strong>Secretar&iacute;a de Comercio de la Naci&oacute;n</strong>&nbsp;de multar a la&nbsp;<em><strong>Sociedad Argentina de Autores y Compositores de M&uacute;sica (SADAIC)</strong></em>&nbsp;por los excesivos aranceles de derechos de autor que cobran a los hoteles, desde la&nbsp;<strong>Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)</strong>&nbsp;se remiti&oacute; una misiva al<strong>&nbsp;</strong><em><strong>Secretario de Comercio de la Naci&oacute;n</strong>, Miguel Braun</em>, para solicitarle que extienda esta pol&iacute;tica a todas las actividades comerciales.</p>\r\n\r\n<p>Entendiendo que esta iniciativa reviste una gran importancia para la recuperaci&oacute;n de la rentabilidad, el impulso de la competitividad y la mejora de las condiciones de las Pymes tur&iacute;sticas, consideramos fundamental generalizar esta medida que beneficiar&iacute;a de manera directa al sector comercial, una de las principales arterias de la econom&iacute;a nacional.</p>\r\n\r\n<p><strong>Para acceder a la carta enviada, haga&nbsp;<a href=\"https://redca.me/2uv3PU7\">click aqu&iacute;.-</a>&nbsp;</strong></p>\r\n\r\n<p><em>CAME, Buenos Aires.</em></p>\r\n', '4414cd68f7', '', '', '2018-08-13'),
(28, 'bd24931a1c', 'CAME - Cambios en la categorización de las Pymes', '<p><strong>La Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)&nbsp;</strong>informa respecto a las modificaciones en la categorizaci&oacute;n de las Pymes que llev&oacute; adelante la Secretar&iacute;a de Emprendedores y de la Peque&ntilde;a y Mediana Empresa, a trav&eacute;s de la publicaci&oacute;n de la&nbsp;<a href=\"http://km2.bariloche.cc/lt.php?c=17537&amp;m=10510&amp;nl=944&amp;s=12607f3abb2e2bd406eebd6740a326a5&amp;lid=84071&amp;l=-https--www.boletinoficial.gob.ar/--PND-%21DetalleNorma/189733/20180813\">Resoluci&oacute;n 519/2018.</a></p>\r\n\r\n<p>Estos cambios se deben a que la categorizaci&oacute;n de las peque&ntilde;as y medianas empresas se ajust&oacute; por inflaci&oacute;n. Esta nueva reglamentaci&oacute;n reestablece los l&iacute;mites de facturaci&oacute;n anual contemplando las especificidades propias de los distintos sectores, generando de esta forma las &uacute;nicas categor&iacute;as v&aacute;lidas para ser considerado Pyme seg&uacute;n actividad.&nbsp;</p>\r\n\r\n<p>Adem&aacute;s de la facturaci&oacute;n promedio de los &uacute;ltimos tres ejercicios, tambi&eacute;n se deber&aacute; considerar al personal ocupado que surja del promedio anual de los &uacute;ltimos tres a&ntilde;os para ser considerado Pyme. Los l&iacute;mites no han sufrido cambios respecto a la resoluci&oacute;n previa.</p>\r\n\r\n<p>Las empresas que se ubiquen dentro de estos nuevos par&aacute;metros, estar&aacute;n en condiciones de acceder a los beneficios que brinda la Ley Pyme como medidas de alivio en materia administrativa y fiscal, est&iacute;mulos financieros y acceso a mejores cr&eacute;ditos y fomento de inversiones.</p>\r\n\r\n<p><strong>Para inscribirse en el Registro Pyme,&nbsp;<a href=\"http://km2.bariloche.cc/lt.php?c=17537&amp;m=10510&amp;nl=944&amp;s=12607f3abb2e2bd406eebd6740a326a5&amp;lid=84072&amp;l=-https--bit.ly/2sw6ACJ\">haga clic aqu&iacute;.</a></strong></p>\r\n\r\n<p><strong>Para acceder a la Resoluci&oacute;n 519/2018,&nbsp;<a href=\"http://km2.bariloche.cc/lt.php?c=17537&amp;m=10510&amp;nl=944&amp;s=12607f3abb2e2bd406eebd6740a326a5&amp;lid=84071&amp;l=-https--www.boletinoficial.gob.ar/--PND-%21DetalleNorma/189733/20180813\">haga clic aqu&iacute;.</a></strong></p>\r\n', '5b71a8299d', '', '', '2018-08-14'),
(29, '8783ac04d9', 'CAME - Premio Exportar 2018. Una oportunidad para premiar a tu Pyme', '<p>Desde la Secretar&iacute;a de Comercio Exterior de la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) y CAME Joven, la rama juvenil de la entidad, informamos que se realizar&aacute; el &ldquo;Premio Exportar 2018&rdquo; que lleva adelante la Agencia Argentina de Inversiones y Comercio Internacional (AAICI).</p>\r\n\r\n<p>Los interesados en participar deben inscribirse antes del 31 de agosto, ingresando con su CUIT y la clave en el sitio de AAICI y completar el formulario. El premio consiste en US$ 5000 para invertir en acciones de promoci&oacute;n con asesoramiento de la Agencia Argentina de Inversiones y Comercio Internacional.</p>\r\n\r\n<p>El jurado que evaluar&aacute; a las Pymes que se presenten est&aacute; compuesto por el secretario de Comercio del Ministerio de Producci&oacute;n, Miguel Braun, el secretario de Relaciones Econ&oacute;micas Internacionales del Ministerio de Relaciones Exteriores y Culto, Horacio Reyser, el presidente de la C&aacute;mara Argentina de Comercio y Servicios, Jorge Di Fiori y el secretario de Alimentos y Bioeconom&iacute;a del Ministerio de Agroindustria, Andr&eacute;s Murchison.</p>\r\n\r\n<p>Resulta ser una importante e interesante propuesta para que todos aquellos que quieran participar puedan obtener un gran beneficio para impulsar a su Pyme dentro del mercado.</p>\r\n\r\n<p><strong>Para obtener m&aacute;s informaci&oacute;n,&nbsp;<a href=\"http://www.inversionycomercio.org.ar/premio\">haga clic aqu&iacute;.&nbsp;</a></strong></p>\r\n', '5b71a8299d', '', '', '2018-08-17'),
(30, 'dc32b477a8', '17 de Agosto - Paso a la Inmortalidad del Gral. Don José de San Martín', '<p><strong>MARIANO&hellip; A MI CUARTO&hellip;</strong></p>\r\n\r\n<p>Hasta en sus &uacute;ltimos momentos el General fue un hombre &iacute;ntegro. Sab&iacute;a que la tempestad llegaba al puerto. Asistido por su yerno y su hija, el hombre que libert&oacute; a la Am&eacute;rica del Sur, se recost&oacute; por &uacute;ltima vez para descansar eternamente. Atr&aacute;s quedaban a&ntilde;os de luchas en tres continentes, dejaba el legado de su coherencia, sus desvelos y afanes, pero sobre todo su ejemplo y virtudes.</p>\r\n\r\n<p>Mariano Balcarce narr&oacute; ese momento con suma emoci&oacute;n:<br />\r\nAl privarnos la Divina Providencia de un padre tierno y virtuoso, parece que hubiese querido suavizar nuestro dolor, haciendo que sus &uacute;ltimos momentos fuesen sin sufrimiento alguno visible, y con la serenidad que inspira una conciencia sin tacha.</p>\r\n\r\n<p>A las 3 de la tarde del s&aacute;bado 17 de agosto de 1850, en Boulogne Sur Mer, lejos de su adorada patria, Don Jos&eacute; Francisco de San Mart&iacute;n y Matorras pasaba a la inmortalidad de la misma forma en que vivi&oacute;, sencillo y austero.</p>\r\n\r\n<p><em><strong>ROBERTO COLIMODIO</strong></em></p>\r\n', '5b71a8299d', '', '', '2018-08-17'),
(31, '227ed8da74', 'BCRA - Nuevas operaciones a desarrollarse por transferencias electrónicas bancarias', '<p>La<strong>&nbsp;Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)</strong>&nbsp;informa que el&nbsp;<strong>Banco Central de la Rep&uacute;blica Argentina (BCRA)</strong>&nbsp;p&uacute;blico la<a href=\"http://nop.com.ar/novedades/img/comunicaciones/A6551.pdf\">&nbsp;Comunicaci&oacute;n A-6551</a>&nbsp;por la cual a partir del 1ero de Octubre del corriente a&ntilde;o los conceptos detallados a continuaci&oacute;n deber&aacute;n realizarse a trav&eacute;s de transferencia bancarias electr&oacute;nicas, con el objetivo de identificar en forma precisa el origen de los fondos de transferencias financieras, a fin de facilitar el cumplimiento de las tareas que les corresponden como agentes de retenci&oacute;n impositiva.</p>\r\n\r\n<p><u><strong>Los conceptos que se incorporan son:</strong></u></p>\r\n\r\n<p><strong>1. Operaciones por venta de inmuebles cuando el vendedor no es habitualista.</strong></p>\r\n\r\n<p><strong>2. Operaciones inmobiliarias cuando el vendedor es habitualista.</strong></p>\r\n\r\n<p><strong>3. Operaciones de venta de bienes muebles registrables cuando el vendedor es habitualista.</strong></p>\r\n\r\n<p><strong>4. Operaciones de venta de bienes muebles registrables cuando el vendedor (persona&nbsp;</strong><strong>humana) no es habitualista.</strong></p>\r\n\r\n<p><strong>5. Suscripciones de obligaciones negociables a cuentas de personas jur&iacute;dicas.</strong></p>\r\n\r\n<p><strong>6. Aportes de capital a cuentas de personas jur&iacute;dicas.</strong></p>\r\n\r\n<p><strong>7. Reintegro de obras sociales y empresas de medicina prepaga.</strong></p>\r\n\r\n<p><strong>8. Pago de siniestros ordenadas por las compa&ntilde;&iacute;as de seguros.</strong></p>\r\n\r\n<p><strong>9. Pagos del Estado por indemnizaciones originadas por expropiaciones y otras operaciones no alcanzadas por el impuesto.&nbsp;</strong></p>\r\n', '4414cd68f7', '', '', '2018-08-21'),
(32, 'e90c79e626', 'Invitación a Expo Eficiencia Energética.', '<p>Transmitimos invitaci&oacute;n recibida:</p>\r\n\r\n<p><strong>29, 30 Y 31 DE AGOSTO DE 2018 de 13 a 20 hs.</strong></p>\r\n\r\n<p><u><strong>ACREDITACIONES:&nbsp;</strong></u>A partir de las 12.30 hs.<br />\r\n<u><strong>CONFERENCIAS:</strong></u>&nbsp;Visite el programa&nbsp;<a href=\"http://www.expoeficiencia-energetica.com/\"><strong>haciendo click aqu&iacute;.-</strong></a></p>\r\n\r\n<p>Descargue la APP m&oacute;vil de EXPO EFICIENCIA ENERG&Eacute;TICA:<a href=\"http://expoeficiencia-energetica.com/app_efen.html\"><strong>&nbsp;click aqu&iacute;.-</strong></a></p>\r\n\r\n<p>Para su comodidad ACREDITESE EN<a href=\"http://www.expoeficiencia-energetica.com/\">&nbsp;http://www.expoeficiencia-energetica.com</a><br />\r\ny tendr&aacute; una atenci&oacute;n expedita a su llegada a la Feria.</p>\r\n', '5b71a8299d', '', '', '2018-08-21'),
(33, 'aa303c610e', 'UTN - Invitación a Cátedra Abierta PyME.', '<p>La Secretar&iacute;a de&nbsp;<strong>Extensi&oacute;n Universitaria y Cultura</strong>&nbsp;invitan a participar de la<strong>&nbsp;5ta &quot;C&Aacute;TEDRA ABIERTA PYME&quot;.</strong><br />\r\nLink del formulario de inscripci&oacute;n:&nbsp;<a href=\"http://bit.ly/catedraabiertasanfrancisco\"><strong>CLICK AQU&Iacute;.-</strong></a></p>\r\n', '5b71a8299d', '', '', '2018-08-21'),
(34, '20c6dd1266', 'El Gobierno ajustó los reintegros a las exportaciones con excepciones para las Pymes', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) informamos que el Gobierno Nacional, a trav&eacute;s del Decreto 767/2018 publicado hoy en el Bolet&iacute;n Oficial, sustituy&oacute; los niveles del Reintegro a la Exportaci&oacute;n (R.E).</p>\r\n\r\n<p>Entre los considerandos enunciados en la norma, se menciona que &ldquo;debido al contexto internacional y la necesidad de fortalecer la situaci&oacute;n fiscal, se considera necesario efectuar un proceso de revisi&oacute;n y reestructuraci&oacute;n integral sobre el r&eacute;gimen de Reintegros a la Exportaci&oacute;n (R.E.).&quot;</p>\r\n\r\n<p>El decreto est&aacute; acompa&ntilde;ado de tres anexos en los que se incluyen listados de productos alcanzados por la medida, en base a su posici&oacute;n arancelaria en la Nomenclatura Com&uacute;n del Mercosur, y los reintegros asignados.</p>\r\n\r\n<p>En el caso de la carne bovina, los reintegros, que estaban en un nivel de hasta el 4 %, bajaron a un rango de 0,5 y 1,25 %, seg&uacute;n la modalidad de env&iacute;o. Para la harina de trigo, que ten&iacute;a un 3 % de reintegro, con el decreto se baj&oacute; a un 0,75 %. Entre otros productos de econom&iacute;as regionales, el aceite de man&iacute;, cuyo reintegro hab&iacute;a subido a 2,5 % ahora se recort&oacute; al 0,5 %. Adem&aacute;s, el arroz cay&oacute; de un nivel de 2 y 3% a 0,25 y 0,75 %.</p>\r\n\r\n<p>Cabe resaltar que no fueron modificados los reintegros de varios productos que involucran principalmente al universo industrial Pyme, entre ellos, prendas, textiles, calzados, heladeras y freezers que seguir&aacute;n manteniendo los niveles que hasta ahora ten&iacute;an.</p>\r\n\r\n<p>Es importante destacar que el decreto establece un tratamiento impositivo especial para el fortalecimiento de las micro, peque&ntilde;as y medianas empresas por su funci&oacute;n generadora de empleo con el objeto de generar un impacto positivo que facilite el financiamiento de sus operaciones y de su capital de trabajo. De esta forma, los sujetos que encuadren en la categor&iacute;a Pyme y que se encuentren inscriptas en el &ldquo;Registro de Empresas MiPymes&rdquo; tendr&aacute;n prioridad para la tramitaci&oacute;n y percepci&oacute;n de las compensaciones, acreditaciones, devoluciones o reintegros de impuestos o de saldos a favor de naturaleza tributaria.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '4414cd68f7', '', '', '2018-08-24'),
(35, 'f889b4da3c', 'El CES trasladó inquietudes del sector al Director Nacional de Modernización Productiva del Ministerio de Producción de la Nación', '<p>Con motivo de la visita que efectuara a la ciudad de San Francisco el&nbsp;<em>Lic. Guillermo Constancio Acosta</em>,&nbsp;<strong>Director Nacional de Modernizaci&oacute;n Productiva del Ministerio de la Producci&oacute;n de la Naci&oacute;n</strong>&nbsp;nuestra instituci&oacute;n junto con otras representativas de diversos sectores productivos de la ciudad participaron de una reuni&oacute;n conjunta en la Municipalidad local donde se le traslad&oacute; al funcionario diversas inquietudes del sector:</p>\r\n\r\n<p><strong>1. Excesiva presi&oacute;n Fiscal. Imposibilidad en muchos casos del cumplimiento de acreencias impositivas.</strong></p>\r\n\r\n<p><strong>2. Financiaci&oacute;n cara para las PyMES en su conjunto.</strong></p>\r\n\r\n<p><strong>3. Necesidad de igualar y equiparar los servicios (Gas, energ&iacute;a el&eacute;ctrica, etc.) con respecto a Buenos Aires.</strong></p>\r\n\r\n<p><strong>4. Necesidad de una mayor flexibilizaci&oacute;n del Banco Naci&oacute;n. Mayor ayuda financiera a tasas accesibles, (m&aacute;s cr&eacute;ditos &ldquo;blandos&rdquo; para las PyMES).</strong></p>\r\n', '4414cd68f7', '', '', '2018-08-26'),
(36, '807d6f1024', 'AFIP presentó en CAME nueva plataforma de planes de pago para pymes', '<p>&ldquo;Tenemos que pagar anticipo de Ganancias de lo que no tenemos&rdquo;, expres&oacute; el presidente de CAME, Gerardo D&iacute;az Beltr&aacute;n, ante el titular de la AFIP, Leandro Cuccioli, quien mantuvo un encuentro con el Comit&eacute; de Presidencia en la sede de la entidad empresaria. All&iacute;, expuso los avances tecnol&oacute;gicos para la facilitaci&oacute;n de tr&aacute;mites y destac&oacute; la factura conformada como alternativa para financiarse. Por su parte, los dirigentes Pymes manifestaron preocupaci&oacute;n por los embargos m&uacute;ltiples: &ldquo;Muchos tenemos saldos a favor pero igual terminamos embargados&rdquo;, reclamaron. Adem&aacute;s, solicitaron la eliminaci&oacute;n del anticipo del Impuesto a las Ganancias y hubo pedidos desde el sector tur&iacute;stico para que las empresas extranjeras que venden paquetes tambi&eacute;n paguen impuestos, entre otros temas.</p>\r\n\r\n<p>Representantes Pymes de todo el pa&iacute;s que conforman el Comit&eacute; de Presidencia de CAME, dialogaron con el titular de AFIP y su equipo t&eacute;cnico sobre las nuevas herramientas desarrolladas en los &uacute;ltimos 3 meses, en referencia a &ldquo;Facilidades de la AFIP para Pymes&rdquo;. Entre ellas sobresalen los tr&aacute;mites &aacute;giles para levantamientos de embargos y con la posibilidad de cancelar la deuda con fondos embargados, nuevos planes de pagos con m&aacute;s cuotas para las Pymes con un sistema de calificaci&oacute;n de riesgo que permite premiar a los buenos contribuyentes, planes especiales para situaciones de emergencia por regiones o sectores, el nuevo plan puente (que ofrece m&aacute;s cuotas para cancelar el stock de deuda acumulado), pago acelerado de reintegros y devoluciones que prioriza a las pymes y la financiaci&oacute;n de intereses punitorios.</p>\r\n\r\n<p>El presidente de CAME, Gerardo D&iacute;az Beltr&aacute;n, destac&oacute; el di&aacute;logo: &ldquo;Nos visitan en la casa de los contribuyentes, para nosotros es importante interactuar&rdquo;. Por su parte, Diego Navarro, titular de la C&aacute;mara de Comercio de R&iacute;o Grande (Tierra del Fuego) a&ntilde;adi&oacute;: &ldquo;Deber&iacute;an vernos a los contribuyentes como clientes. No es momento para picard&iacute;as, deber&iacute;a haber un tope para los honorarios de abogados de la AFIP. Hay abusos&quot;.</p>\r\n\r\n<p>En un clima de un franco di&aacute;logo, los empresarios pudieron expresarse abiertamente con el equipo de AFIP y exhibieron problemas concretos: &ldquo;El que est&aacute; endeudado no puede pagar 10 % de anticipo para ingresar al plan de facilidades&rdquo;, expuso Guillermo Cabrera de San Juan.</p>\r\n\r\n<p>&ldquo;Vendemos al 10,5 % pero pagamos 21 % de IVA, entonces autom&aacute;ticamente acumulamos cr&eacute;dito fiscal y esto nos resta competitividad&rdquo;, indic&oacute; Pedro Cascales, secretario de Industria de CAME refiri&eacute;ndose a los sectores de bienes de capitales y sugiri&oacute; que las Contribuciones Patronales puedan ser tomadas a cuenta del IVA para emprendimientos de menos de 10 empleados. &ldquo;Podr&iacute;an formalizarse as&iacute; 1 mill&oacute;n de trabajadores&rdquo;, dijo.</p>\r\n\r\n<p>Por su parte, Gregorio Werchow, secretario de Turismo de CAME, pidi&oacute; que las agencias extranjeras que venden paquetes tributen tambi&eacute;n en nuestro pa&iacute;s.</p>\r\n\r\n<p><strong>Para acceder al detalle de las facilidades de AFIP para las Pymes,&nbsp;<a href=\"http://www.redcame.org.ar/contenidos/noticia/Facilidades-de-la-AFIP-para-las-Pymes.1821.html\">haga CLICK AQU&Iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-09-06'),
(37, '8fba6760fb', 'El Día del Empleado de Comercio se trasladó al 24 de septiembre', '<p>La Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom) informa que la Federaci&oacute;n Argentina de Empleados de Comercio y Servicios (Faecys) resolvi&oacute;, en acuerdo con las C&aacute;maras Empresarias del sector, trasladar del mi&eacute;rcoles 26 de septiembre, fecha en que se celebra el D&iacute;a del Empleado de Comercio, al d&iacute;a lunes 24 de septiembre.</p>\r\n\r\n<p>Conforme a lo que establece la Ley 26.541, que asimila dicha conmemoraci&oacute;n a los feriados nacionales, vale recordar que este festejo en nada afecta la apertura de los comercios cuando &eacute;stos sean atendidos por sus due&ntilde;os o con empleados que acepten trabajar ese d&iacute;a.</p>\r\n\r\n<p>Para ello se aclara que &quot;estos d&iacute;as no exigen el otorgamiento de un descanso compensatorio cuando se trabaja, sino el pago de un recargo equivalente a 100%&quot;.</p>\r\n\r\n<p>Asimismo, los empleados mercantiles tienen la opci&oacute;n de prestar o no servicios laborales durante el lunes 24, con todos los efectos y alcances de la mencionada ley.</p>\r\n', '5b71a8299d', '', '', '2018-09-08');
INSERT INTO `novedades` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(38, '03c2708eb2', 'Implementación de factura de crédito electrónica MiPyme', '<p>La&nbsp;<strong>Confederaci&oacute;n Argentina de la Mediana Empresa (CAME),</strong>&nbsp;representada por el secretario de Hacienda, Jos&eacute; Luis Vald&eacute;s; el secretario de Prensa, Pedro Cascales, y el director de Financiamiento y Competitividad Pyme, Maximiliano Gabrielli, particip&oacute; de una reuni&oacute;n convocada por el Ministerio de Producci&oacute;n de la Naci&oacute;n y la Administraci&oacute;n Federal de Ingresos P&uacute;blicos (AFIP). La intenci&oacute;n de la misma fue conocer la opini&oacute;n de CAME respecto de la reglamentaci&oacute;n del Cap&iacute;tulo I de la Ley de Financiamiento Productivo (27.440), sancionada recientemente, que impulsa la negociaci&oacute;n de facturas a trav&eacute;s de mercados autorizados por la Comisi&oacute;n Nacional de Valores.</p>\r\n\r\n<p>Por parte del Ministerio de Producci&oacute;n de la Naci&oacute;n particip&oacute; Alfredo Marseillan, asesor en la implementaci&oacute;n de la Factura Electr&oacute;nica de Cr&eacute;dito MiPyme, y autoridades de AFIP, quienes informaron algunas modificaciones que sufri&oacute; la ley como la reducci&oacute;n de 30 a 15 d&iacute;as para la aceptaci&oacute;n o cancelaci&oacute;n de dicha factura. Tambi&eacute;n destacaron que este tipo de instrumentos podr&aacute; utilizarse entre Pymes y anunciaron que se incluir&aacute; al Estado Nacional y a empresas estatales como AYSA, Trenes Argentinos, YPF, etc., lo que hab&iacute;a sido oportunamente pedido por CAME en el Senado.</p>\r\n\r\n<p>Por su parte, los representantes de CAME realizaron varias consultas respecto de los plazos y condiciones en las que dichas facturas podr&aacute;n descontarse. Si bien las especificaciones se sabr&aacute;n una vez que se encuentre operativo este procedimiento, que se estima que ser&aacute; para enero de 2019, se advirti&oacute; que las condiciones y el procedimiento deben ser simples a fin de que las Pymes puedan utilizar este instrumento.</p>\r\n\r\n<p>Finalmente, tanto desde el Ministerio como AFIP solicitaron colaboraci&oacute;n a CAME en la difusi&oacute;n y el an&aacute;lisis de posibles problemas en la implementaci&oacute;n.</p>\r\n\r\n<p>Para acceder a la presentaci&oacute;n al respecto del Ministerio de Producci&oacute;n de la Naci&oacute;n, haga&nbsp;<a href=\"https://redca.me/2wBA6Ki\"><strong>clic aqu&iacute;.&nbsp;</strong></a></p>\r\n', '4414cd68f7', '', '', '2018-09-08'),
(39, 'aced3c5d8c', 'Las ventas minoristas cayeron 5,2% en agosto y acumulan el sexto mes de caída consecutiva', '<p>Las ventas minoristas de los comercios pymes de la provincia de C&oacute;rdoba finalizaron el mes de agosto con una ca&iacute;da del 5,2% frente a igual mes del a&ntilde;o anterior, de acuerdo con los datos relevados por la Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom). Vale recordar que en agosto del a&ntilde;o pasado, respecto a agosto de 2016 las ventas hab&iacute;an aumentado 0,9%.</p>\r\n\r\n<p>De este modo, con el dato de agosto, se acumula el sexto mes de ca&iacute;da consecutiva en las ventas minoristas; se recordar&aacute; que en julio la ca&iacute;da fue del 2,8%, en junio del 2,9%, en mayo del 1,7%, en abril del 1,1% interanual, y en marzo del 0,4%.</p>\r\n\r\n<p>Esta notable retracci&oacute;n de los vol&uacute;menes de venta, agrava la situaci&oacute;n del entramado comercial de la provincia, que con escasos m&aacute;rgenes de rentabilidad, debe afrontar las fuertes subas en los costos de la actividad y una inflaci&oacute;n que no cesa su marcha ascendente. Se recordar&aacute; que en C&oacute;rdoba, el &uacute;ltimo dato de la inflaci&oacute;n correspondiente a julio, medida por la Direcci&oacute;n de Estad&iacute;sticas y Censos de la Provincia, arroj&oacute; una tasa de 3,52% y una variaci&oacute;n interanual del 31,25%.</p>\r\n\r\n<p>&ldquo;La incertidumbre pol&iacute;tica, la fuerte devaluaci&oacute;n que se viene registrando, los aumentos de precios y de tarifas que provocan la ca&iacute;da del poder adquisitivo de los asalariados, alejan a los consumidores del mercado&rdquo;, explic&oacute; Ezequiel Cerezo, vicepresidente de Fedecom.</p>\r\n\r\n<p>Ya en el 2do. Encuentro Empresario Provincial que organiz&oacute; la entidad el jueves pasado en la ciudad de San Francisco y en la que se reunieron casi un centenar de dirigentes y empresarios del sector comercial, se advirti&oacute; sobre la situaci&oacute;n del sector.</p>\r\n\r\n<p>All&iacute; se alert&oacute; tambi&eacute;n sobre las altas tasas de inter&eacute;s: &quot;La operatoria en nuestros comercios se hace fundamentalmente a plazos, para hacernos de recursos para afrontar salarios y pago de impuestos. Hoy, con estas condiciones de tasas por encima del 60% se hace inviable. No es de sorprender que, de continuar con este panorama, en el corto plazo, se produzcan cierres y quebrantos&quot;, anticip&oacute; Cerezo.</p>\r\n\r\n<p>De los 17 rubros relevados por la entidad, solamente uno de ellos alcanz&oacute; valores positivos en la comparaci&oacute;n interanual: Farmacia (0,2%) y uno permaneci&oacute; sin cambios, Perfumer&iacute;a.<br />\r\nLos restantes quince exhibieron bajas. Entre ellas, vale destacar por su importancia en la canasta, las bajas de Alimentos y Bebidas (-0,7%), Electrodom&eacute;sticos (-0,7%) y Materiales para la construcci&oacute;n (-0,7%).</p>\r\n\r\n<p>Con todo ello, las expectativas de ventas de los dirigentes de c&aacute;maras y centros comerciales para este mes de septiembre mostraron un sensible deterioro debido al contexto de estancamiento econ&oacute;mico. As&iacute;, 25% consider&oacute; que las ventas aumentar&aacute;n, un 35% que se mantendr&aacute;n sin variaci&oacute;n y un 40% que disminuir&aacute;n. El dato a tener en cuenta es que, en el relevamiento del mes pasado, s&oacute;lo un 25% de los comerciantes consideraba que las ventas disminuir&iacute;an.</p>\r\n\r\n<p>&ldquo;Es preocupante la falta de certezas respecto a la evoluci&oacute;n del rumbo econ&oacute;mico a nivel nacional, lo que propicia niveles crecientes de incertidumbre y un marcado pesimismo para el futuro inmediato&rdquo;, reconoci&oacute; Cerezo.</p>\r\n\r\n<p>Finalmente y respecto a las modalidades de pago, el 50% de las operaciones se realizaron en efectivo, el 43% con medios electr&oacute;nicos y un 7% con cr&eacute;ditos propios de los establecimientos comerciales.&nbsp;</p>\r\n', '4414cd68f7', '', '', '2018-09-10'),
(40, '3687198270', 'CAME le planteó a Macri la necesidad de tasas diferenciales para las Pymes y la baja de ingresos brutos', '<p>El presidente de la Naci&oacute;n,&nbsp;<strong>Mauricio Macri</strong>, dialog&oacute; esta tarde con directivos de la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) sobre la situaci&oacute;n que atraviesan las Pymes. &ldquo;Tuvimos una charla muy franca, notamos que el presidente est&aacute; muy conectado con los temas que le planteamos, nos escuch&oacute; e interactuamos abiertamente&rdquo;, enfatiz&oacute; el titular de la entidad, Gerardo D&iacute;az Beltr&aacute;n, que junto al secretario general, Jos&eacute; Bereciart&uacute;a, le manifestaron la complejidad que enfrentan las peque&ntilde;as y medianas empresas con tasas al 60%. &ldquo;Se nos hace imposible subsistir&rdquo;, sostuvieron. En respuesta, Macri les adelant&oacute; a los dirigentes que trabajan en nuevos mecanismos de financiamiento, reconociendo la urgencia de lo planteado.</p>\r\n\r\n<p>Directivos de CAME junto a al presidente Mauricio Macri, el ministro Dante Sica y el secretario de Emprendedores y PyMES, Mariano Mayer.</p>\r\n\r\n<p>El otro punto clave del encuentro &ndash;que dur&oacute; casi una hora&ndash; fue la importancia de que los gobernadores se comprometan a bajar los Ingresos Brutos. &ldquo;Le solicitamos al presidente que no ceda ante la presi&oacute;n de los gobernadores en la negociaci&oacute;n por la Ley de Presupuesto 2019, porque necesitamos bajar la presi&oacute;n fiscal que nos est&aacute; asfixiando&rdquo;, al tiempo que le pidieron sostener el Pacto Fiscal 2017.</p>\r\n\r\n<p>Por &uacute;ltimo, enfatizando el esp&iacute;ritu federal de la nueva conducci&oacute;n de CAME, D&iacute;az Beltr&aacute;n y Bereciart&uacute;a expresaron la importancia de rescatar el objetivo del Decreto 814 &ndash;derogado en la ley de Reforma Tributaria&ndash; diferenciando la compensaci&oacute;n de los aportes patronales por zona, y la urgente necesidad de reglamentar los art&iacute;culos 10 y 11 de la Ley Pyme que establece beneficios para las provincias de frontera y las econom&iacute;as regionales. &ldquo;El tipo de cambio no puede ser la &uacute;nica herramienta para asegurarnos competitividad a los empresarios que invertimos en ciudades de frontera, necesitamos un r&eacute;gimen especial que nos d&eacute; previsibilidad en el tiempo&rdquo;, expres&oacute; D&iacute;az Beltr&aacute;n.</p>\r\n', '4414cd68f7', '', '', '2018-09-11'),
(41, '73ef45449e', 'CAME le envió una misiva a los gobernadores de las provincias para que se respete el plan de reducción de Ingresos Brutos contemplado en el Pacto Fiscal', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) se envi&oacute; una misiva a las 23 provincias adheridas al Pacto Fiscal solicitando el correcto cumplimiento del mismo y la baja de las al&iacute;cuotas de Ingresos Brutos. Estas medidas resultan fundamentales para aliviar al sector y dejar de asfixiar a las Pymes con mayores impuestos.</p>\r\n\r\n<p>La solicitud se realiza en base a la situaci&oacute;n de baja rentabilidad que atraviesan las peque&ntilde;as y medianas empresas de manera sostenida y en b&uacute;squeda del resguardo de su productividad.</p>\r\n', '5b71a8299d', '', '', '2018-09-12'),
(42, '13c7ac43e2', 'FEDECOM - La Importancia de Sostener el Consenso Nacional.', '<p>Hace poco menos de un a&ntilde;o, el Grupo de Entidades Empresarias de C&oacute;rdoba destacaba como un hecho sumamente auspicioso que Naci&oacute;n y provincias hubieran arribado a un Consenso Fiscal, lo que marcaba un rumbo claro y predecible de la pol&iacute;tica tributaria, dando &ldquo;un mensaje hacia todos los sectores sociales y econ&oacute;micos acerca de la responsabilidad que asumen los estados provinciales y nacional sobre disciplina fiscal y de reordenamiento en el uso de los recursos p&uacute;blicos, responsabilidad que deber&aacute; extenderse debidamente a los municipios&rdquo;.</p>\r\n\r\n<p>A menos de un a&ntilde;o del acuerdo, vemos con profunda preocupaci&oacute;n que se est&eacute; poniendo en duda el cumplimiento de dicho Consenso. Sostenemos que la reducci&oacute;n gradual de Ingresos Brutos establecida en ese Consenso es fundamental para el sector productivo. El estado actual de emergencia econ&oacute;mica, la inestabilidad de los factores como inflaci&oacute;n, tipo de cambio, tasas de financiamiento, entre otros, ya son golpes que ponen en jaque el aparato productivo.</p>\r\n\r\n<p>Suspender el cronograma de reducci&oacute;n de impuestos ser&aacute; un factor profundamente recesivo, que aumentar&aacute; la presi&oacute;n que ya tienen las empresas para sostener la producci&oacute;n, el comercio y los servicios y por lo tanto la marcha de la econom&iacute;a, especialmente por su impacto en la generaci&oacute;n del empleo.</p>\r\n\r\n<p>Entendemos que el escenario actual no es el que avizor&aacute;bamos hace un tiempo atr&aacute;s y que la coyuntura requiere profundizar los esfuerzos para atacar y resolver el d&eacute;ficit fiscal como principal problem&aacute;tica. Entendemos tambi&eacute;n que todos los sectores sociales y de la econom&iacute;a estamos llamados a hacer nuestros aportes para atravesar esta coyuntura. Pero el sector productivo, en especial las peque&ntilde;as y medianas empresas, se encuentran en una situaci&oacute;n muy endeble para superar este contexto con lo que una mayor presi&oacute;n tributaria agravar&aacute; a&uacute;n m&aacute;s la situaci&oacute;n.</p>\r\n\r\n<p>En ese sentido es que llamamos a sostener lo acordado en el Consenso Fiscal, tanto por el impacto que tiene en la econom&iacute;a como por el valor institucional de respetar los acuerdos asumidos.</p>\r\n\r\n<p><strong>Sobre el G6</strong></p>\r\n\r\n<p>El Grupo de Entidades Empresarias de C&oacute;rdoba (G6) est&aacute; integrado por la Bolsa de Comercio de C&oacute;rdoba, la C&aacute;mara de Comercio de C&oacute;rdoba, la C&aacute;mara de Comercio Exterior de C&oacute;rdoba, la C&aacute;mara Argentina de la Construcci&oacute;n &ndash; Delegaci&oacute;n C&oacute;rdoba, la Federaci&oacute;n Comercial de C&oacute;rdoba y la Uni&oacute;n Industrial de C&oacute;rdoba. Se propone generar un espacio de di&aacute;logo y debate franco de ideas y propuestas para contribuir al desarrollo institucional, econ&oacute;mico y social a nivel provincial, regional y nacional.</p>\r\n', '5b71a8299d', '', '', '2018-09-12'),
(43, 'bdb2c051b3', 'CAME participa de la conformación del Consejo Pyme en busca de mejorar condiciones del Sector', '<p>El secretario general de la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME), Jos&eacute; A. Bereciart&uacute;a, y el vicepresidente 2&deg; de la entidad, Ricardo Diab, participaron del lanzamiento del Consejo Pyme en la sede del Ministerio de Producci&oacute;n de la Naci&oacute;n. Este espacio, del cual CAME formar&aacute; parte de aqu&iacute; en m&aacute;s en sus reuniones mensuales, tiene por objetivo simplificar y facilitar el financiamiento a las peque&ntilde;as y medianas empresas, hacer el seguimiento de la evoluci&oacute;n en las cadenas de valor, as&iacute; como tambi&eacute;n del comercio exterior y su impacto en la producci&oacute;n y el empleo.</p>\r\n\r\n<p>Durante esta primera reuni&oacute;n, que cont&oacute; con la presencia del ministro de Producci&oacute;n de la Naci&oacute;n, Dante Sica, y el secretario de Emprendedores y Pymes de la Naci&oacute;n, Mariano Mayer, se trataron asuntos tendientes a la reformulaci&oacute;n de algunos puntos de la Ley Pyme en cuanto al acceso al financiamiento y a la reducci&oacute;n de los Ingresos Brutos. En virtud de ello, desde CAME se record&oacute; la importancia de reglamentar el Art. 10 y el Art. 11 de dicha Ley.</p>\r\n\r\n<p>A su vez, se volvi&oacute; a plantear la necesidad de fijar tasas diferenciales para las Pymes teniendo en cuenta que est&aacute;n ahogadas por la presi&oacute;n fiscal y no encuentran alternativas en el mercado financiero. En este sentido, desde el Gobierno informaron que est&aacute;n trabajando en estrategias que permitan paliar esta situaci&oacute;n.</p>\r\n\r\n<p>Cabe destacar que todos los temas trazados fueron puestos en discusi&oacute;n oportunamente por CAME buscando aliviar la adversa coyuntura que enfrenta hoy el sector m&aacute;s pujante de la econom&iacute;a.</p>\r\n', '4414cd68f7', '', '', '2018-09-13'),
(44, 'cc90b20e4f', 'FESTEJOS INSTITUCIONALES - 90 Aniversario del Centro Empresarial', '<p><strong>CENA, SHOW y BAILE ...</strong></p>\r\n\r\n<p><em><u><strong>Estimados Socios:</strong></u></em><br />\r\n<br />\r\nQueremos invitarlos a participar de los festejos por el&nbsp;<strong>90&ordm; Aniversario&nbsp;</strong>de vida Institucional del&nbsp;<strong>Centro Empresarial y de Servicios</strong>.</p>\r\n\r\n<p>Lo celebraremos el s&aacute;bado 27 de octubre pr&oacute;ximo en el Sal&oacute;n Rosado de la Sociedad Rural .</p>\r\n\r\n<p><br />\r\n<strong>!! EST&Aacute;N TODOS INVITADOS...!!.</strong></p>\r\n\r\n<p>Para la compra y reserva de tarjetas dirigirse personalmente al<strong>&nbsp;Centro Empresarial</strong>, (<em>Belgrano 1585</em>), telef&oacute;nicamente (03564 427888 / 424480) o bien por mail:&nbsp;<a href=\"mailto:socios@ces-sanfco.com.ar\">socios@ces-sanfco.com.ar.</a></p>\r\n\r\n<p>Las mismas podr&aacute;n abonarse en dos cuotas, (<em>septiembre - octubre</em>).</p>\r\n\r\n<p><em>MAYORES: $ 900,00.-&nbsp; &nbsp;MENORES: $ 400,00 (de 3 a 10 a&ntilde;os).</em></p>\r\n\r\n<p><strong>.....!!!!! A RESERVAR LA FECHA !!!!! ....<br />\r\nHabr&aacute; un Show Inolvidable ...</strong></p>\r\n', '5b71a8299d', '', '', '2018-09-14'),
(45, 'a99e8babf3', 'Reunión en el CES con Diputado Nacional Ricardo Alfonsín.', '<p>A pedido del&nbsp;<strong><em>Dr. Ricardo Alfons&iacute;n</em></strong>&nbsp;y con motivo de su visita a la ciudad de San Francisco, nuestra instituci&oacute;n mantuvo una charla con el actual Diputado Nacional.</p>\r\n\r\n<p>Al respecto se le plante&oacute; la compleja situaci&oacute;n que enfrentan las peque&ntilde;as y medianas empresas en su conjunto y la urgente necesidad de nuevos mecanismos de financiamiento, vale decir la necesidad de fijar tasas diferenciales para el sector teniendo en cuenta que est&aacute;n ahogadas por la presion fiscal y no encuentran otras alternativas viables en el mercado financiero,&nbsp; baja de los Ingresos Brutos, (es imperante bajar la presi&oacute;n fiscal que asfixia a las PyMES), etc.&nbsp;</p>\r\n\r\n<p>&nbsp;Finalmente se le manifest&oacute; que la coyuntura actual requiere profundizar los esfuerzos para atacar y resolver el d&eacute;ficit fiscal como principal problem&aacute;tica.</p>\r\n', '5b71a8299d', '', '', '2018-09-17'),
(46, '046e0e8fb0', 'CAME le reiteró al Presidente la necesidad de compensar los aportes patronales por provincia.', '<p><strong>Luego de que la Reforma Tributaria derogara el Anexo I del decreto 814/01 y dispuso un nuevo esquema de compensaci&oacute;n de aportes patronales por zona, que en un plazo de cinco a&ntilde;os iguala a todo el pa&iacute;s, sin tener en cuenta las dificultades del interior profundo, CAME reitera el pedido de modificar la medida.</strong></p>\r\n\r\n<p>La &uacute;nica herramienta que se utilizaba para compensar entre provincias la presi&oacute;n de las contribuciones patronales era la establecida por el Decreto 814/01, que computa un porcentaje de las remuneraciones como cr&eacute;dito fiscal en el IVA. Este instrumento es muy importante si se tiene en cuenta que los acuerdos salariales se definen desde una &oacute;ptica de las ciudades m&aacute;s desarrolladas y para una Pyme del interior resulta dificultoso asumir. La nueva ley tributaria establece un esquema que disminuye el beneficio en varias regiones y que finalmente se elimina en 5 a&ntilde;os.</p>\r\n\r\n<p>Debido a esta modificaci&oacute;n, en el corto plazo sube el costo de las Pymes que no son prestadoras de servicios, porque la contribuci&oacute;n patronal pasa del 17 % desde el 2018 al 19 % en el 2022.</p>\r\n\r\n<p>Es por eso que el titular de CAME, Gerardo D&iacute;az Beltr&aacute;n, junto al secretario general, Jos&eacute; Bereciart&uacute;a, le llevaron la inquietud al presidente Mauricio Macri, en la reuni&oacute;n mantenida el lunes pasado.</p>\r\n', '4414cd68f7', '', '', '2018-09-17'),
(47, '995888b417', 'Pedido de FEDECOM a CAME', '<p><strong>Sr. Presidente CAME<br />\r\nGERARDO DIAZ BELTRAN<br />\r\nSu despacho</strong><br />\r\n________________________<br />\r\nDe nuestra mayor consideraci&oacute;n:<br />\r\nNos dirigimos a UD y, por su intermedio, a la Comisi&oacute;n Directiva de vuestra entidad a fin de manifestar nuestra preocupaci&oacute;n ante la situaci&oacute;n que atraviesan las pymes argentinas hoy. Consideramos que, como entidades representativas del sector, es momento de gestionar nuevas acciones para paliar la situaci&oacute;n.<br />\r\nSeg&uacute;n datos del&nbsp;<strong>Ministerio de Producci&oacute;n de la Naci&oacute;n</strong>, el 97% de las PYMES son peque&ntilde;as y microempresas que generan el 70% del empleo en argentina; este sector, es el que hace cuatro a&ntilde;os soporta los ajustes, sector que indirectamente sustenta el empleo p&uacute;blico y que, a diferencia de las multinacionales, soporta sobre su espalda la recesi&oacute;n del consumo haciendo frente a la presi&oacute;n fiscal, evitando diariamente la desvinculaci&oacute;n de sus empleados, abonando costos de locaci&oacute;n que superan el 30 % de incremento anual, y costos de energ&iacute;a que superan a su vez el importe de una locaci&oacute;n mensual.<br />\r\nNada de lo mencionado es desconocido ni novedoso, nuestras PYMES est&aacute;n en un momento de extrema peligrosidad y, con ello, miles de puestos de trabajos de familias argentinas. Por tal motivo, desde la Federaci&oacute;n Comercial de la Provincia de C&oacute;rdoba, solicitamos a vuestra entidad y, por su intermedio a todas las C&aacute;maras Empresariales del pa&iacute;s, nos acompa&ntilde;en con el refuerzo de los pedidos que ser&aacute;n presentados a nivel nacional ante los organismos e instituciones correspondientes, como as&iacute; tambi&eacute;n la r&eacute;plica en cada provincia en particular.<br />\r\n<u>Solicitamos como medidas urgentes</u>;</p>\r\n\r\n<p>* Suspender por 180 d&iacute;as los embargos de cuentas por parte de AFIP.</p>\r\n\r\n<p>* Suspender por 180 d&iacute;as las ejecuciones por parte de AFIP.</p>\r\n\r\n<p>* Restablecer el cr&eacute;dito mediante la baja de tasas de inter&eacute;s, que permita al Comercio y la Industria generar alg&uacute;n plan de pago para poder vender.</p>\r\n\r\n<p>* Reducir de costos laborales no salariales: Al igual que lo que ocurri&oacute; con el IVA, para aquellas PYMES adheridas a la Ley PYME, la posibilidad de pagar Cargas Sociales (F931) a los 90 d&iacute;as de vencida. Esto permitir&aacute; afrontar compromisos sin tener que endeudarse a las abusivas tasas que hoy ofrecen los bancos tanto p&uacute;blicos como privados.<br />\r\n<br />\r\n* Solicitar al Ministerio de Trabajo de la Naci&oacute;n alg&uacute;n tipo de flexibilizaci&oacute;n sobre reubicaciones de tareas al personal como as&iacute; tambi&eacute;n planes de contingencia para reducir jornadas horarias en pos de mantener todas las fuentes de trabajo. Incluir en esta solicitud a los Ministerios de Trabajo Provinciales.<br />\r\n* Disponer una medida que exima a las PYMES del pago v&iacute;a retenciones de II BB a toda operatoria bancarizada (dep&oacute;sitos, transferencias, pagos con cheques, etc.), entendiendo que la baja en II BB es imposible de llevar a la pr&aacute;ctica.<br />\r\nComprendemos que el pa&iacute;s est&aacute; pasando por un momento de ajuste, el cual debe ser asumido por todos los sectores, pero si no defendemos el sector productivo de nuestra econom&iacute;a, ser&aacute; sumamente dif&iacute;cil salir de esta situaci&oacute;n. Proponemos generar desde CAME, tal como se ha realizado en ocasiones anteriores, cadenas de correos electr&oacute;nicos enviadas a los Jefes de las &aacute;reas mencionadas, como as&iacute; tambi&eacute;n a los legisladores nacionales y provinciales.<br />\r\nEsperando que nos acompa&ntilde;en en esta acci&oacute;n, aprovechamos para saludarlos con la m&aacute;s distinguida consideraci&oacute;n.</p>\r\n\r\n<p><strong><em>Marcelo Stehli.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Alberto Ca&ntilde;on.</em></strong></p>\r\n\r\n<p><strong><em>&nbsp; Presidente.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Secretario.</em></strong></p>\r\n', '5b71a8299d', '', '', '2018-09-17'),
(48, '4ca27f443a', 'Pedido al HCD sobre modificación de la ordenanza 5.979', '<p>Con motivo del tratamiento a corto plazo de la ordenanza municipal n&ordm; 5.979 la cual contempla la habilitaci&oacute;n, instalaci&oacute;n, ampliaci&oacute;n, modificaci&oacute;n, transferencias, traslados, anexos de rubros y funcionamiento de establecimientos comerciales, nuestra instituci&oacute;n present&oacute; una nota al Presidente del Honorable Concejo Deliberante, Gustavo Klein y a cada bloque de dicho &oacute;rgano deliberativo donde manifestamos nuestros puntos de vistas y observaciones al respecto, sugiriendo cambio sobre la misma.</p>\r\n\r\n<p><strong>Acceso a la nota:&nbsp;<a href=\"https://drive.google.com/open?id=1f04NPkHMkVFZTa_eVgJyC1i9QwKq74Cu\">click aqu&iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-09-17'),
(49, '217e93eea4', 'Convocatoria abierta - Premios al Comercio de Córdoba 2018', '<p><strong>La Secretar&iacute;a de Comercio te invita a participar del concurso a los Premios al Comercio de C&oacute;rdoba 2018.</strong></p>\r\n\r\n<p>Enterate c&oacute;mo postularte&nbsp;<a href=\"http://82795.track.dattanet.com/track/click?u=1648386&amp;p=38323739353a3239343a3235323a303a303a30&amp;s=14251c39388d46a31cb764b3fa588eaa&amp;m=504\"><strong>ingresando aqu&iacute;&nbsp;</strong></a></p>\r\n\r\n<p>INSTRUCTIVO:&nbsp;<a href=\"http://82795.track.dattanet.com/track/click?u=1648387&amp;p=38323739353a3239343a3235323a303a313a30&amp;s=14251c39388d46a31cb764b3fa588eaa&amp;m=504\">click aqui.-</a></p>\r\n\r\n<p>BASES y CONDICIONES:&nbsp;<a href=\"http://82795.track.dattanet.com/track/click?u=1648388&amp;p=38323739353a3239343a3235323a303a323a30&amp;s=14251c39388d46a31cb764b3fa588eaa&amp;m=504\">click aqu&iacute;.-</a></p>\r\n\r\n<p>FORMULARIO de INSCRIPCI&Oacute;N:<a href=\"http://82795.track.dattanet.com/track/click?u=1648389&amp;p=38323739353a3239343a3235323a303a333a30&amp;s=14251c39388d46a31cb764b3fa588eaa&amp;m=504\">&nbsp;click aqu&iacute;.-</a></p>\r\n', '5b71a8299d', '', '', '2018-09-21'),
(50, '4a2910816f', 'UTN - Jornada cátedra pyme', '<p>Nueva jornada de c&aacute;tedra abierta pyme a realizarse el martes 2 de octubre de 2018.</p>\r\n\r\n<p><strong>El link del formulario de inscripci&oacute;n</strong>:&nbsp;<a href=\"http://bit.ly/catedraabiertasanfrancisco\">click aqu&iacute;.-</a></p>\r\n', '5b71a8299d', '', '', '2018-09-28'),
(51, '192656a1b4', 'CAME - El Gobierno estableció modificaciones en el decreto que implementa retenciones transitorias a las exportaciones.', '<p>&nbsp;Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) informamos que el Poder Ejecutivo Nacional, a trav&eacute;s del Decreto 865/2018 publicado en el Bolet&iacute;n Oficial, estableci&oacute; modificaciones en el Decreto 793/2018 que fija un derecho del 12 % a la exportaci&oacute;n para consumo de todas las mercader&iacute;as de la Nomenclatura Com&uacute;n del Mercosur (NCM) hasta el 31 de diciembre de 2020.</p>\r\n\r\n<p>La medida precisa que el derecho de exportaci&oacute;n no podr&aacute; exceder de $4 por cada d&oacute;lar estadounidense del valor imponible, incluyendo el importe que arroje la aplicaci&oacute;n de la al&iacute;cuota all&iacute; dispuesta, o del precio oficial FOB, seg&uacute;n corresponda. Para las mercader&iacute;as comprendidas en las posiciones arancelarias de la NMC ese l&iacute;mite ser&aacute; de $3 por cada d&oacute;lar estadounidense del valor imponible, incluyendo el importe que arroje la aplicaci&oacute;n de la al&iacute;cuota dispuesta en el referido art&iacute;culo 1&deg;, o del precio oficial FOB, seg&uacute;n corresponda. De aplicarse, esos l&iacute;mites se mantendr&aacute;n en pesos hasta la cancelaci&oacute;n de la obligaci&oacute;n.</p>\r\n\r\n<p>Asimismo, el decreto otorga un plazo de espera de 60 d&iacute;as corridos, sin intereses, contados a partir del d&iacute;a siguiente al del libramiento, para el pago del tributo a los exportadores que en el a&ntilde;o calendario inmediato anterior a la fecha del registro de la correspondiente solicitud de exportaci&oacute;n para consumo hayan exportado menos de 20 millones de d&oacute;lares.</p>\r\n\r\n<p>Adem&aacute;s, se establece que a los exportadores de bienes de capital que hayan facturado y cobrado la exportaci&oacute;n no se les cobrar&aacute; este derecho y se except&uacute;a del pago de ese derecho a los sujetos beneficiarios del R&eacute;gimen de Exportaci&oacute;n Simplificada denominado &ldquo;Exporta Simple&rdquo;.</p>\r\n\r\n<p><strong>Para acceder al Decreto 865/2018,&nbsp;<a href=\"https://www.boletinoficial.gob.ar/#!DetalleNorma/192989/20180928\">haga click aqu&iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-09-28'),
(52, 'c9886e6eb5', 'CAME - El BCRA reglamentó el uso de cheques electrónicos', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) informamos que el Banco Central de la Rep&uacute;blica Argentina (BCRA), a trav&eacute;s de la Comunicaci&oacute;n &ldquo;A&rdquo; 6578, reglament&oacute; el uso de medios electr&oacute;nicos para el libramiento, aval, circulaci&oacute;n y presentaci&oacute;n al cobro de cheques, sin perjuicio del mantenimiento del sistema vigente para el formato papel.</p>\r\n\r\n<p>La medida establece que las entidades financieras que operen con alguno de los tipos de cuentas que admiten el dep&oacute;sito de cheques deber&aacute;n adoptar los mecanismos &ndash;propios o a trav&eacute;s de terceros &ndash; que resulten necesarios para que sus clientes puedan depositar cheques generados por medios electr&oacute;nicos (ECHEQ).</p>\r\n\r\n<p>Los ECHEQ podr&aacute;n emitirse a favor de personas determinadas. El requisito de la firma quedar&aacute; satisfecho si se utiliza cualquier m&eacute;todo electr&oacute;nico que asegure indubitablemente la exteriorizaci&oacute;n de la voluntad del librador y la integridad del instrumento, la confiabilidad de la operaci&oacute;n de emisi&oacute;n y su autenticaci&oacute;n en su conjunto, siempre y cuando el mismo haya sido previamente aceptado por el titular de la cuenta corriente.</p>\r\n\r\n<p>Adem&aacute;s, los ECHEQ podr&aacute;n ser endosados y/o avalados en forma electr&oacute;nica, siempre y cuando se utilicen para ello mecanismos que cumplimenten lo requerido en el p&aacute;rrafo anterior.</p>\r\n\r\n<p>Se deber&aacute; implementar un sistema de almacenamiento de los ECHEQ, cuya funci&oacute;n ser&aacute; registrar los libramientos y endosos de tales instrumentos. Este esquema podr&aacute; ser operado y administrado por la c&aacute;mara electr&oacute;nica de bajo valor de manera exclusiva o compartida.</p>\r\n\r\n<p>Cabe destacar que este sistema que busca facilitar la inclusi&oacute;n digital, reducir costos y generar eficiencia, entrar&aacute; en vigencia a partir de los 180 d&iacute;as corridos contados desde la fecha de hoy.</p>\r\n\r\n<p><strong>Para acceder a la Comunicaci&oacute;n &ldquo;A&rdquo; 6578,&nbsp;<a href=\"http://www.redcame.org.ar/archivos/A6578.pdf\">clic aqu&iacute;.</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-10-02'),
(53, '555f502c26', 'FEDECOM en defensa de las PYMES CORDOBESAS', '<p><strong>En defensa de las pymes cordobesas.</strong></p>\r\n\r\n<p>La Comisi&oacute;n Directiva de la<strong>&nbsp;Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom)</strong>, en representaci&oacute;n de las 65 c&aacute;maras y centros comerciales que la conforman, preocupada y ocupada por la situaci&oacute;n que atraviesan hoy las pymes cordobesas y argentinas, elev&oacute; al Secretario de Trabajo y Empleo de la Naci&oacute;n,<em>&nbsp;Jorge Triaca</em>, una petici&oacute;n por medio de la cual se gestione la habilitaci&oacute;n de alg&uacute;n mecanismo de flexibilizaci&oacute;n para la reubicaci&oacute;n del personal, como as&iacute; tambi&eacute;n la creaci&oacute;n de planes de contingencia que permitan reducir jornadas horarias en pos de poder mantener todas las fuentes de trabajo.</p>\r\n\r\n<p>Se dio conocimiento tambi&eacute;n, de esa solicitud, al ministro de Trabajo de la Provincia de C&oacute;rdoba,<em>Omar Sereno.</em></p>\r\n\r\n<p>Asimismo, envi&oacute; una nota al&nbsp;<strong>Administrador Federal de Ingresos P&uacute;blicos (AFIP)</strong>,<em>&nbsp;Leandro Cuccioli</em>, en la que se le solicita que gestione la posibilidad de que se suspendan por 180 d&iacute;as los embargos de cuentas y las ejecuciones; se reduzcan los costos laborales no salariales, y se disminuya los costos de abogados por cuestiones litigiosas en relaci&oacute;n a esa dependencia.</p>\r\n\r\n<p>Finalmente, y movilizada por el mismo objetivo de ayudar a las pymes a sobrepasar esta instancia de crisis con la menor cantidad de secuelas posibles, Fedecom envi&oacute; una misiva al&nbsp;<strong>Ministro de Finanzas de la Provincia de C&oacute;rdoba</strong>,&nbsp;<em>Osvaldo Giordano</em>, solicitando la eximici&oacute;n de las pymes, v&iacute;a retenciones del pago de Ingresos Brutos, de toda operatoria bancarizada (dep&oacute;sitos, transferencias, pagos con cheques, etc.) y la suspensi&oacute;n por 180 d&iacute;as de embargos y ejecuciones originadas por falta de pago de todo tributo que competa a las pymes.</p>\r\n\r\n<p>La Comisi&oacute;n Directiva de Fedecom entiende que el pa&iacute;s est&aacute; atravesando por un momento de ajuste que debe ser asumido por todos los sectores, pero cree que si no defiende el sector productivo de la econom&iacute;a, ser&aacute; sumamente dif&iacute;cil salir de esta situaci&oacute;n.<br />\r\n<em><strong>Comisi&oacute;n Directiva de Fedecom.</strong></em></p>\r\n\r\n<p><strong>Acceso a Notas Presentadas:&nbsp;<a href=\"https://fedecom.us16.list-manage.com/track/click?u=ad75cb41552809d365d9bbc94&amp;id=5a13e3584d&amp;e=e0b855999a\">click aqu&iacute;.-</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-10-03'),
(54, '4133eafda4', 'REFLEXIONES IMPRESCINDIBLES PARA ATRAVESAR LA CRISIS', '<p><strong>El G6 que integra Fedecom emiti&oacute; un comunicado en el que reflexiona sobre la Crisis Econ&oacute;mica: C&oacute;mo llegamos? C&oacute;mo salimos? Qu&eacute; le exigimos al Estado?.</strong></p>\r\n\r\n<p><strong>Sobre el G6:</strong><br />\r\nEl Grupo de Entidades Empresarias de C&oacute;rdoba (<strong>G6</strong>) est&aacute; integrado por la<strong>&nbsp;Bolsa de Comercio de C&oacute;rdoba</strong>, la&nbsp;<strong>C&aacute;mara de Comercio de C&oacute;rdoba</strong>, la&nbsp;<strong>C&aacute;mara de Comercio Exterior de C&oacute;rdoba</strong>, la&nbsp;<strong>C&aacute;mara Argentina de la Construcci&oacute;n &ndash;&nbsp;<em>delegaci&oacute;n C&oacute;rdoba</em></strong>, la&nbsp;<strong>Federaci&oacute;n Comercial de C&oacute;rdoba</strong>&nbsp;y la&nbsp;<strong>Uni&oacute;n Industrial de C&oacute;rdoba</strong>. Se propone generar un espacio de di&aacute;logo y debate franco de ideas y propuestas para contribuir al desarrollo institucional, econ&oacute;mico y social a nivel provincial, regional y nacional.<br />\r\nEs sabido que, cuando los tiempos son dif&iacute;ciles, reina el desconcierto y cuesta mucho avizorar un horizonte com&uacute;n, un punto de convergencia hacia el futuro. La actual crisis de nuestro pa&iacute;s nos preocupa de igual manera a todos. Pero tambi&eacute;n nos convoca la necesidad imperiosa de lograr un conjunto de certidumbres que nos permita retomar un ritmo normal, predecible, sustentable.</p>\r\n\r\n<p>Si bien todav&iacute;a puede resultar prematuro predecir cu&aacute;les ser&aacute;n las consecuencias de la actual coyuntura, s&iacute; creemos necesario se&ntilde;alar algunos ejes de reflexi&oacute;n que nos interesan como actores del sector productivo y tambi&eacute;n como ciudadanos interesados en un provenir conjunto. Son estos los momentos que nos llaman a volver a poner blanco sobre negro los debates de fondo, para no perderlos de vista a&uacute;n en medio del desconcierto.<br />\r\n<strong>&iquest;C&oacute;mo llegamos hasta aqu&iacute;?</strong><br />\r\nYa no quedan dudas de que la crisis que vivimos es producto de no haber comprendido, en d&eacute;cadas, que no podemos endeudarnos m&aacute;s all&aacute; del nivel que nuestra verdadera capacidad productiva nos permite. El ajuste para reducir el d&eacute;ficit (fiscal y comercial) es el costo a pagar por no haber sido sustentables en a&ntilde;os anteriores y no haber sopesado a tiempo que siempre, de alg&uacute;n bolsillo, salen los recursos para pagar lo que malgastamos.<br />\r\n<strong>&iquest;Qu&eacute; es prioritario ahora?</strong><br />\r\nEntre cientos de urgencias, tal vez la m&aacute;s acuciante sea la lucha contra la pobreza y, entre sus agravantes econ&oacute;micos, la inflaci&oacute;n. Esta &uacute;ltima, por ser de todos, el ajuste m&aacute;s injusto: no repara a qui&eacute;nes se aplica y afecta en particular a los m&aacute;s desprotegidos. Tambi&eacute;n distorsiona la econom&iacute;a y castiga por igual a los sectores eficientes e ineficientes.<br />\r\n<strong>&iquest;Qu&eacute; necesitan las empresas?</strong><br />\r\nConvencidos de que la trama productiva de nuestro pa&iacute;s es y ser&aacute; la protagonista de la recuperaci&oacute;n de nuestra econom&iacute;a, es necesario proteger a las empresas, sobre todo las PYMES que representan el 90% de las empresas en nuestra provincia y m&aacute;s del 60% de fuentes genuinas de empleo. Por eso pedimos, en esta coyuntura, una red de contenci&oacute;n para las PyMES, lo que significa resguardar el empleo y la actividad econ&oacute;mica genuina.</p>\r\n\r\n<p>Entre otros temas, debe resolverse de inmediato el problema de las alt&iacute;simas tasas de inter&eacute;s que dificultan y hasta llegan a paralizar la actividad.<br />\r\n<strong>&iquest;Qu&eacute; exigimos a los Estados?</strong><br />\r\nEn todos los niveles -nacional, provincial y municipal- exigimos que all&iacute; tambi&eacute;n se lleven adelante los ajustes que todos proclamamos. Los privados hacemos nuestro propio ajuste porque es la &uacute;nica manera de sobrevivir y prosperar. Los ciudadanos porque no tienen m&aacute;s opci&oacute;n. Es hora de que los Estados realmente eliminen sus hist&oacute;ricas ineficiencias, entre ellas, la del exceso de gastos de la pol&iacute;tica. Y tambi&eacute;n lo solicitamos a todos aquellos sectores que gozan de prerrogativas: administradores p&uacute;blicos, funcionarios judiciales, legisladores, jubilados de privilegio, etc&eacute;tera. Ellos tambi&eacute;n deben contribuir con la reducci&oacute;n del d&eacute;ficit.<br />\r\n<strong>&iquest;C&oacute;mo dirigirnos hacia el futuro?</strong><br />\r\nDe la crisis, creemos, se sale con el esfuerzo y la colaboraci&oacute;n de todos los sectores. Y tambi&eacute;n con reglas claras, con verdadero esp&iacute;ritu de consenso y sin mezquindades. Nuestra pr&oacute;xima prueba institucional ser&aacute;, sin dudas, el debate del presupuesto 2019. Pedimos a quienes tienen la responsabilidad pol&iacute;tica de llevar adelante esta discusi&oacute;n, que dejen de lado cualquier tipo de inter&eacute;s que no sea el de un genuino esfuerzo por reconducirnos a un horizonte com&uacute;n.</p>\r\n', '4414cd68f7', '', '', '2018-10-03'),
(55, '282a06a9b6', 'CAME - Ingresos Brutos - excluyen 25 operaciones bancarias en CABA y provincia de Buenos Aires', '<p>Desde la<strong>&nbsp;Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)&nbsp;</strong>informan que la Agencia de Recaudaci&oacute;n de la Provincia de Buenos Aires (ARBA), a trav&eacute;s de la Resoluci&oacute;n 36/2018, y la Administraci&oacute;n Gubernamental de Ingresos P&uacute;blicos (AGIP), a trav&eacute;s de la&nbsp;<a href=\"http://km2.bariloche.cc/lt.php?c=17932&amp;m=10755&amp;nl=944&amp;s=12607f3abb2e2bd406eebd6740a326a5&amp;lid=86320&amp;l=-https--www.agip.gob.ar/normativa/resoluciones/2018/agip/resolucion-n-235agip18\"><em><strong>Resoluci&oacute;n 235/2018</strong></em></a>, establecieron que, desde este mes, 25 operaciones en cuentas bancarias quedar&aacute;n al margen de la retenci&oacute;n de Ingresos Brutos en la ciudad y la provincia de Buenos Aires.</p>\r\n\r\n<p>De esta forma, quedar&aacute;n excluidas del cobro de dicho impuesto diversas operaciones dentro del SIRCREB (Sistema de Retenci&oacute;n sobre Acreditaciones Bancarias), como las transferencias de fondos que se efect&uacute;en por cualquier medio entre cuentas propias (excepto mediante el uso de cheque), las ventas particulares de inmuebles y de bienes registrables, los reintegros de obras sociales y prepagas, y las transferencias provenientes del exterior, entre otras.</p>\r\n\r\n<p>En algunas oportunidades ocurr&iacute;a que en las cuentas bancarias que se utilizan para desarrollar una actividad econ&oacute;mica se depositan montos provenientes de alguna operaci&oacute;n que no tiene vinculaci&oacute;n con la misma, por ejemplo, cuando se usa la cuenta para depositar el dinero obtenido en la venta de un autom&oacute;vil y el banco reten&iacute;a un porcentaje de ese dep&oacute;sito para aplicar a cuenta de Ingresos Brutos.</p>\r\n\r\n<p>La medida se suma al beneficio, que arranc&oacute; este mes, de que por 180 d&iacute;as los contribuyentes que durante 2017 facturaron hasta $ 10 millones sean excluidos de las retenciones del SIRCREB, lo que representa un alivio fiscal para las pymes, que alcanza a unos 50.000 inscriptos en Ingresos Brutos.</p>\r\n\r\n<p>Para conocer el listado completo de las transacciones excluidas de este r&eacute;gimen de recaudaci&oacute;n,&nbsp;<a href=\"http://km2.bariloche.cc/lt.php?c=17932&amp;m=10755&amp;nl=944&amp;s=12607f3abb2e2bd406eebd6740a326a5&amp;lid=86319&amp;l=-https--www.colegio-escribanos.org.ar/noticias/2018_10_02_PBA-ARBA-Res-Norm-36-2018.pdf\"><em><strong>haga clic aqu&iacute;.</strong></em></a></p>\r\n', '4414cd68f7', '', '', '2018-10-05'),
(56, '0c463241f3', 'Primera Ronda de Negocios de Fedecom', '<p>La&nbsp;<strong>Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom)</strong>&nbsp;los invita a participar de la<em><strong>Primera Ronda de Negocios Multisectorial</strong></em>&nbsp;que organiza junto a la<strong>&nbsp;Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)&nbsp;</strong>y el&nbsp;<strong>Ministerio de Producci&oacute;n y Trabajo de la Naci&oacute;n</strong>, el pr&oacute;ximo 24 de octubre en la ciudad de C&oacute;rdoba, y en el marco de la 8va. edici&oacute;n del Sello del Buen Dise&ntilde;o Argentino.</p>\r\n\r\n<p>La Ronda se llevar&aacute; a cabo en Espacio 220 Cultura Contempor&aacute;nea, sita en Av. Ram&oacute;n Bautista Mestre 1150, al lado de la ex Vieja Usina, actual Casa de la M&uacute;sica, de la ciudad de C&oacute;rdoba Capital<strong>, desde las 9 y las hasta las 17 horas.</strong></p>\r\n\r\n<p>Fedecom est&aacute; convencido de que estos encuentros constituyen una gran oportunidad para que proveedores, fabricantes de productos, distribuidores, mayoristas, transporte, log&iacute;stica y servicios relacionados de los sectores de indumentaria, bazar, juguetes, calzado y marroquiner&iacute;a, muebles, productos de electromedicina, de industria agropecuaria, entre muchos otros, accedan a un espacio donde vincularse a fin de completar, ampliar y/o renovar sus l&iacute;neas de producci&oacute;n, comercializaci&oacute;n y abastecimiento, ganando nuevos mercados que ayuden y potencien su desarrollo.</p>\r\n\r\n<p><u><strong>La participaci&oacute;n requiere de una entrevista e inscripci&oacute;n previa.</strong></u></p>\r\n\r\n<p><u><strong>Cierre de inscripci&oacute;n</strong></u>:&nbsp;<em>lunes 15 de octubre de 2018</em><br />\r\n<u><strong>Solicitud de entrevistas</strong></u>:&nbsp;<em>A partir del 15 de octubre y hasta el 19 de octubre de 2018.</em></p>\r\n\r\n<p>El costo de inscripci&oacute;n es de $500,00&nbsp;<u>en tanto que los asociados a Fedecom o a empresas asociadas a Centros Comerciales y C&aacute;maras Empresariales adheridas a Fedecom cuentan con una bonificaci&oacute;n especial</u>, por lo que para ellas el costo es de $300. Asimismo, la participaci&oacute;n de las empresas que tengan productos distinguidos con el Sello de Buen Dise&ntilde;o argentino estar&aacute; bonificada.</p>\r\n\r\n<p><u><strong>Para abonar la inscripci&oacute;n</strong></u>: Cuenta 0400030/03 CBU 0200915901000040003033. Banco de C&oacute;rdoba. Contactarse con&nbsp;<em>Solange Vargas</em>, de Fedecom a&nbsp;<a href=\"mailto:svargas@fedecom.org.ar\">svargas@fedecom.org.ar</a>.<br />\r\nPor consultas, contactarse con<em>&nbsp;Yanina Rodriguez</em>&nbsp;al&nbsp;<a href=\"mailto:yrodriguez@fedecom.org.ar\">yrodriguez@fedecom.org.ar</a>&nbsp;o por tel&eacute;fono al 0351-4531919.</p>\r\n\r\n<p>Para inscribirse en la Ronda de Negocios,&nbsp;<a href=\"https://fedecom.us16.list-manage.com/track/click?u=ad75cb41552809d365d9bbc94&amp;id=858f1e1fc5&amp;e=e0b855999a\">haga clic aqu&iacute;.</a></p>\r\n\r\n<p>Para acceder al instructivo de inscripci&oacute;n,&nbsp;<a href=\"https://fedecom.us16.list-manage.com/track/click?u=ad75cb41552809d365d9bbc94&amp;id=762757fe26&amp;e=e0b855999a\">haga clic aqu&iacute;</a></p>\r\n\r\n<p>N&oacute;mina de Inscriptos:&nbsp;<a href=\"https://fedecom.us16.list-manage.com/track/click?u=ad75cb41552809d365d9bbc94&amp;id=b2cd00ad18&amp;e=e0b855999a\">click aqu&iacute;.-</a></p>\r\n\r\n<p>Mir&aacute; la n&oacute;mina de participantes, lo que ofrecen y demandan:&nbsp;<a href=\"https://www.fedecom.org.ar/se-viene-la-primera-ronda-de-negocios-de-fedecom/\"><strong>click aqu&iacute;.-</strong></a><br />\r\n<strong><em>Secretar&iacute;a FEDECOM</em></strong></p>\r\n', '4414cd68f7', '', '', '2018-09-17'),
(57, '57111d6e32', 'Invitación a los Actos por el 90º Aniversario Institucional', '<p>El<strong>&nbsp;Centro Empresarial y de Servicios</strong>&nbsp;invita al empresariado local al acto que se llevar&aacute; a cabo en el Cementerio local el pr&oacute;ximo&nbsp;<strong>s&aacute;bado 27 de octubre</strong>&nbsp;a partir de las&nbsp;<em><u><strong>10:00 horas</strong></u></em>, con motivo de cumplir nuestra entidad sus 90 a&ntilde;os de vida institucional.</p>\r\n\r\n<p>En el transcurso del mismo se descubrir&aacute; una placa recordatoria y se depositar&aacute; una ofrenda floral para los socios y dirigentes fallecidos de esta entidfad gremial empresaria.&nbsp;</p>\r\n', '5b71a8299d', '', '', '2018-10-18'),
(58, 'bc9ed5a54c', 'Cámara Argentina del Comercio - Abusivo e injustificable, el rechazo de la Cámara de Comercio al plazo para acreditar ventas con tarjeta', '<p>Desde la C&aacute;mara Argentina de Comercio (CAC) rechazaron por &quot;abusivo e injustificable&quot; el plazo que usa el sistema financiero para acreditar las ventas hechas con tarjetas de cr&eacute;dito y de d&eacute;bito.</p>\r\n\r\n<p>La entidad asegur&oacute; en un comunicado que la Argentina es el &quot;&uacute;nico pa&iacute;s de la regi&oacute;n en el cual el plazo de acreditaci&oacute;n es de 18 d&iacute;as h&aacute;biles, situaci&oacute;n que al comercio le representa tanto un esfuerzo como un costo de financiamiento por un per&iacute;odo que termina convirti&eacute;ndose en hasta 28 d&iacute;as corridos&quot;.</p>\r\n\r\n<p>De acurdo con lo que denuncia la CAC, la situaci&oacute;n es hasta 14 veces mayor que la de otros pa&iacute;ses de la regi&oacute;n, &quot;generando un claro perjuicio al comercio, al disponer los bancos de una transferencia de fondos del sector&quot;.</p>\r\n\r\n<p>&quot;En un mercado de libre competencia, el comercio debe recibir la liquidaci&oacute;n de sus ventas con tarjetas de cr&eacute;dito y d&eacute;bito dentro de las 24 horas de realizada la transacci&oacute;n y sin costo financiero alguno&quot;, sostuvo.</p>\r\n\r\n<p>Adem&aacute;s, acot&oacute; que la situaci&oacute;n &quot;se agrava y se torna insostenible por la coyuntura econ&oacute;mica donde las tasas de inter&eacute;s resultan impagables, y las restricciones de liquidez son evidenciadas ante la falta de l&iacute;neas de cr&eacute;dito para sostener el capital de trabajo&quot;.</p>\r\n\r\n<p>Esa carencia, entre otras cosas, est&aacute; &quot;perjudicando gravemente al comercio y pone as&iacute; en jaque a PyMEs y grandes empresas nacionales generadoras de empleo&quot;, manifest&oacute; la CAC. Tambi&eacute;n se&ntilde;al&oacute; que, si bien es te&oacute;ricamente posible la aceleraci&oacute;n del pago a trav&eacute;s de la tasa de descuento, la misma es &quot;a una tasa tan elevada y variable que encarece a&uacute;n m&aacute;s la operatoria&quot;.</p>\r\n\r\n<p>&quot;Luego los bancos cuestionan al comercio financiar ese capital de trabajo adicional destinado a esperar el cobro de los saldos que los propios bancos adeudan a los comercios por las liquidaciones de tarjetas de cr&eacute;dito&quot;, a&ntilde;adi&oacute;.</p>\r\n\r\n<p>Con relaci&oacute;n a las ventas con tarjetas de d&eacute;bito, la CAC considera que deben contar con acreditaci&oacute;n inmediata, tal como sucede con las transferencias bancarias o con algunos de los nuevos medios electr&oacute;nicos de pago.</p>\r\n\r\n<p>Ocurre que, actualmente, al consumidor los bancos le debitan inmediatamente el importe de su cuenta, pero no se produce la contrapartida, ya que los comercios deben esperar 72 horas h&aacute;biles, que pueden representar entre tres y cinco d&iacute;as corridos&quot;. La C&aacute;mara exhort&oacute; al Poder Ejecutivo y al Banco Central a intervenir, y a los diputados y senadores a modificar la legislaci&oacute;n vigente.</p>\r\n\r\n<p>C&aacute;mara Argentina del Comercio (CAC).</p>\r\n', '4414cd68f7', '', '', '2018-10-23'),
(59, '2cab0ce242', 'Con el Certificado PyME se accede a beneficios impositivos y a Programas de Asistencia para las Empresas', '<p>Si la empresa est&aacute; inscripta en el Registro Pyme, se puede:</p>\r\n\r\n<p><strong>&raquo; Pagar el IVA a 90 d&iacute;as?</strong></p>\r\n\r\n<p><strong>&raquo; Eliminar el Impuesto a la Ganancia M&iacute;nima Presunta?</strong></p>\r\n\r\n<p><strong>&raquo; Compensar el? impuesto al cheque?</strong></p>\r\n\r\n<p><strong>&raquo; Descontar de Ganancias hasta el 10% de una inversi&oacute;n.</strong></p>\r\n\r\n<p>Para m&aacute;s informaci&oacute;n escribir a&nbsp;<a href=\"mailto:info@produccion.org.ar\">info@produccion.gob.ar</a>&nbsp;o llamar al<strong>&nbsp;0800-333-7963</strong>.</p>\r\n\r\n<p>Para inscribir la empresa, ingresar a:</p>\r\n\r\n<p><a href=\"https://pymes.afip.gob.ar/estiloAFIP/PYMES/default.asp\">https://pymes.afip.gob.ar/estiloAFIP/PYMES/default.asp</a></p>\r\n', '4414cd68f7', '', '', '2018-11-02');
INSERT INTO `novedades` (`id`, `cod`, `titulo`, `desarrollo`, `categoria`, `keywords`, `description`, `fecha`) VALUES
(60, '09a75a3906', 'Nuevo presidente del CES - Queremos que todos los comerciantes se sumen para mejorar las condiciones', '<p>Nuevo presidente del CES: &ldquo;Queremos que todos los comerciantes se sumen para mejorar las condiciones&rdquo;</p>\r\n\r\n<p>Dar&iacute;o Tamagnini, el nuevo presidente del Centro Empresarial y de Servicios (CES) visit&oacute; RADIO ESTACI&Oacute;N 102.5 y cont&oacute; que pretenden trabajar para todos los sectores comerciales de la ciudad, no s&oacute;lo en Bv. 25 de Mayo. A la vez pidi&oacute; que todos los comerciante se acerquen para participar en la entidad.</p>\r\n\r\n<p>Acerca de la asunci&oacute;n, Dar&iacute;o dijo: &ldquo;Es un equipo de trabajo, yo soy simplemente la cara visible. Somos muchos, la renovaci&oacute;n es una renovaci&oacute;n que ten&iacute;amos que hacer. La renovaci&oacute;n seria cada dos a&ntilde;os, a veces es poco, pero en un futuro no ser&iacute;a m&aacute;s de cuatro&rdquo;.</p>\r\n\r\n<p>&ldquo;Las presidencias largas no son decisiones personales sino cuestiones de la circunstancia que nadie se quiere involucrar. La idea es que entren chicos j&oacute;venes que nos den el impulso que necesitamos y meter a m&aacute;s gente dentro de la Comisi&oacute;n&rdquo; , a&ntilde;adi&oacute;.</p>\r\n\r\n<p>Nota completa:&nbsp;<a href=\"http://www.radioestacion.com.ar/nuevo-presidente-del-ces-queremos-que-todos-los-comerciantes-se-sumen-para-mejorar-las-condiciones/\"><strong>RadioEstaci&oacute;n.-</strong></a></p>\r\n', '5b71a8299d', '', '', '2018-11-03'),
(61, '048c38f664', 'INTERESANTE PROPUESTA COMERCIAL DEL BANCO CREDICOOP.', '<p><strong>Estimado Socio:</strong></p>\r\n\r\n<p>Desde el&nbsp;<strong>Banco Credicoop</strong>&nbsp;nos acercan una propuesta comercial que puede ser de vuestro inter&eacute;s.</p>\r\n\r\n<p><strong>CAMPA&Ntilde;A COMPRE LOCAL.</strong></p>\r\n\r\n<p>Usuarios de tarjetas de cr&eacute;dito y/o d&eacute;bito CABAL Credicoop.</p>\r\n\r\n<p><strong><u>TODOS LOS MARTES</u></strong><strong>:<br />\r\n20% de ahorro y hasta tres cuotas SIN INTERES en comercios adheridos.<br />\r\nSin tope de reintegro.</strong></p>\r\n\r\n<p>La acci&oacute;n ser&iacute;a soportada en forma conjunta bajo el siguiente esquema;</p>\r\n\r\n<p><strong>&bull; 12% a cargo del comercio.<br />\r\n&bull; 8% a cargo del banco y tres cuotas sin inter&eacute;s ni costo financiero para el comercio.</strong></p>\r\n\r\n<p>Para comercios del rubro perfumer&iacute;a, joyer&iacute;a, librer&iacute;a y vinoteca la oferta es:<br />\r\n<strong>10% de ahorro y hasta tres cuotas SIN INTERES en comercios adheridos.<br />\r\nSin tope de reintegro.</strong></p>\r\n\r\n<p>La acci&oacute;n ser&iacute;a soportada en forma conjunta bajo el siguiente esquema:</p>\r\n\r\n<p><strong>&bull; 10% a cargo del comercio.<br />\r\n&bull; 3 cuotas sin inter&eacute;s ni costo financiero para el comercio.</strong></p>\r\n\r\n<p><em><u>Vigencia</u></em>: Todos los martes, a definir el inicio de la acci&oacute;n y hasta el 31/12/2018.</p>\r\n\r\n<p><u><em>Exclusiones</em></u>:<br />\r\n1. El beneficio de las cuotas sin inter&eacute;s no aplica en aquellos comercios de rubros no habilitados para ventas en cuotas.<br />\r\n2. Rubro: Turismo, Grandes Tiendas, Correo, Taxis y Remises, Servicios Financieros, Bancos, Autos, Telefon&iacute;a, Electrodom&eacute;sticos, computaci&oacute;n y Supermercados.<br />\r\n<u>En materia de comunicaci&oacute;n, El Banco Credicoop Ltdo.se compromete a</u>;<br />\r\n1. Incorporar en su p&aacute;gina de Internet el listado de los comercios adheridos.<br />\r\n2. Confeccionar una imagen de correo que cubra la zona mencionada.<br />\r\n3. Remitir esa imagen a todos los asociados al Banco con domicilio en la zona.<br />\r\n4. Confeccionar material POP (calcos y display) para los puntos de venta.<br />\r\n<u>Comercio de San Francisco, C&oacute;rdoba, se debe comprometer a</u>;<br />\r\n1. Asegurar que coloquen el material POP en alg&uacute;n lugar visible para el p&uacute;blico.<br />\r\n2. Difundir la acci&oacute;n comercial a trav&eacute;s de sus canales habituales, medios gr&aacute;ficos y/o v&iacute;a p&uacute;blica.<br />\r\n<em>Contacto:</em></p>\r\n\r\n<p><em>Banco Credicoop, delegaci&oacute;n San Francisco.</em></p>\r\n\r\n<p><em>25 de Mayo 1763.</em></p>\r\n\r\n<p><em>Tel.:&nbsp;03564 42-4393/42-6.</em></p>\r\n', '4414cd68f7', '', '', '2018-11-05'),
(62, '0f7b15935e', 'Las ventas minoristas tuvieron en octubre, en Córdoba, la mayor caída del año', '<p>Las ventas minoristas de los comercios pymes de la provincia de C&oacute;rdoba cerraron octubre con una ca&iacute;da de 8,6% frente a igual mes del a&ntilde;o anterior, la mayor contracci&oacute;n registrada en lo que va del a&ntilde;o. En octubre de 2017, respecto a octubre de 2016 las ventas hab&iacute;an aumentado 0,7%.</p>\r\n\r\n<p>As&iacute; se desprende del relevamiento que realiz&oacute; el Departamento de Estad&iacute;sticas de la Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom) y sus centros comerciales adheridos.</p>\r\n\r\n<p>Con el dato de octubre, se registra el octavo mes de ca&iacute;da consecutiva y un 2,91% de baja promedio acumulada; se recordar&aacute; que en septiembre la ca&iacute;da fue del 8,3%, agosto del 5,2%, julio 2,8%, junio 2,9%, mayo 1,7%, abril 1,1% interanual, y en marzo del 0,4%.</p>\r\n\r\n<p>Seg&uacute;n el relevamiento, la ca&iacute;da se siente con especial intensidad en la ciudad Capital, donde seg&uacute;n la C&aacute;mara de Comercio de C&oacute;rdoba (CCC) &ndash;entidad adherida a Fedecom- se registr&oacute; una contracci&oacute;n interanual de 12,5%, y en algunas ciudades del interior provincial, como R&iacute;o Cuarto y Alta Gracia y, aunque en menor medida, en Villa Mar&iacute;a y San Francisco.</p>\r\n\r\n<p>&ldquo;La persistente ca&iacute;da de los vol&uacute;menes de venta, profundiza la cr&iacute;tica situaci&oacute;n que atraviesa el sector comercial de la provincia. Los datos negativos de las ventas del D&iacute;a de la Madre (-7,3%) ya pronosticaba lo que terminar&iacute;an arrojando las cifras finales del mes pasado&rdquo;, reconoci&oacute; Ezequiel Cerezo, vicepresidente de Fedecom.</p>\r\n\r\n<p>Un escenario econ&oacute;mico dominado por elevadas tasas de inter&eacute;s, fuerte ca&iacute;da del consumo en t&eacute;rminos reales y una inflaci&oacute;n que no da s&iacute;ntomas concretos de una baja significativa, generan niveles crecientes de incertidumbre hacia un 2019 que se presenta con m&aacute;s interrogantes que certezas.</p>\r\n\r\n<p>&ldquo;Los intereses de las tarjetas de cr&eacute;dito sumado a que muchas familias ya recurren a los pl&aacute;sticos para hacer compras corrientes por lo que los topes est&aacute;n muy cera de los m&aacute;ximos que cada quien tiene permitido, hace que los consumos sean muy medidos&rdquo;, agreg&oacute; Cerezo.<br />\r\nDe los 17 rubros relevados por la entidad, todos ellos alcanzaron valores negativos en la comparaci&oacute;n interanual respecto a las cantidades vendidas: las ca&iacute;das m&aacute;s pronunciadas se observaron en Joyer&iacute;a y relojer&iacute;a (-16,7%); Electrodom&eacute;sticos y electr&oacute;nicos (-14,8%); Marroquiner&iacute;a (-12,1%); Textil-Blanco (-11,6%).</p>\r\n\r\n<p>Las variaciones en cantidades vendidas para los restantes rubros fueron: Alimentos y bebidas (-6,7%); Bazar y regalos (-5,8%); Bijouterie (-11,5%); Calzado (-5,4%); Deportes y art&iacute;culos de recreaci&oacute;n (-3,3%); Farmacia (-1,3%); Jugueter&iacute;a, rodados y librer&iacute;a (-8,7%); Materiales el&eacute;ctricos y ferreter&iacute;as (-6,2%); Materiales para la construcci&oacute;n (-5,7%); Muebles (-7,4%); Neum&aacute;ticos (-7,6%); Perfumer&iacute;a y cosm&eacute;tica (-7,3%); Textil-Indumentaria (-10,1%).</p>\r\n\r\n<p>Respecto a las modalidades de pago, el 40% de las operaciones se realizaron en efectivo, el 52% con medios electr&oacute;nicos y un 8% con cr&eacute;ditos propios de los establecimientos comerciales.</p>\r\n\r\n<p><strong>Expectativas</strong><br />\r\nEn un contexto en el que persiste la recesi&oacute;n econ&oacute;mica, las expectativas de los comerciantes respecto a las ventas del pr&oacute;ximo mes indican que un 15% considera que aumentar&aacute;n, un 39% que se mantendr&aacute;n sin variaci&oacute;n y un 46% que disminuir&aacute;n.</p>\r\n\r\n<p><em>Fuente: Elaboraci&oacute;n propia en base a datos del Departamento de Estad&iacute;sticas de FEDECOM. &nbsp;</em></p>\r\n', '4414cd68f7', '', '', '2018-11-05'),
(63, '3e2172d9bf', 'AFIP - Cambios en la Facturacion', '<p><strong>Rigen Cambios en la Facturaci&oacute;n.-</strong></p>\r\n\r\n<p>La<strong>&nbsp;Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom)</strong>&nbsp;informa que la Administraci&oacute;n Federal de Ingresos P&uacute;blicos (AFIP) dio a conocer qui&eacute;nes son los nuevos sujetos obligados al r&eacute;gimen de factura electr&oacute;nica o controladores fiscales, cu&aacute;les son sus requisitos, condiciones y excepciones, reserv&aacute;ndose los comprobantes manuales &uacute;nicamente como comprobantes de respaldo ante inconvenientes en los sistemas de emisi&oacute;n.<br />\r\nAs&iacute;, a trav&eacute;s de la Resoluci&oacute;n General 4290, publicada en el Bolet&iacute;n Oficial, se establecieron las modalidades a trav&eacute;s de la cuales se deber&aacute;n emitir los comprobantes en forma electr&oacute;nica o por controladores fiscales, a fin de respaldar las operaciones de compraventa de cosas muebles, locaciones y prestaciones de servicios, locaciones de cosas y obras y las se&ntilde;as o anticipos que congelen el precio.</p>\r\n\r\n<p><strong>Sujetos alcanzados</strong><br />\r\n&middot; Responsables inscriptos en el impuesto al valor agregado (IVA).<br />\r\n&middot; Monotributistas<br />\r\n&middot; Exentos en el impuesto al valor agregado (IVA).<br />\r\nAquellos sujetos que por la actividad que desarrollan emiten comprobantes espec&iacute;ficos definidos o establecidos por una norma reglamentaria particular deber&aacute;n observar lo dispuesto en la misma para dichas actividades u operaciones.</p>\r\n\r\n<p><strong>Cronograma de aplicaci&oacute;n</strong><br />\r\nLas disposiciones de la Resoluci&oacute;n General 4290 entrar&aacute;n en vigencia y resultar&aacute;n de aplicaci&oacute;n a partir del 6 de agosto de 2018, excepto para los casos que se detallan a continuaci&oacute;n, cuya aplicaci&oacute;n se determina seguidamente:<br />\r\na) Obligaci&oacute;n de emisi&oacute;n de comprobantes electr&oacute;nicos originales y/o de utilizaci&oacute;n de<br />\r\n&quot;Controladores Fiscales&rdquo;:</p>\r\n\r\n<p>&nbsp;Sujetos adheridos al R&eacute;gimen Simplificado para Peque&ntilde;os Contribuyentes (Monotributo), de acuerdo con el siguiente cronograma:</p>\r\n\r\n<p>Categor&iacute;as&nbsp; &nbsp; &nbsp; &nbsp; Por los comprobantes que emitan a partir del</p>\r\n\r\n<p>F a K&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;6 de agosto de 2018<br />\r\nE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 de octubre de 2018<br />\r\nD&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 de diciembre de 2018<br />\r\nC&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 de febrero de 2019<br />\r\nB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 de marzo de 2019<br />\r\nA&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1 de abril de 2019<br />\r\n<br />\r\nPor las operaciones que se realicen con consumidores finales la referida obligaci&oacute;n ser&aacute; de aplicaci&oacute;n a partir del 1 de abril de 2019, independientemente de la categor&iacute;a que revista el sujeto adherido al Monotributo.<br />\r\nContribuyentes exentos en el impuesto al valor agregado, de acuerdo con el siguiente cronograma:</p>\r\n\r\n<p>Que registren en el &uacute;ltimo a&ntilde;o calendario ventas, incluidos los impuestos nacionales contenidos en ellas, por un monto:&nbsp; &nbsp;Por los comprobantes que emitan a partir de:</p>\r\n\r\n<p>Igual o superior a $ 1.000.000.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1 de noviembre de 2018<br />\r\nMenor a $ 1.000.000.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1 de enero de 2019<br />\r\n&nbsp;Operaciones cuya facturaci&oacute;n se deba efectuar con la modalidad electr&oacute;nica, en el momento de la entrega de los bienes o prestaci&oacute;n del servicio objeto de la transacci&oacute;n, en el domicilio del cliente o en un domicilio distinto al del emisor del comprobante, de acuerdo con el siguiente cronograma:</p>\r\n\r\n<p><strong>Opci&oacute;n de emisi&oacute;n de comprobantes electr&oacute;nicos (RG 4291)</strong></p>\r\n\r\n<p>&quot;Comprobantes en Linea&quot;/&quot;Facturador Movil&quot; (por los comprobantes que emitan a partir del: 1&ordm; de enro 2019).</p>\r\n\r\n<p><strong>&quot;Webservices&rdquo;</strong>&nbsp;(por los comprobantes que emitan a partir del: 1 de abril de 2019</p>\r\n\r\n<p>Emisi&oacute;n de comprobantes a trav&eacute;s de controladores fiscales. Adecuaci&oacute;n y obligaci&oacute;n de reemplazo por equipos nueva tecnolog&iacute;a. Mediante la RG 4292 Afip establece:<br />\r\n-Los sujetos que inicien actividad y opten por utilizaci&oacute;n de controlador fiscal este deber&aacute; ser de nueva tecnolog&iacute;a.<br />\r\n-Aquellos sujetos que tengan controladores fiscales de nueva tecnolog&iacute;a deber&aacute;n generar reportes semanales, y el reporte de Cinta testigo Digital.<br />\r\n-Por su parte los equipos clasificados como de vieja tecnolog&iacute;a podr&aacute;n ser utilizados hasta el 31/01/2021.</p>\r\n', '4414cd68f7', '', '', '2018-11-05'),
(64, '41de1adcbd', 'ACERCA DEL BONO SOLIDARIO DE FIN DE AÑO', '<p>Fedecom reclama que el bono compensatorio pueda ser considerado a cuenta de Ganancias, cargas sociales o la pr&oacute;xima paritaria.</p>\r\n\r\n<p>La Federaci&oacute;n Comercial de C&oacute;rdoba (Fedecom), entidad gremial de segundo grado que nuclea a c&aacute;maras y centros comerciales, industriales y de servicios de la provincia de C&oacute;rdoba, brega desde hace 38 a&ntilde;os por la defensa y el desarrollo de las peque&ntilde;as y medianas empresas locales.</p>\r\n\r\n<p>C&oacute;mo es de p&uacute;blico conocimiento, el sector atraviesa desde abril pasado, una complicada situaci&oacute;n econ&oacute;mica y financiera que incluye ca&iacute;da acumulada en las ventas, aumento de costos fijos, de tarifas, de alquileres, entre otros, que ha dejado a muchas pymes al borde del quebranto.</p>\r\n\r\n<p>Respecto del anuncio que ha hecho el gobierno nacional en cuanto a la instrumentaci&oacute;n del pago obligatorio de un bono compensatorio de 5.000 pesos para todos los trabajadores del sector privado, acordado con las centrales obreras, la Comisi&oacute;n Directiva de Fedecom quiere &ndash;en primera instancia- valorar la iniciativa que busca recomponer la p&eacute;rdida del poder adquisitivo de los trabajadores que ven c&oacute;mo sus salarios se deterioran al ritmo en que crece la inflaci&oacute;n.</p>\r\n\r\n<p>Adem&aacute;s, no puede dejar de reconocer que, de concretarse el anuncio, las familias destinar&aacute;n esos fondos mayoritariamente a consumo, dada la fecha del a&ntilde;o, lo cual podr&iacute;a ser un alivio para el sector que representamos.</p>\r\n\r\n<p>Sin embargo, no deja de llamar la atenci&oacute;n la intromisi&oacute;n del Estado en lo que deber&iacute;a ser una negociaci&oacute;n privada, entre gremios de trabajadores y empresarios, en la que se atienda la situaci&oacute;n particular de cada rubro, dado el contexto de recesi&oacute;n econ&oacute;mica que atraviesa el pa&iacute;s y cada uno de sus actores.</p>\r\n\r\n<p>Aun as&iacute;, si el Gobierno decidiera mantenerse firme en su resoluci&oacute;n y la medida se decretara, Fedecom considera oportuno que se le brinde la posibilidad al sector empresario de decidir de qu&eacute; modo y cu&aacute;ndo afrontar&aacute; el pago extra, ya que no todas las pymes atraviesan la misma situaci&oacute;n.</p>\r\n\r\n<p>Asimismo, solicita que el bono compensatorio pueda ser descontado del pago de las cargas sociales, del pago de Ganancias o que sea considerado como parte de la negociaci&oacute;n paritaria de 2019.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '4414cd68f7', '', '', '2018-11-08'),
(65, 'f22fc053c0', 'Enriquecedora reunión con directivos del Centro Comercial de Rafaela', '<p>En el d&iacute;a de la fecha miembros de la Comisi&oacute;n Directiva del&nbsp;<strong>Centro Empresarial&nbsp;</strong>juntamente con comerciantes del centro de la ciudad viajaron a la vecina localidad de Rafaela (Santa Fe) para mantener un encuentro con sus pares del&nbsp;<strong>Centro Comercial, Industrial de Rafaela y la Regi&oacute;n</strong>.</p>\r\n\r\n<p>El motivo del mismo fue el de recabar informaci&oacute;n y experiencias respecto del proyecto que oportunamente pusieron en marcha y con &eacute;xito cual es el de&nbsp;<strong>Centros Comerciales a Cielo Abierto.</strong></p>\r\n\r\n<p>Actualmente hay m&aacute;s de 200 Centros Comerciales a Cielo Abierto (CCCA) en la Argentina siendo &eacute;sta una tendencia a nivel mundial, desplazando incluso a las grandes superficies y shopping.<br />\r\nLos consumidores incluso (<em>y de acuerdo a muestreos y estad&iacute;sticas realizadas</em>), dan su veredicto bien claro al respecto:&nbsp;<u><strong>7 de cada 10 dicen preferir esos espacios antes que el shopping</strong></u>.<br />\r\nLos comercios chilenos incluso, se inspiran en Argentina y tambi&eacute;n quieren impulsarlos en su pa&iacute;s.</p>\r\n\r\n<p>Nuestra instituci&oacute;n no es ajena a esta tendencia, de all&iacute; el contacto mantenido que permita recabar ideas, sugerencias y experiencias que en el futuro puedan llegar a implementarse en nuestro medio con rotundo &eacute;xito como en otras localidades de nuestro pa&iacute;s.</p>\r\n', '4414cd68f7', '', '', '2018-11-14'),
(66, '7a6ef5e544', 'Vení a la jornada de atención a PyMEs', '<p>Acercate para conocer los programas y herramientas que ofrece el&nbsp;<strong>Ministerio de Producci&oacute;n y Trabajo</strong>&nbsp;de la mano de asesores especializados.</p>\r\n\r\n<p>Para impulsar tu crecimiento, inscribite haciendo&nbsp;<a href=\"https://docs.google.com/forms/d/e/1FAIpQLSdkKJp0qNYNgkwM9aFzb3xPBr_MnNo7-2FUhQAtwDJEzJ5qhw/viewform\"><strong>click aqu&iacute;.-</strong></a></p>\r\n', '5b71a8299d', '', '', '2018-11-14'),
(67, 'ee5bf14983', 'CAME - La AFIP instrumentó la billetera electrónica para pagar Ganancias, IVA y Bienes Personales', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) informamos que la Administraci&oacute;n Federal de Ingresos P&uacute;blicos (AFIP), a trav&eacute;s de la Resoluci&oacute;n General 4335 publicada en el Bolet&iacute;n Oficial, cre&oacute; la &ldquo;Billetera Electr&oacute;nica AFIP&rdquo; que permitir&aacute; a m&aacute;s de tres millones de contribuyentes efectuar la cancelaci&oacute;n de Ganancias, Bienes Personales, IVA y tributos a la Seguridad Social desde una plataforma digital ingresando solo el CUIT y el monto a transferir. La herramienta simplificar&aacute; el proceso de pago de impuestos ya que, a diferencia de las plataformas vigentes, no exige cargar el c&oacute;digo del tributo ni el per&iacute;odo fiscal.</p>\r\n\r\n<p>El acceso se podr&aacute; hacer desde el homebanking o el sitio web de la AFIP. Una vez que se ingresa, el men&uacute; mostrar&aacute; la opci&oacute;n &quot;Carga Billetera AFIP&quot;, que deber&aacute; completarse con el n&uacute;mero de CUIT y un importe superior a $ 1.200.</p>\r\n\r\n<p>Una vez hecho el pago, el importe se cargar&aacute; en la transacci&oacute;n &quot;Billetera Electr&oacute;nica&quot;, que se encuentra en el Sistema de Cuentas Tributarias (SCT). En este sistema, el contribuyente seleccionar&aacute; los impuestos a pagar, se generar&aacute; un comprobante de pago por esos conceptos y se descontar&aacute; autom&aacute;ticamente el importe cargado.</p>\r\n\r\n<p>La billetera electr&oacute;nica tambi&eacute;n contempla una modalidad de pago a trav&eacute;s de la Transferencia Bancaria Internacional (TBI) desde el exterior.</p>\r\n\r\n<p>En una segunda etapa, se prev&eacute; que la Billetera Electr&oacute;nica AFIP permita pagar el Monotributo y los aportes y contribuciones de los trabajadores de casas particulares.</p>\r\n\r\n<p><strong>Para acceder a la Resoluci&oacute;n General 4335,<a href=\"https://www.boletinoficial.gob.ar/#!DetalleNorma/195963/20181115\">&nbsp;clic aqu&iacute;.</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-11-21'),
(68, 'b942f80d58', 'CAME - Desde enero del 2019 aumentarán los valores en los Monotributos', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) informamos que la Administraci&oacute;n Federal de Ingresos P&uacute;blicos (AFIP) llevar&aacute; adelante un aumento en los porcentajes de ajuste en la categor&iacute;a de Monotributo del 28.48 %, tanto en las facturaciones como las mensualidades que regir&aacute;n a partir del 1&deg; de enero de 2019.</p>\r\n\r\n<p>Es por ello que la f&oacute;rmula de actualizaci&oacute;n vigente para los Peque&ntilde;os Contribuyentes adheridos al R&eacute;gimen Simplificado, con que se actualizar&aacute; el nivel de facturaci&oacute;n, los alquileres y las mensualidades a pagar por cada categor&iacute;a brindan dicho aumento.</p>\r\n\r\n<p>Cabe destacar que estos cambios generar&aacute;n que muchas personas dejen de pertenecer a dicha categor&iacute;a para comenzar a tributar por el R&eacute;gimen General, donde deber&aacute;n inscribirse en IVA, en el Impuesto a las Ganancias y en Aut&oacute;nomos, lo que les crear&aacute; un aumento en su carga fiscal.</p>\r\n\r\n<p>Esta modificaci&oacute;n se realizar&aacute; de acuerdo a la<a href=\"http://biblioteca.afip.gob.ar/dcp/LEY_C_027430_2017_12_27\"><strong>&nbsp;Ley 27.430&nbsp;</strong></a>y, en la brevedad, la AFIP publicar&aacute; las nuevas tablas correspondientes a las diferentes categor&iacute;as del Monotributo.</p>\r\n', '4414cd68f7', '', '', '2018-11-22'),
(69, 'c7c62d037b', 'CAME - LA AFIP AGILIZA EL LEVANTAMIENTO DE LOS EMBARGOS FISCALES', '<p>Desde la<strong>&nbsp;Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)&nbsp;</strong>informan que la Administraci&oacute;n Federal de Ingresos P&uacute;blicos (AFIP), a trav&eacute;s de la Resoluci&oacute;n General 4262 publicada en el Bolet&iacute;n Oficial, estableci&oacute; que los contribuyentes con embargos por acci&oacute;n del fisco podr&aacute;n cancelarlos con el dinero retenido por la Justicia.</p>\r\n\r\n<p>La normativa habilita al pago parcial o total de las deudas embargadas en forma inmediata. Cabe destacar que hasta hoy el contribuyente con fondos embargados deb&iacute;a recurrir a otros recursos para poder levantar el embargo.</p>\r\n\r\n<p>La flexibilizaci&oacute;n de los embargos, una medida que la AFIP hab&iacute;a sumado a la Reforma Tributaria aprobada a fines de 2017, incorpora la figura de la daci&oacute;n en pago, mecanismo que permite utilizar los fondos embargados para cancelar el embargo.</p>\r\n\r\n<p>El contribuyente debe ingresar a la p&aacute;gina web de la AFIP para tramitar el levantamiento del embargo y luego podr&aacute; pagar la deuda de forma electr&oacute;nica (hasta el momento se le exig&iacute;a hacer el tr&aacute;mite en forma presencial en una dependencia del organismo).</p>\r\n\r\n<p>Una vez que se concrete el pago a trav&eacute;s de la entidad bancaria, se realizar&aacute; el levantamiento de las medidas cautelares en forma autom&aacute;tica, siempre que se haya abonado el total de la suma embargada.</p>\r\n\r\n<p><strong>Para acceder a la Resoluci&oacute;n General 4262,&nbsp;<a href=\"https://www.boletinoficial.gob.ar/#!DetalleNorma/185800/20180615\">haga clic aqu&iacute;.</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-11-27'),
(71, '40e48c3559', 'San Francisco quiere desarrollar su Centro Comercial a Cielo Abierto.', '<p>Desde la instituci&oacute;n impulsamos una iniciativa para trabajar con CAME y el Municipio.</p>\r\n\r\n<p>El objetivo del proyecto es incentivar la actividad comercial y de esa manera brindar una herramienta que permita el crecimiento del sector.</p>\r\n\r\n<p>&ldquo;El Programa de Desarrollo de CCA es implementado por CAME a nivel nacional. Este formato comercial comprende una serie de comercios de la misma zona. Para su gesti&oacute;n conjunta se firma convenio entre la instituci&oacute;n que los representa, en este caso el CES, junto con la Municipalidad de San Francisco y CAME&rdquo;, detall&oacute; Dar&iacute;o Tamagnini, Presidente del CES.</p>\r\n\r\n<p>Seg&uacute;n el titular del CES, &ldquo;hasta el momento unos 45 comercios acordaron participar de la iniciativa, que busca agrupar principalmente a negocios ubicados en la zona c&eacute;ntrica de la ciudad&rdquo;. En otra instancia de desarrollo, se apuntar&aacute; a incluir a locales ubicados en otras &aacute;reas de la ciudad.</p>\r\n\r\n<p>Con el fin de relevar informaci&oacute;n acerca de la gesti&oacute;n del CCA, el CES consult&oacute; a ciudades que ya cuentan con la asistencia de CAME en sus proyectos: &quot;Mantuvimos encuentros con el Centro Comercial de Rafaela, que est&aacute;n implementando un paseo comercial de este tipo&quot;, explic&oacute; Tamagnini.</p>\r\n\r\n<p>En l&iacute;nea con las acciones estrat&eacute;gicas que se realizan en el marco de un CCA, actualmente el CES est&aacute; desarrollando la campa&ntilde;a Vamos al Centro, que cuenta con la participaci&oacute;n de varias firmas. Explic&oacute; que &quot;hay mucho inter&eacute;s de parte de nuestros comerciantes en participar de esta nueva iniciativa&quot;.</p>\r\n\r\n<p>Acerca del alcance del proyecto de CCA, Tamagnini destac&oacute; que &quot;el primer paso es delimitar un espacio espec&iacute;fico con caracter&iacute;sticas que definan su identidad. Luego se apunta a armonizar el espacio, poniendo en lugar el espacio p&uacute;blico y jerarquizando los locales y los servicios&rdquo;.</p>\r\n\r\n<p>Como referencias, San Francisco se fija en otras experiencias que se desarrollan en la regi&oacute;n y que fueron impulsadas con el apoyo de CAME, como Rafaela y Sunchales, entre otras.</p>\r\n\r\n<p><em>Fuente: La Voz de San Justo.&nbsp;</em></p>\r\n', '4414cd68f7', '', '', '2018-11-29'),
(72, '1915e7d7bc', 'CAME - Adelanto del Mínimo No Imponible para Marroquineria, Calzado e Indumentaria-Condiciones e Información Aclaratoria', '<p>Desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) informamos que el Ministerio de Producci&oacute;n y Trabajo de la Naci&oacute;n, a trav&eacute;s de la Resoluci&oacute;n 127/2018 publicada en el Bolet&iacute;n Oficial, estableci&oacute; las condiciones y las normas operatorias que deben cumplir los comercios de los rubros calzado, marroquiner&iacute;a e indumentaria para acceder al beneficio anunciado semanas atr&aacute;s que adelanta el descuento de $12.000 de la base imponible del c&aacute;lculo de las al&iacute;cuotas de aportes patronales.</p>\r\n\r\n<p>Cabe destacar que la normativa ser&aacute; implementada para los salarios de noviembre de 2018 hasta los de diciembre de 2019 y beneficiar&aacute; de forma directa a 126 mil empleos formales distribuidos en 8 mil empresas presentes en todas las provincias.</p>\r\n\r\n<p>Con esta medida, al sector le corresponde aplicar, a partir de diciembre de 2018, un MNI de $12.000 en vez de $2.400 vigente para este a&ntilde;o. Adem&aacute;s, a partir de 2019 el monto de MNI se ajustar&aacute; por inflaci&oacute;n de acuerdo a lo establecido en la Ley N&deg; 27.430 (para 2019, el MNI ser&aacute; cercano a los $17.500).</p>\r\n\r\n<p><strong>Para acceder a la Resoluci&oacute;n 127/2018,<a href=\"https://www.boletinoficial.gob.ar/#!DetalleNorma/197178/20181204\">&nbsp;clic aqu&iacute;.</a></strong></p>\r\n', '4414cd68f7', '', '', '2018-12-04'),
(73, 'b53c5b7254', 'Pago de IVA a 90 días: las Pymes en deuda con AFIP pueden acceder al beneficio', '<p><strong>&nbsp;Pago de IVA a 90 d&iacute;as: las Pymes en deuda con AFIP pueden acceder al beneficio</strong></p>\r\n\r\n<p>En virtud de la misiva que desde la Confederaci&oacute;n Argentina de la Mediana Empresa (CAME) enviamos a Dante Sica, Mariano Mayer y Leandro Cuccioli solicitando la extensi&oacute;n en el alcance del &ldquo;pago del IVA a 90 d&iacute;as&rdquo;, informamos que el secretario de Emprendedores y Pymes de la Naci&oacute;n confirm&oacute; que las micro, peque&ntilde;as y medianas que se encuentren en deuda o cursando un plan de pagos propuesto por la Administraci&oacute;n Federal de Ingresos P&uacute;blicos (AFIP) podr&aacute;n acceder al mencionado beneficio de la Ley Pyme.</p>\r\n\r\n<p>En este sentido, detallamos a continuaci&oacute;n los requisitos que deben cumplirse para poder tener acceso al mismo:</p>\r\n\r\n<p>&nbsp; &nbsp; Tener vigente el correspondiente &quot;Certificado MiPyme&quot;.<br />\r\n&nbsp; &nbsp; Poseer la Clave &Uacute;nica de Identificaci&oacute;n Tributaria (C.U.I.T.) con estado administrativo activo, en los t&eacute;rminos de la Resoluci&oacute;n General N&deg;3.832.<br />\r\n&nbsp; &nbsp; Declarar, mantener sin inconsistencias y actualizado ante AFIP el domicilio fiscal, as&iacute; como los domicilios de los locales y establecimientos.<br />\r\n&nbsp; &nbsp; Constituir y mantener actualizado el Domicilio Fiscal Electr&oacute;nico ante AFIP. Para ello, los contribuyentes deber&aacute;n manifestar su voluntad expresa, mediante la aceptaci&oacute;n y transmisi&oacute;n v&iacute;a internet de la f&oacute;rmula de adhesi&oacute;n, ingresando con la Clave Fiscal al servicio &quot;Domicilio Fiscal Electr&oacute;nico&quot; del sitio web institucional (http://www.afip.qob.ar).<br />\r\n&nbsp; &nbsp; Tener actualizado en el &quot;Sistema Registral&quot; el c&oacute;digo relacionado con la actividad que desarrolla, de acuerdo con el &quot;Clasificador de Actividades Econ&oacute;micas (CLAE) - F. 883&quot;.<br />\r\n&nbsp; &nbsp; Haber presentado, de corresponder, las declaraciones juradas de los impuestos a las ganancias, a la ganancia m&iacute;nima presunta, sobre los bienes personales, del impuesto al valor agregado y de los recursos de la seguridad social, correspondientes a los per&iacute;odos fiscales no prescriptos, o las que corresponda presentar desde el inicio de la actividad, vencidas con anterioridad a la fecha de interposici&oacute;n de la solicitud.<br />\r\n&nbsp; &nbsp; Haber dado cumplimiento a las disposiciones de la Resoluci&oacute;n General N&deg;3.293.<br />\r\n&nbsp; &nbsp; No registrar incumplimientos en la presentaci&oacute;n de las declaraciones juradas informativas a las que estuviere obligado.<br />\r\n&nbsp; &nbsp; No integrar la Base de Contribuyentes no Confiables.</p>\r\n\r\n<p>Desde CAME celebramos esta noticia que contribuye al sost&eacute;n de la estructura y actividad de las peque&ntilde;as y medianas empresas a quienes, frente a las cr&iacute;ticas condiciones actuales del mercado, en muchas ocasiones les resulta imposible mantener sus obligaciones impositivas al d&iacute;a.</p>\r\n', '4414cd68f7', '', '', '2018-12-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) NOT NULL,
  `pedido` text NOT NULL,
  `estado` int(11) DEFAULT '0',
  `tipo` int(11) DEFAULT '0',
  `usuario` varchar(255) NOT NULL,
  `detalle` text,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `precio` float DEFAULT NULL,
  `precioDescuento` float DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `desarrollo` text,
  `categoria` text,
  `subcategoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL,
  `meli` varchar(255) DEFAULT NULL,
  `url` text,
  `cod_producto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `inicio` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `subcategoria` varchar(255) DEFAULT NULL,
  `estado` int(20) NOT NULL DEFAULT '1',
  `activo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `cod`, `titulo`, `descripcion`, `usuario`, `inicio`, `fin`, `keywords`, `detalle`, `categoria`, `subcategoria`, `estado`, `activo`) VALUES
(28, 'add4f3c42a5e', 'Miércoles de pelicula', 'Solo los Miércoles entradas 2x1, funciones 2D/3D en todas las películas. ', 'e1574c81b0', '0000-00-00', '0000-00-00', '2x1', 'Solo los Miércoles entradas 2x1, funciones 2D/3D en todas las películas, comprando en boletería. ', '563468ab3b', '', 1, 1),
(29, '7c71cf33e3b3', 'Promo web $90', 'Entradas a $90 realizando la compra a través de nuestra web (www.lastipas.com) o aplicación.', 'e1574c81b0', '0000-00-00', '0000-00-00', 'Promo, web, $90', 'No incluye gastos de plataforma de cobro. Solo compra online. No aplica a compras en boleterías. ', '563468ab3b', '', 1, 1),
(30, 'bc5799e40aa1', 'TARJETA MACRO', 'TARJETA MACRO, Todos los Martes 10% de descuento y hasta 3 cuotas sin interés.\r\n', 'dd9b24c174', '2019-01-07', '2019-01-11', 'tarjeta, macro', 'VÁLIDA  CON LAS TARJETAS DE CRÉDITO VISA Y MASTERCARD DE LOS BANCOS DEL GRUPO MACRO. NO ACUMULABLE CON OTRAS PROMOCIONES.', '9f11f7aa2b', '', 1, 1),
(31, '69f11a8c3a91', 'Promoción Estrella', 'Camperas y parkas, talle 1 al 8, en varios colores a $1500', 'ebc415f5a1', '2019-01-08', '2019-01-08', 'Promoción, jose y mariela', 'Promoción válida sólo con pago en efectivo.', 'be48d223aa', '', 1, 1),
(32, 'a75924b9b8b1', 'Día del amigo', 'Día 20/03 promoción día del amigo, 2x1 en prendas seleccionadas.', 'ebc415f5a1', '2019-01-08', '2019-01-08', 'Promoción, día, amigo', 'Promoción válida sólo con pago en efectivo en prendas seleccionadas.', 'be48d223aa', '', 1, 1),
(33, 'c66b227fb17d', 'Hot Sale 40% OFF', 'Nosotros también nos sumamos al Hot Sale! Te ofrecemos 40% de descuento en chalecos de mujer, entre otras prendas!', 'ebc415f5a1', '2019-01-08', '2019-01-08', 'Hot sale, hot, sale', 'Promoción válida sólo por un día. Pago de contado efectivo. El descuento se aplica por unidad. ', 'be48d223aa', '', 1, 1),
(34, '44a420d74736', 'Promoción 3x4', 'En Boetto Pinturas queremos que tu auto brille! Por eso tenemos esta SÚPER OFERTA 3X, LLEVANDO 3 LATAS IGUALES DE MASILLA, TE LLEVÁS LA CUARTA ¡DE REGALO! Elegí la que más te convenga:\r\nMASILLA PLÁSTICA ZEOCAR x 4 kg\r\nMANSILLA ÚNICA ZEOCAR x 2.25 Lt\r\nMANS', '817effd879', '2019-01-08', '2019-01-08', 'promo, promoción, 3x4', 'Promoción válida sólo con la compra de tres latas de masilla iguales.', 'aa1809fbe2', '', 1, 1),
(35, 'eccf52685195', 'Prepará tu pileta!', '¡Prepará tu pileta para el verano! Mirá esta promo que tenemos en boetto pinturas: Pintura Riopint al agua color azúl océano x 10 Litros + Cinta + Rodillo + Lija, todo en 12 cuotas de $193!!. ', '817effd879', '2019-01-08', '2019-01-31', 'Promo, promoción, pileta', 'Promoción válida sólo en el mes de Enero. ', 'aa1809fbe2', '', 1, 1),
(36, '8af85943d7f5', 'Acondicioná tu patio!', 'En Boetto Pinturas tenemos todo para que acondiciones tu patio para el verano. No te pierdas este super combo:\r\nRodillo, cinta, lija, latex para frentes y medianera, enduido, pintura para pileta.\r\nLlevate esta super promo en 12 cuotas de $563!! ', '817effd879', '2019-01-08', '2019-01-23', 'promo, promoción, patio, acondicionar', 'Promoción válida por 15 días a partir de su lanzamiento. ', 'aa1809fbe2', '', 1, 1),
(37, '8e503dc09c96', 'Banco Macro', 'Todos los martes aprovechá un 10% OFF y 3 cuotas sin interés con Visa y Mastercard de Banco Macro.\r\n¡IMPERDIBLE! ???? ', 'dd9b24c174', '2019-01-08', '2019-01-08', 'promo, promción, banco, macro', 'MasterCard Black, MasterCard Gold, MasterCard Internacional, MasterCard Platinum, Visa Gold, Visa Internacional, Visa Platinum, Visa Signature.', '9f11f7aa2b', '', 1, 1),
(38, '4d2334e2d49b', 'Te regalamos una pelota!', 'Con la compra de un par de botines de la marca Adidas, te llevas de regalo una increíble pelota de football!', 'dd9b24c174', '2019-01-08', '2019-01-08', 'regalo, pelota', 'Promoción válida sólo con la compra de botines de la marca Adidas. Pago de contado efectivo.', '9f11f7aa2b', '', 1, 1),
(39, '1da3503014d0', 'PROMO 3 PALLETS', 'Comprando 3 pallets de Top Floor (360  m²), te regalamos 25 cajas de desmodulado.', '9a9ee9ef72', '2019-01-08', '2019-01-08', 'promo, promoción, pallets', 'Promoción válida con la compra mínima de 3 pallets Top Floor. Promoción víalida solo por el mes de noviembre.', 'b9bf040a4b', '', 1, 1),
(40, 'df2184334ff3', 'ZÓCALO + PISO ADVANCE + MANTA', 'Piso Advance + zócalo + manta : u$ 12,60 + iva x m²', '9a9ee9ef72', '2019-01-08', '2019-01-08', 'promo, promoción, zócalo, piso, manta', 'Promoción válida por el mes de enero, con la compra de los tres productos de Top Floor', 'b9bf040a4b', '', 1, 1),
(41, 'eded6e5afd41', 'ZÓCALO + PISO PREMIUM+ MANTA', 'ZÓCALO + PISO PREMIUM+ MANTA u$ 13,40 + iva x m²', '9a9ee9ef72', '2019-01-08', '2019-01-08', 'promo, promoción, zócalo, piso, manta', 'Promoción válida sólo el mes de enero con la compra de los tres productos de la firma Top Floor.', 'b9bf040a4b', '', 1, 1),
(42, '1344bd700c66', 'Tarjeta Naranja', '¡Aprovecha esta oportunidad! Todo lo que necesitas con la mejor forma de pago !!!\r\n25 Cuotas sin Interés + Envío Gratis con Tarjeta Naranja ', '5298989df8', '2019-01-08', '2019-01-08', 'promo, promoción, tarjeta, naranja', 'Promoción válida sólo con tarjeta naranja, del 25 al 29 de julio.', '4f8e136f14', '', 1, 1),
(43, '43316aca10a2', 'Celebramos Juntos!', 'No te pierdas este super descuento de Navidad! 30% off', '5298989df8', '2019-01-08', '2019-01-08', 'promo, promoción, navidad', 'Promoción válida sólo por el mes de diciembre. ', '4f8e136f14', '', 1, 1),
(44, 'cded31c1f54e', '2x1 Tablets', 'Cento te sorprende con esta promo, comprando una tablet te llevás otra de regalo, sólo por hoy!\r\nEn cualquiera de nuestras sucursales.', '5298989df8', '2019-01-08', '2019-01-08', 'promo, promoción, 2x1, tablet', 'Promoción válida sólo el día de emisión, en cualquiera de nuestras sucursales.', '4f8e136f14', '', 1, 1),
(45, '3239623f53d5', '30% OFF Bikinis', '30% de descuento en bikinis seleccionadas y pagando en efectivo te hacemos un descuento extra!', '92291b2985', '2019-01-08', '2019-01-08', 'promo, promoción, bikinis', 'Promoción válida por siete dias a partir de su emisión.', 'e62295f7b9', '', 1, 1),
(46, '73fa8931e8fc', 'Sólo por hoy!', 'No te pierdas de las increíbles ofertas del día de hoy!', '88473f90f8', '2019-01-08', '2019-01-08', 'promo, promoción, hoy', 'Promoción válida hasta agotar stock.', 'b7d19f5284', '', 1, 1),
(47, '665817974cad', 'Tarjeta Banco Macro', 'Del 20 al 21 de diciembre tenés 20% de descuento con tarjeta de crédito Macro, y un 30% con clientes macro selecta, ambas hasta 3 cuotas sin interés.', '2b402b0238', '2019-01-08', '2019-01-08', 'promo, promoción, tarjeta, banco, macro', 'En tarjeta de crédito Macro, tope de devolución hasta $1500 por cuenta. Clientes macro selecta, tope de devolución hasta $2000 por cuenta.', 'be48d223aa', '', 1, 1),
(48, '893da373db5b', 'Super Financiaciones', 'Tenemos para vos estas Super Financiaciones! Camiones Ford línea 1723, 50% de entrega y el resto financiado en 12 cuotas sin interés. Tomamos tus usados. ', 'cb0dbf229a', '2019-01-08', '2019-01-08', 'promo, promoción, financiaciones, rodacam', 'Promoción válida solo para camiones de la línea Ford 1723, últimas unidades. ', '794b584677', '', 1, 1),
(49, 'ed079ec865c2', 'Gran Ganga! ', '2x1 en  musculosas, remeras M/C, vestidos, camisas y blusas.\r\n', 'f6e9e5ac81', '2019-01-24', '2019-03-01', '2x1, sale, liquidación, 2 x 1, ', 'El descuento se aplica sobre penda de menor valor.\r\nVálido pago contado efectivo.', 'be48d223aa', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `desarrollo` text,
  `categoria` text,
  `keywords` text,
  `description` text,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `titulo` text,
  `subtitulo` text,
  `categoria` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cod` varchar(255) DEFAULT NULL,
  `nombre` text,
  `apellido` text,
  `doc` text,
  `email` text,
  `password` text,
  `postal` text,
  `localidad` text,
  `provincia` text,
  `pais` text,
  `telefono` text,
  `celular` text,
  `invitado` int(11) NOT NULL DEFAULT '0',
  `descuento` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `subcategoria` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `estado` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cod`, `nombre`, `apellido`, `doc`, `email`, `password`, `postal`, `localidad`, `provincia`, `pais`, `telefono`, `celular`, `invitado`, `descuento`, `fecha`, `titulo`, `direccion`, `descripcion`, `categoria`, `subcategoria`, `facebook`, `twitter`, `instagram`, `estado`) VALUES
(50, '2b402b0238', '', '', '', 'info@jorojos.com.ar', '12345678', '', 'San Francisco', 'Córdoba', '', '03564-439300', '', 0, 0, '2018-12-28', 'Jorojos', 'Av. 25 de Mayo 1998', ' Somos la empresa con más de 20 años de experiencia en el rubro deportivo de la ciudad de San Francisco y zona. Elegida por su atención personalizada y gran variedad de productos de las marcas líderes.', 'be48d223aa', '', 'https://es-la.facebook.com/jorojosoficial/', '', 'jorojosoficial', 1),
(51, 'f77fc40101', '', '', '', 'facundo@estudiorochayasoc.com.ar', 'f8bdc9e5', '', 'San Francisco', 'Córdoba', '', '03564-15570789', '', 0, 0, '2019-01-04', 'ESTUDIO ROCHA', 'MORENO 377', 'Agencia de publicidad, marketing, recursos humanos, comercialización. ', '92bfa5e793', '', 'https://www.facebook.com/estudiorochayasoc/', 'https://twitter.com/EstudioRocha', 'estudiorochayasoc', 1),
(52, '8f22caba23', '', '', '', 'alejandro.roasso@zf.com', '2e692d17', '', 'San Francisco', 'Córdoba', '', '03564-422626', '', 0, 0, '2019-01-04', 'ZF Sachs Argentina S.A.', 'Av. de la Universidad 51', 'ZF es un grupo tecnológico líder a nivel mundial en tecnología de transmisión y chasis, así como también en tecnología de seguridad activa y pasiva.\r\nEntre sus marcas Sachs realiza la fabricación de repuestos, amortiguadores y embragues.', '1832fa7cce', '', '', '', '', 1),
(53, '052d3e2b7b', '', '', '', 'acumuladores@cerani.net', 'c145f2af', '', 'San Francisco', 'Córdoba', '', '03564-420583', '', 0, 0, '2019-01-04', 'Acumuladores Cerani SRL Distribuidores', 'Colon 201', 'Líderes en acumuladores, sistemas de lubricación y filtración.  Ofrece una amplia gama de productos, baterías, aceites y filtros, repuestos, cosmética. Y servicios: limpieza sistema de refrigeración, servicio de arranque.', 'b1754bf788', '', '', '', '', 1),
(54, 'e1574c81b0', '', '', '', 'ventas@nuevocineradar.com.ar', '02ba7d9f', '', 'San Francisco', 'Córdoba', '', '03564-424403', '', 0, 0, '2019-01-04', 'Las Tipas Cines', 'Iturraspe 1448 ', 'Las Tipas cuenta con 5 complejos de cines ubicados en: Rafaela, Morteros, San Jorge, San Francisco y Jesús María.', '563468ab3b', '', 'https://www.facebook.com/LasTipasCines/', '', 'lastipascines', 1),
(55, '88473f90f8', '', '', '', 'ventasbazarhogar@hotmail.com', 'bcc5ad3a', '', 'San Francisco', 'Córdoba', '', '03564-421319', '', 0, 0, '2019-01-04', 'Bazar Hogar', 'San Lorenzo 105', 'Equipamientos para gastronomía, artículos para el hogar, juegos, juguetes y blanquerías para bebés, equipamientos comerciales.', 'b7d19f5284', '', 'https://www.facebook.com/bazarhogarsanfrancisco/', '', '', 1),
(56, '92291b2985', '', '', '', 'lmoranoh@hotmail.com', '788f238c', '', 'San Francisco', 'Córdoba', '', '03564-437044', '', 0, 0, '2019-01-04', 'Botolandia', 'Av. 25 de Mayo 1780', ' Venta al por menor de botonería, mercería, corsetería, lencería y medias. ', 'e62295f7b9', '', '', '', '', 1),
(57, '49c54a5d67', '', '', '', 'comercial@radiocanal.com.ar', '42915547', '', 'San Francisco', 'Córdoba', '', '03564-426618', '', 0, 0, '2019-01-04', 'Radiocanal', 'Av. Libertador Norte 22', 'Programa de transmisión televisiva (canal 4) y radial (FM contacto) local.', 'a5351e4ad9', '', 'https://www.facebook.com/radiocanalsanfrancisco/', '', 'radiocanal', 1),
(58, '5298989df8', '', '', '', 'info@cento.com.ar', '5ec46677', '', 'San Francisco', 'Córdoba', '', '03564-420859', '', 0, 0, '2019-01-04', 'Cento ', '25 de Mayo 2140', 'Venta de electrodomésticos y artículos para el hogar\r\nSan Francisco / Las Varillas / Frontera / Río Cuarto / Arroyito', '4f8e136f14', '', 'https://www.facebook.com/centodigital/', '', '', 1),
(59, '44023fcbfd', '', '', '', 'solucioncs@arnet.com.ar', '16c1a561', '', 'San Francisco', 'Córdoba', '', '03564-437942', '', 0, 0, '2019-01-04', 'Cental Service', 'Belgrano 1803', 'Servicio Técnico en telefonía móvil.\r\nAsesoramiento y comercialización de telefonía móvil.\r\nVenta de accesorios para celulares.', 'd5cd90a10c', '', 'https://www.facebook.com/CentralServiceComunicaciones/', '', '', 1),
(60, '9a9ee9ef72', '', '', '', 'karikal_sanfco@karikal.com.ar', '6610b948', '', 'San Francisco', 'Córdoba', '', '03564-422741', '', 0, 0, '2019-01-07', 'Karikal', '9 de Septiembre 1171', 'Venta y fabricación de materiales para construcción y materiales muebles.', 'b9bf040a4b', '', 'https://www.facebook.com/karikaloficial/', '', '', 1),
(61, '4ea70813d6', '', '', '', 'administracion@libreriacollino.com.ar', '047d7478', '', 'San Francisco', 'Córdoba', '', '03564-432659', '', 0, 0, '2019-01-07', 'Librería Collino', 'San Luis 93', 'Venta de libros, textos escolares y artículos de librería.\r\n', '2b4b10f4d5', '', 'https://www.facebook.com/libreriacollino/', '', '', 1),
(62, 'd165ee7ac5', '', '', '', 'info@coppettiseguros.com.ar', '08247b57', '', 'San Francisco', 'Córdoba', '', '03564-429690', '', 0, 0, '2019-01-07', 'Coppetti Seguros', 'Iturraspe 2677', 'Empresa dedicada al asesoramiento y comercialización de seguros.', '8e370dd7de', '', 'https://www.facebook.com/coppetiseguros/', 'https://twitter.com/CoppettiSeguros', 'coppettiseguros', 1),
(63, 'dd9b24c174', '', '', '', 'marketing@rossettideportes.com', '89b2771e', '', 'San Francisco', 'Córdoba', '', '03564-498417', '', 0, 0, '2019-01-07', 'Rossetti Deportes', 'Bv. 25 de Mayo 1900', ' Empresa familiar dedicada a la venta de calzado e indumentaria deportiva multimarca.', '9f11f7aa2b', '', 'https://www.facebook.com/RossettiDeportes/', 'https://twitter.com/RossettiDportes', 'rossetti.deportes', 1),
(65, '817effd879', '', '', '', 'pablo_boetto@hotmail.com', '29a798fe', '', 'San Francisco', 'Córdoba', '', '03564-422255', '', 0, 0, '2019-01-07', 'Boetto Pinturas', 'Bv. 25 de mayo esquina Garibaldi', ' Empresa dedicada a la venta y asesoramiento de pinturas de hogar, obra, automotor e industrias', 'aa1809fbe2', '', 'https://www.facebook.com/Boettopinturas/', '', 'boettopinturas', 1),
(66, 'ebc415f5a1', '', '', '', 'tiendaderopainfo@yahoo.com', 'f1845055', '', 'San Francisco', 'Córdoba', '', '03564-428389', '', 0, 0, '2019-01-07', 'José y Mariela', 'Pje. Lisandro de la Torre 54', 'Ventas por mayor y menor de ropa para mujer, vestidos y ropa para niños.', 'be48d223aa', '', 'https://www.facebook.com/joseymariela/', '', '', 1),
(67, 'cb0dbf229a', '', '', '', 'repuestos@rodacamcamiones.com.ar', '55e4c11e', '', 'San Francisco', 'Córdoba', '', '03564-436100', '', 0, 0, '2019-01-08', 'RodaCam', 'Rosario de Santa Fe 1712', 'Venta de camiones Ford 0km y camiones usados. ', '794b584677', '', 'https://www.facebook.com/RodacamCamiones/', '', '', 1),
(69, 'edc7ba2bc4', '', '', '', 'sanfrancisco@colorshop.com.ar', 'color123', '', 'San Francisco', 'Córdoba', '', '433744', '', 0, 0, '2019-01-08', 'Pintureria Colorshop', '9 de Julio 1382', 'Pintureria Colorshop ,San Francisco se caracteriza por brindar un servicio de calidad y honestidad a la comunidad local, utilizando para eso productos premium al mejor precio. ', 'aa1809fbe2', '', 'colorshopsanfrancisco', '', '', 1),
(70, 'fda9c2bf16', '', '', '', 'vidaloscara@gmail.com', 'florvale', '', '', '', '', '3564427710', '', 0, 0, '2019-01-08', 'ÑAÑU DISTRIBUIDORA MAYORISTA', '', '', '', '', '', '', '', 0),
(71, 'cee3c89648', '', '', '', 'jeroggero@gmail.com', 'pepe2728', '', '', '', '', '426714', '', 0, 0, '2019-01-09', 'Almacen de Carnes', '', '', '', '', '', '', '', 0),
(72, 'c3461e41a5', '', '', '', 'preciomanias@hotmail.com', 'preciomanias1239', '', 'San Francisco', 'Córdoba', '', '03564-436907', '', 0, 0, '2019-01-24', 'PRECIOMANIAS', 'Garibaldi 1239', 'Vestimos a toda la familia!\r\n\r\nRopa para hombres, mujeres, bebés y niños.\r\nBlanquería - Ropa Interior - Accesorios', 'be48d223aa', '', 'Preciomanias San Fco', '', 'Preciomanias San Fco', 0),
(73, 'f6e9e5ac81', '', '', '', 'mitos@mitosclothes.com.ar', 'mitoskvn', '', 'San Francisco', 'Córdoba', '', '03564-436896', '', 0, 0, '2019-01-24', 'MITOS', 'Bv 25 de Mayo 1980', 'Indumentaria de MUJER,  MARCA VER', 'be48d223aa', '', 'Mitos San Fco', '', 'Mitos San Fco', 1),
(74, 'd8adc67a65', '', '', '', 'kevingstonsf@hotmail.com', 'kevingston1984', '', 'San Francisco', 'Córdoba', '', '03564-436896', '', 0, 0, '2019-01-24', 'KEVINGSTON', 'Bv 25 de Mayo 1984', 'Indumentaria para HOMBRE, VARON, MUJER Y NENA', 'be48d223aa', '', 'Kevingston San Fco', '', 'Kevingston San Fco', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `titulo` text,
  `link` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
