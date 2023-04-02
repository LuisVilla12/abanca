/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `infante_id` bigint unsigned NOT NULL,
  `horario_id` bigint unsigned NOT NULL,
  `asistio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancelo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `citas_user_id_foreign` (`user_id`),
  KEY `citas_infante_id_foreign` (`infante_id`),
  KEY `citas_horario_id_foreign` (`horario_id`),
  CONSTRAINT `citas_horario_id_foreign` FOREIGN KEY (`horario_id`) REFERENCES `horarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `citas_infante_id_foreign` FOREIGN KEY (`infante_id`) REFERENCES `infantes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `citas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE `horarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `infantes`;
CREATE TABLE `infantes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` int NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `publicado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `infantes_user_id_foreign` (`user_id`),
  CONSTRAINT `infantes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint unsigned NOT NULL DEFAULT '1',
  `publicado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `descripcion_dos` longtext COLLATE utf8mb4_unicode_ci,
  `urlimg` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `noticias_user_id_foreign` (`user_id`),
  CONSTRAINT `noticias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `sabias`;
CREATE TABLE `sabias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `categoria_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL DEFAULT '1',
  `publicado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `sabias_categoria_id_foreign` (`categoria_id`),
  KEY `sabias_user_id_foreign` (`user_id`),
  CONSTRAINT `sabias_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sabias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastname_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL DEFAULT '1',
  `publicado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `autor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `videos_categoria_id_foreign` (`categoria_id`),
  KEY `videos_user_id_foreign` (`user_id`),
  CONSTRAINT `videos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categorias` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Tutor', '2023-02-09 04:40:53', '2023-02-09 04:40:53');
INSERT INTO `categorias` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(2, 'Infante', '2023-02-09 04:40:53', '2023-02-09 04:40:53');


INSERT INTO `citas` (`id`, `date`, `user_id`, `infante_id`, `horario_id`, `asistio`, `cancelo`, `created_at`, `updated_at`) VALUES
(1, '2023-02-13', 1, 2, 3, '1', '0', '2023-02-09 05:15:45', '2023-02-11 15:01:42');
INSERT INTO `citas` (`id`, `date`, `user_id`, `infante_id`, `horario_id`, `asistio`, `cancelo`, `created_at`, `updated_at`) VALUES
(2, '2023-02-13', 2, 1, 1, '0', '1', '2023-02-09 05:15:45', '2023-02-09 07:45:33');
INSERT INTO `citas` (`id`, `date`, `user_id`, `infante_id`, `horario_id`, `asistio`, `cancelo`, `created_at`, `updated_at`) VALUES
(3, '2023-02-15', 2, 1, 6, '0', '0', '2023-02-09 05:15:45', '2023-02-09 07:45:33');
INSERT INTO `citas` (`id`, `date`, `user_id`, `infante_id`, `horario_id`, `asistio`, `cancelo`, `created_at`, `updated_at`) VALUES
(4, '2023-02-14', 2, 2, 3, '0', '0', '2023-02-11 14:30:26', '2023-02-11 14:30:26');

INSERT INTO `horarios` (`id`, `horario`, `created_at`, `updated_at`) VALUES
(1, '9:00am - 9:30am', '2023-02-09 04:40:53', '2023-02-09 04:40:53');
INSERT INTO `horarios` (`id`, `horario`, `created_at`, `updated_at`) VALUES
(2, '9:30am - 10:00am', '2023-02-09 04:40:53', '2023-02-09 04:40:53');
INSERT INTO `horarios` (`id`, `horario`, `created_at`, `updated_at`) VALUES
(3, '10:00am - 10:30am', '2023-02-09 04:40:53', '2023-02-09 04:40:53');
INSERT INTO `horarios` (`id`, `horario`, `created_at`, `updated_at`) VALUES
(4, '10:30am - 11:00am', '2023-02-09 04:40:53', '2023-02-09 04:40:53'),
(5, '11:00am - 11:30am', '2023-02-09 04:40:53', '2023-02-09 04:40:53'),
(6, '11:30am - 12:00pm', '2023-02-09 04:40:53', '2023-02-09 04:40:53');

INSERT INTO `infantes` (`id`, `name`, `lastname_p`, `lastname_m`, `genero`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`) VALUES
(1, 'Thaily Patricia', 'Jimenez', 'Jimenez', 2, '2012-05-02', 1, '1', '2023-02-09 05:14:55', '2023-02-09 05:14:55');
INSERT INTO `infantes` (`id`, `name`, `lastname_p`, `lastname_m`, `genero`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`) VALUES
(2, 'Eduardo Gabriel', 'Villa', 'Lopez', 1, '2023-02-09', 1, '1', '2023-02-09 07:07:34', '2023-02-09 07:07:34');
INSERT INTO `infantes` (`id`, `name`, `lastname_p`, `lastname_m`, `genero`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`) VALUES
(3, 'Juan', 'Lucas', 'Martin', 1, '2022-06-08', 2, '1', '2023-02-11 15:03:03', '2023-02-11 15:03:03');

