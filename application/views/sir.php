<!--controller for menu and submenu-->

public function get_menus() {
    $this->load->model('Cart_model');
    $menus = $this->Cart_model->menus();
    $data = array('menus' => $menus);
    $this->load->view('fatch', $data);
}
but i use just one line in every controller where i want to show the menus in files 
that is-
   $this->data['menus'] = $this->Cart_model->menus();



<!--model for menu and submenu-->

function menus() {
    $this->db->select("*");
    $this->db->from("main_menu");
    $q = $this->db->get();

    $final = array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {

            $this->db->select("*");
            $this->db->from("sub_menu");
            $this->db->where("m_menu_id", $row->m_menu_id);
            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                $row->children = $q->result();
            }
            array_push($final, $row);
        }
    }
    return $final;
}

<!-- view for menu and submenu-->
<ul class="nav navbar-nav">
   <?php foreach ($menus as $menu) { ?>
<li class="dropdown megamenu-fullwidth"> 
<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?= $menu->m_menu_name ?></a>
                       <?php
            if (isset($menu->children)) {
				// echo "<pre>";
				// print_r($menu->children);
				// echo "</pre>";
				// exit;
               ?>
					<ul class="dropdown-menu"> 
					<?php
					 foreach ($menu->children as $child) {
						 
					?>
			<li class="no-border"><a href="<?= $child->s_menu_link ?>"<p><strong><?= $child->s_menu_name ?></strong></p></a></li>
					 <?php } ?>
        </ul>
         <?php } ?>             
       <?php } ?>
</li>
			
 
</ul>  
   




