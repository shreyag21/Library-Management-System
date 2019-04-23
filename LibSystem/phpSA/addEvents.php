<?php
ini_set('display_errors', 'On');
require_once('db_connect.php');
$n=0;
function abc($conn,$n)
                	{
                		if($n==-1)
						{
							return -1;
						}
                		$stmt=NULL;
                			if(isset($_GET['type']))
                			{
                				if($_GET['type'] == 'New')
                				{
	               					$stmt=$conn->prepare("Select * from event Order by event_id DESC LIMIT ".$n." , 4");
	               					echo "<script language='javascript'>setActive('New');</script>";
	               					
                				}
                				else if($_GET['type'] == 'General')
                				{
                					$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"General\")) Order by event_id DESC LIMIT ".$n." , 4");
                					echo "<script >setActive('General');</script>";
                				}
                				else if($_GET['type'] == 'Sports')
                				{
                					$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Sports\")) Order by event_id DESC LIMIT ".$n." , 4");
                					echo "<script>setActive('Sports');</script>";
                				}
                				else if($_GET['type'] == 'Culturals')
                				{
                					$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Culturals\")) Order by event_id DESC LIMIT ".$n." , 4");
                					echo "<script>setActive('Culturals')</script>";
                				}
                				else if($_GET['type'] == 'Tech')
                				{
                					$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"Technical Clubs\")) Order by event_id DESC LIMIT ".$n." , 4");
                					echo "<script>setActive('TechClubs')</script>";
                				}
                				else if($_GET['type'] == 'TP')
                				{
                					$stmt=$conn->prepare("Select * from event where event_id in (Select event_id from reference where cat_id = (select cat_id from category where cat = \"T&P\")) Order by event_id DESC LIMIT ".$n." , 4");
                					echo "<script>setActive('TP')</script>";
                				}
                			}
                			if($stmt!=NULL)
                			{
                				$stmt->execute();
                				$stmt->bind_result($id,$title,$desc,$time);
                				if(!$stmt->fetch())
                				{
                					echo "00000";
                				}
                				else
                				{
                					do
                					{
                						$n=$n+1;
                						echo"<a href=\"DisplayMessage.php?event_id=".$id."\" class=\"list-group-item\">".
                	    					"<span class=\"glyphicon glyphicon-star-empty\"><span  style='font-family:monospace'>  \"".$title."\"</span></span>".
											"<span class=\"badge\"  style='font-family:monospace'>".$time."</span>".
											"<div>".
												"<span class=\"text-muted\" style=\"font-size: 11px; text-align:center ;font-family:monospace\" >".
												substr($desc,0,100).
												"...</span>".
											"</div>".
											"<span class=\"pull-right\">".
											"</a>";
                						
                					}while($stmt->fetch());
                				
                				}
                			
                			}
                			
                		}
  						$n=abc($conn,$_POST['n']);              
?>
