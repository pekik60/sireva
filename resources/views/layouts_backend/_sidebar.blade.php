<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img class="rounded-circle mr-2" height="34" alt="" @if (Auth::user()->m_image ==
                            null || Auth::user()->m_image == '')
                            src="{{ asset('../assets_frontend/img/core-img/img_kosong.jpg') }}"
                            @else
                            src="{{ asset('../storage/app/'.Auth::user()->m_image ) }}"
                            @endif width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ Auth::user()->m_name }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;{{ Auth::user()->m_city }}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <!-- Master -->

				@if (Request::is('tugas'))

				<li class="nav-item">
				<a href="{{ route('riwayat') }}" class="nav-link {{ Request::is('riwayat') ? 'active' : '' }}"
                        class="nav-link {{ Request::is('riwayat') ? 'active' : '' }}">
                        <i class="icon-earth"></i>
                        <span>
                            Riwayat
                        </span>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="{{ route('tugas') }}" class="nav-link {{ Request::is('tugas') ? 'active' : '' }}">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAZlBMVEUAAAD///9/f380NDS+vr6dnZ3a2tphYWHl5eVWVla7u7s+Pj78/PylpaWhoaH09PSqqqqDg4NEREQUFBQnJyfLy8tRUVHs7OzPz8+0tLQbGxvh4eEgICBiYmJYWFhzc3OOjo5ra2uy56nHAAACd0lEQVR4nO3d3W6jQAxAYZOETbIwEPIDbUnb3fd/yRUlG/UyVLGMzfmewOciUqdYM5JFJ9YDqKPQPwr9o9A/Cv2j0D8K/aPQPwr9o9A/Cv1bUGFpOYWCe89XYZ3aYh1N0ab6f+FBojqMhY31HIqaoTBZT6EqZdJZz6Csk9x6BGW5HK1HUHaUk/UIyqL3AQAQw7H/NcnGeuDJPiae7XfWA0+2p5DC2aOQwvmjkML5o5DC+YtfOPVs4e8rxfV9O8X7h/XAAADM0tl6AGVnWVmPoGwlF+sRlF0ka61nUNVmktWRf4nnethr6wrrOdQU3bibWKar9SgqrtWwZHrboN1dNtFcdmPagragw6LQPwr9o9A/Cv2j0D8K/VtKYZ+aVTRN1d8L+731aVzJvh8L/W3VPm4zFL5YT6HqJZMy8j8TRc6lvFrPoOxVttYjKNvKm/UIyqL3AQBg47PKLVV/1As3dqf5L/o7wr+NC/X3vCmkkEIKKaSQQgoppHAOhfHPFvHPhwAAeBT9G+nbAr7jx9/FiL9PE38nagF7bQvYTRwaq9j7pbFR6B+F/lHoH4X+Uegfhf5R6N8y7qcpq6B3DKXbHUPh74mKf9dX+Pva4t+5F//exMi/wkH0PgAAfFhPe7/C4fsWzZOP9PN7o2T15ML5vTNDIYUU2qOQQgrtUUghhfaeXTi/s8Xf/sGH7x8U/SsFAAA/c7IeQNlJjtYjKDtKbj2Cslzm95fqc3WSJesZVKVhr62xnkJRM+4mHqznUHPIbvuldWqLdTRFm+os+7YjXD75rG3t3rOYLejAKPSPQv8o9I9C/yj0j0L/KPSPQv8o9I9C/+IX/gO49XxrAclTSgAAAABJRU5ErkJggg==" style="width:20px">
                        <span class="pl-3">
                            Tugas
                        </span>
                    </a>
				</li>
				
                @else
                <li class="nav-item nav-item-submenu {{
                    	  Request::is('master/*') ? 'nav-item-open' : ''
                    	}}">
                    <a href="#" class="nav-link
							{{ 
								Request::is('master/department') ? 'active' : '' ||
								Request::is('master/unit') ? 'active' : '' ||
								Request::is('master/program') ? 'active' : '' ||
								Request::is('master/kegiatan') ? 'active' : '' ||
								Request::is('master/output') ? 'active' : '' ||
								Request::is('master/sub_output') ? 'active' : '' ||
								Request::is('master/komponen') ? 'active' : '' 
							}}" "><i class=" icon-color-sampler"></i> <span>MASTER</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Themes" style="display:
							{{ 
								Request::is('master/department') ? 'block' : '' || 
								Request::is('master/unit') ? 'block' : '' ||
								Request::is('master/program') ? 'block' : '' ||
								Request::is('master/kegiatan') ? 'block' : '' ||
								Request::is('master/output') ? 'block' : '' ||
								Request::is('master/sub_output') ? 'block' : '' ||
								Request::is('master/komponen') ? 'block' : ''
							}}">
                        <li class="nav-item"><a href="{{ route('department') }}" class="nav-link 
									{{ Request::is('master/department') ? 'active' : '' }}">Department</a></li>
                        <li class="nav-item"><a href="{{ route('unit') }}" class="nav-link 
									{{ Request::is('master/unit') ? 'active' : '' }}">Unit</a></li>
                        <li class="nav-item"><a href="{{ route('program') }}" class="nav-link 
									{{ Request::is('master/program') ? 'active' : '' }}">Program</a></li>
                        <li class="nav-item"><a href="{{ route('kegiatan') }}" class="nav-link 
									{{ Request::is('master/kegiatan') ? 'active' : '' }}">Kegiatan</a></li>
                        <li class="nav-item"><a href="{{ route('output') }}" class="nav-link 
									{{ Request::is('master/output') ? 'active' : '' }}">Output</a></li>
                        <li class="nav-item"><a href="{{ route('sub_output') }}" class="nav-link 
									{{ Request::is('master/sub_output') ? 'active' : '' }}">Sub output</a></li>
                        <li class="nav-item"><a href="{{ route('komponen') }}" class="nav-link 
									{{ Request::is('master/komponen') ? 'active' : '' }}">Komponen</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ Request::is('master/user') ? 'active' : '' }}">
                        <i class="icon-color-sampler"></i>
                        <span>
                            Revisi Data Anggaran
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('arsip_data_revisi') }}"
                        class="nav-link {{ Request::is('arsip_data_revisi') ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt"></i>
                        <span>
                            Arsip Data Revisi
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('proses_baru') }}"
                        class="nav-link {{ Request::is('proses_baru') ? 'active' : '' }}">
                        <i class="fas fa-play"></i>
                        <span>
                            Proses Baru
                        </span>
                    </a>
				</li>
				<li class="nav-item">
                    <a href="{{ route('tugas') }}" class="nav-link {{ Request::is('tugas') ? 'active' : '' }}">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAZlBMVEUAAAD///9/f380NDS+vr6dnZ3a2tphYWHl5eVWVla7u7s+Pj78/PylpaWhoaH09PSqqqqDg4NEREQUFBQnJyfLy8tRUVHs7OzPz8+0tLQbGxvh4eEgICBiYmJYWFhzc3OOjo5ra2uy56nHAAACd0lEQVR4nO3d3W6jQAxAYZOETbIwEPIDbUnb3fd/yRUlG/UyVLGMzfmewOciUqdYM5JFJ9YDqKPQPwr9o9A/Cv2j0D8K/aPQPwr9o9A/Cv1bUGFpOYWCe89XYZ3aYh1N0ab6f+FBojqMhY31HIqaoTBZT6EqZdJZz6Csk9x6BGW5HK1HUHaUk/UIyqL3AQAQw7H/NcnGeuDJPiae7XfWA0+2p5DC2aOQwvmjkML5o5DC+YtfOPVs4e8rxfV9O8X7h/XAAADM0tl6AGVnWVmPoGwlF+sRlF0ka61nUNVmktWRf4nnethr6wrrOdQU3bibWKar9SgqrtWwZHrboN1dNtFcdmPagragw6LQPwr9o9A/Cv2j0D8K/VtKYZ+aVTRN1d8L+731aVzJvh8L/W3VPm4zFL5YT6HqJZMy8j8TRc6lvFrPoOxVttYjKNvKm/UIyqL3AQBg47PKLVV/1As3dqf5L/o7wr+NC/X3vCmkkEIKKaSQQgoppHAOhfHPFvHPhwAAeBT9G+nbAr7jx9/FiL9PE38nagF7bQvYTRwaq9j7pbFR6B+F/lHoH4X+Uegfhf5R6N8y7qcpq6B3DKXbHUPh74mKf9dX+Pva4t+5F//exMi/wkH0PgAAfFhPe7/C4fsWzZOP9PN7o2T15ML5vTNDIYUU2qOQQgrtUUghhfaeXTi/s8Xf/sGH7x8U/SsFAAA/c7IeQNlJjtYjKDtKbj2Cslzm95fqc3WSJesZVKVhr62xnkJRM+4mHqznUHPIbvuldWqLdTRFm+os+7YjXD75rG3t3rOYLejAKPSPQv8o9I9C/yj0j0L/KPSPQv8o9I9C/+IX/gO49XxrAclTSgAAAABJRU5ErkJggg=="
                            alt="" style="width:20px">
                        <span class="pl-3">
                            Tugas
                        </span>
                    </a>
				</li>
				<li class="nav-item">
                    <a href="{{ route('panduan') }}"
                        class="nav-link {{ Request::is('panduan') ? 'active' : '' }}">
                        <i class="fas fa-info-circle"></i>
                        <span>
                           Panduan
                        </span>
                    </a>
				</li>
                @endif
            </ul>
        </div>
    </div>

</div>
