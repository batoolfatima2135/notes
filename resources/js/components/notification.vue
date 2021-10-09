<template>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" onclick="getform()" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" v-pre>


                            Notifications <span class="badge badge-danger" id="notifcount"></span>
                            </a>



                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a onclick="event.preventDefault();
                                document.getElementById('mark-form2').submit();" role="button" >mark as read</a>

                               <a class="dropdown-item " href="#">

                            </a>

                               <a class="dropdown-item" href="">

                            </a>
                               @endforeach



                            </div>
                        </li>
</template>

<script>
    export default {
        props:['unreads','userid'],
        mounted() {
            console.log('Component mounted.');
            Echo.private('App.Models.User.' + this.userid)
    .notification((notification) => {
        console.log(notification);
    });
        }
    }
</script>
