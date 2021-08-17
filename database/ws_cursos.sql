USE `test`;
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos`  (
  `id` int(3) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

INSERT INTO `cursos` VALUES (1, 'curso 1');
INSERT INTO `cursos` VALUES (2, 'curso 2');
INSERT INTO `cursos` VALUES (2, 'curso 3');
INSERT INTO `cursos` VALUES (4, 'curso 4');
INSERT INTO `cursos` VALUES (125, 'aaa');
INSERT INTO `cursos` VALUES (125, 'aaa');
INSERT INTO `cursos` VALUES (125, '');
INSERT INTO `cursos` VALUES (135, '');
INSERT INTO `cursos` VALUES (135, '');
