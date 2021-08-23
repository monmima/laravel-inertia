<template>
    <div>
        <div>index page</div>

        <ul>
            <!-- <li><inertia-link href="/">Home page</inertia-link></li>
            <li><inertia-link href="/contact">Contact page</inertia-link></li> -->
            <!-- <li><Link href="/">Home page</Link></li> -->

            <li><Link href="/">Index page</Link></li>
            <li><Link href="/contact">Contact page</Link></li>
            <li><Link href="/hello">Hello page</Link></li>
            <li><Link href="/fasdf">test page</Link></li>
        </ul>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue';

    export default { components: { Link } };
</script>
