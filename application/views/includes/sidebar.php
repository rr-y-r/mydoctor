<div id="sidebar-wrapper">
    <img class="img-circle img-responsive img-brand" alt="500x500" src="<?=base_url('assets/1.png'); ?>"/>
    <ul class="sidebar-nav">

        <li>
            <span class="text-success">

                <a class="text-danger" style="color:#BA1919;" 
                   href="<?=site_url('admin/profile/');?>/<?=$this->session->userdata('username'); ?>">PROFILE</a>
            </span>
        </li>
        <li>
            <span class="text-success">
                <?=anchor('user1/c_password', 'ubah password'); ?> 
            </span>
        </li>
        <li>
            <a class="text-danger" style="color:#BA1919;" href="<?=site_url('login/logout'); ?>">Logout</a>
        </li>
    </ul>
</div>