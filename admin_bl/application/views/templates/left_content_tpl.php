<div class="col-md-3 col-md-2 sidebar">
	<div class="breadLine">            
		<div class="arrow"></div>
		<div class="adminControl active"> Info Login User </div>
	</div>
	<div class="admin">
		<div class="image">
			<?php 
			// if ($this->session->userdata('pengguna')->foto != '') $img_photo = $this->session->userdata('pengguna')->foto;
			// else 
			$img_photo = "administrator.jpg"; 
			?>
			<img src="<?php echo base_url('foto/foto_pengguna/thumbnails/'.$img_photo); ?>" class="img-responsive img-thumbnail" alt="Responsive image" />
		</div>
		<ul class="control"> 
			<li><p><span class="glyphicon glyphicon-user"></span>  <?php echo $this->session->userdata('user')->nama; ?></p></li>               
			<li><p><span class="glyphicon glyphicon-log-out"></span> <a href="<?php echo site_url('/site/logout'); ?>">Logout</a> </p></li>
		</ul>
	</div>
	<ul class="navigation">
		<li><a href="<?php echo site_url('/dashboard'); ?>"><span class="isw-grid"></span><span class="text">Beranda</span></a></li>
		<?php
		$menu_group = '';
		$dont_show_child_parent_id = 0;

		$group_id = $this->session->userdata('user')->group_id;
		$query = "
		SELECT m.*,COALESCE(ga.policy,'') as ga_policy FROM menu1 m
		LEFT JOIN group_access ga ON m.menu_id = ga.menu_id AND ga.group_id = '{$group_id}' 
		WHERE m.hide = 0
		ORDER BY m.menu_id
		";
		$parents = $this->db->query($query);
		foreach($parents->result() as $parent){ 
			// $pos = strpos($parent->ga_policy,VIEW_POLICY);
      // var_dump($pos);
			// $show = false;

			if ($parent->url=="#") {
				// if ($show==false){
				if ($menu_group==''){

					echo '<li class="openable"><a href="'.$parent->url.'"><span class="isw-list"></span><span class="text">'.$parent->menu_name.'</span></a>
					<ul>';
					$menu_group=$parent->menu_group;
				}
				else if ($menu_group!=$parent->menu_group){
					echo '</ul>';
					echo '<li class="openable"><a href="'.$parent->url.'"><span class="isw-list"></span><span class="text">'.$parent->menu_name.'</span></a>
					<ul>';
					$menu_group=$parent->menu_group;
				}
				// }else {
				// 	$dont_show_child_parent_id = $parent->menu_id;
				// }
			} else {
				// if (($show)&&($parent->menu_parent!=$dont_show_child_parent_id)){
				echo '<li><a href="'.site_url($parent->url).'"><span class="text"><span class="fa fa-tags"></span> '.$parent->menu_name.'</span></a></li>';
				// }
			}
		}
		echo "</ul>";
		?>
	</ul>
	
	<div class="dr"><span></span></div>
</div>