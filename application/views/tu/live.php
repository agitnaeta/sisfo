					<?php 									#AgitNaeta
						class Spirit Extends Live {
							function GetUp()
							{
								$feel="";
								if ($feel="down") {
									return "Get Up..!" 
								}
								else
								{
									return "die" #just stop when you die!
								}
							}
						}


						$denda="5000"//bisa id ubah sesuai set misal 2000/5000
						$jatuh_tempo="19/01/2014" //data dari database
						$date=date('d-m-y');
						$jumlah_hari=$date-$jatuh_tempo;
						$total_denda=$jumlah_hari * $denda;
						$query=mysql_query("insert into tbl_denda (denda) values($denda)");
						if ($query) {
							echo "data berhasil disimpan";
						}
						else
						{
							return false;
						}



					?> 

