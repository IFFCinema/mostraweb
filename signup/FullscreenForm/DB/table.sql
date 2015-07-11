#
#  Tabela estrutural do serviço de cadastro e reserva - Mostra de Cinema do Instituto Federal
#
#  Disponibilizado sob a licença GNU GPL (GNU Public License - http://www.gnu.org/licenses/gpl.html)

CREATE TABLE reserva(
		nome 							varchar(30) not null,
		email 							varchar(30) not null,
		matricula 						varchar(13) not null,
		dataNasc 						varchar(12) not null,
		primary key(matricula)
);