INSERT INTO `noticias` (`id`, `title`, `url`, `autor`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`, `descripcion_dos`, `urlimg`) VALUES
(1, 'PROMUEVE DIPUTADA FERRÁEZ CENTENO DERECHOS DE PERSONAS CON TEA', 'https://www.avcnoticias.com.mx/noticias-veracruz/general/330186/promueve-diputada-ferraez-centeno-derechos-de-personas-con-tea.html', 'AVC Noticias', '2023-03-05', 1, '1', NULL, '2022-11-07 06:53:30', 'Impulsará la realización del Foro de Consulta Ciudadana y mesas de trabajo para la elaboración del Protocolo de Actuación para la Atención a Personas con TEA y el Manual para Docentes', 'dddddddddddd', '467770a3-4c3a-483c-962a-ab4215cdd0cc.png');
INSERT INTO `noticias` (`id`, `title`, `url`, `autor`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`, `descripcion_dos`, `urlimg`) VALUES
(2, 'LA INTELIGENCIA ARTIFICIAL REVELA VARIACIONES EN LA ANATOMÍA CEREBRAL DE PERSONAS CON AUTISMO.', 'https://www.agenciasinc.es/Noticias/La-inteligencia-artificial-revela-variaciones-en-la-anatomia-cerebral-de-personas-con-autismo', 'Agenciasin', '2023-03-05', 1, '1', NULL, '2022-11-07 06:57:52', 'Un equipo del Boston College, en EE UU, ha realizado un análisis detallado de neuroimágenes de personas con trastorno del espectro autista utilizando técnicas de aprendizaje automático. Los investigadores han observado', 'dddddddddddd', 'c34563eb-7c2f-478e-b2b2-c2bde6bbc02b.jpg');
INSERT INTO `noticias` (`id`, `title`, `url`, `autor`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`, `descripcion_dos`, `urlimg`) VALUES
(3, 'CANTABRIA CONTINÚA SIN PROTOCOLO DE DETECCIÓN DEL AUTISMO', 'https://www.eldiario.es/cantabria/ultimas-noticias/cantabria-continua-protocolo-deteccion-autismo-casos-leves-siguen-identificarse_1_9022065.html', 'El diario', '2023-03-05', 1, '1', NULL, '2022-11-07 06:58:33', 'Con solo dos unidades especializadas, en lugares como Santander el diagnóstico no se realizará hasta los 7 años a pesar de que la evidencia científica indica que se puede identificar desde los 18 meses', 'dddddddddddd', '17176477-12c0-4c33-9ea7-66c6414fcd50.jpg');
INSERT INTO `noticias` (`id`, `title`, `url`, `autor`, `date`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`, `descripcion_dos`, `urlimg`) VALUES
(4, 'PROYECTO CUBANO PARA ATENCIÓN AL AUTISMO RECIBE PREMIO MUNDIAL DE LA CIENCIA EUREKA 2022', 'http://www.cubadebate.cu/noticias/2022/06/01/proyecto-cubano-para-atencion-al-autismo-recibe-premio-mundial-de-la-ciencia-eureka-2022/', 'Cuba Debate', '2023-03-05', 1, '1', NULL, '2022-11-07 06:58:53', 'La iniciativa es desarrollada por el equipo nacional de atención integral del hospital pediátrico universitario Borrás-Marfán, de Cuba, de esta capital, cuyos integrantes', 'dddddddddddd', '94c6ae6d-64b3-4f53-b548-9ff05ec5d50b.jpg'),
(5, 'UNA ESTUDIANTE CON AUTISMO SIN HABLA DA UN EMOTIVO DISCURSO DE GRADUACIÓN', 'https://www.abc.es/sociedad/abci-estudiante-autismo-sin-habla-emotivo-discurso-graduacion-202205131915_noticia.html', 'ABC Noticias', '2023-03-05', 1, '1', NULL, '2022-11-07 06:59:12', 'La joven escribió su discurso utilizando solo un dedo y con la ayuda de un compañero que sostenía el teclado', 'dddddddddddd', '4d01931e-e88d-4edc-8d21-9f085346e1f5.png'),
(6, 'CONCIENCIA E INCLUSIÓN', 'https://senadis.gov.py/index.php/noticias/conciencia-e-inclusion', 'Senadis', '2023-03-05', 1, '1', NULL, '2022-11-07 06:59:30', 'Cada 2 de abril se conmemora el \"Día mundial de concienciación sobre el TEA\" con el objetivo precisamente de sensibilizar acerca de la necesidad de fortalecer el proceso de inclusión de las personas con esta condición.', 'dddddddddddd', 'b734a419-3158-46ed-bdb3-219feb53c17b.jpg'),
(7, 'PIDEN A GOBIERNOS MEJORES OPORTUNIDADES PARA PERSONAS CON AUTISMO', 'https://www.jornada.com.mx/notas/2022/04/02/sociedad/piden-a-gobiernos-mejores-oportunidades-para-personas-con-autismo/', 'Jornada', '2023-03-05', 1, '1', NULL, '2022-11-07 06:59:54', 'En el Día Mundial de Concienciación sobre el Autismo, que se conmemora hoy, la Comisión Nacional de los Derechos Humanos (CNDH) llamó a los tres poderes y órdenes de gobierno del país a adoptar medidas para que niñas, niños, jóvenes y adultos con autismo accedan a mejores oportunidades y a una vida autónoma e independiente en y con su comunidad', 'dddddddddddd', '68d656ce-67de-4835-9ed7-589bab1bbb0e.jpg'),
(8, 'UN NIÑO AUTISTA HA SIDO AGREDIDO POR UN JUGADOR DE FÚTBOL', 'https://www.independentespanol.com/deportes/cristiano-ronaldo-nino-autista-partido-b2059838.html', 'Independente Español', '2023-03-05', 1, '1', NULL, '2022-11-07 07:00:13', 'Cristiano Ronaldo protagonizó uno de los peores hechos de su carrera, luego de que, tras perder ante el Everton un gol a cero, golpeara a un niño para tirar el celular con el que grababa la salida del Manchester United de las canchas', 'dddddddddddd', '7df58d7f-8238-483d-afdf-62b9bcc761c5.jpg'),
(9, 'Prueba T2', 'URL P2', 'Luis Villa2', '2023-02-08', 1, '1', '2023-02-09 06:38:17', '2023-02-09 06:49:59', 'desc q 12', 'deseda 22', NULL);

