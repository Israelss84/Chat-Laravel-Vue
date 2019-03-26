<template>
	<div class="app-chat-sidebar-user scrollbar scroll_dark">
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex active">
                    <div>
                        <div class="bg-img">
                            <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/01.jpg'" alt="user">
                            <i class="bg-img-status bg-success"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-0">Demian Leyon</h5>
                        <p class="text-white"><span><i class="zmdi zmdi-check mr-2"></i></span>I like you</p>
                        <div class="d-xl-none">
                            <small>Just now</small>
                            <span class="badge badge-success">5</span>
                        </div>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>Just now</small>
                        <span class="badge badge-success">5</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/02.jpg'" alt="user">
                    </div>
                    <div>
                        <h5 class="mb-0">Jennyns Leyon</h5>
                        <p><span><i class="zmdi zmdi-check mr-2"></i></span>How are you</p>
                        <small class="d-xl-none">yesterday</small>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>yesterday</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/03.jpg'" alt="user">
                        <i class="bg-img-status bg-success"></i>
                    </div>
                    <div>
                        <h5 class="mb-0">Smithmin Leyon </h5>
                        <p><span><i class="zmdi zmdi-check-all mr-2"></i></span>Thanks</p>
                        <div class="d-xl-none">
                            <small>30 Aug</small>
                            <span class="badge badge-success">35</span>
                        </div>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>30 Aug</small>
                        <span class="badge badge-success">35</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/04.jpg'" alt="user">
                        <i class="bg-img-status bg-danger"></i>
                    </div>
                    <div>
                        <h5 class="mb-0">Brianing Leyon</h5>
                        <p><span><i class="zmdi zmdi-check mr-2"></i></span> You will sail along until you...</p>
                        <div class="d-xl-none">
                            <small>25 Aug</small> <span class="badge badge-success">15</span>
                        </div>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>25 Aug</small> <span class="badge badge-success">15</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div>
                        <div class="bg-img">
                            <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/05.jpg'" alt="user">
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-0">Adrianing Leyon</h5>
                        <p><span><i class="zmdi zmdi-check mr-2"></i></span>Hi...</p>
                        <small class="d-xl-none">20 Aug</small>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>20 Aug</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/06.jpg'" alt="user">
                        <i class="bg-img-status bg-success"></i>
                    </div>
                    <div>
                        <h5 class="mb-0">Garydmi Leyon</h5>
                        <p><span><i class="zmdi zmdi-check-all mr-2"></i></span>Thanks</p>
                        <div class="d-xl-none">
                            <small>15 Aug</small>
                            <span class="badge badge-success">45</span>
                        </div>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>15 Aug</small>
                        <span class="badge badge-success">45</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/07.jpg'" alt="user">
                    </div>
                    <div>
                        <h5 class="mb-0">Andrewvi Leyon</h5>
                        <p><span><i class="zmdi zmdi-check mr-2"></i></span>Hello...</p>
                        <div class="d-xl-none">
                            <small>06 Aug</small>
                            <span class="badge badge-success">99+</span>
                        </div>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>06 Aug</small>
                        <span class="badge badge-success">99+</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/08.jpg'" alt="user">
                    </div>
                    <div>
                        <h5 class="mb-0">Brainjon Leyon</h5>
                        <p><span><i class="zmdi zmdi-check mr-2"></i></span>So, make the decision...</p>
                        <small class="d-xl-none">30 May</small>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>30 May</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="app-chat-sidebar-user-item">
            <a href="javascript:void(0)">
                <div class="d-flex">
                    <div class="bg-img">
                        <img class="img-fluid" :src="asset + 'plantilla/assets/img/avtar/09.jpg'" alt="user">
                        <i class="bg-img-status bg-danger"></i>
                    </div>
                    <div>
                        <h5 class="mb-0">Jimmyimg Leyon</h5>
                        <p><span><i class="zmdi zmdi-check-all mr-2"></i></span>Okay</p>
                        <div class="d-xl-none">
                            <small>30 May</small>
                            <span class="badge badge-success">25</span>
                        </div>
                    </div>
                    <div class="ml-auto text-right d-none d-xl-block">
                        <small>30 May</small>
                        <span class="badge badge-success">25</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
	export default{
		props: ['asset']
	}
</script>