<?php
	class hddPercentage {
		function freeStorage(){
			
				exec('df /dev/root -h', $out);
				preg_match_all('/[0-9][.]?[0-9]?G?/', $out[1], $matches);
				list($total, $used, $available, $percentage) = $matches[0];

				if($percentage > '80'){
			    $warning = "<img src=\"app/images/warning.png\" height=\"18\" />";
			    $bar = "barAmber";
	          } else {
	            $warning = "<img src=\"app/images/ok.png\" height=\"18\" />";
	            $bar = "barGreen";
	          } 
				?>
			
				<div class="sdIcon">
					<img src="app/images/sd.png" align="middle"> 
				</div>
				
				<div class="sdTitle">
					SD Card
				</div>
				
				<div class="sdWarning">
					<?php echo $warning ?>
				</div>
				
				<div class="sdText">
					<div class="graph">
						<strong class="<?php echo $bar; ?>" style="width:<?php echo $percentage ?>%;"><?php echo $percentage ?>%</strong>
				</div>
				
				<div class="clear"></div>
				
				<br/>
				
				Total: <strong><?php echo $total ?>B</strong> &middot
				Free: <strong><?php echo $available ?>B</strong>				
				</div>
						
				<div class="clear"></div>
			
				
				
				
				
<?php				
		}
		}
?>
