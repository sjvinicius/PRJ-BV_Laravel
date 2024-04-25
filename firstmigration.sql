-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           8.3.0 - MySQL Community Server - GPL
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela prjapa.cache: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.cache_locks: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.cart: ~1 rows (aproximadamente)
INSERT INTO `cart` (`CART_ID`, `SLA`, `CRIACAO_DATA`, `CRIACAO_TOKEN`, `ALTERACAO_DATA`, `ALTERACAO_TOKEN`, `STATUS`) VALUES
	(1, 'Pendente', '2024-04-25 21:23:53', 'J', '2024-04-25 21:23:53', 'J', 'A');

-- Copiando dados para a tabela prjapa.cartproduto: ~1 rows (aproximadamente)
INSERT INTO `cartproduto` (`CARTPRODUTO_ID`, `CART_ID`, `PRODUTO_ID`, `QUANTIDADE`, `CRIACAO_DATA`, `CRIACAO_TOKEN`, `ALTERACAO_DATA`, `ALTERACAO_TOKEN`, `STATUS`) VALUES
	(1, 1, 1, 1, '2024-04-25 21:23:55', 'J', '2024-04-25 21:23:55', 'J', 'A');

-- Copiando dados para a tabela prjapa.cartusuario: ~1 rows (aproximadamente)
INSERT INTO `cartusuario` (`CARTUSUARIO_ID`, `CART_ID`, `USUARIO_ID`, `STATUSCARTUSUARIO`, `DTRESERVA`, `DTENTREGA`, `CRIACAO_DATA`, `CRIACAO_TOKEN`, `ALTERACAO_DATA`, `ALTERACAO_TOKEN`, `STATUS`) VALUES
	(1, 1, 1, 'P', '2024-04-25 18:35:59', '2024-04-25 18:36:00', '2024-04-25 21:33:22', 'J', '2024-04-25 21:33:22', NULL, 'A');

-- Copiando dados para a tabela prjapa.failed_jobs: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.jobs: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.job_batches: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.migrations: ~4 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(7, '0001_01_01_000000_create_users_table', 1),
	(8, '0001_01_01_000001_create_cache_table', 1),
	(10, '0001_01_01_000002_create_jobs_table', 2),
	(16, '2024_04_25_191544_first_migration', 3);

-- Copiando dados para a tabela prjapa.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.produto: ~1 rows (aproximadamente)
INSERT INTO `produto` (`PRODUTO_ID`, `NOMEPRODUTO`, `TIPOQUANTIDADE_ID`, `PRECO`, `CRIACAO_DATA`, `CRIACAO_TOKEN`, `ALTERACAO_DATA`, `ALTERACAO_TOKEN`, `STATUS`) VALUES
	(1, 'Brigadeiro', 1, 7.99, '2024-04-25 21:23:54', 'J', '2024-04-25 21:23:54', 'J', 'A');

-- Copiando dados para a tabela prjapa.sessions: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.tipoquantidade: ~1 rows (aproximadamente)
INSERT INTO `tipoquantidade` (`TIPOQUANTIDADE_ID`, `TIPOQUANTIDADE`, `CRIACAO_DATA`, `CRIACAO_TOKEN`, `ALTERACAO_DATA`, `ALTERACAO_TOKEN`, `STATUS`) VALUES
	(1, 'Kilograma', '2024-04-25 21:23:54', 'J', '2024-04-25 21:23:54', 'J', 'A');

-- Copiando dados para a tabela prjapa.users: ~0 rows (aproximadamente)

-- Copiando dados para a tabela prjapa.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`USUARIO_ID`, `NOME`, `EMAIL`, `REALM`, `CRIACAO_DATA`, `CRIACAO_TOKEN`, `ALTERACAO_DATA`, `ALTERACAO_TOKEN`, `STATUS`) VALUES
	(1, 'Vinicius', 'sjf.vinicius@gmail.com', '[\'admin\']', '2024-04-25 21:23:56', 'J', '2024-04-25 21:23:56', 'J', 'A');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
