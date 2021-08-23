<template>
    <div>
        <div>hello page</div>

        <div>test</div>

        <div v-for="(message, index) in messages" v-bind:key="index">
            {{ message.message }}
        </div>

        <ul>
            <!-- <li><inertia-link href="/">Home page</inertia-link></li>
            <li><inertia-link href="/contact">Contact page</inertia-link></li> -->
            <!-- <li><Link href="/">Home page</Link></li> -->


            <li><Link href="/">Index page</Link></li>
            <li><Link href="/contact">Contact page</Link></li>
            <li><Link href="/hello">Hello page</Link></li>
            <li><Link href="/test">test page</Link></li>

        </ul>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue';

    export default {
        components: { Link },
        props: {
            messages: Array
        }

    };
</script>
