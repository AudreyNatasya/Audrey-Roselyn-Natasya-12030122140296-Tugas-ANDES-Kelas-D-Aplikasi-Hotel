<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">ROOMING</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">RM</a>
    </div>
    <ul class="sidebar-menu">
      <?php if(Auth::user()->role == 'USER'): ?>

        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link" href="<?php echo e(route('user.dashboard')); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

        <li class="menu-header">RUANGAN</li>
        <li class="<?php echo e(request()->is('room*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('room-list.index')); ?>">
            <i class="fas fa-door-open"></i> <span>List Ruangan</span>
          </a>
        </li>

        <li class="menu-header">TRANSAKSI</li>
        <li class="<?php echo e(request()->is('my-booking-list*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('my-booking-list.index')); ?>">
            <i class="fas fa-list"></i> <span>My Booking List</span>
          </a>
        </li>

        <li class="menu-header">SETTING</li>
        <li class="<?php echo e(request()->is('change-pass*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('user.change-pass.index')); ?>">
            <i class="fas fa-key"></i> <span>Ganti Password</span>
          </a>
        </li>

      <?php endif; ?>

      <?php if(Auth::user()->role == 'ADMIN'): ?>

        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

        <li class="menu-header">DATA MASTER</li>
        <li class="<?php echo e(request()->is('admin/room*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('room.index')); ?>">
            <i class="fas fa-door-open"></i> <span>Ruangan</span>
          </a>
        </li>
        <li class="<?php echo e(request()->is('admin/user*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
            <i class="fas fa-user"></i> <span>User</span>
          </a>
        </li>

        <li class="menu-header">TRANSAKSI</li>
        <li class="<?php echo e(request()->is('admin/booking-list*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('booking-list.index')); ?>">
            <?php $booking_list = app('App\Models\BookingList'); ?>
            <i class="fas fa-list"></i> <span><?php echo e($booking_list->where("status", "PENDING")->count() > 0 ? '('.$booking_list->where("status", "PENDING")->count().')' : ''); ?> Booking List</span>
          </a>
        </li>

        <li class="menu-header">SETTING</li>
        <li class="<?php echo e(request()->is('admin/change-pass*') ? 'active' : ''); ?>">
          <a class="nav-link" href="<?php echo e(route('admin.change-pass.index')); ?>">
            <i class="fas fa-key"></i> <span>Ganti Password</span>
          </a>
        </li>

      <?php endif; ?>

      </ul>

  </aside>
</div><?php /**PATH C:\Audrey hotel\rooming\resources\views/includes/main/sidebar.blade.php ENDPATH**/ ?>