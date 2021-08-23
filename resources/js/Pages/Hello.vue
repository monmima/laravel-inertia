<template>
    <div class="min-h-screen bg-blue-500"> <!-- view container -->

        <h1>hello page</h1>

        <hr>

        <ul>
            <li><Link href="/">Index page</Link></li>
            <li><Link href="/contact">Contact page</Link></li>
            <li><Link href="/hello">Hello page</Link></li>
            <li><Link href="/hello-database">Hello page with data</Link></li>
        </ul>

        <div class="flex space-x-10 justify-center items-center">


            <div>
                <div v-for="(message, index) in messages" v-bind:key="index" class="bg-white p-8 mb-4 rounded shadow">
                    {{ message.message }}
                </div>
            </div>


            <div v-if="errors.message">
                {{ errors.message }}
            </div>

            <form @submit.prevent="submit">
                <!-- form.message refers to the name of the column in the database -->
                <textarea v-model="form.message" rows="8"></textarea>
                <button type="submit">Add a message</button>
            </form>

            <h2 class="text-3xl font-extrabold mb-12 text-blue-100">Add a message</h2>
        </div>
    </div> <!-- end view container -->


</template>

<script>
    import { Link } from '@inertiajs/inertia-vue';

    export default {
        components: { Link },
        props: {
            messages: Array,
            errors: Object
        },
        data() {
            return {
                // refers to the name of the column in the database
                form: { message: "" }
            }
        },
        methods: {
            submit() {
                // send data to the backend
                this.$inertia.post("/messages", this.form);
            }

        }

    };
</script>
