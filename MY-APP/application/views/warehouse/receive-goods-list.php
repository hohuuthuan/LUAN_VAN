<?php $this->load->view('admin-layout/component-admin/breadcrumb'); ?>
<div class="row mt20">

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div style="display: flex; justify-content: space-between" class="ibox-title title-table">
                <div class=""><h2><?php echo $title ?></h2></div>
            </div>
            <div class="ibox-content">
                <?php $this->load->view('warehouse/component/filterListReceive'); ?>
                <?php $this->load->view('warehouse/component/receive-goods-table'); ?>
            </div>
        </div>
    </div>
</div>
