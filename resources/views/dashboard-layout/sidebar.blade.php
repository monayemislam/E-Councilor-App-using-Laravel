<!-- left Sidebar Start -->
<div class="left-sidebar-wrapper" id="leftSidebar">
    <div class="pt-4">
        <h3 class="dashboard-name text-center hide-text">ই-কাউন্সিলর</h3>
    </div>
    <div class="list-group list-group-flush sidebar-item">
        <a href="#" class="list-group-item list-group-item-action bg-transparent d-flex align-items-center">
            <i class="fa-solid fa-gauge pe-2"></i>
            <span class="hide-text">ড্যাশবোর্ড</span>
        </a>
        <a href="{{route('issue-list')}}" class="list-group-item list-group-item-action bg-transparent d-flex align-items-center">
            <i class="fa-solid fa-list pe-2"></i>
            <span class="hide-text">নতুন অভিযোগ</span>
        </a>
        <a href="{{route('issue-solved')}}" class="list-group-item list-group-item-action bg-transparent d-flex align-items-center">
            <i class="fa-solid fa-list-check pe-2" aria-hidden="true"></i>
            <span class="hide-text">সমাধানকৃত অভিযোগ</span>
        </a>
        <a href="{{route('issue-rejected')}}" class="list-group-item list-group-item-action bg-transparent d-flex align-items-center">
            <i class="fa-regular fa-rectangle-xmark pe-2"></i>
            <span class="hide-text">বাতিলকৃত অভিযোগ</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-transparent d-flex align-items-center">
        <i class="fa-regular fa-file pe-2"></i>
            <span class="hide-text">রিপোর্ট</span>
        </a>

    </div>
</div>
<!-- left Sidebar End -->