
						<html><head></head><body><table border='1' width='100%' height='100%'>
						<?php
                        $k=0;
						$con=mysqli_connect("localhost","root","")or die(mysqli_error());
						mysqli_select_db($con,"itexpress")or die(mysqli_error());
						$sql="SELECT * FROM tehnologii";
						$query=mysqli_query($con,$sql)or die(mysqli_error());
						while($a=mysqli_fetch_array($query))
						{
							$k++;
							?><td><table border='0'><tr><td><img src='images/services/<?php echo $a['Sliki'];?>'></img></td></tr><tr><td><p><?php echo $a['ImeTehnologija'];?></p></td></tr></table></td>
							<?php
							if($k%3==0)
								?>
							<tr>
						<?php
						}?>
						</table></body></html>