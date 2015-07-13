#
#  Tabela estrutural do serviço de cadastro e reserva - Mostra de Cinema do Instituto Federal Fluminense
#
#  Disponibilizado sob a licença GNU GPL (GNU Public License - http://www.gnu.org/licenses/gpl.html)

DROP DATABASE cadastro;
CREATE DATABASE cadastro;
use cadastro;
CREATE TABLE reserva(
		matricula 				varchar(30),
		nome 					varchar(30),
		email 					varchar(30),
		dataNasc 				varchar(30),
        sessao					varchar(100),
		primary key(matricula)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;