INSERT INTO `sabias` (`id`, `title`, `url`, `autor`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`) VALUES
(2, 'ENSEÑAR LAS EMOCIONES', 'https://www.tuytea.es/post/ensenar-las-emociones-a-peques-con-tea?fbclid=IwAR0PJjYamunPL2lX3p20LbN8viGW2_dLqoqrcIRJZlrFrNqFVFm_PPTjI48', NULL, 2, 1, '1', '2022-11-08 06:36:58', '2022-11-08 06:36:58', 'El objetivo es hacer pedagogía sobre el TEA y ofrecer información veraz y fiable a padres y profesionales acerca del espectro del autismo.');
INSERT INTO `sabias` (`id`, `title`, `url`, `autor`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`) VALUES
(3, 'TRABAJAR VOCABULARIO Y LENGUAJE, MATERIALES DESCARGABLES\r\n', 'https://autismonavarra.com/materiales-y-enlaces-de-interes/trabajar-vocabulario-y-lenguaje-autismo/', NULL, 2, 1, '1', NULL, NULL, 'Material didáctico sobre vocabulario y lenguaje, para desarrollar el habla.\r\n\r\n');
INSERT INTO `sabias` (`id`, `title`, `url`, `autor`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`) VALUES
(4, 'PLANTILLAS DE TARJETAS DE PICTOGRAMAS', 'https://auticmo.com/plantillas-de-pictogramas-descarga-gratis/', NULL, 2, 1, '1', NULL, NULL, 'Materiales didácticos, sobre actividades de la vida cotidiana y juegos interactivos para el aprendizaje.\r\n\r\n');
INSERT INTO `sabias` (`id`, `title`, `url`, `autor`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `descripcion`) VALUES
(5, 'NAVEGADOR ESPECIALMENTE PARA NIÑOS AUTISTAS\r\n', 'https://zacbrowser.com/', NULL, 2, 1, '1', NULL, NULL, 'Navegador web (en inglés) diseñado específicamente para niños y adolescentes con trastornos del espectro autista, trastornos generalizados del desarrollo y PDD-NOS\r\n\r\n'),
(6, 'TU MAESTRA A DOMICILIO\r\n', 'https://www.facebook.com/107177897601478/posts/484424323210165/', NULL, 1, 1, '1', NULL, NULL, 'Tiene la finalidad de compartir información relacionada al autismo y a la educación, así como actividades, recursos y estrategias que puedan llevar a la práctica de una manera sencilla pero significativa.\r\n\r\n'),
(7, 'AUTISMO INFANTIL ESPAÑA\r\n', 'https://www.facebook.com/groups/2445430412213881/permalink/4813199828770249/', NULL, 1, 1, '1', NULL, NULL, 'Es un portal informativo para padres de niños con necesidades especiales\r\n\r\n'),
(8, 'APRENDIZAJE PROCEDIMENTAL EN EL AUTISMO\r\n', 'https://www.uv.mx/personal/jmanzo/2019/12/08/aprendizaje-procedimental-en-el-autismo/', NULL, 1, 1, '1', NULL, NULL, 'El aprendiz está sujeto a una gran cantidad de estimulación sensorial que tiene que percibir, procesar e interpretar, para finalmente responder.\r\n\r\n'),
(9, 'EL AUTISMO Y LOS BENEFICIOS DE LA ESTIMULACIÓN SENSORIAL\r\n', 'https://www.uv.mx/personal/jmanzo/2019/10/25/el-autismo-y-los-beneficios-de-la-estimulacion-sensorial/', NULL, 1, 1, '1', NULL, NULL, 'El autismo es una alteración del desarrollo neural que se refleja en modificaciones significativas de la conducta infantil.\r\n\r\n'),
(10, 'MODELOS ANIMALES PARA ESTUDIAR EL AUTISMO\r\n', 'https://www.uv.mx/cienciauv/blog/modelos-animales-para-el-estudio-del-autismo/', NULL, 1, 1, '1', NULL, NULL, 'Las investigaciones sobre el origen del autismo han concluido que la causa fundamental se debe a alteraciones en diversas áreas del cerebro durante el desarrollo infantil.\r\n\r\n'),
(11, 'AUTISMO Y SEXUALIDAD\r\n', 'https://www.uv.mx/personal/jmanzo/2018/09/04/autismo-y-sexualidad/', NULL, 1, 1, '1', NULL, NULL, 'Aunque la conducta sexual y la fisiología de la reproducción son temas que han sido estudiados por décadas, sigue siendo un problema complejo aún no resuelto.\r\n\r\n'),
(12, 'AUTISMO EN TIEMPOS DE CORONAVIRUS\r\n', 'https://www.uv.mx/personal/jmanzo/2020/05/25/autismo-en-tiempos-de-coronavirus/', NULL, 1, 1, '1', NULL, NULL, 'Las personas con autismo tienden a mantener una rutina estable y los cambios súbitos de rutina los llevan a diferentes niveles de estrés\r\n\r\n'),
(13, 'ENSEÑAR LAS EMOCIONES A PEQUES CON TEA\r\n', 'https://www.tuytea.es/post/ensenar-las-emociones-a-peques-con-tea?fbclid=IwAR0PJjYamunPL2lX3p20LbN8viGW2_dLqoqrcIRJZlrFrNqFVFm_PPTjI48', NULL, 1, 1, '1', NULL, NULL, 'El objetivo es hacer pedagogía sobre el TEA y ofrecer información veraz y fiable a padres y profesionales acerca del espectro del autismo.\r\n\r\n'),
(17, 'Titulo enlace2', 'url enlace2', 'Luis Villa2', 2, 1, '1', '2023-02-09 06:52:26', '2023-02-09 06:56:18', 'aaaaaaaaaaaaa2');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lastname_p`, `lastname_m`, `type`) VALUES
(1, 'Luis Alberto ', 'admin@admin.com', NULL, '$2y$10$9tqmycb.7v9B.rPxAaG/4e9zKDakC.5msP4u8xvjXWHxzjq1mNaRG', NULL, '2023-01-22 19:27:11', '2023-01-22 19:34:33', 'Jimenez', 'Villa', '2');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lastname_p`, `lastname_m`, `type`) VALUES
(2, 'Felipe Gabriel', 'crvillaluis@gmail.com', NULL, '$2y$10$9tqmycb.7v9B.rPxAaG/4e9zKDakC.5msP4u8xvjXWHxzjq1mNaRG', NULL, '2023-01-22 19:27:11', '2023-01-22 19:34:33', 'Garcia', 'Lopez', '1');


INSERT INTO `videos` (`id`, `title`, `url`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `autor`) VALUES
(1, 'VOCABULARIO DE PALABRAS', 'nVpNjLJYfqc', 1, 1, '1', NULL, NULL, 'AAAAAA');
INSERT INTO `videos` (`id`, `title`, `url`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `autor`) VALUES
(2, 'ESTIMULACIÓN DEL LENGUAJE\r\n', 'zmGwrpVLq30', 1, 1, '1', NULL, NULL, 'AAAAAA');
INSERT INTO `videos` (`id`, `title`, `url`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `autor`) VALUES
(3, '¿CÓMO PUEDO IDENTIFICAR SI MI HIJO POSEE RASGOS DE AUTISMO?', 'GJpkGXSvUTA', 1, 1, '1', NULL, NULL, 'AAAAAA');
INSERT INTO `videos` (`id`, `title`, `url`, `categoria_id`, `user_id`, `publicado`, `created_at`, `updated_at`, `autor`) VALUES
(4, 'ASÍ SE RECUPERÓ MI HIJO DEL AUTISMO', 'iphBhcqqZh0', 1, 1, '1', NULL, NULL, 'AAAAAA'),
(5, 'PRIMEROS SIGNOS DE LOS TRASTORNOS DEL ESPECTRO AUTISTA', 'Jkiz0pYqJ4k', 1, 1, '1', NULL, NULL, 'AAAAAA'),
(6, 'SEÑALES TEMPRANAS DE AUTISMO EN BEBES Y NIÑOS', '4UKCTKZTFzo', 1, 1, '1', NULL, NULL, 'AAAAAA'),
(7, 'REALIDAD, MITOS Y RETOS DEL AUTISMO', '0JcUmM63rPI', 1, 1, '1', NULL, NULL, 'AAAAAA'),
(8, 'COMPRENDIENDO EL AUTISMO EN NIÑOS', 'IcR_KafVzEM', 1, 1, '1', NULL, NULL, 'AAAAAA'),
(9, 'EL NIÑO QUE PUDO HACERLO', 'rbeH94NMEuY', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(10, 'EL LEÓN Y EL RATÓN', 'FhnBQII5G8o', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(11, 'MI AMIGO DANIEL\r\n', 'IHxiaIL0Ku0', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(12, 'YO TENGO UN CUENTO\r\n', 'hN35pFnEd-Y', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(13, 'NOÓSFERA TV- CAPÍTULO I- DR. JORGE MANZO DENES.', 'kODsHOvpF_Q', 1, 1, '1', NULL, NULL, 'AAAAAA'),
(14, 'Rompecabezas', 'v4gTynLPJl0', 2, 1, '1', NULL, '2023-02-09 05:12:04', 'AAAAAA'),
(15, 'Hugo, un amigo con Asperger', 'mzl33DR2rnM', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(16, 'Transtorno del espectro autista', 'CQcDGlui378', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(17, 'Mentes Atípicas en un Mundo Estereotípico', 'eV4rfLMK2lM', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(18, 'Suceden Cosas Asombrosas', 'wex4aLnDZVw', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(19, 'El niño que deseaba volar', 'ggR3HYH9evU', 2, 1, '1', NULL, NULL, 'AAAAAA'),
(20, 'Titulo video2', 'URL Video2', 1, 1, '1', '2023-02-09 07:01:31', '2023-02-09 07:04:03', 'Luis Villa2');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;