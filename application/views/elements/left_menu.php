
		<?php
$uri1 = @uri_segment(1);
$uri2 = @uri_segment(2);
$uri3 = @uri_segment(3);
if(!empty($_SESSION['user_type'])){
	if($_SESSION['user_type'] == 1){
		
?>
<ul class="sidebar-menu scrollable pos-r">
	<li class="nav-item mT-30"><a class="sidebar-link" href="<?= base_url('admin/dashboard')?>" default><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a></li>
	<li class="nav-item dropdown <?php if($uri1 == 'master'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Masters</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'state'){echo 'btn_active';} ?>" href="<?= base_url('master/state')?>">State Master</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'city'){echo 'btn_active';} ?>" href="<?= base_url('master/city')?>">City Master</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'quality'){echo 'btn_active';} ?>" href="<?= base_url('master/quality')?>">Quality Master</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'purchaser'){echo 'btn_active';} ?>" href="<?= base_url('master/purchaser')?>">Purchaser Master</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'site'){echo 'btn_active';} ?>" href="<?= base_url('master/site')?>">Site Master</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'seller'){echo 'btn_active';} ?>" href="<?= base_url('master/seller')?>">Seller Master</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'reason'){echo 'btn_active';} ?>" href="<?= base_url('master/reason')?>">Account Reason</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'master' && $uri2 == 'tax'){echo 'btn_active';} ?>" href="<?= base_url('master/tax')?>">Tax Setting</a></li>
		
		</ul>
	</li>

	<li class="nav-item dropdown <?php if($uri1 == 'admin' && $uri2 == 'billing'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Manage Billing</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'billing'&& $uri3 == 'add'){echo 'btn_active';} ?>" href="<?= base_url('admin/billing/add')?>">Add Billing</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'billing'&& $uri3 == 'listing'){echo 'btn_active';} ?>" href="<?= base_url('admin/billing/listing')?>">List Billing</a></li>
		
		</ul>
	</li>
	
	
	<li class="nav-item dropdown <?php if($uri1 == 'admin' && $uri2 == 'reports'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Manage Reports</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'reports' && $uri3 == 'search'){echo 'btn_active';} ?>" href="<?= base_url('admin/advertiser/add')?>">Search Report</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'reports' && $uri3 == ''){echo 'btn_active';} ?>" href="<?= base_url('admin/advertiser')?>">List Advertiser</a></li>
		
		</ul>
	</li>
	<!-- <li class="nav-item dropdown  <?php if($uri1 == 'admin' && $uri2 == 'campaign' || $uri2 == 'service_charge'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Manage Campaigns</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'campaign'&& $uri3 == 'add'){echo 'btn_active';} ?>" href="<?= base_url('admin/campaign/add')?>">Add Campaign</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'campaign'&& $uri3 == ''){echo 'btn_active';} ?>" href="<?= base_url('admin/campaign')?>">List Campaign</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'service_charge'&& $uri3 == ''){echo 'btn_active';} ?>" href="<?= base_url('admin/service_charge')?>">Service Charge</a></li>

		</ul>
	</li>
	<li class="nav-item dropdown  <?php if($uri1 == 'admin' && $uri2 == 'payment'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Manage Payments</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<li><a class="sidebar-link <?php if($uri1 == 'admin' && $uri2 == 'payment'&& $uri3 == ''){echo 'btn_active';} ?>" href="<?= base_url('admin/payment')?>">List Payment</a></li>
		</ul>
	</li> -->
	
	
</ul>
<?php
	}
}
?>
<?php

if(!empty($_SESSION['user_type'])){
	if($_SESSION['user_type'] == 2){
		
?>
<ul class="sidebar-menu scrollable pos-r">
	
	
	
	<li class="nav-item dropdown  <?php if($uri1 == 'advertiser' && $uri2 == 'campaign'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Manage Campaigns</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<li><a class="sidebar-link <?php if($uri1 == 'advertiser' && $uri2 == 'campaign'&& $uri3 == 'add'){echo 'btn_active';} ?>" href="<?= base_url('advertiser/campaign/add')?>">Add Campaign</a></li>
		<li><a class="sidebar-link <?php if($uri1 == 'advertiser' && $uri2 == 'campaign'&& $uri3 == ''){echo 'btn_active';} ?>" href="<?= base_url('advertiser/campaign')?>">List Campaign</a></li>
		</ul>
	</li>
	
</ul>
<?php
	}
}
?>
<?php

if(!empty($_SESSION['user_type'])){
	if($_SESSION['user_type'] == 3){
		
?>
<ul class="sidebar-menu scrollable pos-r">
	<li class="nav-item dropdown  <?php if($uri1 == 'publisher' && $uri2 == 'campaign'){echo 'open';} ?>">
		<a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i class="c-red-500 ti-files"></i> </span><span class="title">Manage Campaigns</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
		<ul class="dropdown-menu">
		<!-- <li><a class="sidebar-link <?php if($uri1 == 'publisher' && $uri2 == 'campaign'&& $uri3 == 'add'){echo 'btn_active';} ?>" href="<?= base_url('publisher/campaign/add')?>">Add Campaign</a></li> -->
		<li><a class="sidebar-link <?php if($uri1 == 'publisher' && $uri2 == 'campaign'&& $uri3 == ''){echo 'btn_active';} ?>" href="<?= base_url('publisher/campaign')?>">List Campaign</a></li>
		</ul>
	</li>
	
</ul>
<?php
	}
}
?>
