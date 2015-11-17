#
#  Tabela estrutural do serviço de cadastro e reserva - Mostra de Cinema do Instituto Federal Fluminense
#
#  Disponibilizado sob a licença GNU GPL (GNU Public License - http://www.gnu.org/licenses/gpl.html)

DROP DATABASE security;
CREATE DATABASE security;
use security;
CREATE TABLE usuario(
		id	 				varchar(30),
		nome 					varchar(30),
		usuario					varchar(30),
		senha 					varchar(30),
		primary key(id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
