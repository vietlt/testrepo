<div class="master_view">
    <div class="left">
        <?php
        if(isset($left)){
        $this->load->view($left);
        }
        ?>
    </div>
    <div class="right">
        <?php
        if(isset($right)){
            $this->load->view($right);
        }
        ?>
    </div>
</div>