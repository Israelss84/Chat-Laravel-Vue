<template>

	<div class="app-chat-sidebar-search px-4 pb-4 pt-4 border-bottom">
        <div class="input-group">
            <input aria-describedby="basic-addon1" class="form-control border-right-0" placeholder="Search..." type="text">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                        <i class="ti ti-search magnifier"></i>
                    </span>
            </div>
        </div>
    </div>
	
</template>


<script>
    export default {    
    	
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
