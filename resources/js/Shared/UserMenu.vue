<template>
    <div class="flex flex-col py-1 rounded-md bg-white shadow-xs">
        <div v-if="$page.wink.author">
            <a class="flex items-center px-3 py-2 hover:bg-purple-600 hover:text-white text-base group" :href="`/wink/team/${$page.wink.author.id}`">
                <icon-base width="14" height="14" icon-fill="fill-gray-800" icon-name="profile" classes="mr-2 group-hover:fill-white">
                    <profile />
                </icon-base>
                My Profile
            </a>
            <inertia-link class="flex items-center px-3 py-2 hover:bg-purple-600 hover:text-white text-base group" :href="route('admin.posts.index')">
                <icon-base width="14" height="14" icon-fill="fill-gray-800" icon-name="users" classes="mr-2 group-hover:fill-white">
                    <users />
                </icon-base>
                Manage Posts
            </inertia-link>
            <inertia-link class="flex items-center px-3 py-2 hover:bg-purple-600 hover:text-white text-base group" :href="route('admin.news.create')">
                <icon-base width="14" height="14" icon-fill="fill-gray-800" icon-name="users" classes="mr-2 group-hover:fill-white">
                    <list-add />
                </icon-base>
                Quick News Item
            </inertia-link>
            <inertia-link class="flex items-center px-3 py-2 hover:bg-purple-600 hover:text-white text-base group" :href="route('admin.tshirts.index')">
                <icon-base width="14" height="14" icon-fill="fill-gray-800" icon-name="purchases" classes="mr-2 group-hover:fill-white">
                    <shirt />
                </icon-base>
                Manage Purchases
            </inertia-link>
            <inertia-link class="flex items-center px-3 py-2 hover:bg-purple-600 hover:text-white text-base group" :href="route('logout')" method="post">
                <icon-base width="14" height="14" icon-fill="fill-gray-800" icon-name="logout" classes="mr-2 group-hover:fill-white">
                    <logout />
                </icon-base>
                Logout
            </inertia-link>
        </div>
        <a v-else class="flex items-center px-3 py-2 hover:bg-purple-600 hover:text-white text-base group" :href="route('login.form')">
            <icon-base width="14" height="14" icon-fill="fill-gray-800" icon-name="login" classes="mr-2 group-hover:fill-white">
                <lock-closed />
            </icon-base>
            Login
        </a>
    </div>
</template>

<script>
import IconBase from '@/Shared/IconBase';
import Users from '@/Shared/Icons/Users';
import Logout from '@/Shared/Icons/Logout';
import ListAdd from '@/Shared/Icons/ListAdd';
import LockClosed from '@/Shared/Icons/LockClosed';
import Profile from '@/Shared/Icons/Profile';
import Shirt from '@/Shared/Icons/Shirt';

export default {
    components: {
        Users,
        Shirt,
        Logout,
        Profile,
        ListAdd,
        IconBase,
        LockClosed,
    },
}
</script>
